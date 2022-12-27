
<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu" id="sidebarNav">
            <li class="nav-static-title">Personal</li>
 
            <li>
                <a class="active" aria-expanded="false" href={{route('dashboardHome')}}>
                    <i class="nav-icon ti ti-rocket"> </i>
                    <span class="nav-title">Dashboards</span>
                </a> 
            </li>
            
            <li>
                <a aria-expanded="false" href={{route('dataTable')}}>
                    <i class="nav-icon ti ti-layout-column3-alt"></i>
                    <span class="nav-title">Users</span>
                </a>
            </li>
            
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-layout-grid4-alt"></i> <span class="nav-title">Tags</span></a>
                <ul aria-expanded="false">
                    <li> <a href="#">Add Tags</a> </li>
                    <li> <a href="#">List Tags</a> </li>
                    <li> <a href="#">Edit Tags</a> </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-layout-grid4-alt"></i> <span class="nav-title">Categories</span></a>
                <ul aria-expanded="false">
                    <li> <a href="#">Add Categories</a> </li>
                    <li> <a href="#">List Categories</a> </li>
                    <li> <a href="#">Edit Categories</a> </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-layout-grid4-alt"></i> <span class="nav-title">Jobs</span></a>
                <ul aria-expanded="false">
                    <li> <a href="widget-list.html">List Job</a> </li>
                    <li> <a href="widget-social.html">Details Job</a> </li>
                </ul>
            </li>      
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>