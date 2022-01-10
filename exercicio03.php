<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercicio09</title>
</head>
<body>
<div>
    <?php
        $r1 = isset($_GET["n1"])?($_GET["n1"]):0;
		$r2 = isset($_GET["n2"])?$_GET["n2"]:0;
		$m = ($r1+$r2)/2;
		echo "A media entre $r1 e $r2 é $m";
			if($m<5){
				
				$situacao="REPROVADO";
				
			}
			elseif($m>=5 && $m<7){
				
				$situacao="RECUPERAÇÃO";
				
			}
			else{
				$situacao="APROVADO";
				
			}
			echo " </br></br>Ele estar $situacao";
			
			
    ?>
</div>
</body>
</html>
 