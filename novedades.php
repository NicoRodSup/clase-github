<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LETRAS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;0,900;1,300;1,500;1,600;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos.css?1.0" media=all>
</head>

<body>
<header>
      <nav>
        <ul class="encabezado__menu">
            <li><h3><a href="index.php">INICIO</a></h3></li>          </ul>
        </nav>
    </header>

<section class="caja__novedades"> 
  <div class="novedades"> 
    <nav>
      <ul class="menu__novedades">
        <li><a href="novedades.php?nom=pg"> PELUCHITO DE GUSANOS</a></li>
        <li><a href="novedades.php?nom=ml"> MIL</a></li>
        <li><a href="novedades.php?nom=cl"> EL CIELO DE LOS LAMENTOS</a></li>
      </ul>
    </nav>
</div>

<?php

if (isset($_GET['nom'])) {
   switch(($_GET['nom'])) {
       case 'pg':
          $letra="Al fin llegaste a la tumbita de Chacarita, te envian flores que nunca vas a tocar,arrodillado se vienen de todos lados y tus sueñitos no te dejan descnansar. Hoy es la muerte la que te va a torturar. No vas a poder dormir en tu linda cama, conformate con tener tu peluchito de gusanos. No vas a poder dormir en tu linda cama , conformate con tener tu peluchito de gusanos. ...";
          $autor="Letra: Franco de Francesco"; 
          $musica="Musica:Franco de Francesco/Facundo Azambuya/Nicolas Curto/Nicolas Rodriguez";
          break;

        case'ml':
          $letra=" Un agujero que se cierra otro barco sin timon, mal hazañas se me ocurren, mil canciones para vos. Un ahujero en tu ventana, tu mirada cautivo, mil y una noches loco, solo falta verte a vos. Y saber que no haces falta, y pensar que es tu opinion. ";
          $autor="Letra: Franco de Francesco"; 
          $musica="Musica:/Facundo Azambuya/Nicolas Curto/Nicolas Rodriguez";  
          break;

        case'cl':
          $letra=" La bestia que esta adentro de tu interior , la que muerde tus tripas en el dolor, te injusto y corrupta , con tus brazos felices.Tan curioso es el cielo de los lamentos, que rozaste esa nube y volvio a llorar. ";
          $autor="Letra: Franco de Francesco"; 
          $musica="Musica:Franco de Francesco/Facundo Azambuya/Nicolas Curto/Nicolas Rodriguez"; 
          break;   
          }
      }

      ?>

      <div class="info_novedades">
        <h2> <?php echo @$letra ?> </h2>
        <h2> <?php echo @$autor ?> </h2>
        <h2> <?php echo @$musica?> </h2>
         
      </div>




</section>



  </body>
</html> 