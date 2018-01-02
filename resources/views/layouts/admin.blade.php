<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>
        @yield('title')
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('css/general.css')}}">
    <!-- Bootstrap 3.3.6 -->
    <link href="{{asset('AdminLTE/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{asset('AdminLTE/dist/css/AdminLTE.css')}}" rel="stylesheet">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
    <link href="{{asset('AdminLTE/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <link href="{{ asset ('AdminLTE/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('AdminLTE/plugins/datepicker/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('AdminLTE/plugins/datepicker/bootstrap-datepicker.standalone.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset ('chosen/chosen.css') }}">
    <link href="{{ asset ('css/addrow.css') }}" rel="stylesheet" type="text/css">



    <!-- icheck
<link href="AdminLTE/plugins/iCheck/square/red.css" rel="stylesheet">
<script src="AdminLTE/plugins/iCheck/icheck.js"></script>

-->
@yield('top')
</head>
<body class="hold-transition skin-red sidebar-mini">
<!-- Site wrapper -->

<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a class="logo" href="/">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                        <b>
                            A
                        </b>
                        FF
                    </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                        <b>
                            Francisco Milano
                        </b>
                    </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">


                            </img>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img alt="User Image" class="img-circle" src="">
                                <p>

                                </p>
                                </img>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                              
                                </div>
                                <div class="pull-right">
               
                                </div>
                            </li>
                        </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a data-toggle="control-sidebar" href="#">
                                <i class="fa fa-gears">
                                </i>
                            </a>
                        </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              
                           </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">
                    MENU PRINCIPAL
                </li>
               
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users">
                        </i>
                        <span>
                                Ejercicios
                                </span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right">
                                    </i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{ url('tablon/create') }}">
                                <i class="fa fa-circle-o">
                                </i>
                                Tablones
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('caracteres/form') }}">
                                <i class="fa fa-circle-o">
                                </i>
                                Cadena de caracteres
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('resumen') }}">
                                <i class="fa fa-circle-o">
                                </i>
                                Resumen
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('diagramas/secuencia') }}">
                                <i class="fa fa-circle-o">
                                </i>
                                Diagrama de secuencia
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('diagramas/clase') }}">
                                <i class="fa fa-circle-o">
                                </i>
                                Diagrama de clase
                            </a>
                        </li>
                    </ul>
                </li>
                           </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            
        </section>
        <!-- Main content -->
        <section class="content">
        <div class="row no-print">
           
        </div>
            @yield('contenido')
            <div class="row text-center no-print">
            <h1>
               
            </h1>
            </div>    
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer no-print">
        <div class="pull-right hidden-xs">
            <b>
                
            </b>
        </div>
        <strong>
            Realizado por Francisco Milano
        </strong>
        Enero 2018
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark no-print">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li>
                <a data-toggle="tab" href="#control-sidebar-home-tab">
                    <i class="fa fa-home">
                    </i>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#control-sidebar-settings-tab">
                    <i class="fa fa-gears">
                    </i>
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">
                    Recent Activity
                </h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red">
                            </i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Langdon's Birthday
                                </h4>
                                <p>
                                    Will be 23 on April 24th
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow">
                            </i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Frodo Updated His Profile
                                </h4>
                                <p>
                                    New phone +1(800)555-1234
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue">
                            </i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Nora Joined Mailing List
                                </h4>
                                <p>
                                    nora@example.com
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green">
                            </i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">
                                    Cron Job 254 Executed
                                </h4>
                                <p>
                                    Execution time 5 seconds
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->
                <h3 class="control-sidebar-heading">
                    Tasks Progress
                </h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">
                                            70%
                                        </span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">
                                            95%
                                        </span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">
                                            50%
                                        </span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">
                                            68%
                                        </span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%">
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->
            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">
                Stats Tab Content
            </div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">
                        General Settings
                    </h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input checked="" class="pull-right" type="checkbox">
                            </input>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input checked="" class="pull-right" type="checkbox">
                            </input>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input checked="" class="pull-right" type="checkbox">
                            </input>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->
                    <h3 class="control-sidebar-heading">
                        Chat Settings
                    </h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input checked="" class="pull-right" type="checkbox">
                            </input>
                        </label>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input class="pull-right" type="checkbox">
                            </input>
                        </label>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a class="text-red pull-right" href="javascript:void(0)">
                                <i class="fa fa-trash-o">
                                </i>
                            </a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
 immediately after the control sidebar -->
    <div class="control-sidebar-bg no-print">
    </div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="{{asset('AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('chosen/chosen.jquery.js') }} "></script>
<script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datepicker/locales/bootstrap-datepicker.es.js')}}"></script>
<script type="text/javascript" src="{{ asset('AdminLTE/plugins/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script type="text/javascript" src="{{ asset('AdminLTE/plugins/input-mask/jquery.inputmask.phone.extensions.js') }}"></script>


@yield('js')
</body>
</html>