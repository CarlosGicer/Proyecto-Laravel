<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juegos del Torneo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<!--<h4 class="title"><a href="">@yield('titulo')</a></h4>-->

<body>

    <!--NAV----->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top fs-4">
        <div class="container-fluid  ">
            <a class="navbar-brand fs-2 ms-5 " href="/"> <img src="https://www.linkpicture.com/q/logo_164.png" alt="" width="70px" height="70px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-center ms-5  " id="navbarNavAltMarkup">
                <div class="navbar-nav pe-3 ms-5">
                    <a class="nav-link  pe-3" href="/equipos/admin/admin">Equipos</a>
                    <a class="nav-link  pe-3" href="/torneos/admin/admin">Torneos</a>
                    <a class="nav-link  pe-3" href="/juegos/admin/admin">Juegos</a>
                    @auth
                        <li><a class="nav-link scrollto" href="/profile">Perfil</a></li>
                    @else
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                </div>
                <div>


                </div>
            </div>
        </div>
    </nav>
    <!--FIN NAV--->

    <div class="container p-3">

        @yield('main')

    </div>

    <!--PIE---->
    <footer class="w-100 py-4 flex-shrink-0  bg-success text-light"  >
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">Arena Gamer</h5>
                    <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt.</p>
                    <p class="small  mb-0">© Copyrights. All rights reserved. <a class="text-primary"
                            href="#">Bootstrapious.com</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Quick links</h5>
                    <ul class="list-unstyled ">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Newsletter</h5>
                    <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt.</p>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white">Redes</h5>
                    <p class="small">instagram.</p>
                    <p class="small  mb-0">Algo</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
