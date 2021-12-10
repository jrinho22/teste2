<?php 


include_once 'database\conection.php';

$curso = $_POST['curso'];
$professor = $_POST['professor'];
$limite = $_POST['quantidade'];






function salva($curso, $professor, $limite){
    $conn = connectar();

    


        $sql = "INSERT INTO table1 (curso, professor, limite)
        VALUES ('$curso', '$professor', '$limite')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            header('location:inserir.php?msg=sesssion');
    
}


salva($curso, $professor, $limite);

//header('location:inserir.php');