<?php $this->layout("layout/app", ["title"=>"lista de personas"]) ?>


<?php $this->start("main") ?>
    <div class="container">
        <div>
        <?php if(!empty($persons)): ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>C.I</th>
                        <th>Trabajo</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                    <?php foreach($persons as $person): ?>
                            <tr id=<?= $this->e($person["id_reporter"])?> >
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

<?php $this->start("scripts") ?>
    <script>
        const tbody = document.getElementById("tbody");

        tbody.onclick = (event)=>{
            event.preventDefault();

            location = `/reporter/persona/?id_reporter=${event.path[1].id}`;
        }
    </script>
<?php $this->stop() ?>