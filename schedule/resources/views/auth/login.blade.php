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
        <!-- Bootstrap core CSS     -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <!--  Paper Dashboard core CSS{{asset('')}}    -->
        <link href="{{asset('assets/css/paper-dashboard.css')}}" rel="stylesheet"/>
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
        <!--  Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            
            .icon-size {
                font-size: 20px;
                margin-left: 8px;
            }
            .a-center {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Paper Dashboard PRO</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{route('register')}}">
                                Register
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.dashboard')}}">
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" data-color="" data-image="../../assets/img/background/background-2.jpg">
                <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                               @if(session()->has('msg'))
                               <div class="alert alert-danger" role="alert">
                                <strong>{{session()->get('msg')}}</strong>
                            </div>
                            @endif
                            <form action="{{route('process.login')}}" method="post">
                                @csrf
                                <div class="card" data-background="color" data-color="blue">
                                    <div class="card-header">
                                        <h3 class="card-title">Login</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" name="email" placeholder="Enter email" class="form-control input-no-border">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password" class="form-control input-no-border">
                                            @error('password')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-danger btn-block">Đăng nhập</button>
                                  {{--   <div class="forgot">
                                        <a href="#pablo">Forgot your password?</a>
                                    </div> --}}
                                    <div class="forgot" style="margin-top: 3px;">
                                        <a href="{{ route('auth.redirect', 'google') }}" class="a-center btn btn-danger btn-block">Google
                                            <i class="icon-size fa-brands fa-google"></i>
                                        </a>
                                    </div>
                                    <div class="forgot" style="margin-top: 3px;">
                                        <a href="{{ route('auth.redirect', 'github') }}" class="a-center btn btn-danger btn-block">Github
                                            <i class="icon-size fa-brands fa-github"></i>
                                        </a>
                                    </div><div class="forgot" style="margin-top: 3px;">
                                        <a href="{{ route('auth.redirect', 'instagram') }}" class="a-center btn btn-danger btn-block">Instagram 
                                            <i class="icon-size fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer footer-transparent">
            <div class="container">
                <div class="copyright">
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
</script>

</html>

