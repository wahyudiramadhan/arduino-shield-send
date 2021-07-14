<?php

require("php_serial.class.php");

$serial = new phpSerial();
$serial->deviceSet("masukan port arduino");
$serial->confBaudRate(9600);
$serial->deviceOpen();

if($_GET['id_finger'] == "2"){
    $serial->sendMessage("0\r");
}
$serial->deviceClose()


?>