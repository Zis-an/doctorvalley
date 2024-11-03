<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Speciality\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Doctor\Models\Doctor;
use Modules\Speciality\Enums\SpecialityEnum;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speciality extends Model
{
    use SoftDeletes;

    protected $table=SpecialityEnum::DB_TABLE;
    protected $primaryKey=SpecialityEnum::ID;
    protected $fillable=SpecialityEnum::FIELDS;

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_specialities', 'speciality_id', 'doctor_id')
            ->withTimestamps();
    }

}
