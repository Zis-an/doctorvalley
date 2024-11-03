<?php

namespace Modules\Chamber\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Chamber\Models\Chamber;
use Modules\Chamber\Enums\ScheduleSpecialNoteEnum;

class ScheduleSpecialNote extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table=ScheduleSpecialNoteEnum::DB_TABLE;
    protected $primaryKey=ScheduleSpecialNoteEnum::ID;
    protected $fillable = ScheduleSpecialNoteEnum::FIELDS;

}
