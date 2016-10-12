<html>
	<head>
		<meta charset="utf-8">
	</head>
	
<?php
	session_start();

	require '../model/model-imc.php';

	$imc = new Imc();

	$imc->nome = $_POST['nome']; 
	$imc->date_nasc = $_POST['datanasc']; 
	$imc->gen = $_POST['genero']; 	
	$imc->peso = $_POST['peso']; 
	$imc->alt = $_POST['altura'];

	/*echo ''.$imc->nome. ' indivíduo '.$imc->gen. ' nascido em '.$imc->date_nasc.' '
		.'<p>'. 'Seu imc é: '.$imc->calc_imc().' e você está com '. $imc->informaCategoria()
		.'<p>'. 'Resultado obtido a partir do peso '.$imc->peso.' e da altura '.$imc->alt;
	*/
	
	
	$_SESSION['nome'] = $imc->nome;
	$_SESSION['date_nasc'] = $imc->date_nasc;
	$_SESSION['gen'] = $imc->gen;
	$_SESSION['peso'] = $imc->peso;
	$_SESSION['altura'] = $imc->alt;
	$_SESSION['calc_imc'] = $imc->calc_imc();
	$_SESSION['informaCategoria'] = $imc->informaCategoria();
	
	header('location:../index.php');
	
	
?>

</html>