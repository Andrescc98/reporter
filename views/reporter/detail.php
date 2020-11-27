<?php $this->layout("layout/app", ["title" => $person["first_name"]." ".$person["last_name"] ])?>

<?php $this->start("main") ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h1><i class="fas fa-user fa-3x"></i></h1>
            </div>
            <div class="col-sm-12 col-md-6">
                <h6>C.I:</h6> <p><?= $this->e($person["cedula"]) ?></p>
                <h6>Nombre:</h6> <p><?= $this->e($person["first_name"]) ?></p>
                <h6>Apellido:</h6> <p><?= $this->e($person["last_name"]) ?></p>
                <h6>Oficio:</h6> <p><?= $this->e($person["job"]) ?></p>
            </div>
        </div>
    </div>
<?php $this->stop() ?>