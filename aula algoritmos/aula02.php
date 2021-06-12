<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 02</title>
</head>
<body>
	<?php
	/*
	INTEIROS (int) - qualquer número sem decimais positivo ou negativo
	PONTO FLUTUANTE (float, double ou real) - número com decimais
	STRING - texto
	BOOLEANOS - verdadeiro (TRUE) ou falso (FALSE)
	ARRAYS - variáveis multidimensionais, vetores
	OBJETOS - instância de uma classe
	RECURSOS - variáveis especiais do PHP que referenciam recursos externos
	NULO (null) - variável sem nenhum valor, porém é diferente de ""
	*/

	$idade = 17;
	$altura = 1.62;
	$nome = "Luiza Messerschmidt";
	$casada = false;

	$numero = 50;

	define('CONFIG', 1500);

	//echo CONFIG;

	function calc(){
		global $numero;
		echo $numero;
	}

	//calc();

	//$cadastro = array('Cliente 1', 'Cliente 2', 'Cliente 3');
	//$cadastro[] = 'Cliente 1';
	//$cadastro[] = 'Cliente 2';
	//$cadastro = array('cliente1' => 'Luiza', 'cliente2' => 'Zezinho');
	$cadastro = array(
		'cliente1' => array(
			'nome' => 'Luiza',
			'idade' => 17,
		),
		'cliente2' => array(
			'nome' => 'Zezinho',
			'idade' => 30,
		),
	);

	var_dump(get_defined_vars());

	//echo $cadastro['cliente1']['nome'];

	//echo "Olá, meu nome é $nome e eu tenho $idade anos.";
	?>
</body>
</html>