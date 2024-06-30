<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Models;

use Modules\Location\Enums\CityEnum;
use Illuminate\Database\Eloquent\Model;
use Modules\Location\Enums\CountryEnum;
use Modules\Location\Enums\ProvinceEnum;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Province extends Model
{
    use SoftDeletes;

    protected $table = ProvinceEnum::DB_TABLE;

    protected $primaryKey=ProvinceEnum::ID;

    protected $fillable=ProvinceEnum::FIELDS;

    /**
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, ProvinceEnum::ID, CountryEnum::ID);
    }

    /**
     * @return HasMany
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class, CityEnum::PROVINCE_ID, ProvinceEnum::ID);
    }

}
