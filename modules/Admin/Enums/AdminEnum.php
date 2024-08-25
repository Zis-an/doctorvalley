<?php

namespace Modules\Admin\Enums;

final class AdminEnum
{

    public const DB_TABLE='admins';
    public const ID='id';
    public const NAME='name';
    public const EMAIL='email';
    public const USER_NAME='username';
    public const PHONE_NO='phone_no';
    public const ROLE_ID='role_id';
    public const PASSWORD = 'password';
    public const ADMIN_STATUS = 'status';

    public const FIELDS =[
        self::NAME,
        self::EMAIL,
        self::USER_NAME,
        self::PHONE_NO,
        self::ROLE_ID,
        self::PASSWORD,
        self::ADMIN_STATUS,
    ];
}
