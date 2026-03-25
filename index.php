<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <style>
            table, th, td {
                border-collapse: collapse;
            }
            td {
                background-color: lightgray;
                border: 1px solid black;
                text-align: center;
            }
            td.td2 {
                background-color: white;
            }
            td.td3 {
                background-color: white;
            }
        </style>
        <?php
            echo "<h1>Tabla de multiplicar</h1>";
            $numero = 7; //Creo la variable
            for ( $i = 1; $i <= 10; $i++ ) {
                $resultado = $numero * $i; }
                if ($numero < 1 || $numero > 12) {
                    echo "<p>Error, el numero debe ser entre 1 y 12</p>";
                } else {
                    echo "<table>";
                    echo "<th><td3>Operación</td3></th>";
                    echo "<th><td2>Resultado</td2></th>";
                    for ($i = 1; $i <= 10; $i++) {
                        $resultado = $numero * $i;
                        if ($i % 2 == 0) {
                            echo "<td>$numero x $i</td><td class='td2'>$resultado</td2>";
                        } else {
                            echo "<tr><td>$numero x $i</td><td class='td3'>$resultado</td3></tr>";
                        }
                    }
                    echo "</table>";
                }
            ?>
    </body>
</html>

//Estructura HTML: La taula s'ha de mostrar dins d'una etiqueta <table> de HTML real, amb les seves files (<tr>) i cel·les (<td>)
//Bucle for: Utilitza un bucle per generar les files de la taula de l'1 al 10
//Estil Visual (Lògica condicional): * Les files parelles han de tenir un color de fons diferent (per exemple, gris clar) de les senars. 
//Hauràs d'utilitzar un if amb l'operador mòdul (%) per decidir quina classe CSS aplicar.
//Interactivitat bàsica: Si el número definit a la variable és superior a 12 o inferior a 1, la pàgina ha de mostrar un missatge d'error en lloc de la taula.