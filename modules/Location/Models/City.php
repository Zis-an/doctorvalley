<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Models;

use Modules\Doctor\Models\Doctor;
use Modules\Location\Enums\AreaEnum;
use Modules\Location\Enums\CityEnum;
use Illuminate\Database\Eloquent\Model;

use Modules\Location\Enums\ProvinceEnum;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use SoftDeletes;


    protected $table=CityEnum::DB_TABLE;
    protected $primaryKey=CityEnum::ID;
    protected $fillable=CityEnum::FIELDS;


    /**
     * @return BelongsTo
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, CityEnum::PROVINCE_ID, ProvinceEnum::ID);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }


    /**
     * @return HasMany
     */
    public function areas(): HasMany
    {
        return $this->hasMany(Area::class, AreaEnum::CITY_ID, CityEnum::ID);
    }

}
