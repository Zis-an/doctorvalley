<?php

namespace Modules\Doctor\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Doctor\Enums\DoctorDetailEnum;

class DoctorDetail extends Model
{
    use SoftDeletes;

    protected $table = DoctorDetailEnum::DB_TABLE;
    protected $primaryKey = DoctorDetailEnum::ID;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = DoctorDetailEnum::FIELDS;

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
