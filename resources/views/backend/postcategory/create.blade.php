@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Thêm loại Blog</h5>
    <div class="card-body">
      <form method="post" action="{{route('post-category.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Tiêu đề</label>
          <input id="inputTitle" type="text" name="title" placeholder="Tiêu đề"  value="{{old('title')}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Trạng thái</label>
          <select name="status" class="form-control">
              <option value="active">Hoạt động</option>
              <option value="inactive">Ngừng hoạt động</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Làm mới</button>
           <button class="btn btn-success" type="submit">Đồng ý</button>
        </div>
      </form>
    </div>
</div>

@endsection