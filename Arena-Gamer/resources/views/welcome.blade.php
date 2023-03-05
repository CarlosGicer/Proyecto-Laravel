<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arena Gamer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand|Pacifico|Shadows+Into+Light" rel="stylesheet">
</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top fs-4">
    <div class="container-fluid  ">
        <a class="navbar-brand fs-2 ms-5 " href="#"> <img src="https://www.linkpicture.com/q/logo_164.png" alt="" width="70px" height="70px"></a>
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-center ms-5  " id="navbarNavAltMarkup">
            <div class="navbar-nav pe-3 ms-5">
                <a class="nav-link  pe-3" href="/equipos">Equipos</a>
                <a class="nav-link  pe-3" href="/torneos">Torneos</a>
                <a class="nav-link  pe-3" href="/juegos">Juegos</a>
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
<header id="header">
    <h1 id="title">Arena Gamer</h1>
    <h4 id="subtitle">GalaxyOfGames | GameOn</h4>
    <img src="https://mbtskoudsalg.com/images/youtube-gaming-icon-png-1.png" id="header-img">
    <button class="button border" type="button" data-hover="COMING SOON"><span>Launch</span></button>
</header>

<body>

    <section id="updates" class="p-3" >

        <article class="news">
            <iframe id="video" src="https://www.youtube.com/embed/UK1Chilp7E0" frameBorder="0">Browser not
                compatible</iframe>

            <section class="screenshot-section">
                <h2 class="news-item1">POKKEN TOURNAMENT DX</h2>
                <div class="screenshots-gallary">
                    <img src="https://www.gamerfocus.co/wp-content/uploads/2020/07/pokken.jpg" class="screenshots">
                    <img src="https://i.ytimg.com/vi/BkOpdYBEaP8/maxresdefault.jpg" class="screenshots">
                    <img src="https://i0.wp.com/sourcegaming.info/wp-content/uploads/2017/09/pokken-tournament-dx-new-3-vs-3-battles.png.17f9663050c458ffe36af5106cdc0a3e.png?resize=628%2C353&ssl=1" class="screenshots">
                    <img src="https://s2.glbimg.com/316bKu827MAyVX2fZIXjwUfc1Vg=/0x0:1280x720/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2017/B/l/p8wHSURua3wug9IpbOhw/2017100214512200-5a6f3157c944341cde279fd85822a3ad.jpg" class="screenshots">
                </div>
            </section>

        </article>

        <img src="https://www.linkpicture.com/q/Lucario_1.png" class="lis-img">
    </section>

    <section id="features">
        <div class="container">
            <img src="https://bit.ly/2Frdsek" class="splash-image">
        </div>

        <ul>
            <li>
                <i class="fas fa-rocket"></i>
                <div>
                    <h4>Instant Delivery</h4>
                    <p>No need to wait for hours to get your games. Get your digital keys instantly without waiting and
                        start playing right away.</p>
                </div>
            </li>
            <li>
                <i class="fas fa-credit-card"></i>
                <div>
                    <h4>Trading Cards</h4>
                    <p>Earn cards while playing games which you can either use for profile customization or trade them
                        for store credits to avail more discounts.</p>
                </div>
            </li>
            <li>
                <i class="fas fa-dollar-sign"></i>
                <div>
                    <h4>Easy Refunds</h4>
                    <p>Didn't like the game you bought? Don't worry, we've got your back! You can easily refund your
                        game as long as play time is less than 4 hours.</p>
                </div>
            </li>
            <li>
                <i class="fab fa-servicestack"></i>
                <div>
                    <h4>DRM Free Games</h4>
                    <p>You get to install it wherever and however you like. You have the complete control over your
                        games here unlike DRM inclusive games.</p>
                </div>
            </li>
            <li>
                <i class="fas fa-piggy-bank"></i>
                <div>
                    <h4>Great deals</h4>
                    <p>Get massive discounts on games and access to many other fresh deals daily. Plus, get exclusive
                        deals for pre-ordering new games.</p>
                </div>
            </li>
            <li>
                <i class="fas fa-headset"></i>
                <div>
                    <h4>24x7 Support</h4>
                    <p>Need help with something? We are here for you to help you out. Just hit us up anytime you are in
                        a trouble and leave the rest to us.</p>
                </div>
            </li>
        </ul>
    </section>


    <section id="games">

        @foreach($juegos as $juego)

        <div class="games-scroll ps-2">
            <div class="game-cards ps-5">
                <img src="{{asset($juego->imagen)}}">
               
                <div class="cards-overlay">
                    <a href="/juegos/{{ $juego->id }}" style="text-decoration: none"> <h2>{{ $juego->nombre }}</h2></a>
                   
                 
                </div>
            </div>
        @endforeach
        
    </section>

    <footer class="w-100 py-4 flex-shrink-0  bg-dark text-light">
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

<!----------------------------------------------------------------CSS--------------------------------------------------------------------------->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;

        @media (min-height: 800px) and (min-width: 1500px) {
            font-size: 23px;
        }

        @media (min-height: 2000px) and (min-width: 3500px) {
            font-size: 47px;
        }
    }

    #header {
        display: flex;
        flex-direction: column;
        background-image: url("https://images.ctfassets.net/8hwv8jdog42r/4SBT80ceADRjg2HCcnM1mK/7cb45fca2f99ae4dc025eeb189281c26/ezgif.com-gif-maker.jpg");
        height: 90vh;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    body {
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    #logo {
        width: 3.2rem;
        height: 3.2rem;
        margin: 0 0.4rem;
    }

    #title {
        font-family: 'Patrick Hand', cursive;
        align-self: center;
        color: #fff;
        font-size: 4rem;
        margin-top: 6rem;

        @media (min-height: 800px) and (min-width: 1500px) {
            margin-top: 8rem;
        }
    }

    #subtitle {
        font-family: 'Shadows Into Light', cursive;
        align-self: center;
        color: #fff;
    }

    #header-img {
        width: 0;
        height: 0;

        @media (max-width: 35rem) {
            width: 7rem;
            height: 7rem;
            align-self: center;
        }
    }

    #nav-bar {
        display: flex;
        font-size: 1.05em;
        top: 0;
        position: sticky;
        position: -webkit-sticky;
        /* Safari */

        @media (max-width: 35rem) {
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }
    }

    #nav-bar a:not(:first-child) {
        flex: none;
        text-decoration: none;
        margin: 0.6rem;
        color: #e0e0d1;
        position: "relative";
    }

    #nav-bar a:not(:first-child)::after {
        content: "";
        margin-top: 0.7rem;
        display: block;
        width: 0;
        height: 0.15rem;
        transition: width 0.5s ease, background-color 0.5s ease;
    }

    #nav-bar a:not(:first-child):hover::after {
        width: 100%;
        background-color: red;
    }

    #nav-bar a:first-child {
        margin-right: auto;

        @media (max-width: 35rem) {
            display: none;
        }
    }

    .button {
        display: inline-block;
        position: relative;
        align-self: center;
        padding: 0.67rem;
        margin-top: auto;
        margin-bottom: 10vh;
        font-size: 1rem;
        line-height: 1.2rem;
        border: 0.15rem solid grey;
        overflow: hidden;
        text-decoration: none;
        background: transparent;
        width: 11.3rem;
        color: #e0e0d1;
    }

    .button:hover {
        animation-name: animate;
        animation-duration: 4s;
        animation-fill-mode: forwards;
    }

    @keyframes animate {
        10% {
            border-color: transparent;
        }

        25% {
            border-top-color: red;
            transition: width 0.25s ease-out;
        }

        50% {
            border-right-color: red;
            transition: height 0.25s ease-out 0.25s;
        }

        75% {
            border-bottom-color: red;
            transition: width 0.25s ease-out 0.5s;
        }

        100% {
            border-color: red;
            transition: height 0.25s ease-out 0.75s;
            letter-spacing: 0.2rem;
        }
    }

    .button span {
        transition: 0.6s;
        transition-delay: 0.25s;
        letter-spacing: 0.1rem;
    }

    .button::before {
        content: "";
        position: absolute;
        top: 0.67rem;
        left: 0;
        width: 100%;
        text-align: center;
        opacity: 0;
        transition: 0.4s, opacity 0.6s;
    }

    .button::before {
        content: attr(data-hover);
        transform: translate(-150%, 0);
    }

    .button:hover span {
        opacity: 0;
    }

    .button:hover::before {
        opacity: 1;
        transform: translate(0, 0);
        transition-delay: 0.4s;
    }

    #updates {
        display: flex;
        width: 100%;
        height: 26rem;
        background-color: #0a0f0f;

        @media (max-width: 35rem) {
            flex-direction: column;
        }
    }

    .news {
        flex: 1 1 70%;
        display: grid;
        grid-template-columns: 70% 30%;
        grid-template-areas: "video pictures";
        padding: 0.4rem;
        background-color: #0a0f0f;
        color: white;
        max-width: 100%;
        max-height: 100%;

        @media (max-width: 35rem) {
            flex: 0 0 100%;
            display: flex;
            flex-direction: column;
        }
    }

    #video {
      
        grid-area: video;
        width: 80%;
        height: 100%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5);

        @media (max-width: 35rem) {
            flex: 0 0 52%;
        }
    }

    .screenshot-section {
        grid-area: pictures;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        margin: 0 0.5rem 0 0.6rem;
        max-width: 100%;
        max-height: 100%;

        @media (max-width: 35rem) {
            padding: 0 0.8rem 0 0;
            width: 100%;
            height: 100%;
        }
    }

    .news-item1 {
        margin: 1.2rem 0 2rem 0;

        @media (max-width: 35rem) {
            margin: 1.2rem 0 1.5rem 0;
        }
    }

    .screenshots-gallary {
        display: grid;
        grid-template-columns: 50% 50%;
        grid-gap: 0.3rem;
        max-width: 100%;
        max-height: 50%;
    }

    .screenshots {
        max-width: 100%;
        max-height: 100%;

        @media (max-width: 35rem) {
            display: none;
        }
    }

    .screenshots:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
    }

    #available {
        font-size: 1.2rem;
        margin-top: 1.7rem;
        padding: 0.6rem 0;

        @media (max-width: 35rem) {
            margin-top: 0;
        }
    }

    .seller-border {
        align-self: flex-start;
        padding: 0.1rem;
        border: 0.1rem solid #52527a;
        border-radius: 0.13rem;
        background-color: #52527a;

        @media (max-width: 35rem) {
            font-size: 0.8rem;
        }
    }

    .screenshot-footer {
        display: flex;
        margin-top: auto;

        @media (max-width: 35rem) {
            margin-top: auto;
        }
    }

    .price {
        position: relative;
        margin-top: 0.4rem;
        margin-right: auto;
    }

    .price::before {
        positon: absolute;
        content: "\0024";
    }

    .os-icons {
        width: 1.75rem;
        height: 1.75rem;
    }

    .lis-img {
        
        max-height: 110%;
        max-width: 40%;

        @media (max-width: 35rem) {
            display: none;
        }
    }

    #updates-img {
        width: 90%;
        height: 90%;
        align-self: center;
    }

    #features {
        display: flex;
        width: 100%;
        height: 32rem;
        background-color: #333;
        /*   background-image: url('https://images.pexels.com/photos/51415/pexels-photo-51415.jpeg?auto=compress&cs=tinysrgb'); */
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #f4f4f4;

        @media (max-width: 35rem) {
            flex-wrap: wrap;
            height: auto;
            padding: 0.5rem 0;
        }
    }

    .container {
        flex: 1 0 30%;
        height: auto;

        @media (max-width: 35rem) {
            display: none;
        }
    }

    .splash-image {
        max-width: 100%;
        max-height: 100%;
        padding-top: 5rem;
    }

    #features ul {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1rem;
        list-style: none;
        margin: 0.6rem;
    }

    #features ul li {
        display: grid;
        grid-template-columns: 6.25rem 1fr;
        align-items: center;

        @media (max-width: 35rem) {
            display: flex;
            flex-direction: column;
            margin-top: 0.5rem;

            div {
                margin-top: 0.3rem;
            }
        }
    }

    #features ul li i {
        font-size: 3.5rem;
        text-align: center;
    }

    #features ul li div p {
        text-align: justify;
        margin-top: 0.5rem;
    }

    #games {
        width: 100%;
        height: 31.25rem;
        background-color: #0a0f0f;
        /*   background-color: #660000; */
        align-items: center;
        overflow: hidden;
    }

    .games-scroll {
        display: flex;
        height: 100%;
        margin-bottom: -3.3rem;
        padding-bottom: 3.3rem;
     
      
        justify-content: flex-start;
        align-items: center;
        box-sizing: content-box !important;
    }

    .game-cards {
        position: relative;
        flex: 0 0 16.25rem;
       
        height: 18.75rem;
        margin-left: 1.25rem;
    }

    .game-cards img {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .game-cards:last-child::after {
        content: "";
        position: absolute;
        width: 1.4rem;
        height: 0.1rem;
        left: 100%;
    }

    .cards-overlay {
        position: absolute;
        width: 0;
        height: 100%;
        background: rgba(187, 0, 204, 0.479);
        /*   background: rgba(230, 0, 0, 0.6); */
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.7s ease;
        overflow: hidden;
    }

    .game-cards:hover .cards-overlay {
        width: 100%;
    }

    .cards-overlay h2 {
        color: #fff;
        border: 0.15em solid #fff;
        padding: 0.1em 1.1em;
        cursor: pointer;
        opacity: 0;
    }

    .cards-overlay:hover h2 {
        opacity: 1;
        transition: opacity .7s .3s, background-color .7s;
    }

    .cards-overlay h2:hover {
        background-color: #0a0f0f;
        opacity: 0.8;
    }

    #subscription {
        display: flex;
        height: 22rem;
        text-align: center;
        font-weight: 300;
        color: #fff;
        align-items: center;
    }

    #subscription {
        background-image: url("https://bit.ly/2QMFAd1");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        max-height: 100%;
        max-width: 100%;

        @media (min-height: 800px) and (min-width: 1500px) {
            #form h1 {
                font-size: 1.9rem;
            }
        }
    }

    #subscription>span {
        flex: 1 1 30%;
        align-self: center;
        margin-left: 2.3rem;
        text-align: left;

        @media (max-width: 35rem) {
            display: none;
        }
    }

    #subscription span h2 ul {
        width: 70%;
        height: 18.5rem;
        border: 0.1rem solid #fff;
        font-size: 2.4rem;
        padding: 0.25rem 0.6rem;
        letter-spacing: 0.15rem;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: space-around;

        @media (min-height: 800px) and (min-width: 1500px) {
            li {
                font-size: 1.9rem;
            }
        }
    }

    #subscription>form {
        flex: 1 1 70%;
    }

    .email-section {
        display: inline-flex;
        margin-top: 1.2rem;
        height: 2.4rem;
        justify-content: center;
    }

    .email-section i {
        background: #2f3542;
        width: 2.4rem;
        line-height: 2.4rem;
    }

    #email,
    #submit {
        border: none;
        outline: none;
    }

    #email {
        width: 0rem;
        transition: 0.6s;
    }

    .email-section:hover>#email,
    #email:focus {
        width: 16.5rem;
        padding: 0 0.6rem;

        @media (max-width: 35rem) {
            width: 98%;
        }
    }

    #submit {
        background: #2f3542;
        color: white;
        padding: 0 0.6rem;
        text-transform: uppercase;
        transition: 0.6s;
    }

    #submit:hover {
        background-color: #0a0f0f;
    }

    .center {
        text-align: center;
        margin: auto;
    }

    .bg-dark {
        background: #333;
        color: #f4f4f4;
    }

    footer {
        display: flex;
        position: -webkit-sticky;
        /* Safari */
        position: sticky;
        flex-direction: column;
        width: 100%;
        bottom: 0;
        padding: 1.4rem;
        z-index: -1;
    }

    footer div i {
        font-size: 2.9rem;
        padding: 0.5rem 0.8rem;
    }


</style>

</html>
