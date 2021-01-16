<?php include 'functions.php';

/*
 * Name: George McMullen & Patrick Dang
 * Date: Jav 15 2021
 * File URL:
 * Project name: Pair Program 2
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>Pair Program 2</h1>";

echo "PHP Array Practice.<br>";

$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);

?> <br> <?php

echo "<br>Largest number in array: ";

largest($numbers);

?> <br> <?php

echo removeDups($numbers);

function distribution($array) {

    sort($array);

    echo "<br><br>Sorted and counted values";
    $associativeArray = array_count_values($array);

    echo "<br>[";

    foreach($associativeArray as $key => $value) {
        echo $key . "=>" . $value . ",";
    }

    echo "]";

}

echo distribution($numbers);

?>