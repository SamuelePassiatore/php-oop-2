<?php
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Category.php';
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
    <title>OOP E-commerce</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>E-Commerce Animals</h1>
        </header>
        <main>
            <div class="container my-5">
                <div class="row row-cols-4">
                    <?php foreach ($products as $product) : ?>
                        <div class="col p-3">
                            <div class="card h-100 p-2">
                                <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->title ?>">
                                <div class="card-body">
                                    <h3><?= $product->title ?></h3>
                                    <p><?= $product->categories->name ?></p>
                                    <p><?= $product->price ?></p>
                                    <p class="card-text"> <?= $product->type ?></p>
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