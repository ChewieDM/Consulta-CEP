<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '123456';
    $dbName = 'formulario';

    $mysqli = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*if($mysqli->connect_errno)
    {
        echo "Erro";
    }
                            
    {
        echo "Sucesso";
    }*/

?>