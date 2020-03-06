<?php

$num1 = $_GET["a"];
$num2 = $_GET["b"];

		function soma(){
		
		 global $num1;
		 global $num2;
		 $resul = $num1 + $num2;
		 echo "Resultado da soma da variavel A mais a B: " .  $resul;
		 echo "<br> Tipos de dados e valor da variavel: ";
		 var_dump($resul);
		}

function subtrair(){
		
		 global $num1;
		 global $num2;
		 $resul = $num1 - $num2;
		 echo "Resultado da subtracao da variavel A mais a B: " .  $resul;
		 echo "<br> Tipos de dados e valor da variavel: ";
		 var_dump($resul);
		}
		
		
soma();
echo "<br><br>";
subtrair()

?>