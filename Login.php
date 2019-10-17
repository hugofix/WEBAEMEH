<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bienvenido</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>
  <body>

<div class="login-box">
  <h1>Iniciar Sesión</h1>
  <form method="POST" action="validation.php">
    <div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
      <input type="text" placeholder="Nombre y Apellido" name="usuario">
      </div>

      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="pasword">
        </div>

        <input class="btn" type="submit" id="btn" value="Iniciar Sesión">
    </form>
</div>

  </body>
</html>
