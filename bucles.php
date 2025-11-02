<?php
// bucles.php - Demostración de bucles en PHP

// Define el título de la página
$title = "Bucles | Estructuras PHP";

// Incluye el encabezado HTML desde un archivo externo
include __DIR__ . "/includes/header.php";
?>

<!-- Ejemplo básico con for -->
<?php
// Arreglo de números que se usará en los ejemplos de bucles
$numeros = [2, 4, 6, 8, 10];
?>
<section class="card">
  <h2>for</h2>
  <p><strong>Definición:</strong> El bucle <code>for</code> se utiliza cuando conocemos de antemano cuántas veces queremos repetir una acción. 
      Se compone de tres partes: inicialización, condición y actualización.</p>
  <p>Recorremos un arreglo indexado y mostramos una tabla:</p>
  <table class="table">
    <thead><tr><th>#</th><th>Valor</th><th>Cuadrado</th></tr></thead>
    <tbody>
    <?php
    // Bucle for: recorre el arreglo $numeros y muestra el índice, el valor y su cuadrado
    for ($i = 0; $i < count($numeros); $i++): ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $numeros[$i]; ?></td>
        <td><?php echo $numeros[$i] * $numeros[$i]; ?></td>
      </tr>
    <?php endfor; ?>
    </tbody>
  </table>
  <!-- Imagen ilustrativa del bucle for -->
  <img src="img/for.png" alt="Ejemplo de bucle for" width="900">
</section>

<!-- Ejemplo básico con while -->
<section class="card">
  <h2>while</h2>
  <p><strong>Definición:</strong> El bucle <code>while</code> repite un bloque de código mientras se cumpla una condición. 
      Es útil cuando no sabemos cuántas veces se repetirá la acción.</p>
  <p>Sumamos valores hasta que la suma supere 15:</p>
  <pre><?php
  // Inicializa variables para controlar la suma y el índice
  $suma = 0;
  $idx = 0;

  // Bucle while: suma elementos del arreglo mientras la suma sea menor o igual a 15
  while ($suma <= 15 && $idx < count($numeros)) {
    $suma += $numeros[$idx];
    echo "Agrego {$numeros[$idx]} → suma = {$suma}\n";
    $idx++;
  }
  ?></pre>
  <!-- Imagen ilustrativa del bucle while -->
  <img src="img/while.png" alt="Ejemplo de bucle while" width="900">
</section>

<!-- Ejemplo básico con foreach -->
<?php
// Arreglo de frutas para el ejemplo con foreach
$frutas = ["manzana", "plátano", "uva", "mango"];
?>

<section class="card">
  <h2>foreach</h2>
  <p><strong>Definición:</strong> El bucle <code>foreach</code> se usa para recorrer arreglos de forma sencilla. 
      Extrae automáticamente cada elemento sin necesidad de usar un índice.</p>
  <p>Recorremos un arreglo de frutas (indexado):</p>
  <ul class="list">
    <?php
    // Bucle foreach: recorre el arreglo $frutas y muestra cada fruta con su índice
    foreach ($frutas as $i => $f): ?>
      <li><?php echo "#{$i}: {$f}"; ?></li>
    <?php endforeach; ?>
  </ul>
  <!-- Imagen ilustrativa del bucle foreach -->
  <img src="img/foreach.png" alt="Ejemplo de bucle foreach" width="900">
</section>

<?php
// Incluye el pie de página HTML desde un archivo externo
include __DIR__ . "/includes/footer.php";
?>