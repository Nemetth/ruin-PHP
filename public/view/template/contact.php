<html lang="es">
<?php
include("../parts/head.php");
?>

<body class="background-gradient ">
  <?php
include('../parts/header.php');

?>

  <h1>CONTACTANOS</h1>
  <form action="" method="POST">
    <label for="name">Nombre</label>
    <input type="text" required id="name" name='name'>
    <label for="lastname">Apellido</label>
    <input type="text" required id="lastname" name='lastname'>
    <label for="mail">Correo electrónico</label>
    <input type="email" required id="mail" name='mail'>
    <label for="tel">Teléfono</label>
    <input type="number" required id="tel" name='tel'>
    <button type="submit" class='btn btn-info btn-sm mb-2'>Enviar</button>
    <a href="mailto:info@trenesargentinos.com" class="btn btn-link">
  </form>

  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $lastname = $_POST ["lastname"];
  $mail = $_POST["mail"];
  $tel = $_POST["tel"];


  echo "<div class='alert alert-success'>Muchas gracias por contactarte, $name $lastname . Nos pondremos en contacto contigo pronto.</div>";
}?>

  <?php
include('../parts/footer.php');
?>
</body>

</html>