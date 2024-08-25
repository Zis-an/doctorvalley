<?php

namespace Modules\Doctor\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Doctor\Enums\DoctorQualificationEnum;

class DoctorQualification extends Model
{
    use SoftDeletes;
    protected $table = DoctorQualificationEnum::DB_TABLE;

    protected $primaryKey = DoctorQualificationEnum::ID;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = DoctorQualificationEnum::FIELDS;

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
