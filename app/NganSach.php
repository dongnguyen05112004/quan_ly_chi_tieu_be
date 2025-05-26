<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NganSach extends Model
{
    protected $table = 'ngan_saches';
    protected $fillable = [
        'ma_tai_khoan',
        'ma_danh_muc',
        'ma_loai',
        'han_muc',
    ];
}
