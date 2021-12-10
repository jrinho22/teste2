<?php

if (!isset($_POST['entrar']) || empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location:index.php');

} else {
    
    include_once 'database\conection.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $conn = connectar();

    $sql = "SELECT * from usuarios where nome = '$usuario' and senha = '$senha'";
    $query = mysqli_query($conn, $sql);
    print_r($query);
    print_r($query->lengths);
    if ($query->num_rows>0) {
        

        header('location:inserir.php');
    } else {
        header('location:index.php');
    }
}  

?>