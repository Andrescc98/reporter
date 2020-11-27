<?php $this->layout("layout/app", ["title" => "agregar persona"]) ?>

<?php $this->start("main") ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Registro de personas</h5>
                </div>
                <div class="card-body">
                    <form id="formpersona">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="cedula" placeholder="C.I">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-sort-numeric-up"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="first_name" placeholder="Nombre">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="last_name" placeholder="Apellido">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="job" placeholder="Trabajo">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-tools"></i>
                                </span>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-block btn-success">
                                Agregar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->stop() ?>

<!-- scripts -->

<?php $this->start("scripts") ?>
    <script>
        const formPersona = document.getElementById("formpersona");

        formPersona.onsubmit = async (event) =>{

            try{
                event.preventDefault();

                const formData = new FormData(event.currentTarget);

                const res = await fetch("/post/reporter/register", {
                    method:"POST",
                    headers:{
                        "X-REQUEST-WITH":"XMLHttpRequest"
                    },
                    body: formData
                });
                res.status === 201 ? location = "/reporter/lista" : null;
            }catch(err){
                console.log(err);
            }
        }
    </script>
<?php $this->stop() ?>