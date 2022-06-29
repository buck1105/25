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
                <a href="#dashboardOverview" aria-expanded="true">
                    <i class="ti-panel"></i>
                    <p>Dashboard
                    </p>
                </a>
            </li>
            <li>
                <a href="{{route('admin.doctor')}}">
                    <i class="ti-package"></i>
                    <p>Doctor
                    </p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="ti-calendar"></i>
                    <p>Calendar</p>
                </a>
            </li>
            <li>
                <a  href="#mapsExamples">
                    <i class="ti-map"></i>
                    <p>
                        Maps
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini">GM</span>
                                <span class="sidebar-normal">Google Maps</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">
                    <i class="ti-bar-chart-alt"></i>
                    <p>Charts</p>
                </a>
            </li>

        </ul>
    </div>
</div>
