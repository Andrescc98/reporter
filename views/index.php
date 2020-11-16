<?php $this->layout("layout/app", ["title"=>"index"]) ?>


<?php $this->start("main") ?>
    <h1><?= $this->e(reset($_SESSION)["username"]) ?> <i class="fa fa-user-astronaut"></i></h1>
    
<?php $this->stop() ?>