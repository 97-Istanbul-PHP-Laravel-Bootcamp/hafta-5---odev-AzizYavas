<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = "room";
    protected $guarded = [];

    protected $casts = [
        'info_s' => 'array'
    ];


    public static function getSpecR($obj = NULL, $prop = 'name')
    {
        $obj_ = [
            'tv' => [
                'name' => 'Televizyon',
            ],
            'smallrefrige' => [
                'name' => 'Minibar'
            ],
            'ps' => [
                'name' => 'Oyun Konsolu'
            ],
            'roomarea' => [
                'name' => 'Metrekare'
            ],
            'safebage' => [
                'name' => 'Kasa'
            ],
            'projection' => [
                'name' => 'Projeksiyon'
            ]
        ];

        return getR($obj_, $obj, $prop);
    }

    public function setSpecXAttribute($value)
    {
        $this->attributes['spec_x'] = encodeX($value);
    }

    public function getSpecXAttribute($value)
    {
        return decodeX($value);
    }


}
