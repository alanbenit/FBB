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
              <label for="cpf"><h6>Cadastro</h6></label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Informe o seu Nome" maxlength="100" size="100">
            </div>
            <div class="form-group">
              <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Informe seu telefone" maxlength="16" size="16">
            </div>
            <div class="form-group">
              <input type="email" name="email" id="emial" class="form-control" placeholder="e-mail@e-mail.com.br" maxlength="30" size="30">
            </div>
            <div class="form-group">
              <input type="password" name="senha" id="password" class="form-control" placeholder="Senha de até 16 dígitos" maxlength="16" size="16">
            </div>
            <div class="col-12 register">
            <button type="submit" class="btn btn-primary" name="ok" value="ok">OK</button>
            </div>
          </form>
        </div> 
      </div>
    </div>
    <?php
    $connect = mysqli_connect("localhost","root","");
    $db = mysqli_select_db("cisterna", $connect);
      if(isset($_POST['ok'])){
        $login = $_POST['login'];
        $senha = md5($_POST['senha']);
        $query_select = "select * from login = '$login'";
        $select = mysqli_query($query_select,$connect);
        $total_registros = mysqli_num_rows($select);
          if($total_registros > 0){
            echo "Login existente. Por favor, cadastre outro usuário.";
          } else {
            $query_insert = "insert into login (login, senha) Values ('$login','$senha')";
            $insert = mysqli_query($query_insert, $connect);
            echo "Cadastro realizado com sucesso";
          }
      }
    ?>
</body>
</html>
