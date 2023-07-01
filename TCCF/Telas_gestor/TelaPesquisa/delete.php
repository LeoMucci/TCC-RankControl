<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!----===== Bootstrap ===== -->


    <title>Rank & Control - Home </title>
</head>

 <body>
    <nav class="sidebar close">
        <header>


            <div class="image-text">
                <span class="image">
                    <img src="logonova.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Rank & Control</span>

                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <!--
                    Esta tela deixa o Home selecionado
                    Para deixar outos selecionados coloque no <a hrerf>
                        style =
                        background-color: var(--primary-color);
                        border-left: 5px solid #0e2230;
                -->




                <ul class="menu-links">
                    <li class="nav-linkhome">
                        <a href="../../Login/tela_home_gestor.html">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../TelaPlanoSucessao/index.html" >
                            <i class='bx bx-briefcase icon'></i>
                            <span class="text nav-text">Plano de sucessão</span>
                        </a>
                    </li>

                    <!-- <li class="nav-link">
                        <a href="../Tela9Box/index.html">
                            <i class='bx bxs-inbox icon'></i>
                            <span class="text nav-text">Nine Box</span>
                        </a>
                    </li> -->

                    <li class="nav-link">
                        <a href="../TelaPesquisa/index.php" style="background-color: var(--primary-color);
                        border-left: 5px solid #0e2230;;">
                            <i class='bx bx-search icon'></i>
                            <span class="text nav-text">Pesquisa</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">



                <li class="nav-link">
                    <a href="../SobreNos/index.html">
                        <i class='bx bxs-group icon'></i>
                        <span class="text nav-text">Sobre Nós</span>
                    </a>
                </li>




                <li class="">
                    <a href="../../Login/index.html">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>



            </div>
        </div>

    </nav>

   <section class="home">
   <?php
    if(isset($_POST['senha'])){
    $conexao = mysqli_connect("localhost", "root", "", "banco");

    if ($conexao == FALSE)
    {
      echo "Não foi possivel conectar-se ao PhpMyAdmin";
      exit;
    } 

      $id = $_POST['id'];
      $senha=$_POST['senha'];


      $consulta ="select * from login where senha = '$senha'";

      $resultado = mysqli_query($conexao,$consulta);

      $row1 = mysqli_num_rows($resultado);

  if($row1 > 0){

    $sql_ocupante = "SELECT * from ocupante where idOcupante = $id";

    $resultado_sql_ocupante = mysqli_query($conexao,$sql_ocupante);
    // print_r($resultado_sql_ocupante);
    $row2 = mysqli_num_rows($resultado_sql_ocupante);
     if ($row2 > 0){

         while($registro= mysqli_fetch_assoc($resultado_sql_ocupante)){

             $numerovw_ocupante = $registro['numeroVW_ocupante'];
             $numerovw_imediato = $registro['numeroVW_imediato'];
             $numerovw_ideal = $registro['numeroVW_ideal'];
             $numerovw_futuro = $registro['numeroVW_futuro'];
         }
     }else{
         echo "<script>alert(\"Registro não encontrado\")
         window.location='index.php';;</script>";
     }
        $sql_pegar_id = "SELECT * FROM ocupante WHERE numeroVW_ocupante = $numerovw_ocupante ";
        $resultado_sql_pegar_id = mysqli_query($conexao,$sql_pegar_id);
    //  print_r($resultado_sql_pegar_id);
    $row3 = mysqli_num_rows($resultado_sql_pegar_id);

    if($row3 > 0 ){

        $sql_deletar1 = "DELETE FROM posicao WHERE numeroVW_ocupante = $numerovw_ocupante ";
        $resultado_sql1 = mysqli_query($conexao,$sql_deletar1);

        //deletar2

        $sql_deletar2 = "DELETE FROM ocupante WHERE numeroVW_ocupante = $numerovw_ocupante ";
        $resultado_sql2 = mysqli_query($conexao,$sql_deletar2);

        //deletar3
        $sql_deletar3 = "DELETE FROM imediato WHERE numeroVW_imediato = $numerovw_imediato ";
        $resultado_sql3 = mysqli_query($conexao,$sql_deletar3);

        //deletar4
        
        $sql_deletar4 = "DELETE FROM ideal WHERE numeroVW_ideal = $numerovw_ideal ";
        $resultado_sql4 = mysqli_query($conexao,$sql_deletar4);
        
        //deletar4
        
        $sql_deletar5 = "DELETE FROM futuro WHERE numeroVW_futuro = $numerovw_futuro ";
        $resultado_sql5 = mysqli_query($conexao,$sql_deletar5);
        


        if ($resultado_sql1==false and $resultado_sql2==false and $$resultado_sql3==false and $$resultado_sql4==false and $$resultado_sql5 ==false){
            echo "<script>alert(\"Registro Não Autenticado, Tente Novamente!\")
          window.location='delete.php';;</script>";
                } else{      
                    echo "<script>alert(\"Deletado com sucesso!!\")
                    window.location='index.php';;</script>";
        }
    }
    } else {
        echo "<script>alert(\"Registro Não Autenticado, Tente Novamente!!!\")
                    window.location='index.php';;</script>";
    }
 }
?>
    </section>
    <script src="script.js"></script>
</body>
</html>