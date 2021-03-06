@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="bootstrap-table">
                            <div class="toolbar">
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <table id="bootstrap-table" class="table">
                                <thead>
                                <th data-field="state" data-checkbox="true"></th>
                                <th data-field="id" class="text-center">ID</th>
                                <th data-field="name" data-sortable="true">Họ tên</th>
                                <th data-field="email" data-sortable="true">Email</th>
                                <th data-field="password" data-sortable="true">Password</th>
                                <th data-field="phone" data-sortable="true">Phone</th>
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
                                        <td>{{$each->email}}</td>
                                        <td>{{$each->password}}</td>
                                        <td>{{$each->phone}}</td>
                                        <td>{{$each->address}}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="fixed-table-pagination">
                                <div class="pull-left pagination-detail"><span class="pagination-info"></span><span
                                        class="page-list"><span class="btn-group dropup"><button type="button"
                                                                                                 class="btn btn-default  dropdown-toggle"
                                                                                                 data-toggle="dropdown"><span
                                                    class="page-size">8</span> <span class="caret"></span></button><ul
                                                class="dropdown-menu" role="menu"><li class="active"><a
                                                        href="javascript:void(0)">8</a></li><li><a
                                                        href="javascript:void(0)">10</a></li><li><a
                                                        href="javascript:void(0)">25</a></li></ul></span> rows visible</span>
                                </div>
                                <div class="pull-right pagination">
                                    <ul class="pagination">
                                        {{$data->links()}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->

    </div>
@endsection

@push('js')
    <script type="text/javascript">

        var $table = $('#bootstrap-table');

        function operateFormatter(value, row, index) {
            return [
                '<div class="table-icons">',
                '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
                '<i class="ti-image"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
                '<i class="ti-pencil-alt"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
                '<i class="ti-close"></i>',
                '</a>',
                '</div>',
            ].join('');
        }

        $().ready(function () {
            window.operateEvents = {
                'click .view': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    swal('You click view icon, row: ', info);
                    console.log(info);
                },
                'click .edit': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    swal('You click edit icon, row: ', info);
                    console.log(info);
                },
                'click .remove': function (e, value, row, index) {
                    console.log(row);
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
                }
            };

            $table.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: true,
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                searchAlign: 'left',
                pageSize: 8,
                clickToSelect: false,
                pageList: [8, 10, 25, 50, 100],

                formatShowingRows: function (pageFrom, pageTo, totalRows) {
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function (pageNumber) {
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'ti-close'
                }
            });

            //activate the tooltips after the data table is initialized
            $('[rel="tooltip"]').tooltip();

            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });
        });

    </script>
@endpush
