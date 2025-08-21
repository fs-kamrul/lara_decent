<?php


namespace Modules\AdminBoard\Enums;

use DboardHelper;
use Modules\KamrulDashboard\Packages\Supports\Enum;

/**
 * @method static AdminEventStatusEnum ACTIVE()
 * @method static AdminEventStatusEnum INACTIVE()
 * @method static AdminEventStatusEnum CANCELED()
 */
class AdminEventStatusEnum extends Enum
{
//    public const PENDING = 'pending';
//    public const PROCESSING = 'processing';
//    public const COMPLETED = 'completed';
//    public const CANCELED = 'canceled';
    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';
    public const CANCELED = 'canceled';

    public static $langPath = 'adminboard::adminevent.statuses';

    public function toHtml()
    {
        switch ($this->value) {
            case self::CANCELED:
                $color = 'warning';
                break;
            case self::INACTIVE:
                $color = 'danger';
                break;
            case self::ACTIVE:
                $color = 'success';
                break;
            default:
                $color = 'primary';
                break;
        }
//        switch ($this->value) {
//            case self::PENDING:
//                $color = 'warning';
//                break;
//            case self::PROCESSING:
//                $color = 'secondary';
//                break;
//            case self::CANCELED:
//                $color = 'danger';
//                break;
//            case self::COMPLETED:
//                $color = 'success';
//                break;
//            default:
//                $color = 'primary';
//                break;
//        }

        return DboardHelper::renderBadge($this->label(), $color);
    }
}
