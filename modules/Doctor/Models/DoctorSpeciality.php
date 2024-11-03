<?php

namespace Modules\Doctor\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Doctor\Enums\DoctorSpecialityEnum;
use Modules\Speciality\Models\Speciality;

class DoctorSpeciality extends Model
{
    use SoftDeletes;
    protected $table = DoctorSpecialityEnum::DB_TABLE;

    protected $primaryKey = DoctorSpecialityEnum::ID;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = DoctorSpecialityEnum::FIELDS;

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id');
    }
}
