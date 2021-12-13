   <aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> 
                            <a class="waves-effect waves-dark" href="{{URL::to('/')}}" aria-expanded="false">
                                <i class="mdi mdi-home"></i><span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-trending-up"></i><span class="hide-menu">Leads</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.leads.add')}}">Add Leads</a></li>
                                <li><a href="{{route('admin.leads.pending')}}">Pending Leads</a></li>
                                <li><a href="{{route('admin.leads.marked')}}">Marked Leads</a></li>
                                <li><a href="{{route('admin.leads.filter')}}">Filter Leads</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-small-cap">Settings</li>
                        <li> <a href="{{route('admin.setting.categories')}}"><i class="mdi mdi-apps"></i>Categories</a> </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="#"><i class="mdi mdi-account-circle"></i>Users</a>
                             <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.users.addnew')}}">Add New</a></li>
                                <li><a href="{{route('admin.users.alluser')}}">All User</a></li>
                            </ul>
                         </li>
                    </ul>
                </nav>
    </div>
</aside>