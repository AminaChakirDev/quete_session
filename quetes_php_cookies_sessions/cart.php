<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php
if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <h1>Contenu de votre panier</h1>
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><?php if (isset($_COOKIE['panier'][$id])) { echo $_COOKIE['panier'][$id];} else { echo '0';}?>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
