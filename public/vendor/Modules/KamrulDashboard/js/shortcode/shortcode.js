(function(factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Node/CommonJS
        module.exports = factory(require('jquery'));
    } else {
        // Browser globals
        factory(window.jQuery);
    }
}(function($) {
    $.extend($.summernote.plugins, {
        'shortcode': function(context) {
            var self = this;
            var ui = $.summernote.ui;

            var $editor = context.layoutInfo.editor;
            var options = context.options;
            var lang = options.langInfo;

            var KEY = {
                UP: 38,
                DOWN: 40,
                LEFT: 37,
                RIGHT: 39,
                ENTER: 13,
            };
            var COLUMN_LENGTH = 12;
            var COLUMN_WIDTH = 50;

            var currentColumn = 0;
            var currentRow = 0;
            var totalColumn = 0;
            var totalRow = 0;
            var list_data = $('#elements-list').val();

            // special characters data set
            var specialCharDataSet = JSON.parse(list_data);
            console.log(specialCharDataSet);

            context.memo('button.shortcode', function() {
                // return ui.button({
                //     className: 'dropdown-toggle',
                //     contents: '<span class="fa fa-database"></span> Shortcode <span class="caret"></span>',
                //     tooltip: "Parámetros disponibles",
                //     click: function() {
                //         self.show();
                //     },
                // }).render();
                var button = ui.buttonGroup([
                    ui.button({
                        className: 'dropdown-toggle',
                        contents: '<span class="fa fa-database"></span> Shortcode <span class="caret"></span>',
                        tooltip: "Parámetros disponibles",
                        data: {
                            toggle: 'dropdown'
                        },
                        click: function() {

                            context.invoke('editor.saveRange');
                        }
                    }),
                    ui.dropdown({
                        // items: JSON.parse(list_data),
                        className: 'dropdown-style',
                        contents: $('.get_menu_data').html(),
                        callback: function (items) {
                            $(items).find('li a').on('click', function(code){
                                var select_find = $(this).attr('data-key');
                                console.log($(this).attr('data-key'));

                                // console.log($(this).attr('data-key'));
                                // special characters data set
                                self.show();
                                // context.invoke("editor.insertText", $(this).html());
                                // $('#summernote').summernote('insertText', 'hit ');
                            })
                        }
                    })
                ]);
                return button.render();
            });

            /**
             * Make Special Characters Table
             *
             * @member plugin.specialChar
             * @private
             * @return {jQuery}
             */
            this.makeShortcodeSetTable = function() {
                var $table = $('<table></table>');
                $.each(specialCharDataSet, function(idx, text) {
                    var $td = $('<td></td>').addClass('note-shortcode-node');
                    var $tr = (idx % COLUMN_LENGTH === 0) ? $('<tr></tr>') : $table.find('tr').last();

                    var $button = ui.button({
                        callback: function($node) {
                            $node.html(text);
                            $node.attr('title', text);
                            $node.attr('data-value', encodeURIComponent(text));
                            $node.css({
                                width: COLUMN_WIDTH,
                                'margin-right': '2px',
                                'margin-bottom': '2px',
                            });
                        },
                    }).render();

                    $td.append($button);

                    $tr.append($td);
                    if (idx % COLUMN_LENGTH === 0) {
                        $table.append($tr);
                    }
                });

                totalRow = $table.find('tr').length;
                totalColumn = COLUMN_LENGTH;

                return $table;
            };

            this.initialize = function() {
                var $container = options.dialogsInBody ? $(document.body) : $editor;

                var body = '<div class="form-group row-fluid">' + this.makeShortcodeSetTable()[0].outerHTML + '</div>';

                this.$dialog = ui.dialog({
                    title: lang.specialChar.select,
                    body: body,
                }).render().appendTo($container);
            };

            this.show = function() {
                var text = context.invoke('editor.getSelectedText');
                context.invoke('editor.saveRange');
                this.showSpecialCharDialog(text).then(function(selectChar) {
                    context.invoke('editor.restoreRange');

                    // build node
                    var $node = $('<span></span>').html(selectChar)[0];

                    if ($node) {
                        // insert video node
                        context.invoke('editor.insertNode', $node);
                    }
                }).fail(function() {
                    context.invoke('editor.restoreRange');
                });
            };

            /**
             * show image dialog
             *
             * @param {jQuery} $dialog
             * @return {Promise}
             */
            this.showSpecialCharDialog = function(text) {
                return $.Deferred(function(deferred) {
                    var $specialCharDialog = self.$dialog;
                    var $specialCharNode = $specialCharDialog.find('.note-shortcode-node');
                    var $selectedNode = null;
                    var ARROW_KEYS = [KEY.UP, KEY.DOWN, KEY.LEFT, KEY.RIGHT];
                    var ENTER_KEY = KEY.ENTER;

                    function addActiveClass($target) {
                        if (!$target) {
                            return;
                        }
                        $target.find('button').addClass('active');
                        $selectedNode = $target;
                    }

                    function removeActiveClass($target) {
                        $target.find('button').removeClass('active');
                        $selectedNode = null;
                    }

                    // find next node
                    function findNextNode(row, column) {
                        var findNode = null;
                        $.each($specialCharNode, function(idx, $node) {
                            var findRow = Math.ceil((idx + 1) / COLUMN_LENGTH);
                            var findColumn = ((idx + 1) % COLUMN_LENGTH === 0) ? COLUMN_LENGTH : (idx + 1) % COLUMN_LENGTH;
                            if (findRow === row && findColumn === column) {
                                findNode = $node;
                                return false;
                            }
                        });
                        return $(findNode);
                    }

                    function arrowKeyHandler(keyCode) {
                        // left, right, up, down key
                        var $nextNode;
                        var lastRowColumnLength = $specialCharNode.length % totalColumn;

                        if (KEY.LEFT === keyCode) {
                            if (currentColumn > 1) {
                                currentColumn = currentColumn - 1;
                            } else if (currentRow === 1 && currentColumn === 1) {
                                currentColumn = lastRowColumnLength;
                                currentRow = totalRow;
                            } else {
                                currentColumn = totalColumn;
                                currentRow = currentRow - 1;
                            }
                        } else if (KEY.RIGHT === keyCode) {
                            if (currentRow === totalRow && lastRowColumnLength === currentColumn) {
                                currentColumn = 1;
                                currentRow = 1;
                            } else if (currentColumn < totalColumn) {
                                currentColumn = currentColumn + 1;
                            } else {
                                currentColumn = 1;
                                currentRow = currentRow + 1;
                            }
                        } else if (KEY.UP === keyCode) {
                            if (currentRow === 1 && lastRowColumnLength < currentColumn) {
                                currentRow = totalRow - 1;
                            } else {
                                currentRow = currentRow - 1;
                            }
                        } else if (KEY.DOWN === keyCode) {
                            currentRow = currentRow + 1;
                        }

                        if (currentRow === totalRow && currentColumn > lastRowColumnLength) {
                            currentRow = 1;
                        } else if (currentRow > totalRow) {
                            currentRow = 1;
                        } else if (currentRow < 1) {
                            currentRow = totalRow;
                        }

                        $nextNode = findNextNode(currentRow, currentColumn);

                        if ($nextNode) {
                            removeActiveClass($selectedNode);
                            addActiveClass($nextNode);
                        }
                    }

                    function enterKeyHandler() {
                        if (!$selectedNode) {
                            return;
                        }

                        deferred.resolve(decodeURIComponent($selectedNode.find('button').attr('data-value')));
                        $specialCharDialog.modal('hide');
                    }

                    function keyDownEventHandler(event) {
                        event.preventDefault();
                        var keyCode = event.keyCode;
                        if (keyCode === undefined || keyCode === null) {
                            return;
                        }
                        // check arrowKeys match
                        if (ARROW_KEYS.indexOf(keyCode) > -1) {
                            if ($selectedNode === null) {
                                addActiveClass($specialCharNode.eq(0));
                                currentColumn = 1;
                                currentRow = 1;
                                return;
                            }
                            arrowKeyHandler(keyCode);
                        } else if (keyCode === ENTER_KEY) {
                            enterKeyHandler();
                        }
                        return false;
                    }

                    // remove class
                    removeActiveClass($specialCharNode);

                    // find selected node
                    if (text) {
                        for (var i = 0; i < $specialCharNode.length; i++) {
                            var $checkNode = $($specialCharNode[i]);
                            if ($checkNode.text() === text) {
                                addActiveClass($checkNode);
                                currentRow = Math.ceil((i + 1) / COLUMN_LENGTH);
                                currentColumn = (i + 1) % COLUMN_LENGTH;
                            }
                        }
                    }

                    ui.onDialogShown(self.$dialog, function() {
                        $(document).on('keydown', keyDownEventHandler);

                        self.$dialog.find('button').tooltip();

                        $specialCharNode.on('click', function(event) {
                            event.preventDefault();
                            deferred.resolve(decodeURIComponent($(event.currentTarget).find('button').attr('data-value')));
                            ui.hideDialog(self.$dialog);
                        });
                    });

                    ui.onDialogHidden(self.$dialog, function() {
                        $specialCharNode.off('click');

                        self.$dialog.find('button').tooltip();

                        $(document).off('keydown', keyDownEventHandler);

                        if (deferred.state() === 'pending') {
                            deferred.reject();
                        }
                    });

                    ui.showDialog(self.$dialog);
                });
            };
        },
    });
}));
