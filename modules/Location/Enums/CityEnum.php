<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Enums;

class CityEnum
{
    public const DB_TABLE='cities';
    public const ID='id';
    public const PROVINCE_ID='province_id';
    public const CITY_NAME='city_name';
    public const CITY_STATUS = 'status';

    public const FIELDS =[
        self::ID,
        self::PROVINCE_ID,
        self::CITY_NAME,
        self::CITY_STATUS
    ];
}
