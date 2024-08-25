<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Course\Models;

use Modules\Course\Enums\CourseEnum;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $table=CourseEnum::DB_TABLE;
    protected $primaryKey=CourseEnum::ID;
    protected $fillable=CourseEnum::FIELDS;

}
