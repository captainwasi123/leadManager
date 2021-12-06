   <aside class="left-sidebar">
    <div class="scroll-sidebar">
        <!-- <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li> <a href="{{URL::to('/')}}">Dashboard</a> </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-chat.html">Chat app</a></li>
                                <li><a href="app-ticket.html">Support Ticket</a></li>
                                <li><a href="app-contact.html">Contact / Employee</a></li>
                                <li><a href="app-contact2.html">Contact Grid</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                <li> <a href="{{route('admin.leads')}}">Leads</a> </li>
                <li> <a href="#">Marked Leads</a> </li>
                <li> <a href="#">Import / Export Leads</a> </li>
                <li> <a href="#">Sales Report</a> </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap">Settings</li>
                <li> <a href="{{route('admin.setting.categories')}}">Categories</a> </li>
                <li> <a href="#">Users</a> </li>
            </ul>
        </nav> -->
        <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> 
                            <a class="waves-effect waves-dark" href="{{URL::to('/')}}" aria-expanded="false">
                                <i class="mdi mdi-home"></i><span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bell-ring"></i><span class="hide-menu">Leads</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.leads.add')}}">Add Leads</a></li>
                                <li><a href="{{route('admin.leads.pending')}}">Pending Leads</a></li>
                                <li><a href="{{route('admin.leads.marked')}}">Marked Leads</a></li>
                                <li><a href="#">Import Leads</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-small-cap">Settings</li>
                        <li> <a href="{{route('admin.setting.categories')}}"><i class="mdi mdi-apps"></i>Categories</a> </li>
                        <li> <a href="#"><i class="mdi mdi-account-circle"></i>Users</a> </li>
                    </ul>
                </nav>
    </div>
</aside>