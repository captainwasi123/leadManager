   <aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-devider"></li>
                <li> <a href="{{URL::to('/')}}">Dashboard</a> </li>
                <li> <a href="{{route('admin.leads')}}">Leads</a> </li>
                <li> <a href="#">Marked Leads</a> </li>
                <li> <a href="#">Import / Export Leads</a> </li>
                <li> <a href="#">Sales Report</a> </li>
                <li> <a href="{{route('admin.setting.categories')}}">Categories</a> </li>
                <li> <a href="#">Users</a> </li>
            </ul>
        </nav>
    </div>
</aside>