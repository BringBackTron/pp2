<?php

function printArr($array) {

    foreach($array as $item) {
        echo "<br>" . $item;
    }

}

function largest($array) {
    echo max($array);
}