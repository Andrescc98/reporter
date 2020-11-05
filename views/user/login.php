<?php $this->layout("layout/app", ["title" => "log in"]) ?>

<?php $this->start("main") ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Nombre de usuario">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                        </div>

                        <div class="my-3">
                            <button type="submit" class="btn btn-block btn-success ">
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->stop() ?>