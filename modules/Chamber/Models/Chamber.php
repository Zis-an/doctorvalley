<?php

namespace Modules\Chamber\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Blog\Models\Blog;
use Modules\Chamber\Enums\ChamberEnum;
use Modules\ChamberAdmin\Models\ChamberAdmin;
use Modules\Doctor\Models\Doctor;
use Modules\Location\Models\Area;
use Modules\Location\Models\City;
use Modules\Location\Models\Province;

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

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'chamber_doctor', 'chamber_id','doctor_id' )
            ->withPivot('add_from', 'add_to')
            ->withTimestamps();
    }

    public function province()
    {
        return $this->hasOne(Province::class, 'id', 'province_id');
    }

    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    public function area()
    {
        return $this->hasOne(Area::class, 'id', 'area_id');
    }


}
