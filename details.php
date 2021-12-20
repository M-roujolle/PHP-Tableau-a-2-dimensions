<?php
require 'controllers/controller_details.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>

<body class="bg-dark text-white m-0 text-center">

    <div class="my-5">
        <h1><?= $myCards['descriptif']; ?></h1>
        <img class="img-fluid w-25" src="<?= $myCards['picture']; ?>">
        <p><?= $myCards['price']; ?></p>
        <p><?= $myCards['startDate']; ?></p>
        <p><?= $myCards['endDate']; ?></p>
        <h2><?= $myCards['name']; ?></h2>



        <a href="index.php" class="btn btn-success">Retour</a>
    </div>
</body>

</html>