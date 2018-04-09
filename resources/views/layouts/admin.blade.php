<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>@yield("page_title")</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{!! url('assets/admin/global/plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('assets/admin/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('assets/admin/global/plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('assets/admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield("page_level_styles")
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{!! url('assets/admin/global/css/components.min.css') !!}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{!! url('assets/admin/global/css/plugins.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{!! url('assets/admin/layouts/layout/css/layout.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! url('assets/admin/layouts/layout/css/themes/darkblue.min.css') !!}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{!! url('assets/admin/layouts/layout/css/custom.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <script type="text/javascript">
            var config = {
                admin_url: "{{ url('/admin') }}",
                base_url: "{{ url('/') }}"
            };
        </script>
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            @include("components.admin.header")
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                @include("components.admin.sidebar")
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="javascript:;">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>@yield("page_title")</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> @yield("page_header_title") </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        @yield("content")
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            @include("components.admin.footer")
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{!! url('assets/admin/global/plugins/jquery.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('assets/admin/global/plugins/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('assets/admin/global/plugins/js.cookie.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('assets/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('assets/admin/global/plugins/jquery.blockui.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('assets/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        @yield("page_level_script_plugins")
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{!! url('assets/admin/global/scripts/app.min.js') !!}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        @yield("page_level_scripts")
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{!! url('assets/admin/layouts/layout/scripts/layout.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('assets/admin/layouts/layout/scripts/demo.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('assets/admin/layouts/global/scripts/quick-sidebar.min.js') !!}" type="text/javascript"></script>
        <script src="{!! url('assets/admin/layouts/global/scripts/quick-nav.min.js') !!}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>