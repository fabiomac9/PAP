<?php
try {
    $stmt = $db->prepare('Select *, userstype.type as TYPE, users.id as ID from users JOIN userstype ON userstype.id = users.type');
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
                        Nome
                    </th>
                    <th scope="col">
                        Email
                    </th>
                    <th scope="col">
                        Morada
                    </th>
                    <th scope="col">
                        Telemovel
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
                        <td><?= $value->ID ?></td>
                        <td><?= $value->TYPE ?></td>
                        <td><?= $value->username ?></td>
                        <td><?= $value->mail ?></td>
                        <td><?= $value->address ?></td>
                        <td><?= $value->phone ?></td>
                        <td><a href="index.php?cmd=editar-utilizador&id=<?=$value->ID?>" class="text-warning">Editar</a></td>
                        <td><a href="index.php?cmd=apagar-utilizador&id=<?=$value->ID?>" class="text-danger"> Eliminar </a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div align="right">
            <a style="background-color: white;color: black;border-color: white;font-size: bold" class="btn btn-primary" href="index.php?cmd=add-utilizadores"><font color= red>Adicionar Utilizador</a>
        </div>
    </div>
<?php

} catch (PDOException $ex) {
    echo $ex;
}
