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
                        <a href="../../Login/tela_home.html">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../TelaPlanoSucessao/index.html">
                            <i class='bx bx-briefcase icon'></i>
                            <span class="text nav-text">Plano de sucessão</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../Tela9Box/index.html" >
                            <i class='bx bxs-inbox icon'></i>
                            <span class="text nav-text">Nine Box</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../TelaPesquisa/index.html">
                            <i class='bx bx-search icon'></i>
                            <span class="text nav-text">Pesquisa</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../TelaEditar/index.php" style="background-color: var(--primary-color);
                        border-left: 5px solid #0e2230;;">
                          <i class='bx bx-pencil icon'></i>
                          <span class="text nav-text">Editar</span>
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
                    <a href="../../Login/index.html ">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>



            </div>
        </div>

    </nav>

   <section class="home">



        <!-- <form action="teste.php" method="post">
            <div class="container1">
                <input type="submit" placeholder="Pesquise a chapa!" name="numerovw">
                <input type="text" placeholder="Pesquise a chapa!" name="numerovw">
                <div class="search"></div>
            </div>
        </form> -->


        <!-- <div class="container">
                <header>Posição</header> -->

        <!-- <form action="cadastrar.php" method="POST">
                    <div class="form first" style="width: 75%;">
                        <div class="details personal">

                            <div class="fields">
                                <div class="input-field" style="width: 500px;">
                                    <label>Nome da UO</label>
                                    <input type="text" name="nome_da_UO_posicao" required style="width: 490px;">
                                </div>

                                <div class="input-field" style="width: 500px;">
                                    <label>Diretoria</label>
                                    <input type="text" name="diretoria_posicao" required style="width: 490px;">
                                </div>

                                <div class="input-field">
                                    <label>Superior Direto</label>
                                    <input type="text" name="superior_direto_posicao" required>
                                </div>

                                <div class="input-field" style="width: 90px;">
                                    <label>UO Abrev</label>
                                    <input type="text" name="abreviacao_UO_posicao" required style="width: 80px;">
                                </div>

                                <div class="input-field" style="width: 90px;">
                                    <label>É G70?</label>
                                    <select required name="g70_posicao" style="width: 80px;">
                                        <option disabled selected>Selecione</option>
                                        <option>Sim</option>
                                        <option>Não</option>

                                    </select>
                                </div>

                                <div class="input-field" style="width: 500px;">
                                    <label>Superior G70</label>
                                    <input type="text" name="superior_g70_posicao" required style="width: 490px;">
                                </div>

                                <div class="input-field" style="width: 150px;">
                                    <label>Local</label>
                                    <select required name="local_posicao" style="width: 140px;">
                                        <option disabled selected>Selecione</option>
                                        <option>Sim</option>
                                        <option>Não</option>

                                    </select>
                                </div>

                                <div class="input-field" style="width: 100px;">
                                    <label>Código da UO</label>
                                    <input type="codigoUO_posicao" name="codigouo" required style="width: 90px;">
                                </div>

                                <div class="input-field" style="width: 100px;">
                                    <label>Job Evaluation</label>
                                    <input type="text" name="job_evaluation_posicao" required style="width: 90px;">
                                </div>

                            </div>
                        </div> -->




<?php

if(!empty($_GET['id'])){
    $conexao = mysqli_connect("localhost", "root", "", "banco");

    if ($conexao == FALSE)
    {
        echo "<script>alert(\"Não foi possivel conectar-se ao PhpMyAdmin \")
        window.location='index.php';;</script>";
    }

    $id = $_GET['id'];

    $sql_ocupante = "SELECT * from ocupante where idOcupante = $id";

    $resultado_sql_ocupante = mysqli_query($conexao,$sql_ocupante);
    // print_r($resultado_sql_ocupante);
    $row = mysqli_num_rows($resultado_sql_ocupante);
     if ($row > 0){

         while($registro= mysqli_fetch_assoc($resultado_sql_ocupante)){

             $numerovw = $registro['numeroVW_ocupante'];
         }
     }else{
         echo "<script>alert(\"Registro não encontrado\")
         window.location='index.php';;</script>";
     }


     $consulta_posicao = "select * from posicao where numeroVW_ocupante= " . $numerovw;
     $resultado_posicao = mysqli_query($conexao,$consulta_posicao);
     $registro_posicao = mysqli_fetch_array($resultado_posicao);



?>
<body>
<a href="index.php">
<button class="learn-more">
				<span class="circle" aria-hidden="true">
				<span class="icon arrow"></span>
				</span>
				<span class="button-text">Voltar</span>
			  </button>
                                </a>
<section class="centralizar">



        <div class="container" style="top: 120px;">
            <header>Posição</header>
             <form action="update.php" method="POST">
                <div class="form first" style="width: 100%;">
                    <div class="details personal">

                        <div class="fields">
                            <div class="input-field" id="NomeUO">
                                <label class="nomes">Nome da UO</label>
                                <!-- <label class="dados"> </label> -->
                            <input type="text" name="nome_da_UO_posicao" value = "<?php echo $registro_posicao['nome_da_UO_posicao'];?>" required>
                            </div>

                            <div class="input-field">
                                <label class="nomes">Diretoria</label>
                                <!-- <label class="dados"> </label> -->
                                <input type="text" name="diretoria_posicao" value = "<?php echo $registro_posicao['diretoria_posicao'];?>" required>
                            </div>
                            <div class="input-field">
                                <label class="nomes">Número VW Superior</label>
                                <!-- <label class="dados"> </label> -->
                                 <input type="text" name="numeroVW_superior_direto" value = "<?php echo $registro_posicao['numeroVW_superior_direto'];?>" required readonly>
                            </div>

                            <div class="input-field">
                                <label class="nomes">Superior Direto</label>
                                <!-- <label class="dados"> </label> -->
                                <input type="text" name="superior_direto_posicao" value = "<?php echo $registro_posicao['superior_direto_posicao'];?>" required>
                            </div>

                            <div class="input-field" >
                                <label class="nomes">UO Abrev</label>
                                <!-- <label class="dados"> </label> -->
                                <input type="text" name="abreviacao_UO_posicao" value = "<?php echo $registro_posicao['abreviacao_UO_posicao'];?>" required>
                            </div>

                            <div class="input-field" >
                                <label class="nomes">É G70?</label>
                                <!-- <label class="dados"> </label> -->
                                <input type="text" name="g70_posicao" value = "<?php echo $registro_posicao['g70_posicao'];?>" required>
                            </div>

                            <div class="input-field">
                                <label class="nomes">Número VW Superior G70</label>
                                <!-- <label class="dados"></label> -->
                                <input type="number" name="numeroVW_superior_g70_posicao" value = "<?php echo $registro_posicao['numeroVW_superior_g70_posicao'];?>" readonly required>
                            </div>

                            <div class="input-field" >
                                <label class="nomes">Superior G70</label>
                                <!-- <label class="dados"> </label> -->
                                <input type="text" name="superior_g70_posicao" value = "<?php echo $registro_posicao['superior_g70_posicao'];?>" required >
                            </div>

                            <div class="input-field">
                                <label class="nomes">Local</label>
                                <!-- <label class="dados"></label> -->
                                <input type="text" name="local_posicao" value = "<?php echo $registro_posicao['local_posicao'];?>" required >
                                <!-- <select required name="local_posicao" style="width: 140px;"readonly=“true”>
                                    <option disabled selected>Selecione</option>
                                    <option>Sim</option>
                                    <option>Não</option>

                                </select> -->
                            </div>

                            <div class="input-field">
                                <label class="nomes">Código da UO</label>
                                <!-- <label class="dados">  </label> -->
                                <input type="codigoUO_posicao" name="codigoUO_posicao" value = "<?php echo $registro_posicao['codigoUO_posicao'];?>" required>
                            </div>

                            <div class="input-field" >
                            <label class="nomes">Job Evaluation</label>
                            <!-- <label class="dados"> </label> -->
                            <input type="text" name="job_evaluation_posicao" value = "<?php echo $registro_posicao['job_evaluation_posicao'];?>" required>
                            </div>

                        </div>
                    </div>

                    <?php

//puxar a img do bd
$consulta_ocupante_img = "select * from arquivos where numeroVW= " . $registro_posicao['numeroVW_ocupante'];
$resultado_ocupante_img = mysqli_query($conexao,$consulta_ocupante_img);
$registro_ocupante_img = mysqli_fetch_array($resultado_ocupante_img);

$consulta_ocupante = "select * from ocupante where numeroVW_ocupante= " . $registro_posicao['numeroVW_ocupante'];
$resultado_ocupante = mysqli_query($conexao,$consulta_ocupante);

//print_r($resultado_ocupante);
$row = mysqli_num_rows($resultado_ocupante);

if ($row == 0){
    echo "Numero VW digitado incorreto";
}
$registro_ocupante = mysqli_fetch_array($resultado_ocupante);

$data_ocupante = $registro_ocupante['na_posicao_desde_ocupante'];
$data_formatada = date("d/m/Y",strtotime($data_ocupante));

?>

                    <div class="container" style="top: 10px; width: 98%;">
                        <header>Ocupante</header>
                        <div class="form first">
                            <div class="details personal">

                                <div class="fields">
                                    <img src="../../upload_img/<?php echo $registro_ocupante_img['path_arquivos'];?>" style="width: 10vh;">

                                    <!-- <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"> -->

                                    <div class="input-field" >
                                        <label class="nomes">Nome</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="nome_ocupante" value = "<?php echo $registro_ocupante['nome_ocupante'];?>" required >
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Cargo</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="cargo_ocupante" value = "<?php echo $registro_ocupante['cargo_ocupante'];?>" required >
                                    </div>
                                    <br>

                                    <div class="input-field" >
                                        <label class="nomes">Número VW</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="number" name="numeroVW_ocupante" value = "<?php echo $registro_ocupante['numeroVW_ocupante'];?>" readonly required >
                                    </div>

                                    <div class="input-field">
                                        <label class="nomes">Grau</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="number" name="grau_ocupante" value = "<?php echo $registro_ocupante['grau_ocupante'];?>" required>
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Gênero</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="genero_ocupante" value = "<?php echo $registro_ocupante['genero_ocupante'];?>" required>
                                        <!-- <select required name="genero_ocupante" style="width: 140px;"readonly=“true”>
                                            <option disabled selected>Selecione</option>
                                            <option>Masculino</option>
                                            <option>Feminino</option>

                                        </select> -->
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Idade</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="number" name="idade_ocupante" value = "<?php echo $registro_ocupante['idade_ocupante'];?>" required >
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Tempo de VW</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="number" name="tempo_de_VW_ocupante" value = "<?php echo $registro_ocupante['tempo_de_VW_ocupante'];?>" required>
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Na posição Desde</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="na_posicao_desde_ocupante" value =" <?php echo $data_formatada;?>"required >
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Último GAP</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="ultimoGAP_ocupante" value = "<?php echo $registro_ocupante['ultimoGAP_ocupante'];?>" required >
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Último MBO</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="ultimoMBO_ocupante" value = "<?php echo $registro_ocupante['ultimoMBO_ocupante'];?>" required >
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Última avaliação geral</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="ultima_avaliacao_geral_ocupante" value = "<?php echo $registro_ocupante['ultima_avaliacao_geral_ocupante'];?>" required>
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Critérios de acesso</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="criterios_acesso_ocupante" value = "<?php echo $registro_ocupante['criterios_acesso_ocupante'];?>" required >
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Eixo What</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="eixoWhat_ocupante" value = "<?php echo $registro_ocupante['eixoWhat_ocupante'];?>" required>
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Posição anterior no 9Box</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="number" name="posicao_anterior_9box_ocupante" value = "<?php echo $registro_ocupante['posicao_anterior_9box_ocupante'];?>" required>
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Critérios de apontamento</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="criterios_de_apontamento_ocupante" value = "<?php echo $registro_ocupante['criterios_de_apontamento_ocupante'];?>" required >
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Eixo How</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="eixoHow_ocupante" value = "<?php echo $registro_ocupante['eixoHow_ocupante'];?>" required>
                                    </div>

                                    <div class="input-field" >
                                        <label class="nomes">Posição atual no 9Box</label>
                                        <!-- <label class="dados"> </label> -->
                                        <input type="text" name="posicao_atual_9box_ocupante" value = "<?php echo $registro_ocupante['posicao_atual_9box_ocupante'];?>" required>
                                    </div>


                                    <div class="input-field" style="width: 500px; height: 200px;">
                                        <label class="nomes">Próximos passos</label>
                                        <!-- <label class="dados" style="height:200px"> </label> -->
                                        <input type="text" name="proximos_passos_ocupante" value = "<?php echo $registro_ocupante['proximos_passos_ocupante'];?>" required >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
$consulta_imediato_img = "select * from arquivos where numeroVW= " . $registro_ocupante['numeroVW_imediato'];
$resultado_imediato_img = mysqli_query($conexao,$consulta_imediato_img);
$registro_imediato_img = mysqli_fetch_array($resultado_imediato_img);

$consulta_imediato = "select * from imediato where numeroVW_imediato= " . $registro_ocupante['numeroVW_imediato'];
$resultado_imediato = mysqli_query($conexao,$consulta_imediato);

//print_r($resultado_ocupante);
$row = mysqli_num_rows($resultado_imediato);

if ($row == 0){
    echo "Numero VW digitado incorreto";
}
$registro_imediato = mysqli_fetch_array($resultado_imediato);
?>

                <div class="container" style="top: 150px; width: 98%;">
                    <header>Sucessor Imediato</header>
                    <div class="form first">
                        <div class="details personal">

                        <div class="fields">
                        <img src="../../upload_img/<?php echo $registro_imediato_img['path_arquivos'];?>" style="width: 100px;">

                                <div class="input-field" >
                                    <label class="nomes">Nome</label>
                                    <!-- <label class="dados">  </label> -->
                                    <input type="text" name="nome_imediato" value = "<?php echo $registro_imediato['nome_imediato'];?>" required >
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Número VW</label>
                                    <!-- <label class="dados"> </label> -->
                                    <input type="number" name="numeroVW_imediato" value = "<?php echo $registro_imediato['numeroVW_imediato'];?>" readonly required>
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Gênero</label>
                                    <!-- <label class="dados"> </label> -->
                                    <input type="text" name="genero_imediato" value = "<?php echo $registro_imediato['genero_imediato'];?>" required>
                                    <!-- <select required name="genero_imediato" style="width: 140px;">
                                        <option disabled selected>Selecione</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>

                                    </select> -->
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Idade</label>
                                    <!-- <label class="dados"> </label> -->
                                    <input type="number" name="idade_imediato" value = "<?php echo $registro_imediato['idade_imediato'];?>" required >
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Tempo de VW</label>
                                    <!-- <label class="dados"> </label> -->
                                    <input type="number" name="tempo_de_VW_imediato" value = "<?php echo $registro_imediato['tempo_de_VW_imediato'];?>" required>
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Categoria</label>
                                    <input type="text" name="categoria_imediato" value = "<?php echo $registro_imediato['categoria_imediato'];?>" required>
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Último GAP</label>
                                    <input type="text" name="ultimoGAP_imediato" value = "<?php echo $registro_imediato['ultimoGAP_imediato'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Último MBO</label>
                                    <input type="text" name="ultimoMBO_imediato" value = "<?php echo $registro_imediato['ultimoMBO_imediato'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Última avaliação geral</label>
                                    <input type="text" name="ultima_avaliacao_geral_imediato" value = "<?php echo $registro_imediato['ultima_avaliacao_geral_imediato'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Critérios de acesso</label>
                                    <input type="text" name="criterios_de_acesso_imediato" value = "<?php echo $registro_imediato['criterios_de_acesso_imediato'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Eixo What</label>
                                    <input type="text" name="eixoWhat_imediato" value = "<?php echo $registro_imediato['eixoWhat_imediato'];?>"  required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Posição anterior no 9Box</label>
                                    <input type="number" name="posicao_anterior_9box_imediato" value = "<?php echo $registro_imediato['posicao_anterior_9box_imediato'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Critérios de apontamento</label>
                                    <input type="text" name="criterios_de_apontamento_imediato" value = "<?php echo $registro_imediato['criterios_de_apontamento_imediato'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Eixo How</label>
                                    <input type="text" name="eixoHow_imediato" value = "<?php echo $registro_imediato['eixoHow_imediato'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Posição atual no 9Box</label>
                                    <input type="text" name="posicao_atual_9box_imediato" value = "<?php echo $registro_imediato['posicao_atual_9box_imediato'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Etapa NDP</label>
                                    <input type="text" name="etapa_NDP_imediato" value = "<?php echo $registro_imediato['etapa_NDP_imediato'];?>" required>
                                </div>

                                <div style="width: 100px;"></div>

                                <div class="input-field" >
                                    <label class="nomes">Ações de Desenvolvimento</label>
                                    <input type="text" name="acoes_de_desenvolvimento_imediato" value = "<?php echo $registro_imediato['acoes_de_desenvolvimento_imediato'];?>" required>
                                    </div>

                                <div class="input-field" >
                                    <label class="nomes">Comentários</label>
                                    <input type="text" name="comentarios_imediato" value = "<?php echo $registro_imediato['comentarios_imediato'];?>" required>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php

//puxar a img do bd
$consulta_ideal_img = "select * from arquivos where numeroVW= " . $registro_ocupante['numeroVW_ideal'];
$resultado_ideal_img = mysqli_query($conexao,$consulta_ideal_img);
$registro_ideal_img = mysqli_fetch_array($resultado_ideal_img);

$consulta_ideal = "select * from ideal where numeroVW_ideal= " . $registro_ocupante['numeroVW_ideal'];
$resultado_ideal = mysqli_query($conexao,$consulta_ideal);

//print_r($resultado_ocupante);
$row = mysqli_num_rows($resultado_ideal);

if ($row == 0){
    echo "Numero VW digitado incorreto";
}
$registro_ideal = mysqli_fetch_array($resultado_ideal);
?>


                <div class="container" style="top: 150px; width: 98%;">
                    <header>Sucessor Ideal</header>


                    <div class="form first">
                        <div class="details personal">

                            <div class="fields">
                            <img src="../../upload_img/<?php echo $registro_ideal_img['path_arquivos'];?>" style="width: 100px;">


                                <div class="input-field">
                                    <label class="nomes">Nome</label>
                                    <input type="text" name="nome_ideal" value = "<?php echo $registro_ideal['nome_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Número VW</label>
                                    <input type="number" name="numeroVW_ideal" value = "<?php echo $registro_ideal['numeroVW_ideal'];?>" readonly required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Gênero</label>
                                    <input type="text" name="genero_ideal" value = "<?php echo $registro_ideal['genero_ideal'];?>" required>
                                    <!-- <select required name="genero_ideal" style="width: 140px;">
                                        <option disabled selected>Selecione</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                    </select> -->
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Idade</label>
                                    <input type="number" name="idade_ideal" value = "<?php echo $registro_ideal['idade_ideal'];?>" required >
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Tempo de VW</label>
                                    <input type="number" name="tempo_de_VW_ideal" value = "<?php echo $registro_ideal['tempo_de_VW_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Categoria</label>
                                    <input type="text" name="categoria_ideal" value = "<?php echo $registro_ideal['categoria_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Último GAP</label>
                                    <input type="text" name="ultimoGAP_ideal" value = "<?php echo $registro_ideal['ultimoGAP_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Último MBO</label>
                                    <input type="text" name="ultimoMBO_ideal" value = "<?php echo $registro_ideal['ultimoMBO_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Última avaliação geral</label>
                                    <input type="text" name="ultima_avaliacao_geral_ideal"  value = "<?php echo $registro_ideal['ultima_avaliacao_geral_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Critérios de acesso</label>
                                    <input type="text" name="criterios_de_acesso_ideal" value = "<?php echo $registro_ideal['criterios_de_acesso_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Eixo What</label>
                                    <input type="text" name="eixoWhat_ideal" value = "<?php echo $registro_ideal['eixoWhat_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Posição anterior no 9Box</label>
                                     <input type="number" name="posicao_anterior_9box_ideal" value = "<?php echo $registro_ideal['posicao_anterior_9box_ideal'];?>" required>
                                    </div>

                                <div class="input-field">
                                    <label class="nomes">Critérios de apontamento</label>
                                    <input type="text" name="criterios_de_apontamento_ideal" value = "<?php echo $registro_ideal['criterios_de_apontamento_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Eixo How</label>
                                    <input type="text" name="eixoHow_ideal" value = "<?php echo $registro_ideal['eixoHow_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Posição atual no 9Box</label>
                                    <input type="text" name="posicao_atual_9box_ideal" value = "<?php echo $registro_ideal['posicao_atual_9box_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Etapa NDP</label>
                                    <input type="text" name="etapa_NDP_ideal"  value = "<?php echo $registro_ideal['etapa_NDP_ideal'];?>" required>
                                </div>
                                <div style="width: 100px;"></div>
                                <div class="input-field">
                                    <label class="nomes">Ações de Desenvolvimento</label>
                                    <input type="text" name="acoes_de_desenvolvimento_ideal" value = "<?php echo $registro_ideal['acoes_de_desenvolvimento_ideal'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Comentários</label>
                                    <input type="text" name="comentarios_ideal" value = "<?php echo $registro_ideal['comentarios_ideal'];?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php

//puxar a img do bd
$consulta_futuro_img = "select * from arquivos where numeroVW= " . $registro_ocupante['numeroVW_futuro'];
$resultado_futuro_img = mysqli_query($conexao,$consulta_futuro_img);
$registro_futuro_img = mysqli_fetch_array($resultado_futuro_img);

$consulta_futuro = "select * from futuro where numeroVW_futuro= " . $registro_ocupante['numeroVW_futuro'];
$resultado_futuro = mysqli_query($conexao,$consulta_futuro);

//print_r($resultado_ocupante);
$row = mysqli_num_rows($resultado_futuro);

if ($row == 0){
    echo "Numero VW digitado incorreto";
}
$registro_futuro = mysqli_fetch_array($resultado_futuro);
?>
                <div class="container" style="top: 150px; width: 98%;">
                    <header>Sucessor Futuro</header>


                    <div class="form first">
                        <div class="details personal">



                            <div class="fields">
                            <img src="../../upload_img/<?php echo $registro_futuro_img['path_arquivos'];?>" style="width: 100px;">


                                <div class="input-field">
                                    <label class="nomes">Nome</label>
                                    <input type="text" name="nome_futuro" value = "<?php echo $registro_futuro['nome_futuro'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Número VW</label>
                                    <input type="number" name="numeroVW_futuro" value = "<?php echo $registro_futuro['numeroVW_futuro'];?>" readonly required>
                                </div>


                                <div class="input-field">
                                    <label class="nomes">Gênero</label>
                                    <input type="text" name="genero_futuro" value = "<?php echo $registro_futuro['genero_futuro'];?>" required>

                                    <!-- <select required name="genero_futuro" style="width: 140px;">
                                        <option disabled selected>Selecione</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                    </select> -->
                                </div>


                                <div class="input-field">
                                    <label class="nomes">Idade</label>
                                    <input type="number" name="idade_futuro" value = "<?php echo $registro_futuro['idade_futuro'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Tempo de VW</label>
                                    <input type="number" name="tempo_de_VW_futuro" value = "<?php echo $registro_futuro['tempo_de_VW_futuro'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Categoria</label>
                                    <input type="text" name="categoria_futuro" value = "<?php echo $registro_futuro['categoria_futuro'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Último GAP</label>
                                    <input type="text" name="ultimoGAP_futuro" value = "<?php echo $registro_futuro['ultimoGAP_futuro'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Último MBO</label>
                                    <input type="text" name="ultimoMBO_futuro" value = "<?php echo $registro_futuro['ultimoMBO_futuro'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Última avaliação geral</label>
                                    <input type="text" name="ultima_avaliacao_geral_futuro" value = "<?php echo $registro_futuro['ultima_avaliacao_geral_futuro'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Critérios de acesso</label>
                                    <input type="text" name="criterios_de_acesso_futuro" value = "<?php echo $registro_futuro['criterios_de_acesso_futuro'];?>" required>
                                </div>

                                <div class="input-field">
                                    <label class="nomes">Eixo What</label>
                                    <input type="text" name="eixoWhat_futuro" value = "<?php echo $registro_futuro['eixoWhat_futuro'];?>" required>
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Posição anterior no 9Box</label>
                                    <input type="number" name="posicao_anterior_9box_futuro" value = "<?php echo $registro_futuro['posicao_anterior_9box_futuro'];?>" required>
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Critérios de apontamento</label>
                                    <input type="text" name="criterios_de_apontamento_futuro" value = "<?php echo $registro_futuro['criterios_de_apontamento_futuro'];?>" required>
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Eixo How</label>
                                    <input type="text" name="eixoHow_futuro" value = "<?php echo $registro_futuro['eixoHow_futuro'];?>" required>
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Posição atual no 9Box</label>
                                    <input type="text" name="posicao_atual_9box_futuro" value = "<?php echo $registro_futuro['posicao_atual_9box_futuro'];?>" required>
                                </div>

                                <div class="input-field" >
                                    <label class="nomes">Etapa NDP</label>
                                    <input type="text" name="etapa_NDP_futuro" value = "<?php echo $registro_futuro['etapa_NDP_futuro'];?>" required>
                                </div>

                                <div style="width: 90px;"></div>

                                <div class="input-field" style="width: 500px; height: 200px;">
                                    <label class="nomes">Ações de Desenvolvimento</label>
                                    <input type="text" name="acoes_de_desenvolvimento_futuro" value = "<?php echo $registro_futuro['acoes_de_desenvolvimento_futuro'];?>" required>
                                </div>

                                <div class="input-field" style="width: 500px; height: 200px;">
                                    <label class="nomes">Comentários</label>
                                    <input type="text" name="comentarios_futuro"  value = "<?php echo $registro_futuro['comentarios_futuro'];?>" required>
                                </div>

                            </div>
                            <input type="hidden" name="id" value="<<?php echo $id?>">
                            <center>
                                <input type="submit" name="update" value="Salvar" class="btn effect01" style="width: 200px; height:50px">
                             </center>

                        </div>
                    </div>

                </div>
        </div>
        </div>
        </form>
</section>
    </section>
    <script src="script.js"></script>
</body>
<?php
}
?>
</html>