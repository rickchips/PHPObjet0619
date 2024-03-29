<?php

//ON inclue la classe pour l'utiliser
require 'Classes/Produit.php';

echo "Projet PHP objet";

// On crée un nouveau Produit
$hamac = new Produit();
$hamac->name ='Hamac';
$hamac->description = "Pour se reposer après 5 jours de PHP";
$hamac->imageName = "hamac.jpg";


// On crée un deuxième objet
$parasol = new Produit();
$parasol->name ='Parasol';
$parasol->description = "Pour faire de l'ombre au Hamac";
$parasol->imageName = "parasol.jpg";


$products = [$hamac, $parasol];




?>


<?php require 'inc/header.php' ; ?>

<h1>Liste des produits</h1>

    <main class="container">
        <h1 class="mt-2">Présentation des produits</h1>
        <section class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-4">
                    <div class="card">
                        <img src="img/uploads/<?= $product->imageName; ?>" class="card-img-top" alt="Image de <?= $product->imageName; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->imageName; ?></h5>
                            <p class="card-text"><?= $product->description; ?></p>
                            <a href="#" class="card-link btn btn-outline-info">Détail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>



<?php require 'inc/footer.php'; ?>