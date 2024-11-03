<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Degree\Models;

use Modules\Degree\Enums\DegreeEnum;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Degree extends Model
{
    use SoftDeletes;

    protected $table=DegreeEnum::DB_TABLE;
    protected $primaryKey=DegreeEnum::ID;
    protected $fillable=DegreeEnum::FIELDS;

}
