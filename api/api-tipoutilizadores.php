<?php
try {
    $stmt = $db->prepare('Select *, userstype.type as type, userstype.id as id  from userstype');
    $stmt->execute();
    $arr = $stmt->fetchAll();
?>
<style type="text/css">
table td {
    height: 50px;
    vertical-align: middle;
}
.backgroundwhite {
    background-color: white;
}
</style>
    <div class="container">
        <table class="table backgroundwhite table-striped">
            <thead>
                <tr>
                    <th scope="col">
                        Id
                    </th>
                    <th scope="col">
                        Tipo de Utilizador
                    </th>
                    <th scope="col">
                        <font color="orange">Editar
                    </th>
                    <th scope="col">
                        <font color="red">Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($arr as $key => $value) {
                ?>
                    <tr>
                        <td><?= $value->id ?></td>
                        <td><?= $value->type ?></td>
                        <td><a href="index.php?cmd=editar-tipoutilizadores&id=<?=$value->id?>" class="text-warning">Editar</a></td>
                        <td><a href="index.php?cmd=apagar-tipoutilizadores&id=<?=$value->id?>" class="text-danger"> Eliminar </a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div align="right">
        <a style="background-color: white;color: black;border-color: white;font-size: bold" class="btn btn-primary" href="index.php?cmd=add-tipoutilizadores"><font color= red>Adicionar Tipo de Utilizador</a>
        </div>
    </div>
<?php

} catch (PDOException $ex) {
    echo $ex;
}
