<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão com o banco de dados</title>
</head>
<body>
    <?php
    $servername= "localhost";
    $username= "nome_usuario";
    $resenha = "resenha";
    $id = "id";
    $titulo_livro = "titulo_livro";
    $data_postagem = "data_postagem";
    $password= "";
    $dbname= "site_livros";

    $conn = new mysqli($servername, $username, $resenha, $id, $titulo_livro, $data_postagem, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    ?>
</body>
</html>