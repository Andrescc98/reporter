<?php $this->layout("layout/app", ["title"=>"lista de personas"]) ?>


<?php $this->start("main") ?>
    <div class="container">
        <div>
        <?php if(!empty($persons)): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>C.I</th>
                        <th>Trabajo</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($persons as $person): ?>
                        <tr>
                            <td><?= $this->e($person["id_reporter"]); ?></td>
                            <td><?= $this->e($person["first_name"]); ?></td>
                            <td><?= $this->e($person["last_name"]); ?></td>
                            <td><?= $this->e($person["cedula"]); ?></td>
                            <td><?= $this->e($person["job"]); ?></td>
                        </tr>
                    <?php endforeach?>
                
                </tbody>
            </table>
            <?php else: ?>
                <h5>no hay personas registradas</h5>
            <?php endif?>
        </div>
    </div>    
<?php $this->stop() ?>