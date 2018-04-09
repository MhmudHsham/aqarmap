@extends("layouts.admin")
@section("page_title", "All Articles")
@section("page_header_title", "")
@section("page_level_styles")
<link href="{!! url('assets/admin/global/plugins/datatables/datatables.min.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! url('assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! url('assets/admin/global/plugins/bootstrap-toastr/toastr.min.css') !!}" rel="stylesheet" type="text/css" />
@stop
@section("page_level_script_plugins")
<script src="{!! url('assets/admin/global/plugins/bootstrap-toastr/toastr.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/scripts/datatable.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/datatables/datatables.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('assets/admin/pages/scripts/ui-toastr.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/pages/scripts/table-datatables-responsive.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/mine/article.js') !!}" type="text/javascript"></script>
@stop

@section("content")
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <span class="caption-subject bold uppercase">
                        <a class="btn btn-info" href="{{ url('/admin/articles/create') }}">Add New</a>
                    </span>
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <thead>
                        <tr>
                            <th class="all text-center">ID</th>
                            <th class="all text-center">Title</th>
                            <th class="all text-center">Category</th>
                            <th class="all text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($counter = 1)
                        @foreach($rows as $one)
                        <tr class="tr_{{ $one->id }}">
                            <td class="text-center">{{ $counter }}</td>
                            <td>{{ $one->title }}</td>
                            <td>{{ $one->category->title }}</td>
                            <td>
                                <div class="btn-group pull-right">
                                    <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="{{ url("/admin/articles/edit/")."/".$one->id }}" >
                                                <i class="fa fa-pencil-square-o"></i> Edit </a>
                                        </li>
                                        <li>
                                            <a class="delete-url" data-id="{{ $one->id }}" href="{{ url("/admin/articles/destroy/")."/".$one->id }}">
                                                <i class="fa fa-trash-o"></i> Delete </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @php($counter++)
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@stop