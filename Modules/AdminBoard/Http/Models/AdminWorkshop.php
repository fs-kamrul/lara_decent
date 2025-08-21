<?php

namespace Modules\AdminBoard\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Request;
use Modules\AdminBoard\Enums\AdminWorkshopStatusEnum;
use Modules\KamrulDashboard\Casts\SafeContent;
use Modules\KamrulDashboard\Http\Models\DboardModel;
use Modules\KamrulDashboard\Http\Models\User;

class AdminWorkshop extends DboardModel
{
    use HasFactory;
    protected $guarded = [];

    /**
     * The date fields for the model.clear
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'name',
        'description',
        'short_description',
        'photo',
        'set_time',
        'start_date',
        'order',
        'slug',
        'status',
        'user_id',
    ];

    protected $casts = [
        'status' => AdminWorkshopStatusEnum::class,
        'name' => SafeContent::class,
    ];

    protected static function booted(): void
    {
        static::deleting(function (AdminWorkshop $adminWorkshop) {
            $adminWorkshop->categories()->delete();
            $adminWorkshop->metadata()->delete();
        });
    }
    /**
     * @return BelongsToMany
     */
    public function AdminGalleryParameter(): BelongsToMany
    {
        return $this->belongsToMany(AdminGallery::class, 'admin_gallery_parameters', 'reference_id', 'gallery_id')
            ->wherePivot('reference_type', AdminWorkshop::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(AdminWorkshop::class, 'admin_workshop_categories', 'workshop_id', 'category_id');
    }
    public function active()
    {
        return $this->where('status', 'active');
//        return rtrim(url($this->url), '/') == rtrim(Request::url(), '/');
    }
//    protected function getActiveAttribute()
//    {
//        return rtrim(url($this->url), '/') == rtrim(\Illuminate\Support\Facades\Request::url(), '/');
//    }
}
