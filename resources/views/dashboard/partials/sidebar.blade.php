
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
                <a aria-expanded="false" href={{route('userTable')}}>
                    <i class="nav-icon ti ti-user"></i>
                    <span class="nav-title">Users</span>
                </a>
            </li>
            
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-tag"></i> <span class="nav-title">Tags</span></a>
                <ul aria-expanded="false">
                    <li> <a href="#" data-toggle="modal" data-target="#addTagModal">Add Tags</a> </li>                
                    <li> <a href="#" data-toggle="modal" data-target="#listTagModal">List Tags</a> </li>             
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"> <i class="nav-icon ti ti-layout-grid2-alt"></i> <span class="nav-title">Categories</span></a>
                <ul aria-expanded="false">
                    <li> <a href="#" data-toggle="modal" data-target="#addCategoryModal">Add Categories</a> </li>
                    <li> <a href="#" data-toggle="modal" data-target="#listCategoryModal">List Categories</a> </li>
                </ul>
            </li>
            <li>
                <a href={{route('jobs')}} aria-expanded="false"> 
                <i class="nav-icon ti ti-layout-grid4-alt"></i> 
                <span class="nav-title">Jobs</span></a>
            </li>      
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>

{{-- addTagModal  --}}
<div class="modal fade" id="addTagModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTagModal">Add Tags</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="mt-3 mt-sm-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Tag Name</label>
                                <input type="text" class="form-control" placeholder="Tag Name here" />
                            </div>
                        </div>   
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Add</button>
            </div>
        </div>
    </div>
</div>
{{-- endAddTagModal  --}}

{{-- listTagModal --}}

<div class="modal fade" id="listTagModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="listTagModal">List Tags</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-secondary mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>     
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>PHP</td>           
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Java</td>                    
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>C#</td>                              
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>JavaScript</td>                              
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Kotlin</td>                              
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Add</button>
            </div> --}}
        </div>
    </div>
</div>
{{-- endEditTagModal --}}

{{-- AddCategoryModal  --}}
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModal">Add Categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="mt-3 mt-sm-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label">Category Name</label>
                                <input type="text" class="form-control" placeholder="Category Name here" />
                            </div>
                        </div>   
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Add</button>
            </div>
        </div>
    </div>
</div>
{{-- endAddCategoryModal  --}}

{{-- listCategoryModal --}}

<div class="modal fade" id="listCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="listCategoryModal">List Tags</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-secondary mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mobile Developer</td>           
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Web Developer</td>                    
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Web Designer</td>                              
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Writter</td>                    
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Virtual Assistants</td>                              
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Add</button>
            </div> --}}
        </div>
    </div>
</div>
{{-- endlistCategoryModal --}}

