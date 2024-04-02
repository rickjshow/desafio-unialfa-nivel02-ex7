<?php

    try {
        $host = 'localhost';
        $dbname = 'desafio02';
        $username = 'root';
        $password = '';

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {

       echo "erro na conexão com o banco" . $e->getMessage();
       
    }