<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class UserRoleEnum extends Enum
{
    public const ADMIN = 0;
    public const DOCTOR = 1;
    public const NURSE = 2;
}
