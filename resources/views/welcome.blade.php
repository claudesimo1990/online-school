@extends('master.main')



@section('content')

    <div class="col-8 offset-2 cour-element">
        <span class="shadow bg-white text-center text-uppercase font-weight-bolder rounded" style="color:#1289a7;font-size: 30px">Formations recentes</span>
    </div>

    <div class="row card-cours">
        <a class="text-decoration-none" href="">
            <div class="col-md-3 col-12 cour-element">
                <div class="card shadow rounded" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset("img/cours/html5.png")}}" alt="Card image cap">
                    <div class="card-title text-center mt-3 text-info">
                        HTML5
                    </div>
                    <div class="card-body mb-2 text-center">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="text-decoration-none" href="">
            <div class="col-md-3 col-12 cour-element">
                <div class="card shadow rounded" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset("img/cours/css3.jpg")}}" alt="Card image cap">
                    <div class="card-title text-center mt-3 text-info">
                        CSS3
                    </div>
                    <div class="card-body mb-2 text-center">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="text-decoration-none" href="">
            <div class="col-md-3 col-12 cour-element">
                <div class="card shadow rounded" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset("img/cours/javascript.png")}}" alt="Card image cap">
                    <div class="card-title text-center mt-3 text-info">
                        JAVASCRIPT
                    </div>
                    <div class="card-body mb-2 text-center">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="row card-cours">
        <a class="text-decoration-none" href="">
            <div class="col-md-3 col-12 cour-element">
                <div class="card shadow rounded" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset("img/cours/php.png")}}" alt="Card image cap">
                    <div class="card-title text-center mt-3 text-info">
                        PHP
                    </div>
                    <div class="card-body mb-2 text-center">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="text-decoration-none" href="">
            <div class="col-md-3 col-12 cour-element">
                <div class="card shadow rounded" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset("img/cours/symfony-4.png")}}" alt="Card image cap">
                    <div class="card-title text-center mt-3 text-info">
                        SYMFONY
                    </div>
                    <div class="card-body mb-2 text-center">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="text-decoration-none" href="">
            <div class="col-md-3 col-12 cour-element">
                <div class="card shadow rounded" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset("img/cours/laravel.jpg")}}" alt="Card image cap">
                    <div class="card-title text-center mt-3 text-info">
                        LARAVEL
                    </div>
                    <div class="card-body mb-2 text-center">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

@stop
