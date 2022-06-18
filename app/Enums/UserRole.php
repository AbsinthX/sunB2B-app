<?php

namespace App\Enums;

/*
 * Wykorzystanie enum'a do określenia ról które może otrzymać użytkownik.
 *
 * Dostępne od PHP 8.1
 */

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
