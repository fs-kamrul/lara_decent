<?php

namespace Modules\Admission\Repositories\Eloquent;

use Modules\Admission\Repositories\Interfaces\AdmissionMarkInterface;
use Modules\KamrulDashboard\Repositories\Eloquent\RepositoriesAbstract;
use Illuminate\Support\Str;

class AdmissionMarkRepository extends RepositoriesAbstract implements AdmissionMarkInterface
{
    /**
     * {@inheritDoc}
     */
    public function createSlug($name)
    {
        $slug = Str::slug($name);
        $index = 1;
        $baseSlug = $slug;
        while ($this->model->where('slug', $slug)->count() > 0) {
            $slug = $baseSlug . '-' . $index++;
        }

        if (empty($slug)) {
            $slug = time();
        }

        $this->resetModel();

        return $slug;
    }
}
