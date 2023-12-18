@extends('admin.layoutadmin')
@section('tieudetrang')
    Dashboard - Quản Trị Website
@endsection

@section('noidung')
<div class="container">
<form action="{{ url('admin/capnhat/' . $tintuc->id) }}" method="POST" class="col-7 m-auto" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <h2>Sửa tin tức</h2>
    <hr>

    <div class="form-group">
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" value="{{ $tintuc->title }}" class="form-control">
    </div>

    <div class="form-row">
        <div class="col-10">
            <label for="img">Hình ảnh:</label>
            <input type="file" name="img" class="form-control">
        </div>
        <div class="col-2">
            @if($tintuc->img)
                <img src="{{ asset($tintuc->img) }}" alt="{{ $tintuc->img }}" style="max-width: 100px;">
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="summary">Tóm tắt:</label>
        <textarea name="summary" class="form-control" style="width: 100%; height: 100px">{{ $tintuc->summary }}</textarea>
    </div>

    <div class="form-group">
        <label for="content">Nội dung:</label>
        <textarea name="content" class="form-control" style="width: 100%; height: 200px">{{ $tintuc->content }}</textarea>
    </div>

    <div class="form-group">
        <label for="visibility">Trạng thái:</label>
        <select class="form-control" id="visibility" name="visibility">
            <option value="0" {{ old('visibility', $tintuc->hidden) == 0 ? 'selected' : '' }}>Ẩn tin</option>
            <option value="1" {{ old('visibility', $tintuc->hidden) == 1 ? 'selected' : '' }}>Hiển thị tin</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-warning">Sửa tin</button>

</form>
</div>
@endsection
