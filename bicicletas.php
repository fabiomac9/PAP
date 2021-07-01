<?php
if (isset($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
    $pag = 1;
}
try {
    $stmt = $db->prepare('SELECT * FROM products');
    $stmt->execute();
    $arr = $stmt->fetchAll();
    $cont = $stmt->rowCount();
    $nrmaxporpagina = 6;
    if (isset($_REQUEST['pag']))
        $pag = $_REQUEST['pag'];
    else $pag = 1;
    $ini = ($pag - 1) * $nrmaxporpagina;
    $nrpag = $cont / $nrmaxporpagina + 1;

    $stmt = $db->prepare('SELECT * FROM productstype');
    $stmt->execute();
    $productstype = $stmt->fetchAll();

?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Shop Name</h1>
                <div class="list-group">
                    <?php
                    foreach ($productstype as $key => $value) {
                    ?>
                        <a href="?cmd=equipamento&filtro=<?= $value->id ?>" class="list-group-item"><?= $value->type ?></a>
                    <?php
                    }
                    /*$brands = array();
                    foreach ($arr as $key => $value) {
                        $json = json_decode($value->charac);
                        #print_r($json->brand);
                        if (!in_array($json->brand, $brands)) {
                    ?>
                            <a href="?cmd=equipamento&filtro=<?= $value->id ?>" class="list-group-item"><?= $json->brand ?></a>
                    <?php
                            array_push($brands, $json->brand);
                        } else {
                            continue;
                        }
                        #print_r($brands);
                    }*/
                    ?>
                </div>
            </div>
            <?php
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            if (isset($filtro)) {
                $stmt = $db->prepare('SELECT * FROM products where type = :filtro order by type LIMIT :ini, :maxpag');
                $stmt->bindValue(':filtro', $filtro);
            } else {
                $stmt = $db->prepare('SELECT * FROM products order by type LIMIT :ini, :maxpag');
            }
            $stmt->bindValue(':ini', (int) $ini);
            $stmt->bindValue(':maxpag', (int) $nrmaxporpagina);
            $stmt->execute();
            $products = $stmt->fetchAll();

            ?>

            <div class="center_column col-xs-12 col-sm-9">
                <div class="carousel slide my-4" data-ride="carousel">
                </div>
                <div class="row">
                    <?php
                    foreach ($products as $key => $value) {
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="?cmd=products&id=<?= $value->id ?>"><img class="card-img-top" src="<?= $value->imagem ?>" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="?cmd=products&id=<?= $value->id ?>"><?= $value->name ?></a>
                                    </h4>
                                    <h5><?= $value->price ?>€</h5>
                                    <?php
                                    if (isset($_SESSION['type'])) {
                                    ?>
                                        <h5><a href="#" data-name="<?= $value->name ?>" data-price="<?= $value->price ?>" class="add-to-cart text-primary">Adicionar ao carrinho</a></h5>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
                <?php
                for ($i = 1; $i < floor($nrpag); $i++) {
                ?>
                    <a href="index.php?cmd=equipamento&pag=<?= $i ?>&filtro=<?= $filtro ?>"><?= $i ?></a>
                <?php
                }
                ?>
            </div>

        </div>

    </div>

    </div>
<?php
} catch (PDOException $ex) {
    echo $ex;
}
