<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="rounded d-flex" style="padding: 50px">
            <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <div style="font-family: 'Poppins', sans-serif; text-align: left">
                        <h3 style="color: black">Bem vindo ao</h3>
                        <h1><span style="color: #1B5BFF">On</span>Vet</h1>

                    </div>
                </div>
                <form action="">
                    <div class="">
                        <div class="input-group mb-3 w-100">
                            <input type="text" class="form-control" placeholder="usuario">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="senha">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lembrar-me
                            </label>
                        </div>
                        <button class="btn btn-primary text-center mt-2 w-100" type="submit">
                            Login
                        </button>
                        <br>
                        <div style="text-align: left; color: #1B5BFF">
                            <p>esqueceu sua senha?</p>
                        </div>
                    </div>
                </form>
            </div>
            <div id="fundo">
                <img id="img" src="images\fundo\fundo.svg" alt="fundo">
            </div>
        </div>
    </div>
</body>

</html>
