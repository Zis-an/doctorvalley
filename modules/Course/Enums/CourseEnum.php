<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\Course\Enums;

class CourseEnum
{
    public const DB_TABLE='courses';
    public const ID='id';
    public const COURSE_NAME='course_name';
    public const COURSE_STATUS = 'status';

    public const FIELDS =[
        self::ID,
        self::COURSE_NAME,
        self::COURSE_STATUS
    ];
}
