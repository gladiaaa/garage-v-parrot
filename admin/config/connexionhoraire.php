<?php

try {
    $accessho = new PDO("mysql:host=127.0.0.1;dbname=horaires;charset=utf8", "root", ""); 

    $accessho->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) {
    echo $e->getMessage();
}



?>