<?php

namespace Modules\Doctor\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Doctor\Enums\DoctorExperienceEnum;

class DoctorExperience extends Model
{
    use SoftDeletes;
    
    protected $table = DoctorExperienceEnum::DB_TABLE;

    protected $primaryKey = DoctorExperienceEnum::ID;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = DoctorExperienceEnum::FIELDS;

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
