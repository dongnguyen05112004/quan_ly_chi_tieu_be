<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaoDich extends Model
{
    protected $table = 'giao_diches';
    protected $fillable = [
        'id_tai_khoan',
        'id_danh_muc',
        'so_tien',
        'ngay_giao_dich',
        'mo_ta'
    ];
}
