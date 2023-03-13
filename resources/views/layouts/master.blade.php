<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All in Time</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg  bg-light rounded fixed-top nav" aria-label="Fourth navbar example">
            <div class="container-fluid ">
                <a class="navbar-brand logo" href="#">All in time </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item li">
                            <a class="nav-link active" aria-current="page" href="{{ route('acceuil') }}">Acceuil</a>
                        </li>
                        <li class="nav-item dropdown li">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                A faire
                            </a>
                            <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('todolist') }}">ToDo list</a></li>
                                    <li><a class="dropdown-item" href="{{ route('programme') }}">Programme</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('compte_a_rebours') }}">Compte à rebours</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown li">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Actu du jour
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('actualite') }}">Actualité</a></li>
                                <li><a class="dropdown-item" href="{{ route('anniversaire') }}">Anniversaire</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('fete') }}">Fêtes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown li">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Contacts
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('contact') }}">Nouveau contact</a></li>
                                <li><a class="dropdown-item" href="{{ route('liste_contacts') }}">Lites des contacts</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('messagerie') }}">Messagerie</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-item search">
                        <form class="d-flex " method="get" role="search" action="{{ route('recherche') }}">
                            <input title="Rechercher un contact par son nom  ou numéro" type="text" name="search" id="search" placeholder="Rechercher un contact par son nom  ou numéro.." class="form-control">
                            <button class="btn btn-outline-success" type="submit">Rechercher</button>
                        </form>
                        
                    </li>

                    <li class="nav-item dropdown  li">
                            <!-- Authentixcation Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown li">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->surname }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="">Profil</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Déconnexion') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        @yield("contenu")
    </main>
    <footer class="container footer">
        <p class="float-end "><a class="back_top" href="#">👆</a></p>
        <p>
            <a class="logo" href="">ALl in Time</a> &copy; 2022–2023 @  , Inc . &middot ; <a href="#">Privacy</a> &middot; <a href="#">Termes et contrats</a><br>
            <h4 style="margin-left:20px; margin-top:50px">All Technology Company</h4> 
        </p>
    </footer>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>


</body>
</html>
