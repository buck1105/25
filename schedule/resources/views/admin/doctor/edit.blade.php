@extends('layouts.master')
@section('content')
    <div class="card card-content">
        <div class="content">
            <div class="row">
                <div class="col-md-6 col-lg-offset-3">
                    <h2>Thêm mới bác sĩ</h2>
                    <form action="{{route('admin.doctor.update', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="">Họ và tên </label>
                            <input type="text" name="name" placeholder="Họ và tên..." class="form-control" value="{{$data->name}}">
                            @error('name')
                            {{$message}}
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="">Ngày sinh</label>
                            <input type="date" name="birthdate" class="form-control" value="{{$data->birthdate}}">
                            @error('birthdate')
                            {{$message}}
                            @enderror
                        </div>

                        <div class="form-group ">

                            <label for="">Giới tính </label>
                            <br>
                            @if($data->gender==0)
                            <span>Nam</span>
                            <input type="radio" name="gender" checked id="" value="0">
                            <span>Nữ</span>
                            <input type="radio" name="gender" id="" value="1">
                            @endif
                            @error('gender')
                            {{$message}}
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="">Số điện thoại </label>
                            <input type="text" name="phone" placeholder="Số điện thoại..." class="form-control" value="{{$data->phone}}">
                            @error('phone')
                            {{$message}}
                            @enderror
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="">Chuyên khoa </label>--}}
{{--                            <select name="specialist_id" id="" class="form-control">--}}
{{--                                @foreach($specialist as $key => $value)--}}
{{--                                    <option value="{{$value}}">{{$key}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            @error('specialist_id')--}}
{{--                            {{$message}}--}}
{{--                            @enderror--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="">Địa chỉ email</label>
                            <input type="email" name="email" placeholder="Địa chỉ email..." class="form-control" value="{{$data->email}}">
                            @error('email')
                            {{$message}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh </label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                            {{$message}}
                            @enderror
                            <img id="blah" src="{{asset('assets/img/'.$data->image)}}" style="width: 100px;height: 100px">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu </label>
                            <input type="text"  name="password" class="form-control" value="1234">
                            @error('password')
                            {{$message}}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ </label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control">{{$data->address}}</textarea>
                            @error('address')
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
    </form>
@endsection

@push('js')
    {{--    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
    <script>
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>

@endpush
