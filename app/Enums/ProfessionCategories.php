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