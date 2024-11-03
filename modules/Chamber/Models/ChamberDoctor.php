<?php

namespace Modules\Chamber\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Chamber\Models\Chamber;
use Modules\Chamber\Enums\ChamberDoctorEnum;

class ChamberDoctor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table=ChamberDoctorEnum::DB_TABLE;
    protected $primaryKey=ChamberDoctorEnum::ID;
    protected $fillable = ChamberDoctorEnum::FIELDS;

}
