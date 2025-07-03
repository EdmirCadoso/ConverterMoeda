<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desafio.php</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
		 <?php 
    	//cotacao google
    	$cotacao = 93.88;
    	
    
    	//quanras escudos´
    	$escudo = $_GET["din"];
    	
    	//Equivalencia em dolar
    	$dolar = $escudo / $cotacao;
    	 
    	//echo "Seus esc\$" .number_format($escudo, 2, ",", "."). " equivalem a US\$" .number_format($dolar, 2, ",", ".");

		//FORMATACAO MOEDA INTERNACIONAL
		$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
		
		echo "<p>Seus " .numfmt_format_currency($padrao, $escudo, "ecv"). " equivalem a " .numfmt_format_currency($padrao, $dolar, "USD") ."</p>";

    ?>
	<button onclick="javascript:history.go(-1)">Voltar</button>
	</main>
	
</body>
</html>
   

