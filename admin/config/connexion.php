<?php

try {
    $access = new PDO("mysql:host=127.0.0.1;dbname=voitures;charset=utf8", "root", ""); 

    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) {
    echo $e->getMessage();
}



?>