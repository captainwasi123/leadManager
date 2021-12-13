<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{URL::to('/admin')}}">
                <!-- Logo icon -->
                <b>
                    <img src="{{URL::to('/public/assets/')}}/images/logo-icon.png" alt="homepage" class="dark-logo">
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span style="">
                     <img src="{{URL::to('/public/assets/')}}/images/logo-text.png" alt="homepage" class="dark-logo">
                </span> 
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>                        
            </ul>
            <ul class="navbar-nav my-lg-0">
                 <!-- <li class="nav-item hidden-sm-down search-box">  
                    <form class="search-boxs">
                        <input type="text" class="form-control" placeholder="Search">
                    </form>
                </li> -->
                 <li class="nav-item dropdown">
                    <!-- <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a> -->
                    <div class="dropdown-menu mailbox animated slideInUp">
                        <ul>
                            <li>
                                <div class="drop-title">Notifications</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <!-- <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a> -->
                    <div class="dropdown-menu mailbox animated slideInUp" aria-labelledby="2">
                        <ul>
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="{{URL::to('/public/assets/')}}/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
<<<<<<< HEAD
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::to('/public/assets/')}}/images/user.jpg" alt="user" class="profile-pic" /></a>
=======
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::to('/public/assets/')}}/images/users/blank-profile-pic.png" alt="user" class="profile-pic" /></a>
>>>>>>> ca55d1c71ac5f4d685f3246a3bbdf7db09b02cd0
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
<<<<<<< HEAD
                                    <div class="u-img"><img src="{{URL::to('/public/assets/')}}/images/user.jpg" alt="user"></div>
                                    <div class="u-text">
                                        <h4>{{Auth::user()->name}}</h4>
                                        <p class="text-muted">{{Auth::user()->email}}</p><a href="{{URL::to('/logout')}}" class="btn btn-rounded btn-danger btn-sm">Logout</a></div>
                                </div>
                            </li>
=======
                                    <div class="u-img"><img src="{{URL::to('/public/assets/')}}/images/users/blank-profile-pic.png" alt="user"></div>
                                    <div class="u-text">
                                        <h4>{{Auth::user()->username}}</h4>
                                        <p class="text-muted">{{Auth::user()->email}}</p>
                                        <a href="{{route('logout')}}" class="btn btn-rounded btn-danger btn-sm"><i class="fa fa-power-off"></i> Logout</a>
                                    <!-- <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li> -->
                                </div>
                                </div>
                            </li>
                           <!--  <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li> -->
>>>>>>> ca55d1c71ac5f4d685f3246a3bbdf7db09b02cd0
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>