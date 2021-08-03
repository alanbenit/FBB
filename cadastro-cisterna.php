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
              <label for="cpf"><h6>Cadastre uma cisterna</h6></label>
              <input type="text" name="data" id="data" class="form-control"placeholder="Data de Inauguração" maxlength="11" size="11">
            </div>
            <div class="form-group">
                <label for="material">Tipo de material:</label>
                <select name="material" id="material">
                    <option value="alvenaria">Alvenaria</option>
                    <option value="fibra">Fibra</option>
                    <option value="pre">Pré-fabricada</option>
                </select>
                <br><br>
            </div>
            <div class="form-group">
              <label for="cpf"><h6>Algum outro material específico?:</h6></label>
              <input type="text" name="text" id="text" class="form-control" maxlength="100" size="100">
              <small id="ajudaMaterial" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
            <label for="uf">Informe a UF:</label>
                <select name="uf" id="uf">
                    <option value="AC">Acre</option>
	                <option value="AL">Alagoas</option>
	                <option value="AP">Amapá</option>
	                <option value="AM">Amazonas</option>
	                <option value="BA">Bahia</option>
	                <option value="CE">Ceará</option>
	                <option value="DF">Distrito Federal</option>
	                <option value="ES">Espírito Santo</option>
	                <option value="GO">Goiás</option>
	                <option value="MA">Maranhão</option>
	                <option value="MT">Mato Grosso</option>
	                <option value="MS">Mato Grosso do Sul</option>
	                <option value="MG">Minas Gerais</option>
	                <option value="PA">Pará</option>
	                <option value="PB">Paraíba</option>
	                <option value="PR">Paraná</option>
	                <option value="PE">Pernambuco</option>
	                <option value="PI">Piauí</option>
	                <option value="RJ">Rio de Janeiro</option>
	                <option value="RN">Rio Grande do Norte</option>
	                <option value="RS">Rio Grande do Sul</option>
	                <option value="RO">Rondônia</option>
	                <option value="RR">Roraima</option>
	                <option value="SC">Santa Catarina</option>
	                <option value="SP">São Paulo</option>
	                <option value="SE">Sergipe</option>
	                <option value="TO">Tocantins</option>
                </select>
                <br><br>
            </div>
            <div class="form-group">
              <label for="cpf"><h6>Cidade</h6></label>
              <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" maxlength="50" size="50">
            </div>
            <div class="button col-12">
            <button type="submit" class="btn btn-primary" name="ok" value="ok">OK</button>
            </div>
          </form>
        </div> 
      </div>
    </div>
    <?php
    $connect = mysqli_connect("localhost","root","");
    $db = mysqli_select_db("cisternas", $connect);
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
