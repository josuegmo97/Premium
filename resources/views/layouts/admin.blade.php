<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title' , 'Premium')</title>

    <link href="{{ asset('personal/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('personal/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('personal/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('personal/vendor/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('personal/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Centro Empresarial Premium</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Josue Marin
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        {{-- <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li> --}}
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/usuario/nuevo')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Listado de usuarios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            {{-- fa fa-users fa-fw          y           fa fa-bar-chart-o fa-fw--}}
                            <a href="#"><i class="fa fa-users fa-fw"></i> Proveedores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/proveedores/nuevo')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/proveedores')!!}"><i class='fa fa-list-ol fa-fw'></i> Listado de proovedores</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Cuentas por pagar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Listado de facturas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-plus-circle fa-fw"></i> Extras<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::to('/extra/servicio') }}"><i class='fa fa-plus fa-fw'></i> Agregar Tipo de Servicio</a>
                                </li>
                                {{-- <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Listado de facturas</a>
                                </li> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mensaje de inicio.</h1>
                </div>
            </div> --}}
            @yield('content')
        </div>

    <script src="{{ asset('personal/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('personal/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('personal/vendor/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('personal/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('personal/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('personal/data/morris-data.js') }}"></script>
    <script src="{{ asset('personal/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
