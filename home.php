<?php
session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Pagina de Inicio</title>
   </head>
      <frameset rows="10%,*,10%" frameborder="yes" bordercolor="#333" marginwidth="10%" marginheight="10%" scrolling="no">
          <frame src="titulo.php" name="superior"></frame>
          <frameset cols="20%,*" frameborder="yes" bordercolor="#333" marginwidth="10%" marginheight="10%" scrolling="no">
              <frame src="menu.php" name="izquierda"></frame>
              <frame src="contenido.php" name="derecha"></frame>
            </frameset>
          <frame src="pie.php" name="pie"></frame>
      </frameset>

   <body>

   </body>
 </html>
