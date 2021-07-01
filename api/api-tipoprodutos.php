<?php
try {
    $stmt = $db->prepare('Select *, productstype.type as type, productstype.id as id  from productstype');
    $stmt->execute();
    $arr = $stmt->fetchAll();
?>

<style>
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
                        Tipo
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
                        <td><a href="index.php?cmd=editar-tipoprodutos&id=<?=$value->id?>" class="text-warning">Editar</a></td>
                        <td><a href="index.php?cmd=apagar-tipouprodutos&id=<?=$value->id?>" class="text-danger"> Eliminar </a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div align="right">
            <a style="background-color: white;color: black;border-color: white;font-size: bold" class="btn btn-primary" href="index.php?cmd=add-tipoprodutos"><font color= red>Adicionar tipo de Produto</a>
        </div>
    </div>
<?php

} catch (PDOException $ex) {
    echo $ex;
}
