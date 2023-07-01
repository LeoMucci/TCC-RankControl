<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Account Settings UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<section class="py-4 my-5 mb-5">
		<div class="container">

			<a href="index.html">
			<button class="learn-more">
				<span class="circle" aria-hidden="true">
				<span class="icon arrow"></span>
				</span>
				<span class="button-text">Voltar</span>
			  </button>
			</a>
			

<?php
if (isset($_POST['numerovw'])){
		
    $conexao = mysqli_connect("localhost", "root", "", "banco");

    if ($conexao == FALSE)
    {
        echo "<script>alert(\"Não foi possivel conectar-se ao PhpMyAdmin \")
        window.location='index.php';;</script>";
    } 

	$numerovw = $_POST['numerovw'];
	$consulta_ocupante = "select * from ocupante where numeroVW_ocupante= " . $numerovw;
	$resultado_ocupante = mysqli_query($conexao,$consulta_ocupante);
	$row = mysqli_num_rows($resultado_ocupante);
if ($row == 0){
		echo "<script>alert(\"Registro não encontrado\")
		window.location='index.html';;</script>"; 
	}
	///posicao
		$consulta_posicao = "select * from posicao where numeroVW_ocupante= " . $numerovw;
        $resultado_posicao = mysqli_query($conexao,$consulta_posicao);
		$registro_posicao = mysqli_fetch_array($resultado_posicao);

//ocupante
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


//imediato
//puxar a img do bd
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


//ideal
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



//futuro
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
			<h1 class="mb-5" style="color:white";>Plano de Sucessão</h1>
			<div class="shadow rounded-lg d-block d-sm-flex" id="corf">
				<div class="profile-tab-nav border-right">
					<div class="p-4">

						<div class="img-square text-center mb-3">
							<img src="img/logonova.png" alt="Image" style="width: 40%;">



						</div>
						<h4 class="text-center"></h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab"
							aria-controls="account" aria-selected="true">
							<i class="fa fa-user text-center mr-1"></i>
							Posição
						</a>
						<a class="nav-link" id="text-tab" data-toggle="pill" href="#text" role="tab"
							aria-controls="text" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							Ocupante
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab"
							aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							Sucessor Imediato
						</a>
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab"
							aria-controls="application" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							Sucessor Ideal
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab"
							aria-controls="notification" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							Sucessor Futuro
						</a>
					</div>
				</div>

				<!--------------------- Posição ------------------------->

				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Posição</h3>
						<div class="row">

							<div class="col-md-4">
								<div class="form-group">
									<label>Nome da UO</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['nome_da_UO_posicao'];?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Diretoria</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['diretoria_posicao'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Número VW superior</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['numeroVW_superior_direto'];?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Superior Direto</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['superior_direto_posicao'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>UO Abrev</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['abreviacao_UO_posicao'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>É G70?</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['g70_posicao'];?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Número VW superior G70</label>
									<input type="text" class="form-control" readonly value=" <?php echo $registro_posicao['numeroVW_superior_g70_posicao'];?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Superior G70</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['superior_g70_posicao'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Local</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['local_posicao'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Código da UO</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['codigoUO_posicao'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Job evaluation</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_posicao['job_evaluation_posicao'];?>">
								</div>
							</div>

						</div>

					</div>

					<!--------------------- Ocupante ------------------------->

					<div class="tab-pane fade" id="text" role="tabpanel" aria-labelledby="text-tab">
						<h3 class="mb-4">Ocupante</h3>

						<div class="row">

						<div class="img-square text-left mb-3" style="width: 100px ;">
						<img src="../../upload_img/<?php echo $registro_ocupante_img['path_arquivos'];?>" style="width: 100px;">
						</div>


						

						
							<div class="col-md-4">
								<div class="form-group">
									<label>Nome</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['nome_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label>Cargo</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['cargo_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Número VW</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['numeroVW_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-1">
								<div class="form-group">
									<label>Grau</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['grau_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-1">
								<div class="form-group">
									<label>Gênero</label>
									<input type="text" class="form-control" readonly value=" <?php echo $registro_ocupante['genero_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-1">
								<div class="form-group">
									<label>Idade</label>
									<input type="text" class="form-control" readonly value=" <?php echo $registro_ocupante['idade_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Tempo de VW</label>
									<input type="text" class="form-control" readonly value=" <?php echo $registro_ocupante['tempo_de_VW_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Na Posição Desde</label>
									<input type="text" class="form-control" readonly value="<?php echo $data_formatada;?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Último GAP</label>
									<input type="text" class="form-control" readonly value=" <?php echo $registro_ocupante['ultimoGAP_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Último MBO</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['ultimoMBO_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Última Avaliação Geral</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['ultima_avaliacao_geral_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Critérios de Acesso</label>
									<input type="text" class="form-control" readonly value=" <?php echo $registro_ocupante['criterios_acesso_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<label>Eixo What</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['eixoWhat_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label>Posição Anterior do 9-Box</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['posicao_anterior_9box_ocupante'];?>">
								</div>
							</div>
						
							<div class="col-md-3">
								<div class="form-group">
									<label>Critérios de Apontamento</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['criterios_de_apontamento_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Próximos Passos</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['proximos_passos_ocupante'];?>">
								</div>
							</div>
						
							<div class="col-md-2">
								<div class="form-group">
									<label>Eixo How</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['eixoHow_ocupante'];?>">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label>Posição Atual do 9-Box</label>
									<input type="text" class="form-control" readonly value="<?php echo $registro_ocupante['posicao_atual_9box_ocupante'];?>">
								</div>
							</div>
						
						
					</div>
					</div>

					<!--------------------- Sucessor Imediato ------------------------->

					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Sucessor Imediato</h3>
						<div class="row">

							<div class="img-square text-left mb-3" style="width: 100px ;">
							<img src="../../upload_img/<?php echo $registro_imediato_img['path_arquivos'];?>" style="width: 100px;">
							</div>
	
	
							
	
							
								<div class="col-md-4">
									<div class="form-group">
										<label>Nome</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['nome_imediato'];?>">
									</div>
								</div>

								<div class="col-md-2">
									<div class="form-group">
										<label>Número VW</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['numeroVW_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-1">
									<div class="form-group">
										<label>Gênero</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['genero_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-1">
									<div class="form-group">
										<label>Idade</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['idade_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-2">
									<div class="form-group">
										<label>Tempo de VW</label>
										<input type="text" class="form-control" readonly value=" <?php echo $registro_imediato['tempo_de_VW_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-4">
									<div class="form-group">
										<label>Categoria</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['categoria_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-2">
									<div class="form-group">
										<label>Último GAP</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['ultimoGAP_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-2">
									<div class="form-group">
										<label>Último MBO</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['ultimoMBO_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-3">
									<div class="form-group">
										<label>Última Avaliação Geral</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['ultima_avaliacao_geral_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-4">
									<div class="form-group">
										<label>Critérios de Acesso</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['criterios_de_acesso_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-2">
									<div class="form-group">
										<label>Eixo What</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['eixoWhat_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-4">
									<div class="form-group">
										<label>Posição Anterior do 9-Box</label>
										<input type="text" class="form-control" readonly value=" <?php echo $registro_imediato['posicao_anterior_9box_imediato'];?>">
									</div>
								</div>
							
								<div class="col-md-4">
									<div class="form-group">
										<label>Critérios de Apontamento</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['criterios_de_apontamento_imediato'];?>">
									</div>
								</div>
							
								<div class="col-md-2">
									<div class="form-group">
										<label>Eixo How</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['eixoHow_imediato'];?>">
									</div>
								</div>
	
								<div class="col-md-4">
									<div class="form-group">
										<label>Posição Atual do 9-Box</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['posicao_atual_9box_imediato'];?>">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Etapa NDP</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['etapa_NDP_imediato'];?>">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Ações de Desenvolvimento</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['acoes_de_desenvolvimento_imediato'];?> ">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Comentários</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_imediato['comentarios_imediato'];?>">
									</div>
								</div>

						</div>
					</div>

					<!--------------------- Sucessor Ideal ------------------------->

					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Sucessor Ideal</h3>

						<div class="row">

							<div class="img-square text-left mb-3" style="width: 100px ;">
							<img src="../../upload_img/<?php echo $registro_ideal_img['path_arquivos'];?>" style="width: 100px;">
							</div>
	

								<div class="col-md-4">
									<div class="form-group">
										<label>Nome</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['nome_ideal'];?>">
									</div>
								</div>

								<div class="col-md-2">
									<div class="form-group">
										<label>Número VW</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['numeroVW_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-1">
									<div class="form-group">
										<label>Gênero</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['genero_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-1">
									<div class="form-group">
										<label>Idade</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['idade_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-2">
									<div class="form-group">
										<label>Tempo de VW</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['tempo_de_VW_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-4">
									<div class="form-group">
										<label>Categoria</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['categoria_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-2">
									<div class="form-group">
										<label>Último GAP</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['ultimoGAP_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-2">
									<div class="form-group">
										<label>Último MBO</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['ultimoMBO_ideal'];?> ">
									</div>
								</div>
	
								<div class="col-md-3">
									<div class="form-group">
										<label>Última Avaliação Geral</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['ultima_avaliacao_geral_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-4">
									<div class="form-group">
										<label>Critérios de Acesso</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['criterios_de_acesso_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-2">
									<div class="form-group">
										<label>Eixo What</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['eixoWhat_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-4">
									<div class="form-group">
										<label>Posição Anterior do 9-Box</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['posicao_anterior_9box_ideal'];?>">
									</div>
								</div>
							
								<div class="col-md-4">
									<div class="form-group">
										<label>Critérios de Apontamento</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['criterios_de_apontamento_ideal'];?>">
									</div>
								</div>
							
								<div class="col-md-2">
									<div class="form-group">
										<label>Eixo How</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['eixoHow_ideal'];?>">
									</div>
								</div>
	
								<div class="col-md-4">
									<div class="form-group">
										<label>Posição Atual do 9-Box</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['posicao_atual_9box_ideal'];?>">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Etapa NDP</label>
										<input type="text" class="form-control" readonly value=" <?php echo $registro_ideal['etapa_NDP_ideal'];?>">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Ações de Desenvolvimento</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['acoes_de_desenvolvimento_ideal'];?>">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Comentários</label>
										<input type="text" class="form-control" readonly value="<?php echo $registro_ideal['comentarios_ideal'];?>">
									</div>
								</div>

						</div>
					</div>

					<!--------------------- Sucessor Futuro ------------------------->

					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Sucessor Futuro</h3>
						<div class="form-group">
							<div class="row">

								<div class="img-square text-left mb-3" style="width: 100px ;">
								<img src="../../upload_img/<?php echo $registro_futuro_img['path_arquivos'];?>" style="width: 100px;">
								</div>
		
		
								
		
								
									<div class="col-md-4">
										<div class="form-group">
											<label>Nome</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['nome_futuro'];?>">
										</div>
									</div>
	
									<div class="col-md-2">
										<div class="form-group">
											<label>Número VW</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['numeroVW_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-1">
										<div class="form-group">
											<label>Gênero</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['genero_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-1">
										<div class="form-group">
											<label>Idade</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['idade_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-2">
										<div class="form-group">
											<label>Tempo de VW</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['tempo_de_VW_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-4">
										<div class="form-group">
											<label>Categoria</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['categoria_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-2">
										<div class="form-group">
											<label>Último GAP</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['ultimoGAP_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-2">
										<div class="form-group">
											<label>Último MBO</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['ultimoMBO_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-3">
										<div class="form-group">
											<label>Última Avaliação Geral</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['ultima_avaliacao_geral_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-4">
										<div class="form-group">
											<label>Critérios de Acesso</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['criterios_de_acesso_futuro'];?> ">
										</div>
									</div>
		
									<div class="col-md-2">
										<div class="form-group">
											<label>Eixo What</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['eixoWhat_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-4">
										<div class="form-group">
											<label>Posição Anterior do 9-Box</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['posicao_anterior_9box_futuro'];?>">
										</div>
									</div>
								
									<div class="col-md-4">
										<div class="form-group">
											<label>Critérios de Apontamento</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['criterios_de_apontamento_futuro'];?>">
										</div>
									</div>
								
									<div class="col-md-2">
										<div class="form-group">
											<label>Eixo How</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['eixoHow_futuro'];?>">
										</div>
									</div>
		
									<div class="col-md-4">
										<div class="form-group">
											<label>Posição Atual do 9-Box</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['posicao_atual_9box_futuro'];?>">
										</div>
									</div>
	
									<div class="col-md-4">
										<div class="form-group">
											<label>Etapa NDP</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['etapa_NDP_futuro'];?>">
										</div>
									</div>
	
									<div class="col-md-4">
										<div class="form-group">
											<label>Ações de Desenvolvimento</label>
											<input type="text" class="form-control" readonly value=" <?php echo $registro_futuro['acoes_de_desenvolvimento_futuro'];?>">
										</div>
									</div>
	
									<div class="col-md-4">
										<div class="form-group">
											<label>Comentários</label>
											<input type="text" class="form-control" readonly value="<?php echo $registro_futuro['comentarios_futuro'];?>">
										</div>
									</div>
	
							</div>
						</div>
				</div>
			</div>
		</div>
		<?php

}
?>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>