<?php
  $nombre_form= $_POST['nombre'];
  $apellido_form= $_POST['apellido'];
  $email_form= $_POST['email'];
  $mensaje_form= $_POST['mensaje'];


  //CONEXION A BASE DE DATOS LOCALHOST

  // $conexion = mysqli_connect("localhost", "root" ,"","programador__web__282") or exit("No se pudo conectar a la base de datos");

  // CONEXION A BASE DE DATOS SERVIDOR

  $conexion = mysqli_connect("localhost", "id20029126_nicolaslmi12"	,"}e)@X9LbdFIhxlt4","id20029126_programador__web__282") or exit("No se pudo conectar a la base de datos");
  
  mysqli_query($conexion,"INSERT INTO consultas VALUES (DEFAULT, '$nombre_form','$apellido_form','$email_form','$mensaje_form')");
  
  mysqli_close($conexion);

  header("Location: contacto.php?ok");



  
  
  
  //CONTRASEÑA }e)@X9LbdFIhxlt4
         
        
    
  


