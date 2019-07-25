<header>
    <-- Register -->
    <div class="modal fade mt-5" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title font-weight-bold">S'enregistrer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" id="orangeForm-name" class="form-control validate" name="name">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" id="orangeForm-email" class="form-control validate" name="email">
                            <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                        </div>

                        <div class="form-group">
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="password">
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
                        </div>

                        <div class="form-group">
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="password_confirmation">
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Password Confirmation</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-deep-orange">S'enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <-- End Register -->

<-- login -->
    <div class="modal fade mt-5" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title font-weight-bold">Se connecter</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" id="orangeForm-name" class="form-control validate" name="email">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Email</label>
                        </div>

                        <div class="form-group">
                            <input type="password" id="orangeForm-pass" class="form-control validate" name="password">
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-deep-orange">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <-- End login -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url({{asset("img/pick14.jpg")}})">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Knowledge</h3>
                    <p class="lead">This is a description for the first slide.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{asset("img/pick9.jpg")}})">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Wissen</h3>
                    <p class="lead">This is a description for the second slide.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url({{asset("img/pick13.jpg")}})">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Connaissances</h3>
                    <p class="lead">This is a description for the third slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
