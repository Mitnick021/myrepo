<html>
    <head>
    <title>Tablas de Multiplicar</title>
    </head>
    <body background=images/operaciones.jpg><center>
    <form action="punto_10.php" method="post">   
    <h1>Tablas de multiplicar</h1>
    <h2>Ingresa un numero del 1 al 10</h4>
    <input type="text" name="numero">
    <br><br><input type="submit" value="Calcular">
    <h1>Serie de Numeros</h1>
    <h2>Ingresa un numero</h4>
    <input type="text" name="numero1">
    <br><br><input type="submit" value="Generar">
    </form>
    </body></center>
</html>
<?php
//10. . Escriba un Script en PHP que solicite por pantalla al usuario un
//número N, y de ese número ingresado se visualice la tabla de
//multiplicar respectiva con una serie de 1 a 10. (Haga uso de un solo
//archivo para crear formulario html y Script php).
        $num=$_POST ["numero"];
        if($num==1){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=1;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
            }
            echo "</table><br>";
        }elseif($num==2){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=2;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
            }
            echo "</table><br>";
        }elseif($num==3){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=3;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
        }    
        }elseif($num==4){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=4;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
        }
        }elseif($num==5){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=5;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
        }
        }elseif($num==6){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=6;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
        }
        } 
        elseif($num==7){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=7;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
        }
        }elseif($num==8){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=8;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
        }
        }elseif($num==9){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=9;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
        }
        }elseif($num==10){
            echo "<table border=1>";
            for($i=1; $i<=10; $i+=1){
                $mult1=10;
                $mult=$mult1*$i;
                echo "<td bgcolor='black'>"."<font color='white'>".$i."x".$mult1."=".$mult."</font>"."</td>";
        }
        }

//11. Escriba un script en PHP que reciba un numero desde un formulario HTML y muestre la serie de dicho numero en forma ascendente 
// y descendente en tablas horizontales diferentes

        $num=$_POST ["numero1"];
        echo "<table border=1>";
        for($i=1; $i<=$num; $i+=1){
            echo "<td bgcolor='black'>"."<font color='white'>".$i."</font>"."</td>";
        }
        echo "</table><br>";
        for($i=1; $i<=$num; $i+=1){
            echo $i."<br>";
        }


        
        
    ?>