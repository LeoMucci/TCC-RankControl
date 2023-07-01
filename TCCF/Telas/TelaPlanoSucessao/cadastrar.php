<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conexao = mysqli_connect("localhost", "root", "", "banco");

    if ($conexao == FALSE)
    {
      echo "Não foi possivel conectar-se ao PhpMyAdmin";
      exit;
    }

     $numeroVW_ocupante=$_POST['numeroVW_ocupante'];
     $nome_da_UO_posicao=$_POST['nome_da_UO_posicao'];
     $diretoria_posicao=$_POST['diretoria_posicao'];
     $abreviacao_UO_posicao=$_POST['abreviacao_UO_posicao'];
     $numeroVW_superior_direto=$_POST['numeroVW_superior_direto'];
     $superior_direto_posicao=$_POST['superior_direto_posicao'];
     $numeroVW_superior_g70_posicao=$_POST['numeroVW_superior_g70_posicao'];
     $superior_g70_posicao=$_POST['superior_g70_posicao'];
     $g70_posicao=$_POST['g70_posicao'];
     $job_evaluation_posicao=$_POST['job_evaluation_posicao'];
     $codigoUO_posicao=$_POST['codigoUO_posicao'];
     $local_posicao=$_POST['local_posicao'];

     $sql1 = "INSERT INTO posicao (idPosicao, numeroVW_ocupante, nome_da_UO_posicao, diretoria_posicao, abreviacao_UO_posicao, numeroVW_superior_direto, superior_direto_posicao, numeroVW_superior_g70_posicao, superior_g70_posicao, g70_posicao,  job_evaluation_posicao, codigoUO_posicao, local_posicao) VALUES (NULL,'$numeroVW_ocupante' ,'$nome_da_UO_posicao', '$diretoria_posicao', '$abreviacao_UO_posicao', '$numeroVW_superior_direto', '$superior_direto_posicao' , '$numeroVW_superior_g70_posicao' , '$superior_g70_posicao' ,'$g70_posicao' , '$job_evaluation_posicao' , '$codigoUO_posicao' , '$local_posicao')";
     $resultado1 = mysqli_query($conexao, $sql1);

//form2 

//arquivos

     $path_arquivos_ocupante=$_FILES['path_arquivos_ocupante'];
     $numeroVW_ocupante=$_POST['numeroVW_ocupante'];
     $extensao_ocupante = strtolower(pathinfo($path_arquivos_ocupante['name'], PATHINFO_EXTENSION));
     $novo_nome_ocupante = md5(time()). "." .$extensao_ocupante;
     $diretorio = "../../upload_img/";

     $deu_certo1 = move_uploaded_file($path_arquivos_ocupante['tmp_name'], $diretorio.$novo_nome_ocupante);
     $sql_img1 = "INSERT INTO arquivos (idArquivos, path_arquivos, numerovw) VALUES(NULL, '$novo_nome_ocupante', '$numeroVW_ocupante')";
     $resultado_img1 = mysqli_query($conexao, $sql_img1);

     $nome_ocupante=$_POST['nome_ocupante'];
     $cargo_ocupante=$_POST['cargo_ocupante'];
     $numeroVW_ocupante=$_POST['numeroVW_ocupante'];
     $numeroVW_imediato=$_POST['numeroVW_imediato'];
     $numeroVW_ideal=$_POST['numeroVW_ideal'];
     $numeroVW_futuro=$_POST['numeroVW_futuro'];
     $grau_ocupante=$_POST['grau_ocupante'];
     $genero_ocupante=$_POST['genero_ocupante'];
     $idade_ocupante=$_POST['idade_ocupante'];
     $tempo_de_VW_ocupante=$_POST['tempo_de_VW_ocupante'];
     $na_posicao_desde_ocupante=$_POST['na_posicao_desde_ocupante'];
     $ultimoGAP_ocupante=$_POST['ultimoGAP_ocupante'];
     $ultimoMBO_ocupante=$_POST['ultimoMBO_ocupante'];
     $ultima_avaliacao_geral_ocupante=$_POST['ultima_avaliacao_geral_ocupante'];
     $proximos_passos_ocupante=$_POST['proximos_passos_ocupante'];
     $posicao_anterior_9box_ocupante=$_POST['posicao_anterior_9box_ocupante'];
     $posicao_atual_9box_ocupante=$_POST['posicao_atual_9box_ocupante'];
     $eixoHow_ocupante=$_POST['eixoHow_ocupante'];
     $eixoWhat_ocupante=$_POST['eixoWhat_ocupante'];
     $eixoWhat_ocupante=$_POST['criterios_de_apontamento_ocupante'];
     $criterios_acesso_ocupante=$_POST['criterios_acesso_ocupante'];
     $criterios_de_apontamento_ocupante=$_POST['criterios_de_apontamento_ocupante'];

     $sql2 = "INSERT INTO ocupante (idOcupante, nome_ocupante, cargo_ocupante, numeroVW_ocupante, numeroVW_imediato, numeroVW_ideal, numeroVW_futuro, grau_ocupante, genero_ocupante, idade_ocupante, tempo_de_VW_ocupante, na_posicao_desde_ocupante, ultimoGAP_ocupante, ultimoMBO_ocupante, ultima_avaliacao_geral_ocupante, proximos_passos_ocupante, posicao_anterior_9box_ocupante, posicao_atual_9box_ocupante, eixoHow_ocupante, eixoWhat_ocupante, criterios_de_apontamento_ocupante, criterios_acesso_ocupante) VALUES (NULL,'$nome_ocupante', '$cargo_ocupante', '$numeroVW_ocupante', '$numeroVW_imediato', '$numeroVW_ideal' ,'$numeroVW_futuro' , '$grau_ocupante', '$genero_ocupante', '$idade_ocupante', '$tempo_de_VW_ocupante', '$na_posicao_desde_ocupante', '$ultimoGAP_ocupante', '$ultimoMBO_ocupante' , '$ultima_avaliacao_geral_ocupante', '$proximos_passos_ocupante', '$posicao_anterior_9box_ocupante','$posicao_atual_9box_ocupante', '$eixoHow_ocupante', '$eixoWhat_ocupante', '$criterios_de_apontamento_ocupante', '$criterios_acesso_ocupante')";
     $resultado2 = mysqli_query($conexao, $sql2);

//  //3form
    $path_arquivos_imediato=$_FILES['path_arquivos_imediato'];
    $numeroVW_imediato=$_POST['numeroVW_imediato']; 
    $extensao_imediato = strtolower(pathinfo($path_arquivos_imediato['name'], PATHINFO_EXTENSION));
    $novo_nome_imediato = md5(md5(time())). "." .$extensao_imediato;
    $diretorio = "../../upload_img/";

    $deu_certo2= move_uploaded_file($path_arquivos_imediato['tmp_name'], $diretorio.$novo_nome_imediato);
    $sql_img2 = "INSERT INTO arquivos (idArquivos, path_arquivos, numerovw) VALUES(NULL, '$novo_nome_imediato', '$numeroVW_imediato')";
    $resultado_img2 = mysqli_query($conexao, $sql_img2);
    

    $nome_imediato=$_POST['nome_imediato'];
    $numeroVW_imediato=$_POST['numeroVW_imediato'];
    $idade_imediato=$_POST['idade_imediato'];
    $genero_imediato=$_POST['genero_imediato'];
    $tempo_de_VW_imediato=$_POST['tempo_de_VW_imediato'];
    $categoria_imediato=$_POST['categoria_imediato'];
    $ultimoGAP_imediato=$_POST['ultimoGAP_imediato'];
    $ultimoMBO_imediato=$_POST['ultimoMBO_imediato'];
    $ultima_avaliacao_geral_imediato=$_POST['ultima_avaliacao_geral_imediato'];
    $comentarios_imediato=$_POST['comentarios_imediato'];
    $posicao_anterior_9box_imediato=$_POST['posicao_anterior_9box_imediato'];
    $posicao_atual_9box_imediato=$_POST['posicao_atual_9box_imediato'];
    $eixoHow_imediato=$_POST['eixoHow_imediato'];
    $eixoWhat_imediato=$_POST['eixoWhat_imediato'];
    $criterios_de_apontamento_imediato=$_POST['criterios_de_apontamento_imediato'];
    $criterios_de_acesso_imediato=$_POST['criterios_de_acesso_imediato'];
    $etapa_NDP_imediato=$_POST['etapa_NDP_imediato'];
    $acoes_de_desenvolvimento_imediato=$_POST['acoes_de_desenvolvimento_imediato'];

    $sql3 = "INSERT INTO imediato (idImediato, nome_imediato, numeroVW_imediato, idade_imediato, genero_imediato, tempo_de_VW_imediato , categoria_imediato, ultimoGAP_imediato, ultimoMBO_imediato, ultima_avaliacao_geral_imediato, comentarios_imediato, posicao_anterior_9box_imediato, posicao_atual_9box_imediato, eixoHow_imediato, eixoWhat_imediato, criterios_de_apontamento_imediato, criterios_de_acesso_imediato, etapa_NDP_imediato, acoes_de_desenvolvimento_imediato ) VALUES (NULL, '$nome_imediato', '$numeroVW_imediato', '$idade_imediato', '$genero_imediato', '$tempo_de_VW_imediato' , '$categoria_imediato', '$ultimoGAP_imediato', '$ultimoMBO_imediato','$ultima_avaliacao_geral_imediato', '$comentarios_imediato', '$posicao_anterior_9box_imediato', '$posicao_atual_9box_imediato', '$eixoHow_imediato', '$eixoWhat_imediato', '$criterios_de_apontamento_imediato', '$criterios_de_acesso_imediato','$etapa_NDP_imediato', '$acoes_de_desenvolvimento_imediato')";
    $resultado3 = mysqli_query($conexao, $sql3);

 //form4

    $path_arquivos_ideal=$_FILES['path_arquivos_ideal'];
    $numeroVW_ideal=$_POST['numeroVW_ideal'];
    $extensao_ideal = strtolower(pathinfo($path_arquivos_ideal['name'], PATHINFO_EXTENSION));
    $novo_nome_ideal = md5(md5(md5(time()))). "." .$extensao_ideal;
    $diretorio = "../../upload_img/";

    $deu_certo3 =  move_uploaded_file($path_arquivos_ideal['tmp_name'], $diretorio.$novo_nome_ideal);
    $sql_img3 = "INSERT INTO arquivos (idArquivos, path_arquivos, numerovw) VALUES(NULL, '$novo_nome_ideal', '$numeroVW_ideal')";
    $resultado_img3 = mysqli_query($conexao, $sql_img3);

    $nome_ideal=$_POST['nome_ideal'];
    $numeroVW_ideal=$_POST['numeroVW_ideal'];
    $idade_ideal=$_POST['idade_ideal'];
    $genero_ideal=$_POST['genero_ideal'];
    $tempo_de_VW_ideal=$_POST['tempo_de_VW_ideal'];
    $categoria_ideal=$_POST['categoria_ideal'];
    $ultimoGAP_ideal=$_POST['ultimoGAP_ideal'];
    $ultimoMBO_ideal=$_POST['ultimoMBO_ideal'];
    $ultima_avaliacao_geral_ideal=$_POST['ultima_avaliacao_geral_ideal'];
    $comentarios_ideal=$_POST['comentarios_ideal'];
    $posicao_anterior_9box_ideal=$_POST['posicao_anterior_9box_ideal'];
    $posicao_atual_9box_ideal=$_POST['posicao_atual_9box_ideal'];
    $eixoHow_ideal=$_POST['eixoHow_ideal'];
    $eixoWhat_ideal=$_POST['eixoWhat_ideal'];
    $criterios_de_apontamento_ideal=$_POST['criterios_de_apontamento_ideal'];
    $criterios_de_acesso_ideal=$_POST['criterios_de_acesso_ideal'];
    $etapa_NDP_ideal=$_POST['etapa_NDP_ideal'];
    $acoes_de_desenvolvimento_ideal=$_POST['acoes_de_desenvolvimento_ideal'];

    $sql4 = "INSERT INTO ideal (idIdeal, nome_ideal, numeroVW_ideal, idade_ideal, genero_ideal, tempo_de_VW_ideal, categoria_ideal, ultimoGAP_ideal, ultimoMBO_ideal, ultima_avaliacao_geral_ideal, comentarios_ideal, posicao_anterior_9box_ideal, posicao_atual_9box_ideal, eixoHow_ideal, eixoWhat_ideal, criterios_de_apontamento_ideal, criterios_de_acesso_ideal, etapa_NDP_ideal, acoes_de_desenvolvimento_ideal ) VALUES (NULL, '$nome_ideal', '$numeroVW_ideal', '$idade_ideal', '$genero_ideal', '$tempo_de_VW_ideal' , '$categoria_ideal', '$ultimoGAP_ideal', '$ultimoMBO_ideal','$ultima_avaliacao_geral_ideal', '$comentarios_ideal', '$posicao_anterior_9box_ideal', '$posicao_atual_9box_ideal', '$eixoHow_ideal', '$eixoWhat_ideal', '$criterios_de_apontamento_ideal', '$criterios_de_acesso_ideal','$etapa_NDP_ideal', '$acoes_de_desenvolvimento_ideal')";
    $resultado4 = mysqli_query($conexao, $sql4);

 //form5

    $path_arquivos_futuro=$_FILES['path_arquivos_futuro'];
    $numeroVW_futuro=$_POST['numeroVW_futuro'];
    $extensao_futuro = strtolower(pathinfo($path_arquivos_futuro['name'], PATHINFO_EXTENSION));
    $novo_nome_futuro =  md5(md5(md5(md5(time())))). "." .$extensao_futuro;
    $diretorio = "../../upload_img/";

    $deu_certo4 = move_uploaded_file($path_arquivos_futuro['tmp_name'], $diretorio.$novo_nome_futuro);
    $sql_img4 = "INSERT INTO arquivos (idArquivos, path_arquivos, numerovw) VALUES(NULL, '$novo_nome_futuro', '$numeroVW_futuro')";
    $resultado_img4 = mysqli_query($conexao, $sql_img4);

    $nome_futuro=$_POST['nome_futuro'];
    $numeroVW_futuro=$_POST['numeroVW_futuro'];
    $idade_futuro=$_POST['idade_futuro'];
    $genero_futuro=$_POST['genero_futuro'];
    $tempo_de_VW_futuro=$_POST['tempo_de_VW_futuro'];
    $categoria_futuro=$_POST['categoria_futuro'];
    $ultimoGAP_futuro=$_POST['ultimoGAP_futuro'];
    $ultimoMBO_futuro=$_POST['ultimoMBO_futuro'];
    $ultima_avaliacao_geral_futuro=$_POST['ultima_avaliacao_geral_futuro'];
    $comentarios_futuro=$_POST['comentarios_futuro'];
    $posicao_anterior_9box_futuro=$_POST['posicao_anterior_9box_futuro'];
    $posicao_atual_9box_futuro=$_POST['posicao_atual_9box_futuro'];
    $eixoHow_futuro=$_POST['eixoHow_futuro'];
    $eixoWhat_futuro=$_POST['eixoWhat_futuro'];
    $criterios_de_apontamento_futuro=$_POST['criterios_de_apontamento_futuro'];
    $criterios_de_acesso_futuro=$_POST['criterios_de_acesso_futuro'];
    $etapa_NDP_futuro=$_POST['etapa_NDP_futuro'];
    $acoes_de_desenvolvimento_futuro=$_POST['acoes_de_desenvolvimento_futuro'];

    $sql5 = "INSERT INTO futuro (idFuturo, nome_futuro, numeroVW_futuro, idade_futuro, genero_futuro, tempo_de_VW_futuro, categoria_futuro, ultimoGAP_futuro, ultimoMBO_futuro, ultima_avaliacao_geral_futuro, comentarios_futuro, posicao_anterior_9box_futuro, posicao_atual_9box_futuro, eixoHow_futuro, eixoWhat_futuro, criterios_de_apontamento_futuro, criterios_de_acesso_futuro, etapa_NDP_futuro, acoes_de_desenvolvimento_futuro) VALUES (NULL, '$nome_futuro', '$numeroVW_futuro', '$idade_futuro', '$genero_futuro', '$tempo_de_VW_futuro' , '$categoria_futuro','$ultimoGAP_futuro', '$ultimoMBO_futuro','$ultima_avaliacao_geral_futuro', '$comentarios_futuro', '$posicao_anterior_9box_futuro', '$posicao_atual_9box_futuro', '$eixoHow_futuro', '$eixoWhat_futuro', '$criterios_de_apontamento_futuro', '$criterios_de_acesso_futuro','$etapa_NDP_futuro', '$acoes_de_desenvolvimento_futuro')";
    $resultado5 = mysqli_query($conexao, $sql5);

    if ($resultado1==false AND $resultado_img1 == false AND $resultado2==false AND $resultado_img2 == false AND $resultado3==false AND $resultado_img3 == false AND $resultado4==false AND $resultado_img4 == false  AND $resultado5==false)
    { 
        echo "<script>alert(\"Não Foi Possível Cadastrar, Tente Novamente!!!\")
        window.location='index.html';;</script>";
    }
        else{
            // echo "<script>alert(\"Funcionário Cadastrado com Sucesso!!\")
            //         window.location='index.html';;</script>";
                echo "ops";
        } 
    ?>
</body>
</html>