<?php

namespace Modules\Option\Http\Imports;

use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Modules\Option\Http\Models\OptionReligion;

class OptionReligionImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new OptionReligion([
            'uuid' => gen_uuid(),
            'name' => $row[0],
            'description' => $row[1],
            'status' => 1,
            'user_id' => Auth::id(),
        ]);
    }
}
