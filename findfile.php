<?php

$arquivo = "boleto.html";
$procura = "div";

	$arrayArquivo = file($arquivo);

	for($i = 0; $i < sizeof($arrayArquivo); $i++)
	{
		if(strpos($arrayArquivo[$i],$procura))
			echo "<b>(Foi encontrado nessa linha)</b> $arrayArquivo[$i]";
	// else
	// 	echo $arrayArquivo[$i];
	}

echo "asdasdsad";