<?php

namespace Modules\Doctor\Models;


use App\Models\VisitorCount;
use Illuminate\Console\Scheduling\Schedule;
use Laravel\Sanctum\HasApiTokens;
use Modules\Blog\Models\Blog;
use Modules\Chamber\Models\Chamber;
use Modules\Chamber\Models\Schedules;
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
use Modules\Speciality\Models\Speciality;


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

    public function experiences()
    {
        return $this->hasMany(DoctorExperience::class);
    }

    public function qualification()
    {
        return $this->hasMany(DoctorQualification::class);
    }

//    public function speciality()
//    {
//        return $this->hasMany(DoctorSpeciality::class);
//    }

    // Change this to a belongsToMany relationship
    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'doctor_specialities', 'doctor_id', 'speciality_id')
            ->withTimestamps();
    }

    public function chambers()
    {
        return $this->belongsToMany(Chamber::class, 'chamber_doctor', 'doctor_id', 'chamber_id')
            ->withPivot('add_from', 'add_to')
            ->withTimestamps();
    }

    public function schedules()
    {
        return $this->hasMany(Schedules::class, 'doctor_id', 'id');
    }

    public function blogs()
    {
        return $this->morphMany(Blog::class, 'authorable');
    }

    public function visits()
    {
        return $this->morphMany(VisitorCount::class, 'ownarable');
    }
}
