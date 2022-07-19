@extends('layouts.master')
@section('content')
<div class="card card-content">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-lg-offset-3">
                <h2>Danh mục chuyên khoa</h2>
                <form action="{{route('admin.specialist.update')}}" method="post">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="form-group ">
                        <label for="">Tên chuyên khoa</label>
                        <input type="hidden" name="id" value="{{isset($data->id) ? $data->id : ''}}">
                        <input type="text" name="name" placeholder="Tên chuyên khoa" class="form-control" value="{{isset($data->name) ? $data->name : ''}}">
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label for="">Đặc tả </label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{isset($data->description) ? $data->description : ''}}</textarea>
                        @error('description')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="footer text-center" style="margin-bottom: 12px">
                        <button type="submit" class="btn btn-fill btn-danger btn-wd">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


