@extends('layouts.master')
@section('content')
        <div class="card card-content">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-lg-offset-3">
                        <h2>Thêm mới bác sĩ</h2>
                        <form action="{{route('admin.doctor.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group ">
                                <label for="">Họ và tên </label>
                                <input type="text" name="name" placeholder="Họ và tên..." class="form-control">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="">Ngày sinh</label>
                                <input type="date" name="birthdate" class="form-control">
                                @error('birthdate')
                                {{$message}}
                                @enderror
                            </div>

                            <div class="form-group ">
                                <label for="">Giới tính </label>
                                <br>
                                <span>Nam</span>
                                <input type="radio" name="gender" id="" value="0">
                                <span>Nữ</span>
                                <input type="radio" name="gender" id="" value="1">
                            </div>
                            <div class="form-group ">
                                <label for="">Số điện thoại </label>
                                <input type="text" name="phone" placeholder="Số điện thoại..." class="form-control">
                                @error('phone')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Chuyên khoa </label>
                                <select name="role" id="" class="form-control">
                                    @foreach($specialist as $key => $value)
                                        <option value="{{$value}}">{{$key}}</option>
                                    @endforeach()
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ email</label>
                                <input type="email" name="email" placeholder="Địa chỉ email..." class="form-control">
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
                                <img id="blah" style="width: 100px;height: 100px">
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu </label>
                                <input type="password" name="password" placeholder="Mật khẩu..." class="form-control">
                                @error('password')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ </label>
                                <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                                @error('address')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="footer text-center" style="margin-bottom: 12px">
                                <button type="submit" class="btn btn-fill btn-danger btn-wd">Thêm</button>
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
