<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Institute\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Institute\Enums\InstituteEnum;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institute extends Model
{
    use SoftDeletes;

    protected $table=InstituteEnum::DB_TABLE;
    protected $primaryKey=InstituteEnum::ID;
    protected $fillable=InstituteEnum::FIELDS;

}
