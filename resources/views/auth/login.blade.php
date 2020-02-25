<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body>
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="l-s-2 blink">LOADING</div>
    </div>
</div>

<div id="app" class="paper-loading">
    <!-- Header -->
    <nav class="mainnav navbar navbar-default justify-content-between">
        <div class="container relative">
            <a class="offcanvas dl-trigger paper-nav-toggle" data-toggle="offcanvas"
               aria-expanded="false" aria-label="Toggle navigation">
                <i></i>
            </a>
            <a class="navbar-brand" href="index.html">
                <img class="d-inline-block align-top" alt="" src="assets/img/basic/enval.png">
            </a>
            <div class="paper_menu">
                <div id="dl-menu" class="xv-menuwrapper responsive-menu">
        <ul class="dl-menu align-items-center">
            <li><a href="{{route('accueil')}}">{{ __('Accueil') }}</a></li>
            <li><a href="{{route('creer')}}" class="btn btn-default nav-btn">
                Créer un ticket
            </a>
            </li>
        </ul>
    </div>

<!-- Login modal -->
        </div>
    </div>
</nav>
<div class="light b-t">
    <div id="primary" class="content-area"
         data-bg-possition="center"
         data-bg-repeat="false"
         style="background: url('assets/img/icon/icon-circles.png');">
        <main id="main" class="site-main">
            <div class="container">
                <div class="col-xl-8 mx-lg-auto p-t-b-80">
                        <header class="text-center">
                            <h1>Bienvienue</h1>
                            <p class="section-subtitle">Avant de créer un ticket d'incident veuillez vous connecter</p>
                            <img class="p-t-b-50" src="assets/img/icon/icon-login.png" alt="">
                        </header>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                        <input input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                               placeholder="Email">

                                               @error('email')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"placeholder="Mot de passe">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Se connecter">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class=" col-lg-2 col-xl-3 col-12 responsive-phone"><a href="#" class="brand">
                <img src="assets/img/basic/enval.png" alt="Knowledge">
                <span class="circle"></span>
            </a>
            </div>
            <div class="col-6  col-md-4 col-lg-2">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">Features</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Community</a>
                    </li>
                    <li><a href="login.html">Login</a>
                    </li>
                </ul>
            </div>
            <div class="col-6  col-md-4 col-lg-2">
                <h6>Knowledgebase</h6>
                <ul class="footer-links">
                    <li><a href="#">Features</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Community</a>
                    </li>
                    <li><a href="login.html">Login</a>
                    </li>
                </ul>
            </div>
            <div class="col-6  col-md-4 col-lg-2">
                <h6>About Us</h6>
                <ul class="footer-links">
                    <li><a href="#">Features</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Community</a>
                    </li>
                    <li><a href="login.html">Login</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md-12 col-12 col-xl-3 responsive-phone">
                <h6>Connect via Social</h6>
                <ul class="social">
                    <li class="facebook"><a href="#"><i class="icon icon-facebook"></i></a>
                    </li>
                    <li class="twitter"><a href="#"><i class="icon icon-twitter"></i></a>
                    </li>
                    <li class="gplus"><a href="#"><i class="icon icon-google-plus"></i></a>
                    </li>
                </ul>
                <div class="copyrights">
                    <p>&#xA9; 2020 Enval HelpDesk</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/app.js"></script>

</body>
</html>
