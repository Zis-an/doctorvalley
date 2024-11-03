<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Degree\Enums;

class DegreeEnum
{
    public const DB_TABLE='degrees';
    public const ID='id';
    public const DEGREE_NAME='degree_name';
    public const DEGREE_STATUS = 'status';
    public const HAS_MAJOR_COURSE='has_major_course';

    public const FIELDS =[
        self::ID,
        self::DEGREE_NAME,
        self::DEGREE_STATUS,
        self::HAS_MAJOR_COURSE
    ];
}
