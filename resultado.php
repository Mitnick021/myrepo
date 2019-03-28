<?php 
    $num1=$_POST ["valor1"];
    $num2=$_POST ["valor2"];
    $op=$_POST ["operador"];
    	
		if ($op == "suma") {
			echo "El resultado es: " . ($num1+$num2);
			print ('<br /><a href="calculadora.html">Volver</a>');
		} elseif ($op == "resta") {
			echo "El resultado es: " . ($num1-$num2);
			print ('<br /><a href="calculadora.html">Volver</a>');
		} elseif ($op == "multiplicacion"){
        echo "El resultado es: " . ($num1*$num2);
			print ('<br /><a href="calculadora.html">Volver</a>');
		} elseif ($op ==  "division") {
			echo "El resultado es: " . ($num1/$num2);
			print ('<br /><a href="calculadora.html">Volver</a>');
        } elseif ($op ==  "Raiz cuadrada") {
        echo "Raiz de valor 1 es: " . sqrt($num1);
        echo "Raiz de valor 2 es: " . sqrt($num2);
        print ('<br /><a href="calculadora.html">Volver</a>');
        } elseif ($op ==  "Raiz cuadrada") {
            echo "Raiz de valor 1 es: " . sqrt($num1);
            echo "Raiz de valor 2 es: " . sqrt($num2);
            print ('<br /><a href="calculadora.html">Volver</a>');
		} elseif ($op ==  "potencia") {
            echo "El resultado es: " . pow($num1,$num2);
            print ('<br /><a href="calculadora.html">Volver</a>');
		}
		
		

	 else {
		print("Ingresar algun valor");
		print ('<br /><a href="calculadora.html">Volver</a>');
	    }
?>