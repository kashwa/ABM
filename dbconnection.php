<?php

    // Connecting to DB.
    try{
        $db = new PDO("mysql:host=localhost;dbname=abm", 'root', 'admin');
    }catch (PDOException $exception){
        $exception->getMessage();
    }
