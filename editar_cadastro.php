

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Edite o curso</h1>

<form action="editar_banco.php" method="post">

    <label for="text">curso</label>
    <input type="text" name="novo_nome" require>
    <p></p>
    <label for="text">professor</label>
    <input type="text" name="professor" require>
    <p></p>
    <label for="text">limite de alunos</label>
    <input type="text" name="quantidade" require>
    <p></p>

    <button 
        name="entrar">EDITAR
    </button>

    

</form>
    
</body>
</html>

<?php   

    session_start();
    
    $_SESSION['nome'] = $_GET['nome']; 
    $_SESSION['type'] = $_GET['type']; 
    $_SESSION['quantidade'] = $_GET['quantidade']; 
    $_SESSION['professor'] = $_GET['professor']; 
    
    

    
    if ($_SESSION['type'] == 'delete') {
        header('location:editar_banco.php');
    }
     

?>