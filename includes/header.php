<?php
// includes/header.php
// Cabecera HTML reutilizable para todas las páginas del sitio

// Establece la zona horaria para funciones de fecha/hora
date_default_timezone_set('America/Merida');
?>

<!DOCTYPE html> <!-- Define el tipo de documento como HTML5 -->
<html lang="es"> <!-- Indica que el contenido está en español -->
<head>
  <meta charset="UTF-8" /> <!-- Codificación de caracteres para texto en español -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Ajuste responsivo para dispositivos móviles -->

  <!-- Muestra el título dinámico de la página; si no se define $title, usa "Estructuras PHP" -->
  <title><?php echo $title ?? "Estructuras PHP"; ?></title>

  <!-- Enlace al archivo de estilos CSS -->
  <link rel="stylesheet" href="/css/styles.css" />
</head>
<body>

<!-- Encabezado principal del sitio -->
<header class="site-header">
  <h1>Estructuras de Control y Arreglos en PHP</h1>
  <p class="subtitle">
    Mini sitio web demostrativo usando estructuras de control condicionales (if/else/elseif/switch),
    bucles (for/while/foreach) y arreglos (indexado/asociativo/multidimensional)
  </p>
</header>

<?php
// Inserta el menú de navegación desde un archivo externo
include __DIR__ . '/menu.php';
?>

<!-- Inicio del contenido principal de la página -->
<main class="container">
