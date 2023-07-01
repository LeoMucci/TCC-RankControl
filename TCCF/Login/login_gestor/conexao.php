<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    $conexao = mysqli_connect("localhost", "root", "", "banco");

    if ($conexao == FALSE)
    {
      echo "Não foi possivel conectar-se ao PhpMyAdmin";
      exit;
    } 
      $chapa=$_POST['chapa'];
      $senha=$_POST['senha'];

      $consulta ="select * from login where chapa = '$chapa' AND senha = '$senha'";

      $resultado = mysqli_query($conexao,$consulta);

      $row = mysqli_num_rows($resultado);
    

      if ($row == 1){
         header("location: tela_home.html");
      }
      else{
        echo "Registro Não Autenticado";
      }
 ?>
</body>
</html>