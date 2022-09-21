<?php

// För att det här exemplet ska fungera så måste det här skriptet ligga i en mapp som har
// en undermapp som heter tmp och i den mappen måste det finnas en fil som heter mydata.txt

if ($_POST["username"] === "Valet2022") {
    if ($_POST["password"] === "Moderaterna") {
        echo "inlogging avklarad";
    } else {
        echo "inlogging fail ";
    }
} else {
    echo " inlogging fail";
}
