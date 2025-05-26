<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = 'danh_mucs';
    protected $fillable = 
    [
        'ten_danh_muc',
        'mo_ta',
        'id_loai'
    ];

    
}
