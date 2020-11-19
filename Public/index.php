<?php

/**
*
* @return \PDo

function getConnection(){

    $dsn = 'mysql:host=localhost;dbname=cursoifes';
    $user = 'root';
    $pass = 'root';

    try {

        $pdo = new PDO($dsn, $user, $pass );

        return $pdo;
    } catch (PDOException $ex) {

    echo 'erro: '.$ex->getmessage();

    }

}