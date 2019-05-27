<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!--  Iconos y Fuentes     -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" />

    <!--  CSS Files -->
    <link href="{{asset('css/material-dashboard.min.css?v=2.0.2')}}" rel="stylesheet" />
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    @yield('css')
    <!-- Titulo -->
    <title>@yield('title', 'Restaurante')</title>
</head>
<body>
    {{-- Inicio de Contenido Completo --}}
    <div class="wrapper ">
        {{-- Inicio SideBar --}}
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('img/bg_sidebar-1.jpg')}}">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    GT
                </a>
                <a href="#" class="simple-text logo-normal">
                    UMG
                </a>
            </div>
            <div class="sidebar-wrapper">
                {{-- Apartados - Botones de Módulos --}}
                <ul class="nav">
                        {{-- Botones Módulo Administración --}}
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#modAdmin">
                                <i class="material-icons">supervisor_account</i>
                                <p> Administración
                                   <b class="caret"></b>
                                </p>
                            </a>

                            <div class="collapse" id="modAdmin">
                                <ul class="nav">
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('empleados.index') }}">
                                              <span class="sidebar-mini"> EM </span>
                                              <span class="sidebar-normal"> Empleados </span>
                                            </a>
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('pedidos.index') }}">
                                              <span class="sidebar-mini"> PD </span>
                                              <span class="sidebar-normal"> Pedidos </span>
                                            </a>
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('reservaciones.index') }}">
                                              <span class="sidebar-mini"> RV </span>
                                              <span class="sidebar-normal"> Reservaciones </span>
                                            </a>
                                        </li>
                                </ul>
                            </div>
                        </li>
                        {{-- Fin Botones Administración --}}


                    {{-- Botón para cerrar sesión --}}
                    <li class="nav-item" style="margin-top:40px;">
                        <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                                        document.getElementById('formCerrar').submit();">

                            <i class="material-icons">person</i>
                            <p>Cerrar Sesión</p>
                        </a>
                        <form id="formCerrar" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        {{-- Fin Sidebar --}}

        {{-- Contenedor Principal --}}
        <div class="main-panel">
            {{-- Inicio NavBar --}}
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navPrin">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="dropUserIcon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{-- {{auth()->user()->username}} --}}
                                    <i class="material-icons">person</i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropUserIcon">
                                    <form method="POST" action="{{route('logout')}}">
                                        {{ csrf_field() }}
                                        <button class="dropdown-item" style="width:100%;">Cerrar Sesión</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- Fin NavBar --}}

            {{-- Contenido de Módulos --}}
            <div class="content">
                <div class="container-fluid">
                    {{-- Contenido de acuerdo al apartado seleccionado --}}
                    @yield('content')
                </div>
            </div>
            {{-- Fin Contentido de Módulos --}}

            {{-- Footer --}}
            <footer class="footer">
                <div class="container-fluid">
                  <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.umg.edu.gt/" target="_blank">
                            UMG
                            </a>
                        </li>
                    </ul>
                  </nav>
                  <div class="copyright float-right">
                    &copy;
                    <script>
                      document.write(new Date().getFullYear())
                    </script>, UMG - Ingeniería.
                  </div>
                </div>
            </footer>
        </div>
        {{-- Fin Contenedor Principal --}}
    </div>
    {{-- Fin Contenido Completo --}}
</body>
    <!--    Scripts JS   -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--    Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
    <script src="{{asset('js/moment.min.js')}}"></script>
    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
    <script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>
    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
    <script src="{{asset('js/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>

    <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
    <script src="{{asset('js/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
    <script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
    <!--    Chartist JS -->
    <script src="{{asset('js/plugins/chartist.min.js')}}"></script>
    <!--    Plugin Notificaciones -->
    <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
    <!--    Centro de Control para Material Kit: ripples, efectos parallax,  -->
    <script src="{{asset('js/material-dashboard.min.js?v=2.0.2')}}" type="text/javascript"></script>
    <script src="{{asset('js/layout/app-plantilla.js')}}"></script>
    <!--    Script para datatable   -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script>
        $('#errorAlert').hide(4000).slideUp(400);
    </script>
    @yield('js')
</html>