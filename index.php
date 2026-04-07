<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de Multiplicar</title>
    <style>
        table { border-collapse: collapse; width: 300px; margin-top: 20px; }
        td { border: 1px solid #000; padding: 8px; text-align: center; }
        .parell { background-color: #e0e0e0; } 
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Generador de Taules de Multiplicar</h2>

    <form method="POST" action="index.php">
        <label for="numero">Introdueix un número (1-12):</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Generar</button>
    </form>

    <?php
    $numero = isset($_POST['numero']) ? $_POST['numero'] : 7;

    if ($numero < 1 || $numero > 12) {
        echo "<p class='error'>Error: El número ha de ser entre 1 i 12.</p>";
    } else {
        echo "<h3>Taula del $numero</h3>";
        echo "<table>";
        
        for ($i = 1; $i <= 10; $i++) {
            
            $classe = ($i % 2 == 0) ? "class='parell'" : "";
            
            $resultat = $numero * $i;
            
            echo "<tr $classe>";
            echo "<td>$numero x $i</td>";
            echo "<td>$resultat</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>

</body>
</html>
