<?php

namespace App\Utils;

class UserType{
    const ADMIN=1;
    const CLIENT=2;
    const WORKER=3;

    public static $types = [
        self::SUPER_ADMIN => 'Admin',
        self::CLIENT => 'Client',
        self::WORKER => 'Worker',
    ];
}
