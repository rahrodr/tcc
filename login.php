<?php
 session_start();
 if (empty($_POST) or (empty($_POST["email"]) or (empty($_POST["email"])))){
     print "<script>location.href='index.php';</script>";
 }
 include('config.php');

 $email = $_POST["email"];
 $senha = $_POST["senha"];

 $sql = "SELECT * FROM usuario WHERE email = '{$email}'
 AND senha = '{$senha}'";

 $res = $conn->query($sql) or die($conn->error);

 $qtd = $res->num_rows;

 if ($qtd > 0) {
     $_SESSION["email"] = $email;
     print "<script>location.href='menu.php';</script>";
 }else{
     print "<script>alert('Usuário e/ou senha incorreto(s)');</script>";
     print "<script>location.href='index.php';</script>";
 }
 
 ?>