<?php

namespace Modules\Admission\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\KamrulDashboard\Http\Models\User;

class Admission extends Model
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
        'slug',
        'photo',
        'father_name',
        'father_phone',
        'mother_nane',
        'mother_phone',
        'phone',
        'dob',
        'religion',
        'gender',
        'nationality',
        'birth_registration',
        'pre_class',
        'class',
        'ssc_group',
        'year',
        'admission_group',
        'pre_institution',
        'pre_gpa',
        'ssc_board',
        'ssc_year',
        'ssc_roll',
        'ssc_registration',
        'ssc_gpa',
        'ssc_transcript',
        'ssc_testimonial',
        'pre_address',
        'pre_postcode',
        'pre_country',
        'pre_states',
        'pre_city',
        'per_address',
        'per_postcode',
        'per_country',
        'per_states',
        'per_city',
        'loc_name',
        'loc_phone',
        'loc_relation',
        'loc_address',
        'mark',
        'loc_postcode',
        'tex_id',
        'payment_img',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function marks()
    {
        return $this->hasMany(AdmissionMark::class, 'admissions_id');
//        return $this->hasMany(AdmissionMark::class, 'admissions_id', 'admissions_id')
//            ->where('admission_subjects_id', '=', $this->admission_subjects_id);
    }

    public function averageMark()
    {
//        $totalMarks = $this->marks->sum('mark');
//        $numberOfMarks = $this->marks->count();
        $average = array();
        foreach ($this->marks as $value){
            $total_mark = $value->subject->total_mark;
            $mark = $value->mark;
            $average[] = ($mark * 100) / $total_mark;
        }
        $totalMarks = array_sum($average);
        $numberOfMarks = count($average);

//        dd($numberOfMarks);
        return $numberOfMarks > 0 ? ($totalMarks / $numberOfMarks) : 0;
    }
    public function admissionMerit()
    {
        return $this->belongsTo(AdmissionMerit::class, 'admission_merits_id');
    }
}
