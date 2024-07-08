<!DOCTYPE php>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Animales</title>
    
</head>
<body>
    <h2>Formulario de animales</h2>

    <?php
    
    $resultado = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombreAnimal = htmlspecialchars($_POST['nombreAnimal']);
    
        $tipoAnimal = htmlspecialchars($_POST['tipoAnimal']);

        
        function hacerSonido($tipoAnimal) {
            if ($tipoAnimal == 'gato') {
                return "¡Miau! ¡Miau!";
            } elseif ($tipoAnimal == 'perro') {
                return "¡Guau! ¡Guau!";
            } else {
                return "Desconocido";
            }
        }

        $resultado .= "<div class='resultado'>";
        $resultado .= "<p>El animal " . $nombreAnimal . " hace: " . hacerSonido($tipoAnimal) . "</p>";
        $resultado .= "</div>";
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="nombreAnimal">Nombre del animal:</label>
            <input type="text" id="nombreAnimal" name="nombreAnimal" required>
        </div>
        <br>
        
        <div class="form-group">
            <label for="tipoAnimal">Tipo de animal:</label>
            <select id="tipoAnimal" name="tipoAnimal" required>
                <option value="">Seleccione</option>
                <option value="gato">Gato</option>
                <option value="perro">Perro</option>
            </select>
            <br> <br> <br> <br> <br> <br>
        </div>
        
        <button type="submit">Crear animal</button>
    </form>

    <?php echo $resultado; ?>
</body>
</html>