<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar as resenhas (UPDATE)</title>
</head>
<body>
<form action="atualizar_senha.php" method="post">
        <input type="hidden" name="id" value="ID_DA_RESENHA_AQUI">
        <textarea name="resenha" required>Texto atual da resenha...</textarea><br>
        <button type="submit">Atualizar Resenha</button>
    </form>

    <?php
    include 'conexao.php';

    $id = $_POST['id'];
    $resenha = $_POST['resenha'];

    $sql = "UPDATE resenhas SET 
    resenha='$resenha' WHERE id=$id";
 
   if ($conn->query($sql) === TRUE) {
    echo "Resenha atualizada com sucesso!";
   } else {
    echo "Erro: " . $sql . "<br>" . 
    $conn->error;
   }
   
   $conn->close();
    ?>
</body>
</html>