@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">

                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar">
                                <div class="bars pull-left">
                                    <div class="toolbar">
                                        <!--Here you can write extra buttons/actions for the toolbar-->
                                    </div>
                                </div>
                                <div class="columns columns-right pull-right">
                                    <button class="btn btn-default" type="button" name="refresh" title="Refresh"><i
                                            class="glyphicon fa fa-refresh"></i></button>
                                    <button class="btn btn-default" type="button" name="toggle" title="Toggle"><i
                                            class="glyphicon fa fa-th-list"></i></button>
                                    <div class="keep-open btn-group" title="Columns">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown"><i class="glyphicon fa fa-columns"></i> <span
                                                class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><label><input type="checkbox" data-field="id" value="1"
                                                              checked="checked"> ID</label></li>
                                            <li><label><input type="checkbox" data-field="name" value="2"
                                                              checked="checked"> Name</label></li>
                                            <li><label><input type="checkbox" data-field="salary" value="3"
                                                              checked="checked"> Salary</label></li>
                                            <li><label><input type="checkbox" data-field="country" value="4"
                                                              checked="checked"> Country</label></li>
                                            <li><label><input type="checkbox" data-field="city" value="5"
                                                              checked="checked"> City</label></li>
                                            li><label><input type="checkbox" data-field="gender" value="6"
                                                             checked="checked"> Actions</label></li> li><label><input type="checkbox" data-field="nationality" value="7"
                                                             checked="checked"> Actions</label></li>
                                            <li><label><input type="checkbox" data-field="actions" value="8"
                                                              checked="checked"> Actions</label></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pull-left search"><input class="form-control" type="text"
                                                                     placeholder="Search"></div>
                            </div>
                            <div class="fixed-table-container" style="padding-bottom: 0px;">
                                <div class="fixed-table-header" style="display: none;">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <div class="fixed-table-loading" style="top: 41px;">Loading, please wait...</div>
                                    <table id="bootstrap-table" class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="bs-checkbox " style="width: 36px; " data-field="state">
                                                <div class="th-inner "><input name="btSelectAll" type="checkbox"></div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th class="text-center" style="" data-field="id">
                                                <div class="th-inner ">ID</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="" data-field="name">
                                                <div class="th-inner sortable both">Họ tên</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="" data-field="salary">
                                                <div class="th-inner sortable both">Chức vụ</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="" data-field="country">
                                                <div class="th-inner sortable both">Lương</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th style="" data-field="city">
                                                <div class="th-inner ">Ngày sinh</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th  style="" data-field="gender">
                                                <div class="th-inner ">Giới tính</div>
                                                <div class="fht-cell"></div>
                                            </th>  <th  style="" data-field="nationality">
                                                <div class="th-inner ">Quốc tịch</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                            <th class="td-actions text-right" style="" data-field="actions">
                                                <div class="th-inner ">Action</div>
                                                <div class="fht-cell"></div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-index="0">
                                            <td class="bs-checkbox"><input data-index="0" name="btSelectItem"
                                                                           type="checkbox"></td>
                                            <td class="text-center" style="">1</td>
                                            <td style="">Dakota Rice</td>
                                            <td style="">$36,738</td>
                                            <td style="">Niger</td>
                                            <td style="">Oud-Turnhout</td>
                                            <td style="">Delft</td>
                                            <td style="">Delft</td>
                                            <td class="td-actions text-right" style="">
                                                <div class="table-icons"><a rel="tooltip" title=""
                                                                            class="btn btn-simple btn-info btn-icon table-action view"
                                                                            href="javascript:void(0)"
                                                                            data-original-title="View"><i
                                                            class="ti-image"></i></a><a rel="tooltip" title=""
                                                                                        class="btn btn-simple btn-warning btn-icon table-action edit"
                                                                                        href="javascript:void(0)"
                                                                                        data-original-title="Edit"><i
                                                            class="ti-pencil-alt"></i></a><a rel="tooltip" title=""
                                                                                             class="btn btn-simple btn-danger btn-icon table-action remove"
                                                                                             href="javascript:void(0)"
                                                                                             data-original-title="Remove"><i
                                                            class="ti-close"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr data-index="1">
                                            <td class="bs-checkbox"><input data-index="1" name="btSelectItem"
                                                                           type="checkbox"></td>
                                            <td class="text-center" style="">2</td>
                                            <td style="">Minerva Hooper</td>
                                            <td style="">$23,789</td>
                                            <td style="">Curaçao</td>
                                            <td style="">Sinaai-Waas</td>
                                            <td style="">Delft</td>
                                            <td style="">Delft</td>
                                            <td class="td-actions text-right" style="">
                                                <div class="table-icons"><a rel="tooltip" title=""
                                                                            class="btn btn-simple btn-info btn-icon table-action view"
                                                                            href="javascript:void(0)"
                                                                            data-original-title="View"><i
                                                            class="ti-image"></i></a><a rel="tooltip" title=""
                                                                                        class="btn btn-simple btn-warning btn-icon table-action edit"
                                                                                        href="javascript:void(0)"
                                                                                        data-original-title="Edit"><i
                                                            class="ti-pencil-alt"></i></a><a rel="tooltip" title=""
                                                                                             class="btn btn-simple btn-danger btn-icon table-action remove"
                                                                                             href="javascript:void(0)"
                                                                                             data-original-title="Remove"><i
                                                            class="ti-close"></i></a></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="fixed-table-footer" style="display: none;">
                                    <table>
                                        <tbody>
                                        <tr></tr>
                                        </tbody>
                                    </table>
                                </div>
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
                                            <li class="page-first disabled"><a href="javascript:void(0)"><i
                                                        class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                            <li class="page-pre disabled"><a href="javascript:void(0)">‹</a></li>
                                            <li class="page-number active"><a href="javascript:void(0)">1</a></li>
                                            <li class="page-number"><a href="javascript:void(0)">2</a></li>
                                            <li class="page-number"><a href="javascript:void(0)">3</a></li>
                                            <li class="page-next"><a href="javascript:void(0)">›</a></li>
                                            <li class="page-last"><a href="javascript:void(0)"><i
                                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div>
@endsection
