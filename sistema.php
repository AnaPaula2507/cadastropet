<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sistema</title>
</head>
<body>
    <?php
    include_once "conexao.php";

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $responsavel = $_POST['responsavel'];
    

        $stmt=$conn->prepare("insert into pet(nome, idade, responsavel) values(:NOME, :IDADE, :RESPONSAVEL)");

            $stmt->bindParam(":NOME", $nome);
            $stmt->bindParam(":IDADE", $idade);
            $stmt->bindParam(":RESPONSAVEL", $responsavel);
             
            $msg = $stmt->execute()?"Livro Cadastrado com sucesso!":"Erro ao alterar!";

            header("location: index.php?msg=".urlencode($msg));
        
    ?>   
</body>
</html>