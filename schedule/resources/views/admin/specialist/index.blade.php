@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="toolbar">
                     <span><a href="{{route('admin.specialist.create')}}"  class="btn btn-primary"
                       style="margin-right: 4px">Thêm</a></span>
                   </div>
                   <table id="bootstrap-table" class="table">
                    <thead>
                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="id" class="text-center">#</th>
                        <th data-field="name" data-sortable="true">Tên chuyên khoa</th>
                        <th data-field="salary" data-sortable="true" width="50%">Đặc tả</th>
                        <th data-field="actions" class="td-action" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                    </thead>
                    <tbody>
                        @foreach($data as $value)
                        <tr>
                            <td></td>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->description}}</td>
                            <td>
                                <div class="table-icons">
                                    <a title="Edit"
                                    class="btn btn-simple btn-warning btn-icon table-action edit"
                                    href="{{route('admin.specialist.edit', $value->id)}}">
                                    <i class="ti-pencil-alt"></i>
                                </a>
                                <a rel="tooltip" title="Remove" onclick="return () => confirm('Bạn có chắc xóa record này không')"
                                 class="btn btn-simple btn-danger btn-icon table-action remove"
                                 href="{{route('admin.specialist.destroy', $value->id)}}">
                                 <i class="ti-close"></i>
                             </a>
                         </div>
                     </td>
                 </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
 </div><!--  end card  -->
</div> <!-- end col-md-12 -->
</div> <!-- end row -->
</div>
@endsection
@push('js')
<script type="text/javascript">


</script>
@endpush
