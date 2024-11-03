<?php

namespace Modules\Chamber\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Chamber\Models\Chamber;
use Modules\Chamber\Enums\ScheduleEnum;
use Modules\Doctor\Models\Doctor;

class Schedules extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table=ScheduleEnum::DB_TABLE;
    protected $primaryKey=ScheduleEnum::ID;
    protected $fillable = ScheduleEnum::FIELDS;

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

    public function chamber()
    {
        return $this->belongsTo(Chamber::class, 'chamber_id', 'id');
    }

}
