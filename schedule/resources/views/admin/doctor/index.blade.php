@extends('layouts.master')
@push('css')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    <style>
        #file, #fileSubmit1 {
            display: none;
        }

        .wrap {
            display: flex;
            justify-content: flex-start;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="toolbar wrap">
                            <span><a href="{{route('admin.doctor.create')}}"  class="btn btn-primary"
                                     style="margin-right: 4px">Thêm</a></span>
                            <span style="margin-right: 4px">
                                <form action="{{route('admin.doctor.import')}}" id="fileSubmit" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <label for="file" class="btn btn-primary">CSV</label>
                                    <input type="file" id="file" name="file">
                                    <input type="submit" id="fileSubmit1"  value="Submit">
                               </form>
                            </span>
                            <span ><a href="{{route('admin.doctor.export')}}" style="margin-right: 4px" class="btn btn-primary" >DOWNLOAD</a></span>
                        </div>
                        <table id="bootstrap-table" class="table">
                            <thead>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="id" class="text-center">ID</th>
                            <th data-field="name" data-sortable="true">Họ tên</th>
                            <th data-field="avatar" data-sortable="true">Ảnh</th>
                            <th data-field="specialist" data-sortable="true">Chuyên khoa</th>
                            <th data-field="email" data-sortable="true">Email</th>
                            <th data-field="birthdate" data-sortable="true">Ngày sinh</th>
                            <th data-field="gender" data-sortable="true">Giới tính</th>
                            <th data-field="address" data-sortable="true">Địa chỉ</th>
                            <th data-field="actions" class="td-actions" data-events="operateEvents"
                                data-formatter="operateFormatter">Actions
                            </th>
                            </thead>
                            <tbody>
                            @foreach($data as $each)
                                <tr>
                                    <td></td>
                                    <td>{{$each->id}}</td>
                                    <td>{{$each->name}}</td>
                                    <td><img src="{{asset('assets/img/').'/'.$each->image}}"
                                             style="max-width: 45px;max-height: 65px" alt=""></td>
                                    <td>{{$each->specialist_name}}</td>
                                    <td>{{$each->email}}</td>
                                    <td>{{$each->birthdate}}</td>
                                    <td>{{$each->gender_name}}</td>
                                    <td>{{$each->address}}</td>
                                    <td>
                                        <div class="table-icons">
                                            <a rel="tooltip" title="Edit"
                                               class="btn btn-simple btn-warning btn-icon table-action edit"
                                               href="{{route('admin.doctor.edit', $each->id)}}">
                                                <i class="ti-pencil-alt"></i>
                                            </a>
                                            <a rel="tooltip" title="Remove" onclick="return confirm('Bạn có chắc xóa record này không')"
                                               class="btn btn-simple btn-danger btn-icon table-action remove"
                                               href="{{route('admin.doctor.delete', $each->id)}}">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--                            <div class="fixed-table-pagination">--}}

                        {{--                                <div class="pull-right pagination">--}}
                        {{--                                    <ul class="pagination">--}}
                        {{--                                        {{$data->links()}}--}}
                        {{--                                    </ul>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                    </div>
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->

    </div>
    @if(session()->has('msg'))
        <div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger alert-with-icon animated fadeInDown" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px;"><button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 20px; margin-top: -6px; z-index: 1033;">×</button> <span data-notify="title"></span><span data-notify="message">{{session()->get('msg')}}</span><a href="#" target="_blank" data-notify="url"></a></div>
    @endif
@endsection

@push('js')
    <script>
        const file = document.getElementById('file');
        const fileSubmit = document.getElementById('fileSubmit');
        file.addEventListener('change', function () {
            fileSubmit.submit();
        });
        // $(document).ready(
        //     function (){
        //         $("#file").change(function() {
        //             $("#fileSubmit").click();
        //         });
        //     }
        // );

    </script>


@endpush



