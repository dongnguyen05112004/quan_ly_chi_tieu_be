<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NganSachTong extends Model
{
    protected $table = 'ngan_sach_tongs';
    protected $fillable = 
    [
        'ma_tai_khoan',
        'so_tien'
    ];
}
