<?php require_once ('variable.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>L'Oasis - Meilleur camping France</title>
</head>

<body>
    <div class="container">
        <div class="ensemble">
            <div class="gauche">
                <h2>
                    <?= $titre ?>
                </h2>
                <h1>Le meilleur du camping en France</h2>
                    <h3><span class="gras">
                            <?= $titre ?>
                        </span> a sélectionné avec soin <span class="bleu">les plus beaux campings
                            de France</span> pour vous permettre de réserver en quelques clics le camping de vos rêves.
                    </h3>
            </div>
            <div class="droite">
                <div class="search">
                    <form action="/search" method="GET">
                        <input type="text" name="query" placeholder="Destination, camping, date">
                        <button type="submit">Rechercher</button>
                    </form>
                </div>
                <div class="destination">
                    <p>Top destination: <strong>Argelès-sur-Mer, Saint-Jean-de-Monts, Saint-Hilaire-de-Riez, Vias,
                            Agde</strong></p>
                </div>
            </div>
        </div>
    </div>

    <div class="moment">
        <div class="titre">Actuellement sur <span class="gras">
                <?= $titre ?>
            </span>
        </div>
        <div class="regions">
            <p class="region"><span class="reg">Toutes les régions</span></p>
            <p class="region">Pyrénées-Orientales(43)</p>
            <p class="region">Vendée</p>
            <p class="region">Hérault</p>
        </div>
        <div class="suites">
            <div class="suite">
                <img src="assets\img\suite1png.png" alt="suite1">
                <div class="details">
                    <div class="prix">
                        <p>Dès 35€ </p>
                        <p>Nuit Location 4 personnes</p>
                    </div>
                    <div class="lieu">
                        <p>La Pironnière</p>
                        <p>Les Pirons</p>
                        <p>Les Sables-d'Olonne</p>
                    </div>
                </div>
            </div>
            <div class="suite">
                <img src="assets\img\suite1png.png" alt="suite1">
                <div class="details">
                    <div class="prix">
                        <p>Dès 35€ </p>
                        <p>Nuit Location 4 personnes</p>
                    </div>
                    <div class="lieu">
                        <p>La Pironnière</p>
                        <p>Les Pirons</p>
                        <p>Les Sables-d'Olonne</p>
                    </div>
                </div>
            </div>
            <div class="suite">
                <img src="assets\img\suite1png.png" alt="suite1">
                <div class="details">
                    <div class="prix">
                        <p>Dès 35€ </p>
                        <p>Nuit Location 4 personnes</p>
                    </div>
                    <div class="lieu">
                        <p>La Pironnière</p>
                        <p>Les Pirons</p>
                        <p>Les Sables-d'Olonne</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>