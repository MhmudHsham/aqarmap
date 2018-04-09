<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>

            <li class="nav-item  ">
                <a href="javascript:void(0);" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Manage Categories</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ url("/admin/categories") }}" class="nav-link ">
                            <span class="title">All Categories</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ url("/admin/categories/create") }}" class="nav-link ">
                            <span class="title">Add Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:void(0);" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Manage Articles</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ url("/admin/articles") }}" class="nav-link ">
                            <span class="title">All Articles</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ url("/admin/articles/create") }}" class="nav-link ">
                            <span class="title">Add Article</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>