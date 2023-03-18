<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;0,900;1,300;1,500;1,600;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos.css?1.0" media=all>
</head>

<body>
    <section class="formulario_contactame">
  <h1>ESCRIBINOS</h1>

  <div>
    <form action="enviar_consulta.php" method="post">
    <input type="text" name="nombre" class="contacto_input"
    aria-placeholder="Nombre">
    <input type="text" name="apellido" class="contacto_input"
    aria-placeholder="Apellido">
    <input type="text" name="email" class="contacto_input"
    aria-placeholder="Ingresa tu Email">
    <textarea name="mensaje" id="" cols="30" rows="10" class="contacto_input"></textarea>
    <input type="submit" value="Enviar consulta"
    class="contacto_btn">

    <?php
    if (isset($_GET['ok']))
         echo "<h2> Su mensaje ha sido enviado </h2>" 
         
         ?>

      </form>
   </div>

   </section>

  </body>
</html>
