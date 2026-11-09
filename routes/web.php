<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Chuyển hướng trang chủ về trang danh sách sản phẩm
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Tạo sẵn 7 đường dẫn chuẩn cho tính năng CRUD của Product
Route::resource('products', ProductController::class);