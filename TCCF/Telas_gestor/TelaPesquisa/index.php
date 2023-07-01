
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
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../TelaPlanoSucessao/index.html">
                            <i class='bx bx-briefcase icon' ></i>
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
                            <i class='bx bx-pencil icon' ></i>
                            <span class="text nav-text">Editar</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">



                <li class="nav-link">
                    <a href="../SobreNos/index.html">
                        <i class='bx bxs-group icon' ></i>
                        <span class="text nav-text">Sobre Nós</span>
                    </a>
                </li>
                



                <li class="">
                    <a href="../../Login/index.html">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

            
               
            </div>
        </div>

    </nav>

    <section class="home">


        <form action="index.php" method="post">
            <div class="container1">

                <input type="submit" placeholder="Pesquise a chapa!" name="numerovw" autocomplete="off">
                <input type="text" placeholder="Pesquise a chapa!" name="numerovw" autocomplete="off">
                <div class="search"></div>
    
            </div>   
        </form>
<!-- parte do php -->
        <?php
if (isset($_POST['numerovw'])){
		
    $conexao = mysqli_connect("localhost", "root", "", "banco");

    if ($conexao == FALSE)
    {
        echo "<script>alert(\"Não foi possivel conectar-se ao PhpMyAdmin \")
        window.location='index.php';;</script>";
    }
    if ($_POST['numerovw']=='')
	{
		$consulta_ocupante = "select * from ocupante order by idOcupante"; //listar todas as informações de todos os clientes
	}
	else
	{
		$numerovw = $_POST['numerovw'];
		$consulta_ocupante = "select * from ocupante where numeroVW_ocupante= " . $numerovw;
	}
    $resultado_ocupante = mysqli_query($conexao,$consulta_ocupante);
    
    //print_r($resultado_ocupante);
    $row = mysqli_num_rows($resultado_ocupante);
    if ($row == 0){
            echo "<script>alert(\"Registro não encontrado\")
            window.location='index.php';;</script>";
		} else{
            ?>
            <br>
            <br>
            <br>

             <center><table border="1" class="styled-table">
                <thead>
                    <tr>
                        <td>Código</td>
                        <td>Nome</td>
                        <td>Cargo</td>
                        <td>Número VW</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>
                </thead>

        </div>
                <tbody>

                <div class="tbl-content">
                    <?php
                    while( $registro_ocupante = mysqli_fetch_array($resultado_ocupante)){
                        echo "<tr>";

                        echo "<td>". $registro_ocupante['idOcupante']."</td>";
                        echo "<td>". $registro_ocupante['nome_ocupante']."</td>";
                        echo "<td>". $registro_ocupante['cargo_ocupante']."</td>";
                        echo "<td>". $registro_ocupante['numeroVW_ocupante']."</td>";
                        echo "<td>
                                <a class='btn btn-primary' style='color:white;' href='editar.php?id=$registro_ocupante[idOcupante]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                                </svg>
                                </a>
                            </td>";

                            echo "<td>
                            
                            <a class='btn btn-danger' style='color:white;'' href='acesso.php?id=$registro_ocupante[idOcupante]' >
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                            </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
                    </div>
                </tbody>
            </table></center>
            <?php
            
    }
}
?>
    </section>
    <script src="script.js"></script>
</body>
</html>