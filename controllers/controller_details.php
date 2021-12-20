<?php
require 'data/data.php';


$myCards = [];



if (isset($_GET["id"]) && $_GET["id"] < 4) {
    foreach ($myArray as $value) {
        if ($value["id"] == $_GET["id"]) {
            $myCards = $value;
        }
    }
} else {
    header("Location: index.php");
    exit();
}
