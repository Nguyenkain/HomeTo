<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        @section('title')
            Administration
        @show
    </title>

    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="author" content="@yield('author')"/>
    <!-- Google will often use this as its description of your page/site. Make it good. -->
    <meta name="description" content="@yield('description')"/>

    <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
    <meta name="google-site-verification" content="">

    <!-- Dublin Core Metadata : http://dublincore.org/ -->
    <meta name="DC.title" content="Project Name">
    <meta name="DC.subject" content="@yield('description')">
    <meta name="DC.creator" content="@yield('author')">

    <!--  Mobile Viewport Fix -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- This is the traditional favicon.
     - size: 16x16 or 32x32
     - transparency is OK
     - see wikipedia for info on browser support: http://mky.be/favicon/ -->
    <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">

    <!-- iOS favicons. -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">

    <!-- CSS -->
    <!-- GLOBAL STYLES - Include these on every page. -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic'
          rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel="stylesheet" type="text/css">
    <link href="{{asset('assets/icons/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{asset('assets/css/plugins/messenger/messenger.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/messenger/messenger-theme-flat.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/morris/morris.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/datatables/datatables.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/dropzone/css/dropzone.css')}}" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/common.css')}}" rel="stylesheet">

    @yield('styles')

            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">
    <!-- begin TOP NAVIGATION -->
    <nav class="navbar-top" role="navigation">

        <!-- begin BRAND HEADING -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse"
                    data-target=".sidebar-collapse">
                <i class="fa fa-bars"></i> Menu
            </button>
            <div class="navbar-brand">
                <a href="{{ URL::to('admin') }}">
                    <img style="position: relative;  top: -25px;" src="{{asset('assets/site/img/logo.png')}}"
                         data-1x="{{asset('assets/site/img/logo.png')}}"
                         data-2x="{{asset('assets/site/img/logo.png')}}" class="hisrc img-responsive"
                         alt="">
                </a>
            </div>
        </div>
        <!-- end BRAND HEADING -->

    </nav>
    <!-- /.navbar-top -->
    <!-- end TOP NAVIGATION -->

    <!-- begin MAIN PAGE CONTENT -->
    <div id="page-wrapper" class="collapsed">

        <!-- Notifications -->
        @include('notifications')
                <!-- ./ notifications -->

        <div class="page-content">

            <!-- begin PAGE TITLE AREA -->
            <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h1>
                            @yield('title')
                        </h1>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- end PAGE TITLE AREA -->

            <!-- begin CONTENT -->
            <div class="row">
                @yield('content')
            </div>
            <!-- /end CONTENT -->

            <!-- Footer -->
            <footer class="clearfix">
                @yield('footer')
            </footer>
            <!-- ./ Footer -->

        </div>
    </div>
    <!-- /#page-wrapper -->
    <!-- end MAIN PAGE CONTENT -->
</div>

<!-- GLOBAL SCRIPTS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="{{asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/popupoverlay/jquery.popupoverlay.js')}}"></script>
<script src="{{asset('assets/js/plugins/popupoverlay/defaults.js')}}"></script>
<!-- Logout Notification Box -->
<div id="logout">
    <div class="logout-message">
        <img class="img-circle img-logout" src="{{asset('assets/img/profile-pic.jpg')}}" alt="">

        <h3>
            <i class="fa fa-sign-out text-green"></i> Ready to go?
        </h3>

        <p>Select "Logout" below if you are ready<br> to end your current session.</p>
        <ul class="list-inline">
            <li>
                <a href="{{URL::to('admin/logout')}}" class="btn btn-green">
                    <strong>Logout</strong>
                </a>
            </li>
            <li>
                <button class="logout_close btn btn-green">Cancel</button>
            </li>
        </ul>
    </div>
</div>
<!-- /#logout -->
<!-- Logout Notification jQuery -->
<script src="{{asset('assets/js/plugins/popupoverlay/logout.js')}}"></script>
<!-- HISRC Retina Images -->
<script src="{{asset('assets/js/plugins/hisrc/hisrc.js')}}"></script>

<!-- PAGE LEVEL PLUGIN SCRIPTS -->
<!-- HubSpot Messenger -->
<script src="{{asset('assets/js/plugins/messenger/messenger.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/messenger/messenger-theme-flat.js')}}"></script>
<!-- Date Range Picker -->
<script src="{{asset('assets/js/plugins/daterangepicker/moment.js')}}"></script>
<script src="{{asset('assets/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Morris Charts -->
<script src="{{asset('assets/js/plugins/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/morris/morris.js')}}"></script>
<!-- Flot Charts -->
<script src="{{asset('assets/js/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/js/plugins/flot/jquery.flot.resize.js')}}"></script>
<!-- Sparkline Charts -->
<script src="{{asset('assets/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Moment.js -->
<script src="{{asset('assets/js/plugins/moment/moment.min.js')}}"></script>
<!-- jQuery Vector Map -->
<script src="{{asset('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/js/demo/map-demo-data.js')}}"></script>
<!-- Easy Pie Chart -->
<script src="{{asset('assets/js/plugins/easypiechart/jquery.easypiechart.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/datatables-bs3.js')}}"></script>
<!-- Dropzone -->
<script src="{{asset('assets/js/plugins/dropzone/dropzone.js')}}"></script>
<!-- SummerNote -->
<script src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/plugins/ckeditor/config.js')}}"></script>
<script src="{{asset('assets/js/plugins/ckeditor/styles.js')}}"></script>
<script src="{{asset('assets/js/plugins/ckeditor/lang/ja.js')}}"></script>

<script src="{{asset('assets/js/flex.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

<script>
    SITE_ROOT = '{{URL::to('/')}}';
</script>

@yield('scripts')

</body>

</html>
