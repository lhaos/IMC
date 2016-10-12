<?php
	require '../model/model-imc.php';

	$imc = new Imc();

	$imc->nome = $_POST['nome']; 
	$imc->date_nasc = $_POST['datanasc']; 
	$imc->gen = $_POST['genero']; 	
	$imc->peso = $_POST['peso']; 
	$imc->alt = $_POST['altura'];

	echo ''.$imc->calc_imc().' testando: ';
