<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar as resenhas (DELETE)</title>
</head>
<body>
<form action="deletar_resenha.php" method="post" onsubmit="return 
confirm('Tem certeza que deseja deletar esta resenha?');">
        <input type="hidden" name="id" value="ID_DA_RESENHA_AQUI">
        <button type="submit">Deletar Resenha</button>
    </form>

    <?php
    include 'conexao.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM resenhas WHERE id=$id";

   if ($conn->query($sql) === TRUE) {
    echo "Resenha deletada com sucesso!";
   } else {
    echo "Erro: " . $sql . "<br>" . 
    $conn->error;
   }
   
   $conn->close();
    ?>
</body>
</html>