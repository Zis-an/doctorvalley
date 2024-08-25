<?php

namespace Modules\Chamber\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Chamber\Enums\ChamberEnum;
use Modules\ChamberAdmin\Models\ChamberAdmin;

class Chamber extends Model
{
    use HasFactory, SoftDeletes;

     protected $table = ChamberEnum::DB_TABLE;
     protected $primaryKey = ChamberEnum::ID;
     protected $fillable = ChamberEnum::FIELDS;


    public function admins()
    {
        return $this->hasMany(ChamberAdmin::class);
    }
}
