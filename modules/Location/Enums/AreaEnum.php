<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Enums;

class AreaEnum
{
    public const DB_TABLE='areas';
    public const ID='id';

    public const CITY_ID='city_id';
    public const AREA_NAME='area_name';
    public const AREA_STATUS = 'status';

    public const FIELDS =[
        self::ID,
        self::CITY_ID,
        self::AREA_NAME,
        self::AREA_STATUS
    ];
}
