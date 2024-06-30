<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Location\Enums;

class CountryEnum
{
    public const DB_TABLE='countries';
    public const ID ='id';
    public const COUNTRY_NAME='country_name';
    public const COUNTRY_CAPITAL='capital';
    public const COUNTRY_SHORT_NAME='short_name';
    public const COUNTRY_CODE='country_code';
    public const COUNTRY_STATUS = 'status';

    protected $table=self::DB_TABLE;

    protected $primaryKey=self::ID;

    public const FIELDS=[
        self::ID,
        self::COUNTRY_NAME,
        self::COUNTRY_CAPITAL,
        self::COUNTRY_SHORT_NAME,
        self::COUNTRY_CODE,
        self::COUNTRY_STATUS
    ];

    public const SHORT_FIELDS=[
        self::ID,
        self::COUNTRY_NAME,
        self::COUNTRY_CODE
    ];
}

