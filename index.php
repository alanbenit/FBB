<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
  <link rel="stylesheet" href="./css/main.css">
  <title>Cisterna Brasil</title>
</head>
<body>
    <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
        <h5 class="login-title">Cisterna Brasil</h5>
        <div class="modal-content">
          <form class="col-12" method="post">
            <div class="form-group">
              <label for="cpf"><h6>Login</h6></label>
              <input type="text" name="login" id="cpf" class="form-control" aria-describedby="ajudaCPF" placeholder="Informe o seu CPF" maxlength="11" size="11">
            </div>
            <div class="form-group">
              <input type="password" name="senha" id="password" class="form-control" placeholder="Senha de até 16 dígitos" maxlength="16" size="16">
            </div>
            <div class="form-check col-12">
              <input type="checkbox" class="form-check-input" id="lembrarUsuario">
              <label class="form-check-label" for="check">Lembrar-me</label>
            </div>
            <div class="button col-12">
            <a href="./cadastro-cisterna.php" class="btn btn-light active btn-sm" role="button" aria-pressed="true">OK</a>
            </div>
            <div class="col-12 forgot">
              <a href="./forgot-password.php">Esqueceu a senha?</a>
            </div>
            <div class="col-12 register">
              <a href="./registrar.php">Registrar-se</a>
            </div>
          </form>
        </div> 
      </div>
    </div>
</body>
</html>
