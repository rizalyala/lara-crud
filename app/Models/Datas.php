<?php

namespace App\Models;



class Datas 
{
    private static $colec = [
        [
            'id'=>'1',
            'nama'=>'bogeng',
            'profesi'=>'nganggur'
        ]
    ];

    public static function all()
    {
        return self::$colec;
    }
}
