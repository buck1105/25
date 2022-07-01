<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Paper Dashboard PRO by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
{{--    <   <!-- Bootstrap core CSS     -->--}}
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<!--  Paper Dashboard core CSS{{asset('')}}    -->
    <link href="{{asset('assets/css/paper-dashboard.css')}}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-black" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar "></span>
                <span class="icon-bar "></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="login.html" class="btn">
                        Looking to login?
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper wrapper-full-page">
    <div class="register-page">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            <h2>Paper Dashboard PRO</h2>
                            <h4>Register for free and experience the dashboard today.</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon icon-danger">
                                    <i class="ti ti-user"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Free Account</h5>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <div class="icon icon-warning">
                                    <i class="ti-bar-chart-alt"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Awesome Performances</h5>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <div class="icon icon-info">
                                    <i class="ti-headphone"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Global Support</h5>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form action="{{route('process.register')}}" method="post" >
                            @csrf
                            <div class="card card-plain">
                                <div class="content">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" class="form-control">
                                        @error('name')
                                        {{$message}}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                        @error('password')
                                        {{$message}}
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" placeholder="Password Confirmation" class="form-control">
                                        @error('password_confirmation')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-danger btn-wd">Create Free Account</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer footer-transparent">
            <div class="container">
                <div class="copyright text-center">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>

<script src="{{asset('assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/es6-promise-auto.min.js')}}"></script>
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-selectpicker.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-switch-tags.js')}}"></script>
<script src="{{asset('assets/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('assets/js/chartist.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>
<script src="{{asset('assets/js/sweetalert2.js')}}"></script>
<script src="{{asset('assets/js/jquery-jvectormap.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="{{asset('assets/js/jquery.bootstrap.wizard.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-table.js')}}"></script>
<script src="{{asset('assets/js/jquery.datatables.js')}}"></script>
<script src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/js/paper-dashboard.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>
<script type="text/javascript">
    $().ready(function(){
        demo.checkFullPageBackgroundImage();

        setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script></script>

</html>
