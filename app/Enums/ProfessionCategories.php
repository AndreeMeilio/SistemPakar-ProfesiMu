<?php

namespace App\Enums;

Enum ProfessionCategories:string
{
    case DATA = 'Data';
    case MARKETING = 'Marketing';
    case PRODUCT = 'Product';
    case DESIGN = 'Design';
    case ENGINEERING = 'Engineering';
    case CREATIVE = 'Creative';

    public static function toArray()
    {
        return array_column(self::cases(), 'value');
    }
}