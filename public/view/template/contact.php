<html lang="es">
<?php
include("../parts/head.php");
?>

<body class="background-gradient ">
  <?php
include('../parts/header.php');

?>

  <section class="container p-3">
    <div class="row">
      <h1 class="title-style titles-style ">CONTACTANOS POR MUESTRAS GRATIS</h1>
      <div>
        <form class="d-flex flex-column paragraph-style " action="" method="POST">
          <label for="name">Nombre</label>
          <input type="text" required id="name" name='name'>
          <label for="lastname">Apellido</label>
          <input type="text" required id="lastname" name='lastname'>
          <label for="email">Correo electrónico</label>
          <input type="email" required id="email" name='email'>
          <label for="tel">Teléfono</label>
          <input type="number" required id="tel" name='tel' class="">
          <button type="submit" class='btn btn-primary btn-sm mb-2 ' id="contactForm">Enviar</button>

        </form>
      </div>
    </div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $lastname = $_POST ["lastname"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];


  echo "<div class='alert alert-success'>Muchas gracias por contactarte, $name $lastname . Nos pondremos en contacto contigo pronto.</div>";
}?>
  </section>

  <?php
include('../parts/footer.php');
?>
  <script>
  $(document).ready(function() {
    $('#contactForm').submit(function(e) {


      let name = $('#name').val();
      let lastname = $('#lastname').val();
      let mail = $('#mail').val();
      let tel = $('#tel').val();

      if (name === '' || lastname === '' || mail === '' || tel === '') {
        alert('Por favor, complete todos los campos');
        return;
      }

      let emailCorrecto = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailCorrecto.test(mail)) {
        alert('Por favor, ingrese un correo electrónico válido');
        return;
      }
      let telefonoCorrecto = /^\d+$/;
      if (!telefonoCorrecto.test(tel)) {
        alert('Por favor, ingrese un número de teléfono válido');
        return;
      }
      /*       alert('Formulario enviado correctamente'); */
    });
  });
  </script>
</body>

</html>