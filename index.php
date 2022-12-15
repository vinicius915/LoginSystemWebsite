
<?php 
  session_start(); //inicia a sessão de usuário

  // Cria a conexão com o Banco de Dados
  $server = "localhost";    //nome do host/computador onde está o banco de dados
  $user = "root";           //nome do usuário que tem permissão de acesso ao banco
  $pass = "root";               //senha para entrar (no caso está sem senha)
  $db = "bdd_log";       //nome do banco de dados a ser consultado
  $connect = mysqli_connect($server, $user, $pass, $db); //a biblioteca mysqli nativa do php junta os dados e estabelece a conexão
  
if(mysqli_connect_error()){
    echo 'Erro na conexão'.mysqli_connect_error(); 
}else{
    echo 'Boa!';
}
  // Verifica se o formulário de novo registro foi preenchido
  if(isset($_GET['novo']) && $_GET['novo'] = 'usuario'){ 

    // Pega valores do formulário enviados via POST
    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];

    // SQL para inserir novo registro:
    $sql = "INSERT INTO usuarios ( Nome_usuario, Senha_usuario ) VALUES ( '".$nome."', '".$senha."' ) ";
    $resultado = mysqli_query($conexao, $sql); //executa a SQL no banco por meio da conexão
    if($resultado){
      header('Location: home.php'); 
    }else{
      header('Location: index.php?login=erro'); 
    }

  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="/img/" type="image/x-icon">

        <!--=============== FONTAWESOME ===============-->
        <script src="https://kit.fontawesome.com/2c07fe46a8.js" crossorigin="anonymous"></script>


        <!--=============== BOOTSTRAP ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/style.css">


</head>
<body>


</body>
</html>