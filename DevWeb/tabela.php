<?php

include 'conexao.php';

?>



<!doctype html>
<html lang="en">
  <head>

  <div >

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabela de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body background="#474a51">

  <h1> CONTATOS </h1>
  <br>

  <button type="submit" class="btn btn-primary btn-lg" name="submit"> <a class ="text-light" href="cadastro.php">Novo Usúario</a></button>

  <br>
  
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Apagar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>

 


  <?php

$sql="SELECT * FROM `contatos`";
$resultado = MYSQLI_query($con, $sql);
if($resultado){
  while ($row = MYSQLI_fetch_assoc($resultado)) {
    $id = $row['id'];
    $nome = $row['nome'];
    $sobrenome = $row['sobrenome'];
    $email = $row['email'];
    $senha = $row['senha'];
    echo ' <tr>
    <th scope = "row">'.$id.'</th>
    <td>'.$nome.'</td>
    <td>'.$sobrenome.'</td>
    <td>'.$email.'</td>
    <td>'.$senha.'</td>
    <td> <button class="btn btn-primary"><a class="text-light" href="deletar.php?exclue='.$id.'">Deletar</a></button></td>
    <td> <button class="btn btn-primary"><a class="text-light" href="editar.php?edit='.$id.'">Editar</a></button></td>
    </tr>';
  }

}

?>
  <br>
  

</tbody>

</form>
</div>
</body>
</html>  