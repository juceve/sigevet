<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tom&Jerry VET</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web/img/sgvt_logo.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href=" {{ asset('web/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/magnific-popup.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/themify-icons.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/nice-select.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/flaticon.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/gijgo.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/animate.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/slicknav.css')}}">
    <link rel="stylesheet" href=" {{ asset('web/css/style.css')}}">
    <!-- <link rel="stylesheet" href=" {{ asset('web/css/responsive.css')}}"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <header>
        <div class="header-area ">
            <div class="header-top_area" id="init">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="https://wa.link/qjt5i4" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fab fa-whatsapp"></i> +591 72635050</a></li>
                                    <li><span class="text-sm text-white  underline"><strong><i class="fas fa-clinic-medical"></i> Atención:</strong> Lun - Sab 09:00 - 19:00</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 ">
                            
                            @if (Route::has('login'))
                            <div class="social_media_links">
                                @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fas fa-laptop-medical"></i> SIGEVET</a>
                        <a class="text-sm text-gray-700 dark:text-gray-500 underline" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fas fa-sign-in-alt"></i> Ingresar</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><i class="fas fa-user-plus"></i> Registrar</a>
                        @endif --}}
                    @endauth
                            </div>
                
            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('web/img/SIGEVET21.png') }}" alt="" width="90%">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="#init">Inicio</a></li>
                                        <li><a href="#services">Servicios</a></li>                                        
                                        <li><a href="#contact">Contactos</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider_text">
                            <h3>Veterinaria</h3>
                            <h3><span>Tom&Jerry</span></h3>
                            <p>Servicios generales para mascotas... <br> Venta de alimentos y productos de aseo para animales</p>
                            <a href="https://wa.link/qjt5i4" class="boxed-btn4"><i class="fab fa-whatsapp"></i> Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dog_thumb d-none d-lg-block">
                <img src="{{ asset('web/img/tyj.png')}}" alt="" width="800px">
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <div class="service_area" id="services">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Servicios para todas sus mascotas</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="{{ asset('web/img/service/service_icon_1.png')}} " alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Productos</h3>
                            <p>Contamos con alimento para perros y gatos, juguetes, accesorios de todo tipo.</p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="{{ asset('web/img/service/service_icon_2.png')}} " alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Atención Médica</h3>
                            <p>Medicina preventiva y curativa, aplicación de vacunas para perros, gatos.</p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="{{ asset('web/img/service/service_icon_3.png')}} " alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Belleza</h3>
                            <p>Productos para estética e higiene de mascotas como shampoos, acondicionadores, peines y lociones.</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- pet_care_area_start  -->
    <div class="pet_care_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="pet_thumb">
                        <img src="{{ asset('web/img/about/pet_care.png')}} " alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="pet_info">
                        <div class="section_title">
                            <h3><span>Cuidamos a tus mascotas </span> <br>
                                como tu lo haces.</h3>
                            <p>Conocemos cuan importantes es para tí el cuidado <br> de tus animales, por eso nos preocupa su salud <br> tanto como a tí<br>
                                </p>
                            {{-- <a href="about.html" class="boxed-btn3">About Us</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact"></div>
    <div class="contact_anipat anipat_bg_1" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact_text text-center">
                        <div class="section_title text-center">
                            <h3>Porqué elegirnos?</h3>
                            <p>Veterinaria TOM & JERRY te brinda la seguridad y confianza de que tus mascotas estarán en las mejores manos gracias a que nuestras instalaciones disponen de espacios abiertos, separados solo por mamparas para que puedas visualizar el proceso de la atención que tu engreído recibirá. <br>Estamos capacitados para atender toda clase escenarios, por lo que siempre existirá una comunicación fluida.</p>
                        </div>
                        <div class="contact_btn d-flex align-items-center justify-content-center">
                            <a href="contact.html" class="boxed-btn4"><i class="fab fa-whatsapp"></i> Contáctanos</a>
                            <p>o Llamar <a href="tel:72635050"><i class="fas fa-phone-square-alt"></i> 72635050</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact Us
                            </h3>
                            <ul class="address_line">
                                <li>+555 0000 565</li>
                                <li><a href="#">Demomail@gmail.Com</a></li>
                                <li>700, Green Lane, New York, USA</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Our Servces
                            </h3>
                            <ul class="links">
                                <li><a href="#">Pet Insurance</a></li>
                                <li><a href="#">Pet surgeries </a></li>
                                <li><a href="#">Pet Adoption</a></li>
                                <li><a href="#">Dog Insurance</a></li>
                                <li><a href="#">Dog Insurance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Quick Link
                            </h3>
                            <ul class="links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Login info</a></li>
                                <li><a href="#">Knowledge Base</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{ asset('web/img/logo.png')}}" alt="">
                                </a>
                            </div>
                            <p class="address_text">239 E 5th St, New York 
                                NY 10003, USA
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="bordered_1px"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  --> --}}


    <!-- JS here -->
    <script src="{{ asset('web/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('web/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('web/js/popper.min.js')}}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('web/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('web/js/ajax-form.js')}}"></script>
    <script src="{{ asset('web/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('web/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('web/js/scrollIt.js')}}"></script>
    <script src="{{ asset('web/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('web/js/wow.min.js')}}"></script>
    <script src="{{ asset('web/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('web/js/plugins.js')}}"></script>
    <script src="{{ asset('web/js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{ asset('web/js/contact.js')}}"></script>
    <script src="{{ asset('web/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('web/js/jquery.form.js')}}"></script>
    <script src="{{ asset('web/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('web/js/mail-script.js')}}"></script>

    <script src="{{ asset('web/js/main.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>