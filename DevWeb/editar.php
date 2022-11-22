<?php

include 'conexao.php';

$id = $_GET['edit'];

$sql="SELECT * FROM `contatos` WHERE id=$id";
$resultado = MYSQLI_query($con,$sql);
$row = MYSQLI_fetch_assoc($resultado);

$nome=$row['nome'];
$sobrenome=$row['sobrenome'];
$email=$row['email'];
$senha=$row['senha'];


if (isset($_POST['submit'])){

    $nome =$_POST['nome'];
    $sobrenome =$_POST['sobrenome'];
    $email =$_POST['email'];
    $senha =$_POST['senha'];

    $sql = "UPDATE `contatos` SET id=$id, nome='$nome', sobrenome='$sobrenome', email='$email', senha='$senha' WHERE id=$id";
    $resultado = MYSQLI_query($con,$sql);

    if($resultado){
      echo "Dados atualizados!";
      header('location:tabela.php');

    }
    }
?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

  <h1>Editar Contatos</h1>
  <form method="post">
  <div class="container my-2" >

    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome aqui" value=<?php echo $nome?>>

    <br>

    <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome aqui" value=<?php echo $sobrenome?>>

    <br>


    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email aqui" aria-describedby="emailHelp" value=<?php echo $email?>>

  <br>
  <div class="mb-3">

    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha aqui" value=<?php echo $senha?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Cadastrar</button>
</form>  
  </body>
</html>