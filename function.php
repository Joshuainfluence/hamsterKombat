<?php
// function details($lat, $long){
//     $location = "details.txt";
//     $file = fopen($location, 'a');
//     $write = fwrite($file, $lat . "\n");
//     $write = fwrite($file, $long. "\n");

//     fclose($file);
// }

function read_file(){
    $location = 'details.txt';
    $file = fopen($location, 'r');
    $array = [];
    while (!feof($file)) {
        $get = fgets($file);
        array_push($array, $get);

    }
    fclose($file);
    return $array;
}