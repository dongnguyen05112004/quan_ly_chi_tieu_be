<?php

use App\Http\Controllers\btvn2_dataController;
use App\Http\Controllers\btvn_dataController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\ontapController;
use App\Http\Controllers\StudentController;
use Database\Seeders\NhanvienSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/khach-hang/quan-ly-danh-muc/data', [KhachHangController::class, 'getdata']);

