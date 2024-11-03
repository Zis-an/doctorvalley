<?php
/*
* Author: Arup Kumer Bose
* Email: arupkumerbose@gmail.com
* Company Name: Brainchild Software <brainchildsoft@gmail.com>
*/

namespace Modules\ChamberAdmin\Enums;

class ChamberAdminEnum
{
    public const DB_TABLE = 'chamber_admin';

    public const ID = 'id';
    public const CHAMBER_ID = 'chamber_id';
    public const CHAMBER_ADMIN_NAME = 'name';
    public const CHAMBER_ADMIN_EMAIL = 'email';
    public const CHAMBER_ADMIN_PHONE = 'phone';
    public const USER_NAME = 'username';
//    public const CHAMBER_ADMIN_ROLE = 'role_id';
    public const CHAMBER_ADMIN_PASSWORD = 'password';
    public const CHAMBER_ADMIN_STATUS = 'status';
    public const FIELDS = [
        self::ID,
        self::CHAMBER_ID,
        self::CHAMBER_ADMIN_NAME,
        self::USER_NAME,
        self::CHAMBER_ADMIN_EMAIL,
        self::CHAMBER_ADMIN_PHONE,
//        self::CHAMBER_ADMIN_ROLE,
        self::CHAMBER_ADMIN_PASSWORD,
        self::CHAMBER_ADMIN_STATUS,
    ];
}
