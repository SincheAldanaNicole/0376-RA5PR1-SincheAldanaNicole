    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
    echo "<h1>Tabla de multiplicar</h1>";
        $numero = 7;
        // Verificar si la variables es un número entero
        var_dump(is_int($numero));
        echo "<h2>Tabla del $numero</h2>";
            for ($i = 0; $i <= 12; $i++) {
                $resultado = $numero * $i;
                echo "$numero x $i = $resultado <br>";
            }
        ?>
    </body>
    </html>