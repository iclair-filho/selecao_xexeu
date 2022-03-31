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
  <div class="container">
    <div class="middle"> 
    <div id="login">


      <form action="admin/user_script.php" method="POST">

        <fieldset class="clearfix">
          <p><span class="fa fa-user"></span>
            <input type="text" Placeholder="Nome Completo" name="nome_completo" required>
          </p>
          <p><span class="fa fa-user"></span>
            <input type="text" Placeholder="Login" name="login" required>
          </p>
          <p><span class="fa fa-lock"></span>
            <input type="password" Placeholder="Senha" name="senha" required>
          </p>
          <p><span class="fa fa-lock"></span>
            <input type="password" Placeholder="Confirmar senha" name="confirma_senha" required>
          </p>

          <div>
            <span style="width:48%; text-align:right;  display: inline-block;"><input type="submit" value="Registrar"></span>
          </div>

        </fieldset>



      </form>

    </div>


  </div>
  </div>



  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>