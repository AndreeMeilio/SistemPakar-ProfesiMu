<?php

namespace App\Enums;

Enum Gender:string
{
    case MALE = 'Laki-laki';
    case FEMALE = 'Perempuan';

    public static function values()
    {
        return array_column(self::cases(), 'value');
    }
}