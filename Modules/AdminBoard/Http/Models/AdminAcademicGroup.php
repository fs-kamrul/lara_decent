<?php

namespace Modules\AdminBoard\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\AdminBoard\Enums\AdminAcademicGroupStatusEnum;
use Modules\KamrulDashboard\Casts\SafeContent;
use Modules\KamrulDashboard\Http\Models\DboardModel;
use Modules\KamrulDashboard\Http\Models\User;

class AdminAcademicGroup extends DboardModel
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
        'order',
        'slug',
        'status',
        'user_id',
    ];
    protected $casts = [
        'status' => AdminAcademicGroupStatusEnum::class,
        'name' => SafeContent::class,
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function AdminGalleryParameter(): BelongsToMany
    {
        return $this->belongsToMany(AdminGallery::class, 'admin_gallery_parameters', 'reference_id', 'gallery_id')
            ->wherePivot('reference_type', AdminAcademicGroup::class);
    }
    public function active()
    {
        return $this->where('status', 'active');
//        return rtrim(url($this->url), '/') == rtrim(Request::url(), '/');
    }
}
