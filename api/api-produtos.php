<?php
try {
    $stmt = $db->prepare('Select *, productstype.type as TYPE, products.id as ID from products JOIN productstype ON productstype.id = products.type');
    $stmt->execute();
    $arr = $stmt->fetchAll();
?>
<style type="text/css">
table td {
    height: 50px;
    vertical-align: center;
}
.backgroundwhite {
    background-color: white;
    overflow: hidden;
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
                        Nome
                    </th>
                    <th scope="col">
                        Preço
                    </th>
                    <th scope="col">
                        Imagem
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
                        <td><?= $value->type ?></td>
                        <td><?= $value->name ?></td>
                        <td><?= $value->price ?>€</td>
                        <td><?= $value->imagem ?></td>
                        <td><a href="index.php?cmd=editar-produto&id=<?=$value->ID?>" class="text-warning">Editar</a></td>
                        <td><a href="index.php?cmd=apagar-produtos&id=<?=$value->ID?>" class="text-danger"> Eliminar </a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div align="right">
            <a style="background-color: white;color: black;border-color: white;font-size: bold" class="btn btn-primary" href="index.php?cmd=add-produto"><font color= red>Adicionar produto</a>
        </div>
    </div>
<?php

} catch (PDOException $ex) {
    echo $ex;
}
