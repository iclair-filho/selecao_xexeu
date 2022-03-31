<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Login</title>

  <div class="main">
</head>

<body>
  <div class="main">
    <div class="container">
      <div class="middle">
        <div id="login">

          <form action="processa.php" method="POST">

            <fieldset class="clearfix">

              <p><span class="fa fa-user"></span>
                <input type="text" Placeholder="Username" name="user" required>
              </p>
              <p><span class="fa fa-lock"></span>
                <input type="password" Placeholder="Password" name="password" required>
              </p>

              <div>
                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="cadusuario.php">Registrar</a></span>
                <span style="width:48%; text-align:right;  display: inline-block;"><input type="submit" value="Entrar"></span>
              </div>

            </fieldset>
            <div class="clearfix"></div>
          </form>

          <div class="clearfix"></div>

        </div> <!-- end login -->

        <!-- <div class="logo">
        <img src="" alt="IVF">
          
          <div class="clearfix"></div>
      </div> -->

      </div>

    </div>

  </div>
</body>

</html>