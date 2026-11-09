@extends('layout')

@section('content')
<div class="row mb-3">
    <div class="col-md-6"><h2>Danh sách Sản phẩm</h2></div>
    <div class="col-md-6 text-end">
        <a href="{{ route('products.create') }}" class="btn btn-success">Thêm sản phẩm mới</a>
    </div>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá (VNĐ)</th>
            <th width="150">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ number_format($item->price) }}</td>
            <td>
                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                <form action="{{ route('products.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Xóa thật không?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection