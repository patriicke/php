<?php
    include_once("./file.php");
    $newConnection = new Connection();
    echo $newConnection->connect("localhost", "PATRICK", "DATAbase@123", "RWANDA");
?>