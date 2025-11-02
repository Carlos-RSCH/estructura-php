<?php
// index.php - Página de inicio del mini sitio

// Define el título dinámico que se mostrará en la pestaña del navegador
$title = "Inicio | Estructuras PHP";

// Inserta la cabecera HTML común desde el archivo externo
include __DIR__ . "/includes/header.php";

// 🔤 Variables simples y funciones del sistema
$saludo = "¡Bienvenido/a!"; // Mensaje de bienvenida
$hoy = date("l d/m/Y - H:i:s"); // Fecha y hora actual del servidor
$temas = ["Condicionales", "Bucles", "Arreglos"]; // Temas disponibles en el sitio
?>

<section class="card">
  <h2>Inicio</h2>
  <!-- Imagen decorativa de bienvenida -->
  <img src="img/bienvenida.jpg" alt="Imagen de bienvenida" width="300">

  <!-- Mensaje de bienvenida y descripción del sitio -->
  <p><?php echo $saludo; ?> Este mini sitio web muestra ejemplos prácticos de <strong>estructuras de control</strong> (condicionales y bucles) y <strong>arreglos</strong> en PHP.</p>

  <!-- Muestra la fecha y hora actual del servidor -->
  <p><span class="badge">Fecha/Hora del servidor:</span> <?php echo $hoy; ?></p>

  <!-- Muestra cuántas secciones hay y sus nombres -->
  <p>Secciones disponibles (<?php echo count($temas); ?>): <?php echo implode(", ", $temas); ?>.</p>
</section>

<section class="card">
  <h3>¿Qué encontrarás?</h3>
  <ul class="list">
    <!-- Lista de conceptos y estructuras que se explican en el sitio -->
    <li>Uso de <strong>echo</strong>, variables y funciones como <code>date()</code> y <code>count()</code>.</li>
    <li>Demostraciones de <strong>if / elseif / else</strong> y <strong>switch</strong>.</li>
    <li>Bucles <strong>for</strong>, <strong>while</strong> y <strong>foreach</strong> para recorrer datos.</li>
    <li>Arreglos <em>indexados</em>, <em>asociativos</em> y <em>multidimensionales</em>.</li>
  </ul>
</section>

<section class="card small">
  <!-- Tip informativo sobre la estructura modular del sitio -->
  <p>Tip: Este sitio reutiliza cabecera, menú y pie de página con <code>include()</code> desde <code>/includes/</code>.</p>
</section>

<?php
// Inserta el pie de página común desde el archivo externo
include __DIR__ . "/includes/footer.php";
?>