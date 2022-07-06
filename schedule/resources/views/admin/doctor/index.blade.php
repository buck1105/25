@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="toolbar">
                            <a href="{{route('admin.doctor.create')}}" class="btn btn-primary"
                               style="margin-right: 4px">Thêm</a>
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
                            <th data-field="actions" class="td-actions text-right" data-events="operateEvents"
                                data-formatter="operateFormatter">Actions
                            </th>
                            </thead>
                            <tbody>
                            @foreach($data as $each)
                                <tr>
                                    <td></td>
                                    <td>{{$each->id}}</td>
                                    <td>{{$each->name}}</td>
                                    <td><img src="{{asset('assets/img/').'/'.$each->image}}" style="max-width: 45px;max-height: 65px" alt=""></td>
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
                                            <a rel="tooltip" title="Remove"
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
@endsection

@push('js')
    <script type="text/javascript">

        var $table = $('#bootstrap-table');

        // function operateFormatter(value, row, index) {
        //     return [
        //         '<div class="table-icons">',
        //         '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
        //         '<i class="ti-image"></i>',
        //         '</a>',
        //         '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
        //         '<i class="ti-pencil-alt"></i>',
        //         '</a>',
        //         '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
        //         '<i class="ti-close"></i>',
        //         '</a>',
        //         '</div>',
        //     ].join('');
        // }



    </script>
@endpush
