<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "S7ven";

    //criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    //testar conexão
    if ($conn->connect_error) {
        die("Falha na conexão:". $conn ->connect_error);
    }
?>