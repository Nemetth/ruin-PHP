<?php

// Obtén la URL actual
$currentUrl = $_SERVER['REQUEST_URI'];

// Define una variable para almacenar la URL base por defecto
$baseURL = '';

// Condiciona la URL base según la página actual
if (strpos($currentUrl, 'index.php') !== false) {
    $baseURL = 'public/view/assets/css/styles.css';
} else {
    $baseURL = 'http://localhost/ruin/public/view/assets/styles.css';
}
// Define la constante BASE_URL con el valor condicionado
define('BASE_URL', $baseURL);

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/8a400f4da3.js" crossorigin="anonymous"></script>
  <!-- Librería de FontAwesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title>Ruin</title>
</head>