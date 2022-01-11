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
		echo "A media entre <span class='foco'>$r1</span> e <span class='foco'>$r2</span class> é <span class='foco'>$m</span>";
			if($m<5){
				
				$situacao="REPROVADO";
				
			}
			elseif($m>=5 && $m<7){
				
				$situacao="RECUPERAÇÃO";
				
			}
			else{
				$situacao="APROVADO";
				
			}
			echo "</br></br>Ele estar <span class='foco'>$situacao</span>";
			
			
    ?>
	</br></br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
