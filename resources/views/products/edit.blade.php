@extends('layout')

@section('content')
<h2>Sửa Sản phẩm</h2>
<form action="{{ route('products.update', $product->id) }}" method="POST" class="mt-4">
    @csrf
    @method('PUT') <!-- Yêu cầu bắt buộc của Laravel khi cập nhật -->
    
    <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Giá tiền</label>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
</form>
@endsection