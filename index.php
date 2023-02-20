<?php
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Game.php';
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
        <header class="text-center pt-3">
            <h1>E-Commerce Animals</h1>
        </header>
        <main class="my-2">
            <div class="container">
                <div class="row row-cols-4">
                    <?php foreach ($products as $product) : ?>
                        <div class="col p-3">
                            <div class="card h-100 p-2">
                                <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->title ?>">
                                <div class="card-body">
                                    <h3 class="pb-3"><?= $product->title ?></h3>
                                    <div>
                                        <div class="pb-2"><strong>Categoria: </strong><?= $product->categories->name ?></div>
                                        <div class="pb-2"><strong>Prezzo: </strong> <?= $product->getFormattedPrice() ?></div>
                                        <div class="card-text pb-2"><strong>Tipo di prodotto: </strong><?= $product->type ?></div>
                                        <?php if ($product instanceof Food) : ?>
                                            <div class="card-text pb-2"><strong>Gusto: </strong><?= $product->flavour ?></div>
                                            <div class="card-text"><strong>Scadenza: </strong><?= $product->expiration ?></div>
                                        <?php endif; ?>
                                        <?php if ($product instanceof Game) : ?>
                                            <div class="card-text pb-2"><strong>Materiale: </strong><?= $product->material ?></div>
                                            <div class="card-text"><strong>Colore: </strong><?= $product->color ?></div>
                                        <?php endif; ?>
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