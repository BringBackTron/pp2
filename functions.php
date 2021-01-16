<?php

function printArr($array) {

    foreach($array as $item) {
        echo "<br>" . $item;
    }

}

function largest($array) {

    echo max($array);

}

function removeDups($array) {

    echo "<br>Duplicates removed:";

    return printArr(array_unique($array));

}