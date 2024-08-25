<?php

namespace Modules\Doctor\Models;


use Laravel\Sanctum\HasApiTokens;
use Modules\Location\Models\Area;
use Modules\Location\Models\City;
use Modules\Doctor\Enums\DoctorEnum;
use Modules\Location\Models\Province;
use Illuminate\Database\Eloquent\Model;
use Modules\Doctor\Models\DoctorDetail;
use Illuminate\Notifications\Notifiable;
use Modules\Doctor\Models\DoctorExperience;
use Modules\Doctor\Models\DoctorSpeciality;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Doctor\Models\DoctorQualification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Doctor extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = DoctorEnum::DB_TABLE;

    protected $primaryKey = DoctorEnum::ID;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = DoctorEnum::FIELDS;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function detail()
    {
        return $this->hasOne(DoctorDetail::class);
    }

    public function province()
    {
        return $this->hasOne(Province::class);
    }

    public function city()
    {
        return $this->hasOne(City::class);
    }

    public function area()
    {
        return $this->hasOne(Area::class);
    }

    public function experience()
    {
        return $this->hasMany(DoctorExperience::class);
    }

    public function qualification()
    {
        return $this->hasMany(DoctorQualification::class);
    }

    public function speciality()
    {
        return $this->hasMany(DoctorSpeciality::class);
    }
}
