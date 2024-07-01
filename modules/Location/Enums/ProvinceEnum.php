<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Enums;

use Modules\Location\Enums\CountryEnum;

class ProvinceEnum
{
    public const DB_TABLE='provinces';
    public const ID='id';
    public const COUNTRY_ID='country_id';
    public const PROVINCE_NAME='province_name';
    public const PROVINCE_STATUS='status';

    public const FIELDS=[
        self::ID,
        self::COUNTRY_ID,
        self::PROVINCE_NAME,
        self::PROVINCE_STATUS
    ];
}
