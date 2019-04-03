
<?php
    //TALLER PRACTICO PHP -(1)

    //Escriba un Script en PHP que muestre por pantalla los números del 1
    //al 10 (Sin hacer uso de ninguna estructura tipo bucle).
    
    echo "<b>1. Lista de numeros</b><br>";
    echo "1,2,3,4,5,6,7,8,9,10<br><br>";

    //Escriba un Script en PHP que muestre por pantalla los números del 1
    //al 10.

    echo "<b>2. Lista de numeros con bucle</b><br>";
    echo "<table border=1>";
    $aumento=1;
    while($aumento <= 10)
    {
        
        if ($aumento%2==0){
            echo "<td bgcolor='yellow'>"."<font color='red'>".$aumento."</font>"."</td>";  
        }else{
            echo "<td>"."<font color='black'>".$aumento."</font>"."</td>";
        }
        $aumento++;
    }
    echo "</table><br><br>";

    //Escriba un Script en PHP que muestre por pantalla los primeros 100
    //números naturales.

    echo "<b>3. 100 numeros naturales</b><br>";
    echo "<table border=1>";
    for($i=1; $i<=100; $i+=1){
        echo "<td bgcolor='black'>"."<font color='white'>".$i."</font>"."</td>";
    }
    echo "</table><br><br>";

    //Escriba un Script en PHP que muestre por pantalla los primeros 100
    //números naturales de 2 en 2.

    echo "<b>4. 100 numeros naturales de 2 en 2</b><br>";
    echo "<table border=1>";
    for($i=2; $i<=100; $i+=2){
        echo "<td>"."<font color='red'>".$i."</font>"."</td>";
    }
    echo "</table><br><br>";

    //Escriba un Script en PHP que genere aleatoriamente 10 números
    //enteros positivos y los muestre por pantalla. Use la función rand().

    echo "<b>5. 10 numeros aleatorios</b><br>";
    echo "<table border=1>";
    for($x=1; $x<=10; $x++){
        $aleatorio=rand(1,100);
        echo "<td>"."<font color='green'>".$aleatorio."</font>"."</td>";
    }
    echo "</table><br><br>";
    
    
    //Escriba un algo Script en PHP ritmo que muestre por pantalla la suma
    //de los primeros 100 números naturales

    echo "<b>6. suma de los primeros 100 numeros</b><br>";
    $suma=0;
    for($i=1; $i<=100; $i++){
        $suma+=$i;
    }
    echo "la suma es: " . $suma . "<br><br>";

    //Escriba un Script en PHP que muestre por pantalla los múltiplos de 3
    //comprendidos en la serie del 1 al 100

    echo "<b>7. multipos de 3 del 1 al 100</b><br>";
    echo "<table border=1>";
    $multiplo=1;
    while($multiplo <= 100)
    {
         if ($multiplo%3==0){
            echo "<td bgcolor='red'>"."<font color='white'>".$multiplo."</font>"."</td>";  
        }else{
            echo "";
        }
        $multiplo++;
    }
    echo "</table><br><br>";

    //Escriba un Script en PHP que genere aleatoriamente 10 números
    //enteros positivos y los muestre por pantalla, y visualice además el
    //siguiente reporte en una tabla HTML:

    echo "<b>8. numeros pares e impares generados</b><br>";
    $par=0;
    $impar=0;
    for($i=1; $i<=10; $i++){
        $aleatorio=rand(1,100);
        echo $aleatorio.", ";
        if($aleatorio%2==0){
            $par++;
        }else {
            $impar++;
        }
        }
    echo "<br>";
    echo "<table border=1>";
    echo "<tr>.<td>"."<font color='black'>"."numero de pares"."</font>"."</td>";
    echo "<td>"."<font color='black'>"."numero de impares"."</font>"."</td>"."<tr>";
    echo "<tr>.<td>"."<font color='black'>".$par."</font>"."</td>";
    echo "<td>"."<font color='black'>".$impar."</font>"."</td>"."<tr>";
    echo "</table><br><br>";

    //Escriba un Script en PHP que genere aleatoriamente 10 números
    //enteros positivos y negativos, y los muestre por pantalla, y visualice
    //además el siguiente reporte en una tabla HTML:

    echo "<b>9. numeros pares e impares negativos generados</b><br>";
    $par0=0;
    $impar0=0;
    $par=0;
    $impar=0;
    for($i=1; $i<=10; $i++){
        $aleatorio=rand(-100,100);
        echo $aleatorio.", ";
        if($aleatorio%2==0 && $aleatorio>0){
            $par++;
        }else if($aleatorio%2==0 && $aleatorio<0) {
            $par0++;
        }else if($aleatorio%2!=0 && $aleatorio>0){
            $impar++;
        }else{
            $impar0++;
        }
        }
        echo "<br>";
        echo "<table border=1>";
        echo "<tr>.<td>"."<font color='black'>"."numero de pares positivos"."</font>"."</td>";
        echo "<td>"."<font color='black'>"."numero de pares negativos"."</font>"."</td>";
        echo "<td>"."<font color='black'>"."numero de impares positivos"."</font>"."</td>";
        echo "<td>"."<font color='black'>"."numero de impares negativos"."</font>"."</td>"."<tr>";
        echo "<tr>.<td>"."<font color='black'>".$par."</font>"."</td>";
        echo "<td>"."<font color='black'>".$par0."</font>"."</td>";
        echo "<td>"."<font color='black'>".$impar."</font>"."</td>";
        echo "<td>"."<font color='black'>".$impar0."</font>"."</td>"."<tr>";
        echo "</table><br><br>";
?>