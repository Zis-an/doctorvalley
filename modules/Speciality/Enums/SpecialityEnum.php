<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Speciality\Enums;

class SpecialityEnum
{
    public const DB_TABLE='specialities';
    public const ID='id';
    public const SPECIALITY_NAME='speciality_name';
    public const SPECIALITY_STATUS = 'status';

    public const FIELDS =[
        self::ID,
        self::SPECIALITY_NAME,
        self::SPECIALITY_STATUS
    ];
}
