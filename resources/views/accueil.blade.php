@extends('layouts.helpdtemp')


@section('content')

<!-- Search Section -->

<section class="search-section home-search">
    <div class="masthead text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-md-auto">
                    <h1>Helpdesk</h1>
                    <p class="lead text-muted">  </p>
                    <form>
                        <input type="text" class="search-field" placeholder="Rechercher ... ">
                        <button type="submit"><i class="icon icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Topics -->
<section class="topics">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="topics-wrapper border-style">
                    <h3><a href="peripherique.html"><span class="icon icon-circle-o text-blue"></span>Matériel/Périphériques</a></h3>
                    <ul class="topics-list">
                        <li id="gele"><a href="peripherique.html#gele"> L’écran est gelé </a>
                        </li>
                        <li id="vide"><a href="peripherique.html#vide"> L’écran est vide </a>
                        </li>
                        <li id="chauffe"><a href="peripherique.html#chauffe"> L’ordinateur chauffe puis redémarre seul </a>
                        </li>
                        <li id=demarre_pas><a href="peripherique.html#demarre_pas"> L’ordinateur ne démarre pas </a>
                        </li>
                        <li><a href="single.html">  </a>
                        </li>
                    </ul>
                    <ul class="topics-meta">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="topics-wrapper border-style">
                    <h3><a href="internet.html"><span class="icon icon-circle-o text-green"></span>Internet</a></h3>
                    <ul class="topics-list">
                        <li id="lent"><a href="internet.html#lent"> Internet lent </a>
                        </li>
                        <li id="reseau"><a href="internet.html#reseau"> Problèmes de réseau Internet </a>
                        </li>
                        <li><a href="single.html">  </a>
                        </li>
                        <li><a href="single.html">  </a>
                        </li>
                        <li><a href="single.html">  </a>
                        </li>
                    </ul>
                    <ul class="topics-meta">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="topics-wrapper border-style">
                    <h3><a href="logiciel.html"><span class="icon icon-circle-o text-purple"></span>Logiciel</a>
                    </h3>
                    <ul class="topics-list">
                        <li id="lenteur"><a href="logiciel.html#lenteur"> Lenteur de l'ordinateur </a>
                        </li>
                        <li id="virus"><a href="logiciel.html#virus"> L’infection par un virus </a>
                        </li>
                        <li id="SE"><a href="logiciel.html#SE"> Système d’exploitation </a>
                        </li>
                        <li id="pub"><a href="logiciel.html#pub"> Les fenêtres publicitaires </a>
                        </li>
                        <li><a href="single.html">  </a>
                        </li>
                    </ul>
                    <ul class="topics-meta">
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
