<?php
include_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/data.php';

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <link rel="stylesheet" href="./style/style.css">
    <title>OOP E-commerce</title>
</head>

<body>
    <div class="container">
        <!-- Title -->
        <header class="text-center pt-3">
            <h1>E-Commerce Animals</h1>
        </header>
        <main class="my-2">
            <div class="container">
                <div class="row row-cols-4">
                    <!-- Cicle array products -->
                    <?php foreach ($products as $product) : ?>
                        <div class="col p-3">
                            <!-- Card -->
                            <div class="card h-100 p-3">
                                <!-- Img -->
                                <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->title ?>">
                                <div class="card-body">
                                    <h3 class="pb-3"><?= $product->title ?></h3>
                                    <div>
                                        <div class="pb-2"><strong>Categoria: </strong><?= $product->categories->getName() ?></div>
                                        <div class="pb-2"><strong>Prezzo: </strong> <?= $product->getFormattedPrice() ?></div>
                                        <div class="card-text pb-2"><strong>Tipo di prodotto: </strong><?= $product->type ?></div>
                                        <!-- Conditionals -->
                                        <?php if ($product instanceof Food) : ?>
                                            <div class="card-text pb-2"><strong>Gusto: </strong><?= $product->flavour ?></div>
                                            <div class="card-text pb-2"><strong>Scadenza: </strong><?= $product->expiration ?></div>
                                        <?php endif; ?>
                                        <?php if ($product instanceof Game) : ?>
                                            <div class="card-text pb-2"><strong>Materiale: </strong><?= $product->material ?></div>
                                            <div class="card-text pb-2"><strong>Colore: </strong><?= $product->color ?></div>
                                        <?php endif; ?>
                                        <?php if ($product instanceof House) : ?>
                                            <div class="card-text pb-2"><strong>Materiale: </strong><?= $product->material ?></div>
                                            <div class="card-text pb-2"><strong>Dimensioni: </strong><?= $product->dimensions ?></div>
                                        <?php endif; ?>
                                        <!-- Proprietà del trait Shipping -->
                                        <div class="card-text pb-2"><strong>Corriere: </strong><?= $product->getShippingCourier() ?></div>
                                        <div class="card-text"><strong>Costo spedizione: </strong><?= $product->getShippingCost() ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>