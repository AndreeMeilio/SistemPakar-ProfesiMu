<?php

namespace App\Enums;

Enum DigitalExperiences:string
{
    case WORK = 'Ya, saya pernah bekerja atau magang di bidang digital';
    case COURSE = 'Ya, saya pernah mengikuti kursus atau pelatihan di bidang digital';
    case INDEPENDENT = 'Ya, saya memiliki pengalaman belajar mandiri di bidang digital';
    case NO_EXPERIENCE = 'Tidak, saya belum memiliki pengalaman belajar, kursus, atau bekerja di bidang digital';

    public static function databaseEnum()
    {
        return array_column(self::cases(), 'value');
    }

    public static function toArray()
    {
        return array_map(function ($item) {
            return $item->value;
        }, self::cases());
    }
}