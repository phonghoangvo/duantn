@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<div class="container">
    <form action="{{ route('themtin_') }}" method="POST" class="col-7 m-auto" enctype="multipart/form-data">
        @csrf
        <h2>Thêm Tin Tức</h2>
        <hr>
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề:</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Hình ảnh:</label>
            <input type="file" name="img" class="form-control" id="img" required>
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Tóm tắt:</label>
            <input type="text" name="summary" class="form-control" id="summary" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung:</label>
            <input type="text" name="content" class="form-control" id="content" required>
        </div>
        <div class="form-group">
            <label for="visibility">Trạng thái:</label>
            <select class="form-control" id="visibility" name="visibility">
                <option value="0" {{ old('visibility') == 0 ? 'selected' : '' }}>Ẩn tin</option>
                <option value="1" {{ old('visibility') == 1 ? 'selected' : '' }}>Hiển thị tin</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-warning">Thêm tin</button>
    </form>
</div>
@endsection
