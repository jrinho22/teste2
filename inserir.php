<?php include_once 'teste2.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>

  <style>
      a{
          color:black;
      }
      body{
          padding-left: 15px;
      }
  </style>

</head>
<body>
    
    <h1>
        cadastre um novo curso
    </h1>

    <form action="salva.php" method="post">
        <label for="text">nome do curso</label> 
        <input type="text" name="curso" require>
        <p></p>
        <label for="text">nome professor</label>
        <input type="text" name="professor" require>
        <p></p>
        <label for="text">limite de alunos</label>
        <input type="number" name="quantidade" require>
        <p></p>

        <button name="cadastrar">cadastrar</button>
    </form>

    <h3 style="padding-top: 45px;">cursos cadastrados</h3>

    <table>

    </table>

    

    <table style="width: 70%;" class="table table-hover">

            <tr>
                
                <th scope="col">Curso</th>
                <th>Professor</th>
                <th>Numero maximo de alunos</th>


            </tr>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <tr>

                
                
            
                <td><?php echo $row1[1];?></td> 
                <td><?php echo $row1[2];?></td> 
                <td><?php echo $row1[3];?></td> 
                <td>
                <?php   
                $nome = $row1[1];
                $professor = $row1[2];
                $quantidade = $row1[3];

                $type = 'update';
                echo '<a type="button" class="btn btn-primary" href="editar_cadastro.php?type='.$type.'&nome='.$nome.'&professor='.$professor.'&quantidade='.$quantidade.'"> EDIT </a>';       
                ?>
                </td> 
                <td>
                <?php   
                $nome = $row1[1];
                $type = 'delete';
                echo '<a type="button" class="btn btn-danger" href="editar_cadastro.php?type='.$type.'&nome='.$nome.'"> DELETE </a>';       
                ?>
                </td> 
                
            </tr>
            <?php endwhile;?>

        </table>

        <p>
        <a type="button" class="btn btn-danger" href="logout.php">LOGOUT</a>
        </p>

</body>
</html>