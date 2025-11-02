<?php
// condicionales.php - Demostración de estructuras condicionales en PHP

// Título de la página para el encabezado
$title = "Condicionales | Estructuras PHP";

// Inclusión de cabecera HTML
include __DIR__ . "/includes/header.php";
?>

<!-- Ejemplo básico con if -->
<section class="card">
  <h2>Ejemplo: <code>if</code></h2>
  <p><strong>Definición:</strong> La estructura <code>if</code> permite ejecutar un bloque de código solo si se cumple una condición específica.</p>
  <p>
    <?php
    // Evaluación de una calificación con condiciones simples
    $nota = 9.2;
    echo "Calificación: $nota<br>";

    // Si la nota es mayor o igual a 9, se considera excelente
    if ($nota >= 9) {
      echo "¡Excelente desempeño!";
    }

    // Si la nota es menor a 6, se considera reprobado
    if ($nota < 6) {
      echo "Reprobado.";
    }
    ?>
  </p>
  <img src="img/if.png" alt="Ejemplo de if" width="900">
</section>

<!-- Ejemplo con if / else -->
<?php
$usuario = ["nombre" => "Pedro", "rol" => "estudiante", "activo" => true]; // Datos del usuario
?>
<section class="card">
  <h2>Ejemplo: <code>if / else</code></h2>
  <p><strong>Definición:</strong> <code>if / else</code> permite ejecutar un bloque si se cumple una condición, y otro bloque si no se cumple.</p>
  <p><strong>Usuario:</strong> <?php echo $usuario["nombre"]; ?> (<?php echo $usuario["rol"]; ?>)</p>
  <p>
    <?php
    // Verifica si el usuario está activo y tiene rol de estudiante
    if ($usuario["activo"] && $usuario["rol"] === "estudiante") {
      echo "Usuario activo con rol de estudiante: acceso concedido.";
    } else {
      echo "Acceso restringido.";
    }
    ?>
  </p>
  <img src="img/if_else.png" alt="Ejemplo de if else" width="900">
</section>

<!-- Ejemplo con if / elseif / else -->
<?php
$edad = 19; // Edad del usuario
?>
<section class="card">
  <h2>Ejemplo: <code>if / elseif / else</code></h2>
  <p><strong>Definición:</strong> Esta estructura permite evaluar múltiples condiciones en orden. Se ejecuta el primer bloque cuya condición sea verdadera.</p>
  <p><strong>Edad:</strong> <?php echo $edad; ?></p>
  <p>
    <?php
    // Clasifica la edad en tres rangos
    if ($edad < 18) {
      echo "Eres menor de edad.";
    } elseif ($edad >= 18 && $edad < 65) {
      echo "Eres adulto/a.";
    } else {
      echo "Eres adulto/a mayor.";
    }
    ?>
  </p>
  <img src="img/if_elseif_else.png" alt="Ejemplo de if elseif else" width="900">
</section>

<!-- Ejemplo con switch -->
<?php
$dia = date("N"); // Día de la semana en formato numérico (1 = lunes, 7 = domingo)
?>
<section class="card">
  <h2>Ejemplo: <code>switch</code></h2>
  <p><strong>Definición:</strong> La estructura <code>switch</code> evalúa una expresión y ejecuta el bloque que coincide con uno de los casos definidos.</p>
  <p><strong>Día de la semana (1-7):</strong> <?php echo $dia; ?></p>
  <p>
    <?php
    // Muestra el nombre del día según el número
    switch ($dia) {
      case 1: echo "Lunes"; break;
      case 2: echo "Martes"; break;
      case 3: echo "Miércoles"; break;
      case 4: echo "Jueves"; break;
      case 5: echo "Viernes"; break;
      case 6: echo "Sábado"; break;
      case 7: echo "Domingo"; break;
      default: echo "Valor no válido";
    }
    ?>
  </p>
  <img src="img/switch.png" alt="Ejemplo de switch" width="900">
</section>

<?php
// Inclusión del pie de página HTML
include __DIR__ . "/includes/footer.php";
?>