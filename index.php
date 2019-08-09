<?php

function printBooleanArray() 
{
    $arrayDimension = (int) readline("Columns number: ");

    if ($arrayDimension < 0) {
        exit("Can't buld array with negative number of columns");
    }

    if ($arrayDimension == 0) {
        exit("Array is empty");
    }

    foreach (range(1, $arrayDimension) as $row) {
        foreach(range(1, $arrayDimension) as $column) {
            echo rand(0, 1) . ' ';
        }

        echo "\n";
    }
}

printBooleanArray();