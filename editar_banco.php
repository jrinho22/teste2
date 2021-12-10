<?php 

session_start();

include_once 'database\conection.php';



print_r($_SESSION);


$nome = $_SESSION['nome'];
$type = $_SESSION['type'];
$professor = $_SESSION['professor'];
$quantidade = $_SESSION['quantidade'];

echo $nome;




function editar($nome, $novo_nome, $professor, $quantidade){
    $conn = connectar();

    $sql = "UPDATE table1 SET curso='$novo_nome', professor='$professor', limite='$quantidade' WHERE curso='$nome'";
        echo ''.$nome.'';

        if ($conn->query($sql) === TRUE) {
            echo "New record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            header('location:inserir.php');
           

}

function delete($nome){
    $conn = connectar();

    $sql = "DELETE FROM table1 WHERE curso = '$nome';";
        echo $nome;
        

        if ($conn->query($sql) === TRUE) {
            echo "New record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            
            header('location:inserir.php');

}




if ($type == 'update') {
    $novo_nome = $_POST['novo_nome'];
    $professor = $_POST['professor'];
    $quantidade = $_POST['quantidade'];
    editar($nome, $novo_nome, $professor, $quantidade);
}

if ($type == 'delete') {
    delete($nome);
}

//header('location:inserir.php');