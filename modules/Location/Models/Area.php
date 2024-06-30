<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Models;

use Modules\Location\Enums\AreaEnum;
use Modules\Location\Enums\CityEnum;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Area extends Model
{
    use SoftDeletes;



    protected $table=AreaEnum::DB_TABLE;
    protected $primaryKey=AreaEnum::ID;
    protected $fillable=AreaEnum::FIELDS;


    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, AreaEnum::CITY_ID, CityEnum::ID);
    }
}
