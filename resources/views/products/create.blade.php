@extends('layout')

@section('content')
<h2>Thêm Sản phẩm</h2>
<form action="{{ route('products.store') }}" method="POST" class="mt-4">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Giá tiền</label>
        <input type="number" name="price" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection