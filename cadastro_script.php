<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title> Cadastro </title>
</head>

 <body>
    <div class = "container">
     <div class= "row">
    <?php
    include "conexao.php";
        $nome= $_POST['nome'];
        $endereco= $_POST['endereco'];
        $telefone= $_POST['telefone'];
        $email= $_POST['email'];
        $data_nascimento= $_POST['data_nascimento'];

    $sql = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) 
    VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento') ";
    
    if(mysqli_query($conn,$sql)){
        mensagem("$nome cadastrado com sucesso!", 'success');
    }else
        mensagem("$nome NÃO foi cadastrado  ", 'danger');
    ?>
    <a href ="index.php" class="btn btn-primary">Voltar</a>
    
</div>   
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>