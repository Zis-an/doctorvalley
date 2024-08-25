<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Models;
use Modules\Doctor\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Modules\Location\Enums\CountryEnum;
use Modules\Location\Enums\ProvinceEnum;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    use SoftDeletes;


    protected $fillable = CountryEnum::FIELDS;

    /**
     * @return HasMany
     */
    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class, ProvinceEnum::COUNTRY_ID, CountryEnum::ID);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
