<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $altura=$_GET['altura'];
        $peso=$_GET['peso'];
        $imc=($peso/(pow(($altura/100), 2)));
        $estado="";
        
        if($imc>0 && $imc<16)
        {
            $estado="INFRAPESO: Delgadez Severa";
        }
        else if($imc>=16 && $imc<17)
        {
            $estado="INFRAPESO: Delgadez Moderada";
        }
        else if($imc>=17 && $imc<18.5)
        {
            $estado="INFRAPESO: Delgadez Aceptable";
        }
        else if($imc>=18.5 && $imc<25)
        {
            $estado="PESO NORMAL";
        }
        else if($imc>=25 && $imc<30)
        {
            $estado="SOBREPESO";
        }
        else if($imc>=30 && $imc<35)
        {
            $estado="OBESO Tipo I";
        }
        else if($imc>=35 && $imc<=40)
        {
            $estado="OBESO Tipo II";
        }
        else
        {
            $estado="OBESO Tipo III";
        }
        
        echo "<table border='1'>";
        echo "<tr><td width='400'>Indice da masa corporal: </td><td>$imc</td></tr>";
        echo "<tr><td width='400'>Atendiendo al IMC, tiene: </td><td>$estado</td></tr><br/>";
        echo "<tr><td colspan='2' width='100%'><br/><b>Clasificación de la organización mundial de la salud:</b><br/>";
        echo "<table border='1' align='center'> <tr><td align='center'>INDICE DE MASA CORPORAL</td><td align='center'>CLASIFICACION</td></tr>"; 
        echo "<tr><td align='center'><16.00<br/>16.00 - 16.99<br/>17 - 18.49<br/>18.50-24.99<br/>25 - 29.99<br/>30 - 34.99<br/>35 - 40<br/>>40<br/></td>";
        echo "<td align='center'>INFRAPESO: Delgadez Severa<br/>INFRAPESO: Delgadez Moderada<br/>INFRAPESO: Delgadez Aceptable<br/>"
        . "Peso Normal<br/>Sobrepeso<br/>Obeso Tipo I<br/>Obeso Tipo II<br/>Obeso Tipo III<br/></td>";
        echo "</td></tr>";
        echo "</table>";
        ?>
    </body>
</html>
