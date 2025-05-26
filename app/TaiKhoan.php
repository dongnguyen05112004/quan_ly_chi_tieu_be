<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = 'tai_khoans';
    protected $fillable = [
        'ten_tai_khoan',
        'mat_khau',
        'email',
        'so_dien_thoai',
        'hinh_anh',
        'loai_tai_khoa'
    ];
}
