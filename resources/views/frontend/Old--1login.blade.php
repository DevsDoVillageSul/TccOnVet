<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'OnVet') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Titulo -->
    <meta name="title" content="Onvet">
    <meta name="description" content="Sytem 2.1">

    <!-- Boostrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--====== Icone ======-->
    <link rel="shortcut icon" href="images/favicon.svg" type="image/svg" />

    <!-- Swiper's CSS -->
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/lineicons.css" />
    <link rel="stylesheet" href="css/ud-styles.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>

    <!-- ====== Header Inicio ====== -->
    <header class="ud-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img src="images\logo\logo.svg" alt="Logo" />
                        </a>
                        <button class="navbar-toggler">
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                        </button>

                        <div class="navbar-collapse">
                            <ul id="nav" class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="/">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#about">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#team">Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="ud-menu-scroll" href="#contact">Contato</a>
                                </li>
                            </ul>
                            </li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <a href="/loginNovo" class="ud-main-btn ud-login-btn">
                                Ir para aplicação
                            </a>
                            <a href="/cadastre-se" class="ud-main-btn ud-white-btn">
                                Cadastrar-se
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Header Fim ====== -->

    <!-- ====== Login Start ====== -->
       <section class="vh-100">
        <div class="container-fluid h-custom loginN">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <div id="esp">
                                <h1>
                                    Bem vindo <br>
                                    <span id="azul">On</span>Vet
                                </h1>
                            </div>

                        </div>


                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Usuario</label>
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Usuario" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Senha</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Senha" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Lembrar-me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Esqueceu a senha?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Entrar</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger">Cadastrar-se</a></p>
                        </div>
                        <div class="final">

                        </div>

                    </form>
                </div>
                <div class="col-md-9 col-lg-6 col-xl-4">
                    <img src="images\fundo\fundo.svg" class="img-fluid" alt="Logo" style="width: 100%">
                </div>
            </div>
        </div>
    </section>

    <!-- ====== Login End ====== -->

    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">

        <div class="ud-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="ud-widget">
                            <a href="index.html" class="ud-footer-logo">
                                <img src="images/logo/logo.svg" alt="logo" />
                            </a>
                            <p class="ud-widget-desc">
                                Criamos experiências digitais para marcar empresas usando tecnologia.
                            </p>
                            <ul class="ud-widget-socials">
                                <li>
                                    <a href="#">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni lni-instagram-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lni lni-linkedin-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6" style="align-items: flex-end">
                        <div class="ud-widget">
                            <ul class="ud-widget-links">
                                <li>
                                    <a href="#home">Inicio</a>
                                </li>
                                <li>
                                    <a href="#about">Sobre</a>
                                </li>
                                <li>
                                    <a href="#team">Time</a>
                                </li>
                                <li>
                                    <a href="#contact">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="ud-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="ud-footer-bottom-left">
                            <li>
                                <a href="javascript:void(0)">Política de Privacidade</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Termos de serviço</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p class="ud-footer-bottom-right">
                            ©OnVet 2022. Todos os Direitos Reservados.
                            <a href="#" rel="nofollow">Projeto-Vet</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
        <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
