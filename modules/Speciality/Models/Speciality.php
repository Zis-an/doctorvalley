<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Speciality\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Speciality\Enums\SpecialityEnum;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speciality extends Model
{
    use SoftDeletes;

    protected $table=SpecialityEnum::DB_TABLE;
    protected $primaryKey=SpecialityEnum::ID;
    protected $fillable=SpecialityEnum::FIELDS;

}
