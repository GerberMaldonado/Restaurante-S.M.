<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Restaurante</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
</head>

<body class="product-page">
    <nav class="navbar navbar-transparent navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="75">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Restaurante</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @auth
                        <li>
                            <a href="{{ url('/principal') }}" class="btn btn-rose btn-round">
                                <i class="material-icons">home</i>Principal
                            </a>
                        </li>
                    @else
                        <li class="button-container">
                            <a class="btn btn-rose btn-round" href="{{ route('login') }}">
                                <i class="material-icons">person_pin</i> Iniciar Sesión
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/bg_header.jpg'); background-position: center;">
    </div>

    <div class="section section-gray">
        <div class="container">
            <div class="main main-raised main-product">
                <div class="row">
                    <div class="col-md-6 col-sm-6">

                       <div class="tab-content">
                            <div class="tab-pane" id="product-page1">
                                 <img src="{{ asset('img/producto1.jpg') }}"/>
                              </div>
                              <div class="tab-pane active" id="product-page2">
                                  <img src="{{ asset('img/producto2.jpg') }}"/>
                             </div>
                              <div class="tab-pane" id="product-page3">
                                  <img src="{{ asset('img/producto3.jpg') }}"/>
                              </div>
                              <div class="tab-pane" id="product-page4">
                                  <img src="{{ asset('img/producto4.jpg') }}"/>
                              </div>
                        </div>
                        <ul class="nav flexi-nav" role="tablist" id="flexProd">
                            <li>
                                <a href="#product-page1" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="{{ asset('img/producto1.jpg') }}"/>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#product-page2" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="{{ asset('img/producto2.jpg') }}"/>
                                </a>
                            </li>
                            <li>
                                <a href="#product-page3" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="{{ asset('img/producto3.jpg') }}"/>
                                </a>
                            </li>
                            <li>
                                <a href="#product-page4" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="{{ asset('img/producto4.jpg') }}"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h2 class="title" id="nombreProd"> Restaurante UMG </h2>
                        <div class="panel-group" id="accordion">
                          <div class="panel panel-border panel-default">
                                <div class="panel-heading" id="headerTitulo">
                                    <h2 class="panel-title">
                                    Descripción
                                    </h2>
                                </div>
                                <div class="panel-body">
                                    <p id="descripcionProd">Contamos con una gran variedad de platillos para todos los gustos más exigentes.</p>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="features text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">local_shipping</i>
                            </div>
                            <h4 class="info-title">Entrega Rápida</h4>
                            <p style="color: #292929;">Ofrecemos entregas a domicilio hasta la puerta de la casa.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">check_circle</i>
                            </div>
                            <h4 class="info-title">Calidad</h4>
                            <p style="color: #292929;">Con nuestro personal capacitado y profesional, entregamos platillos de gran calidad.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-warning">
                                <i class="material-icons">fastfood</i>
                            </div>
                            <h4 class="info-title">Menú</h4>
                            <p style="color: #292929;">Gran cantidad de platillos de todo tipo para todo tipo de gustos, platos con carne y veganos.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<footer class="footer footer-black footer-big">
    <div class="container">

        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <h5>Acerca de nosotros</h5>
                    <p>Somos una empresa en el arte culinario, con gran prestigio a nivel nacional. </p>
                </div>
            </div>
        </div>


        <hr />

        <ul class="pull-left">
            <li>
                <a href="https://www.umg.edu.gt/" target="_blank">
                   UMG
                </a>
            </li>
            
        </ul>

        <div class="copyright pull-right">
            Copyright &copy; <script>document.write(new Date().getFullYear())</script> UMG Todos los derechos reservados.
        </div>
    </div>
</footer>

</body>

    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flexisel.js') }}"></script>
    <script src="{{ asset('js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>

    <script type="text/javascript">

    $(document).ready(function() {
        $("#flexProd").flexisel({
            visibleItems: 4,
            itemsToScroll: 1,
            animationSpeed: 400,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 3
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });


    });
   </script>


</html>