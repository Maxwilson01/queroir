<?php
if(!isset($_SESSION))
    session_start();

//Login de Usários
if(isset($_POST['login'])){

  include('class/conexao.php');
  
  $erro = array();

  // Captação de dados
    $senha = $_POST['password'];
    //md5($senha);
    $_SESSION['email'] = $mysqli->escape_string($_POST['email']);

    // Validação de dados
    if(!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL))
        $erro[] = "Preencha seu <strong>e-mail</strong> corretamente.";

    if(strlen($senha) < 6 || strlen($senha) > 16)
        $erro[] = "Preencha sua <strong>senha</strong> corretamente.";

    if(count($erro) == 0){

        $sql = "SELECT senha as senha, idUser as valor FROM login WHERE email = '$_SESSION[email]'";
        
        $que = $mysqli->query($sql) or die($mysqli->error);
        $dado = $que->fetch_assoc();
        
        if($que->num_rows == 0)
            $erro[] = "Nenhum usuário possui o <strong>e-mail</strong> informado ou <strong>senha</strong> incorreta.";

        elseif(strcmp($dado['senha'], ($senha)) == 0){
            
            $_SESSION['user_logado'] = $dado['valor'];
        
        }else
            $erro[] = "<strong>E-mail ou Senha</strong> incorreta.";

        if(count($erro) == 0){
            echo "<script>location.href='/queroir/PainelAdmin/';</script>";
            exit();
            unset($_SESSION['email']);
        }

    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/config.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
</head>
<body>
<div class="rowLogin">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Painel Admin - Login</h3>
                    </div>
                    <img src="imgs/logo-login.png" width="160" height="150">
                    <div class="panel-body">
                        <?php 
                        if(isset($erro)) 
                            if(count($erro) > 0){ ?>
                                <div class="alert alert-danger">
                                    <?php foreach($erro as $msg) echo "$msg <br>"; ?>
                                </div>
                            <?php 
                            }
                            ?>
                        <form method="post" action="" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Lembrar-me
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required placeholder="Senha" name="password" type="password" value="">
                                </div>
                                <button type="submit" name="login" value="true" class="btn btn-primary btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>