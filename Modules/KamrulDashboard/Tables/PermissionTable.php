<?php

namespace Modules\KamrulDashboard\Tables;

use DboardHelper;
use Html;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Modules\KamrulDashboard\Repositories\Interfaces\PermissionInterface;
use Modules\Table\Abstracts\TableAbstract;
use Yajra\DataTables\DataTables;

class PermissionTable extends TableAbstract
{
    /**
     * @var bool
     */
    protected $hasActions = true;

    /**
     * @var bool
     */
    protected $hasFilter = true;

    /**
     * PermissionTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param PermissionInterface $permissionRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, PermissionInterface $permissionRepository)
    {
        parent::__construct($table, $urlGenerator);

        $this->repository = $permissionRepository;

        if (!Auth::user()->can(['permission_edit', 'permission_destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function ajax()
    {

        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('name', function ($item) {
//                if (! Auth::user()->can('permission_edit')) {
                    $name = DboardHelper::clean($item->name);
//                } else {
//                    $name = Html::link(route('permission.edit', $item->id), DboardHelper::clean($item->name));
//                }

                return $name;
            })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return DboardHelper::formatDate($item->created_at);
            })
            ->addColumn('operations', function ($item) {
                return $this->getOperations('permission.edit', 'permission.destroy', $item);
            });

        return $this->toJson($data);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        $query = $this->repository->getModel()->select([
            'id',
            'name',
            'created_at',
        ]);

        return $this->applyScopes($query);
    }

    public function columns()
    {
        return [
            'id' => [
                'title' => trans('table::lang.id'),
                'width' => '20px',
            ],
            'name' => [
                'title' => trans('table::lang.name'),
                'class' => 'text-start',
            ],
            'created_at' => [
                'title' => trans('table::lang.created_at'),
                'width' => '100px',
                'class' => 'text-center',
            ],
        ];
    }

    public function buttons()
    {
        return $this->addCreateButton(route('permission.create'), 'permission_create');
    }

    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('permission.deletes'), 'permission_destroy', parent::bulkActions());
    }

    public function getBulkChanges(): array
    {
        return [
            'name' => [
                'title' => trans('table::lang.name'),
                'type' => 'text',
                'validate' => 'required|max:120',
            ],
            'created_at' => [
                'title' => trans('table::lang.created_at'),
                'type' => 'date',
            ],
        ];
    }
}
