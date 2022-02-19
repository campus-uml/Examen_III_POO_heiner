<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de POO - UML 2022</title>
</head>
<body>

 <h2> EXAMEN DE POO - 1 AÑO DE SISTEMAS </h2>
 <h2>  UML OCOTAL</h2>

<form action="index.php" method="post">
<label for="texto">
<input type"string" name="texto" id="texto">
<input type="submit" value="enviar">
</form>
<?php
    echo"<br>";
    $texto=($_POST["texto"]);
    echo"<br>";
    echo "<table border=1>"; //creamos tabla
        echo "<td>","Texto Ingresado :","</td>";
        echo "<td>",$texto,"</td>";
        echo "</tr>";
        echo "<td>","Texto en Mayuscula:","</td>";
        echo "<td>",strtoupper($texto),"</td>";
        echo "</tr>";
        echo "<td>","Total de Caracteres:","</td>";
        echo "<td>",strlen($texto),"</td>";
        echo "</tr>";
        echo "<td>","Texto invertido:","</td>";
        echo "<td>",strrev($texto),"</td>";
        echo "</tr>";
        echo "<td>","Mostrando un caracter por linea:","</td>";
        $text_separado=str_split($texto);// separamos el texto en letras
            for($i=0;$i<count($text_separado);$i++){
                echo "</tr>";
                echo "<td>",$i ,"</td>";// imprimimos el numero de la letra
                echo "<td>",$text_separado[$i] ,"</td>";// imprimimos las letras
                echo "</tr>";
             }

    echo"</table>"
?> 
</body>
</html>