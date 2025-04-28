<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir resenha</title>
</head>
<body>
    <?php
    include 'conexao.php';
     $nome_usuario = $POST['nome_usuario'];
     $titulo_livro = $POST['tirulo_livro'];
     $resenha = $POST['resenha'];
     $data_ppostagem = date('Y-m-d H:i:s');

     $sql = "INSERT INTO resenhas (nome_usuario, titulo_livro, resenha, data_postagem)
     VALUES ('$nome_usuario', '$titulo_livro', '$resenha', '$data_postagem')";

     if ($conn->query($sql) === TRUE) {
        echo "Resenha enviada com sucesso!";
     } else {
        echo "Erro : " . $sql . "<br>" . $conn->error;
     }

     $conn->close();
    ?>
</body>
</html>