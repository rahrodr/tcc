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

switch(@$_REQUEST["acao"]){
    case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            
            $sql = "INSERT INTO usuario (username, email, senha)
             VALUES ('{$nome}', '{$email}', '{$senha}')";

             $res = $conn->query($sql);

             if($res==true){
                print "<script> alert('Cadastro com Sucesso');</script>";
                print "<script>location.href='index.php';</script>";
             }else{
                print "<script> alert('Não foi possível Cadastrar');</script>";
                print "<script>location.href='index.php';</script>";
             }
             break;
}        
    ?>