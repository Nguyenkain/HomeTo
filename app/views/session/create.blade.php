<link href="{{asset('assets/css/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic'
      rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
      rel="stylesheet" type="text/css">
<link href="{{asset('assets/icons/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- THEME STYLES - Include these on every page. -->
<link rel="stylesheet" href="{{asset('assets/css/colorbox.css')}}">
<link href="{{asset('assets/css/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
<style>
    .error {
        color: red;
        margin-top: 5px;
    }
</style>
<body class="login">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-banner text-center">
                <h1><i class="fa fa-gears"></i> Đăng Nhập</h1>
            </div>
            <div class="portlet portlet-green">
                <div class="portlet-heading login-heading">
                    <div class="portlet-title">
                        <h4><strong>Đăng Nhập</strong>
                        </h4>
                    </div>
                    <div class="portlet-widgets">
                        <a href="{{URL::route('account.create')}}">
                            <button class="btn btn-white btn-xs"><i class="fa fa-plus-circle"></i> Đăng ký</button>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="portlet-body">
                    @if(Session::has('error'))
                        <div class="error">{{Session::get('error')}}</div>
                    @endif
                    <form method="post" action="{{URL::route('session.store')}}" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" type="text"
                                       autofocus="" value="{{Input::old('email')}}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mật Khẩu" name="password" type="password"
                                       value="">
                            </div>
                            <br>
                            <input type="submit" class="btn btn-lg btn-green btn-block" value="Đăng Nhập">
                            <hr>
                            <a href="{{URL::route('login-fb')}}" class="btn btn-block btn-social btn-facebook">
                                <i class="fa fa-facebook"></i> Đăng nhập bằng Facebook
                            </a>
                            <a href="{{URL::route('login-gg')}}" class="btn btn-block btn-social btn-google-plus">
                                <i class="fa fa-google-plus"></i> Đăng nhập bằng Google
                            </a>
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        </fieldset>
                        <br>

                        <p class="small">

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
