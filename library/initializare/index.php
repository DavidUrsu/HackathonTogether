<?php
    $db = mysqli_connect('localhost', 'root', '');
    $query = "CREATE DATABASE `utilizatori-together`";
    mysqli_query($db, $query);
    $query = "CREATE TABLE `utilizatori-together`.`utilizatori` ( `id` INT NULL DEFAULT NULL AUTO_INCREMENT , `username` TEXT NOT NULL , `email` TEXT NOT NULL , `parola` TEXT NOT NULL , `clasa` INT NOT NULL , `litera` CHAR(1) NOT NULL , `institutie` TEXT NOT NULL , `nastere` DATE NOT NULL , PRIMARY KEY (`id`), UNIQUE (`username`), UNIQUE (`email`)) ENGINE = InnoDB;";
    mysqli_query($db, $query);

    $query = "CREATE DATABASE `follows`";
    mysqli_query($db, $query);

    $query = "CREATE DATABASE `entitati`";
    mysqli_query($db, $query);
    $query = "CREATE TABLE `entitati`.`date-generale` ( `ID` INT NOT NULL AUTO_INCREMENT , `tip` TEXT NOT NULL , `nume` TEXT NOT NULL , `categorie` TEXT NOT NULL , `admin` TEXT NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
    mysqli_query($db, $query);
    
    header('Location: http://localhost');
?>
