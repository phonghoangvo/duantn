@extends('admin.layout')
@section('container')
<div class="container-fluid">
<h2>Đăng kí tài khoản </h2>
{{-- <div class="card-body">
    <div class="table-responsive"> --}}
<form method="post" style="padding: 32px; max-width: 50%; border:solid 2px 
box-shadow: -1px 0px 10px 12px rgba(204,187,187,0.41);
-webkit-box-shadow: -1px 0px 10px 12px rgba(204,187,187,0.41);
-moz-box-shadow: -1px 0px 10px 12px rgba(204,187,187,0.41); margin:32px; border-radius : 10px">@csrf
    {{-- @if ($errors->any())
<div class="alert alert-danger">
   <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif --}}
    
    <div class="form-group">
        <label for="name">Name:</label> 
        <input type="text" value="{{old('name')}}" class="form-control" id="name"  name="name">
        @error('name')
        {{ $message }}
     @enderror
    </div>
    {{-- <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address">
    </div> --}}
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" value="{{old('email')}}" class="form-control" id="email" name="email">
        @error('email')
        {{ $message }}
     @enderror
    </div>
    {{-- <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="number" class="form-control" id="phone" name="phone">
    </div> --}}
    {{-- <div class="form-group">
        <label for="img">img</label>
        <input type="file" class="form-control" id="img" name="img">
    </div> --}}

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" value="{{old('password')}}" class="form-control" id="password" name="password">
        @error('password')
        {{ $message }}
     @enderror
    </div>
    {{-- <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" class="form-control" id="status" name="status">
    </div>
    <div class="form-group">
        <label for="role">Role:</label>
        <input type="text" class="form-control" id="role" name="role">
    </div> --}}
    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>
    {{-- @include('partials.formerrors') --}}
</form>
    </div>
</div>
</div>

@endsection
