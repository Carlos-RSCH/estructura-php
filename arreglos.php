<?php
// arreglos.php - Demostración de arreglos en PHP

// Define el título de la página
$title = "Arreglos | Estructuras PHP";

// Incluye el encabezado HTML desde un archivo externo
include __DIR__ . "/includes/header.php";
?>

<!-- Ejemplo básico de un arreglo indexado -->
<?php
// Arreglo indexado con nombres de lenguajes de programación
$lenguajes = ["PHP", "JavaScript", "Python"];
?>
<section class="card">
  <h2>Arreglo indexado</h2>
  <p><strong>Definición:</strong> Un arreglo indexado almacena elementos en posiciones numéricas (índices). 
      Se accede a cada valor usando su número de posición.</p>
  <p>Lista de lenguajes:</p>
  <ul class="list">
    <?php
    // Recorre el arreglo $lenguajes y muestra cada elemento como lista
    foreach ($lenguajes as $lang): ?>
      <li><?php echo $lang; ?></li>
    <?php endforeach; ?>
  </ul>
  <!-- Imagen ilustrativa debajo de la sección -->
  <img src="img/indexado.png" alt="Ejemplo de arreglo indexado" width="900">
</section>

<!-- Ejemplo básico de un arreglo asociativo -->
<?php
// Arreglo asociativo con datos de un alumno
$alumno = ["nombre" => "Luis", "grupo" => "S3B","promedio" => 92];
?>
<section class="card">
  <h2>Arreglo asociativo</h2>
  <p><strong>Definición:</strong> Un arreglo asociativo usa claves personalizadas (strings) en lugar de índices numéricos. 
      Cada clave representa un campo o propiedad.</p>
  <p>Datos del alumno:</p>
  <table class="table">
    <tbody>
      <?php
      // Recorre el arreglo $alumno y muestra clave y valor en una tabla
      foreach ($alumno as $k => $v): ?>
        <tr><th><?php echo ucfirst($k); ?></th><td><?php echo $v; ?></td></tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <p>
    <?php
    // Condicional que evalúa el promedio del alumno
    if ($alumno["promedio"] >= 90) {
      echo "Estado: Excelente rendimiento 🎉";
    } elseif ($alumno["promedio"] >= 70) {
      echo "Estado: Aprobado";
    } else {
      echo "Estado: Reprobado";
    }
    ?>
  </p>
  <!-- Imagen ilustrativa debajo de la sección -->
  <img src="img/asociativo.png" alt="Ejemplo de arreglo asociativo" width="900">
</section>

<!-- Ejemplo básico de un arreglo multidimensional -->
<?php
// Arreglo multidimensional con información de cursos
$cursos = [
  ["nombre" => "Redes", "creditos" => 6, "aprobado" => true],
  ["nombre" => "Programación Web", "creditos" => 8, "aprobado" => false],
  ["nombre" => "Sistemas Operativos", "creditos" => 7, "aprobado" => true],
];
?>
<section class="card">
  <h2>Arreglo multidimensional</h2>
  <p><strong>Definición:</strong> Un arreglo multidimensional contiene otros arreglos dentro de sus elementos. 
      Se usa para representar estructuras más complejas como tablas o registros.</p>
  <p>Tabla de cursos con condicional:</p>
  <table class="table">
    <thead><tr><th>Curso</th><th>Créditos</th><th>Estado</th></tr></thead>
    <tbody>
      <?php
      // Recorre el arreglo $cursos y muestra los datos en una tabla
      foreach ($cursos as $curso): ?>
        <tr>
          <td><?php echo $curso["nombre"]; ?></td>
          <td><?php echo $curso["creditos"]; ?></td>
          <td>
            <?php
            // Condicional ternario: muestra "Aprobado" si es true, "Pendiente" si es false
            echo $curso["aprobado"] ? "Aprobado" : "Pendiente";
            ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <!-- Imagen ilustrativa debajo de la sección -->
  <img src="img/multidimensional.png" alt="Ejemplo de arreglo multidimensional" width="900">
</section>

<?php
// Incluye el pie de página HTML desde un archivo externo
include __DIR__ . "/includes/footer.php";
?>