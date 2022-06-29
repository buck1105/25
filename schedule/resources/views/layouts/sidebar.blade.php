<div class="sidebar" data-background-color="brown" data-active-color="danger">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            CA
        </a>
        <a href="#" class="simple-text logo-normal">
            Customer Care
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="info">
                <div class="photo">
                    <img src="{{asset('assets/img/faces/face-2.jpg')}}" />
                </div>
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        <span>
								Admin
		                        <b class="caret"></b>
							</span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="sidebar-mini">Mp</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="sidebar-mini">Ep</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="sidebar-mini">S</span>
                                <span class="sidebar-normal">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{route('admin.dashboard')}}" aria-expanded="true">
                    <i class="ti-panel"></i>
                    <p>Dashboard
                    </p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.specialist.index')}}" aria-expanded="true">
                    <i class="ti-panel"></i>
                    <p>Specialist
                    </p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.doctor.index')}}">
                    <i class="ti-package"></i>
                    <p>Doctor
                    </p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.calender.index')}}">
                    <i class="ti-calendar"></i>
                    <p>Calendar</p>
                </a>
            </li>
            <li>
                <a  href="{{route('admin.user.index')}}">
                    <i class="ti-map"></i>
                    <p>
                       Customer
                    </p>
                </a>
            </li>
        </ul>
    </div>
</div>
