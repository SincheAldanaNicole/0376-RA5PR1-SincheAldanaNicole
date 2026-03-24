    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <table>
        <tr>
            <th>Multiplicando</th>
            <th>Multiplicador</th>
            <th>Resultado</th>
        </tr>
        <?php
        echo "<h1>Tabla de multiplicar</h1>";
        //Creo la variable
            $numero = 7;
        echo "<td>Multiplicando: $numero</td>";
            for ($i = 1; $i <= 12; $i++) {
                $resultado = $numero * $i;
                }
        echo "<td>Multiplicador: $i</td>";
        echo "<td>Resultado: $resultado</td>";
        ?>
    </table>
    </body>
    </html>

    //Estructura HTML: La taula s'ha de mostrar dins d'una etiqueta <table> de HTML real, amb les seves files (<tr>) i cel·les (<td>)
    //Bucle for: Utilitza un bucle per generar les files de la taula de l'1 al 10
    //Estil Visual (Lògica condicional): * Les files parelles han de tenir un color de fons diferent (per exemple, gris clar) de les senars. 
    //Hauràs d'utilitzar un if amb l'operador mòdul (%) per decidir quina classe CSS aplicar.
    //Interactivitat bàsica: Si el número definit a la variable és superior a 12 o inferior a 1, la pàgina ha de mostrar un missatge d'error en lloc de la taula.