<?php
require "controllers/controller_index.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <h1 class="text-center">Les sorties au Havre par Guigui</h1>
</head>

<body>



    <!-- <a type="button" class="btn btn-success" href="meal.php?food=<?= $value ?>"><?= $value ?></a> -->
    <div class="justify-content-evenly ps-1">
        <div class="row row-cols-1 row-cols-md-2 g-4 m-auto">
            <?php foreach ($myArray as $key => $value) { ?>

                <div class="col">
                    <div class="card border border-dark">
                        <img src="<?= $value["picture"] ?>" class="card-img-top" alt="photo" height="350px">
                        <div class="card-body bg bg-dark text-white">
                            <h2 class="card-title text-success text-center"><?= $value["name"] ?></h2>
                            <p>Date de début : <?= $value["startDate"] ?></p>
                            <p>Date de fin : <?= $value["endDate"] ?></p>
                            <p>Prix : <?= $value["price"] ?></p>
                            <p><?= $value["descriptif"] ?></p>
                            <p><?= $value["place"] ?></p>


                            <div class="text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $key ?>">
                                    + d'infos
                                </button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <p><?= $value["descriptif"] ?></p>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="img-fluid" src="<?= $value["picture"] ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>



        </div>
        <div class="bg-dark text-white mt-3 text-center pt-3 pb-3">
            <p>©Guigui's Visit LH</p>
        </div>


</body>

</html>