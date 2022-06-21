<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class DoctorRoleEnum extends Enum
{
    public const DOCTOR = 1;
    public const NURSE = 2;
}
