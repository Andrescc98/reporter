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

                        <!-- id reporter when $person exist -->
                        <?php if(!empty($person)):?>
                            <input 
                            type="hidden"
                            name="id_reporter" 
                            <?php echo "value='".$_GET["id_reporter"]."'" ?> 
                            >
                        <?php endif?>

                        <div class="input-group mb-3">
                            <input
                             type="text"
                             class="form-control"
                             name="cedula"
                             placeholder="C.I"
                             <?php if(!empty($person)) echo "value='".$person["cedula"]."'" ?> >

                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-sort-numeric-up"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input
                              type="text"
                              class="form-control"
                              name="first_name"
                              placeholder="Nombre"
                             <?php if(!empty($person)) echo "value='".$person["first_name"]."'" ?> 
                             >

                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input 
                            type="text" 
                            class="form-control" 
                            name="last_name" 
                            placeholder="Apellido"
                            <?php if(!empty($person)) echo "value='".$person["last_name"]."'" ?>
                            >
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input 
                            type="text" 
                            class="form-control" 
                            name="job" 
                            placeholder="Trabajo"
                            <?php if(!empty($person)) echo "value='".$person["job"]."'" ?>
                            >
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
                const route = pathname(location.pathname) === "modificar" 
                ? "/post/reporter/update"
                : "/post/reporter/register";

                event.preventDefault();

                const formData = new FormData(event.currentTarget);

                const res = await fetch(route, {
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
        function pathname(path){
            const route = path.split("/");

            return route[2];
        }
    </script>
<?php $this->stop() ?>