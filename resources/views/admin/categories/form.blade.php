@extends("layouts.admin")
@section("page_title", "Category Data")
@section("page_header_title", "")
@section("page_level_script_plugins")
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
<script src="{!! url('assets/admin/pages/scripts/form-validation-md.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('assets/admin/mine/category.js') !!}" type="text/javascript"></script>
@stop
@section("content")
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Category Data</span>
                </div>
            </div>
            <div class="portlet-body">
                @if($id == 0)
                @php($action = url('/admin/categories/store'))
                @else
                @php($action = url('/admin/categories/update'). "/" . $id)
                @endif
                <!-- BEGIN FORM   -->
                <form action="{{ $action }}" class="form-horizontal" id="categories_form" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" id="id" value="{{ $id }}" />
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Title
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="" name="title" id="title">
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Enter title</span>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Keywords
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea cols="20" class="form-control" rows="6" name="keywords" id="keywords"></textarea>
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Enter Keywords</span>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-2 control-label" for="form_control_1">Description
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea cols="20" class="form-control" rows="6" name="description" id="description"></textarea>
                                <div class="form-control-focus"> </div>
                                <span class="help-block">Enter Description</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Save</button>
                                <button type="reset" class="btn default">Clear</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>

</div>
@stop