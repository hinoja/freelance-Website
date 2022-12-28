<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu" id="sidebarNav">
            <li class="nav-static-title">Personal</li>

            <li>
                <a class="active" aria-expanded="false" href={{ route('admin.home') }}>
                    <i class="nav-icon ti ti-rocket"> </i>
                    <span class="nav-title">Dashboards</span>
                </a>
            </li>

            <li>
                <a aria-expanded="false" href={{ route('admin.user') }}>
                    <i class="nav-icon ti ti-user"></i>
                    <span class="nav-title">Users</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-tag"></i>
                    <span class="nav-title">Tags</span></a>
                <ul aria-expanded="false">
                    <li> <a href="#" data-toggle="modal" data-target="#addTagModal">Add Tags</a> </li>
                    <li> <a href="#" data-toggle="modal" data-target="#listTagModal">List Tags</a> </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i
                        class="nav-icon ti ti-layout-grid2-alt"></i> <span class="nav-title">Categories</span></a>
                <ul aria-expanded="false">
                    <li> <a href="#" data-toggle="modal" data-target="#addCategoryModal">Add Categories</a> </li>
                    <li> <a href="#" data-toggle="modal" data-target="#listCategoryModal">List Categories</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href={{ route('admin.job') }} aria-expanded="false">
                    <i class="nav-icon ti ti-layout-grid4-alt"></i>
                    <span class="nav-title">Jobs</span></a>
            </li>
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>

