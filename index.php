<?php

function printBooleanArray($arrayDimension, $booleanArray = []) 
{
    $arrayDimension = (int) $arrayDimension;

    if ($arrayDimension < 0) {
        echo "Can't buld array with negative number of columns\n";
        return;
    }

    if ($arrayDimension == 0 || empty($booleanArray) || gettype($booleanArray) !== 'array') {
        echo "Array is empty\n";
        return;
    }

    foreach ($booleanArray as $value) {
        if ($value !== 1 && $value !== 0) {
            echo "Array must contain only 0 and 1 values\n";
            return;
        }
    }

    echo "\n\n";

    $arrayToPrint = array_chunk($booleanArray, $arrayDimension);

    foreach ($arrayToPrint as $arrayChunk) {
        echo implode(' ', $arrayChunk) . "\n";
    }
}

$arrayDimension = (int) readline("Columns number: ");

printBooleanArray($arrayDimension);             // check for empmty argument
printBooleanArray($arrayDimension, 'hello');      // Check for not array type
printBooleanArray($arrayDimension, []);           // Check for empty array
printBooleanArray($arrayDimension, [0, 1, 1, 2]); // check for array values is 0 and 1 
printBooleanArray($arrayDimension, [0]);          // check for array with one element inside

// Check for big valid array
printBooleanArray($arrayDimension, [0, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1]); 

