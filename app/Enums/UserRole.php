<?php

namespace App\Enums;

class UserRole
{
    const ADMIN = 'admin';
    const USER = 'user';
    const WORKER = 'worker';

    const TYPES = [
        self::ADMIN,
        self::USER,
        self::WORKER
    ];


}
