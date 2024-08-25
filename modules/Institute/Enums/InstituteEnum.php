<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Institute\Enums;

class InstituteEnum
{
    public const DB_TABLE='institutes';
    public const ID='id';
    public const INSTITUTE_NAME='institute_name';
    public const INSTITUTE_ADDRESS='institute_address';
    public const INSTITUTE_STATUS = 'status';

    public const FIELDS =[
        self::ID,
        self::INSTITUTE_NAME,
        self::INSTITUTE_ADDRESS,
        self::INSTITUTE_STATUS
    ];
}
