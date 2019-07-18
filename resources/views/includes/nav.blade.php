<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-color fixed-top">
    <div class="container">
        <div><a class="navbar-brand" href="#"><span style="font-size: 20px">Web<span style="color: tomato">Dev</span>Laravel</span></a>
            <p style="color:#dfe4ea;margin-top: -6px;font-size: 10px">" Learn Together and grow together "</p>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Formations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A-Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Exercices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@include('includes/header')

<!-- Page Content -->
    <div class="container mt-4">

        <div class="container-fluid text-center">
            @yield('content')
        </div>

    </div>
