<?php
if (isset($_GET['id']))
    $id = $_GET['id'];
else die;

try {
    $stmt = $db->prepare('Select *, productstype.type as TYPE, products.id as ID from products JOIN productstype ON productstype.id = products.type where products.id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $value = $stmt->fetchAll();

    $charac = json_decode($value[0]->charac);
?>

    <div style="color: black;" class="container center_column col-xs-12 col-sm-9">
        <div class="row">
            <div class="col-sm-6 push-bit">
                <div class="row push-bit">
                    <div class="col-xs-4">
                        <a href="#" class="gallery-link"><img width="400" height="400" src="<?= $value[0]->imagem ?>" alt="" class="img-responsive" /></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 push-bit">
                <div class="clearfix">
                    <div class="pull-right">
                        <span class="h2"><strong><?= $value[0]->price ?> €</strong></span>
                    </div>
                    <span class="h4">
                        <strong ><?= $value[0]->name ?></strong><br />
                    </span>
                </div>
                <hr />
                <p>
                <ul>
                    <li>Tipo: <?= $value[0]->TYPE ?></li>
                    <?php

                    if (isset($charac->brand)) {
                    ?>
                        <li >Marca: <?= $charac->brand ?></li>
                    <?php
                    }
                    if (isset($charac->material)) {
                    ?>
                        <li>Material: <?= $charac->material ?></li>
                    <?php
                    }
                    if (isset($charac->velocidades)) {
                    ?>
                        <li>Velocidades: <?= $charac->velocidades ?></li>
                    <?php
                    }
                    if (isset($charac->ano)) {
                    ?>
                        <li>Ano: <?= $charac->ano ?></li>
                    <?php
                    }
                    if (isset($charac->color)) {
                    ?>
                        <li>Cor: <?= $charac->color ?></li>
                    <?php
                    }
                    ?>
                </ul>
                </p>
                <hr />
                <?php
                    if (isset($_SESSION['type'])) {
                ?>
                    <button style="background-color: white;color: black;border-color: white;" data-name="<?= $value[0]->name ?>" data-price="<?= $value[0]->price ?>" type="submit" class="add-to-cart btn btn-info">Adicionar ao carrinho </button>
                <?php
                    }
                ?>
            </div>
        </div>
        </div>
<?php
} catch (PDOException $ex) {
    echo $ex;
}
