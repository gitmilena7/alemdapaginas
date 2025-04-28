<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler todas as resenhas (READ)</title>
</head>
<body>
    <?php
     include 'conexao.php';

     $sql = "SELECT * FROM resenhas ORDER BY data_postagem DESC";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
     {
    
     echo "<div>";
     echo "<h3>" .
     htmlspecialchars($row['titulo_livro']) . 
     "</h3>";
          echo "<p><strong>Por:</strong>" .
          htmlspecialchars($row['nome_usuario']) . 
          "</p>";
             echo "<p>" .
          n12br(htmlspecialchars($row['resenha'])) . 
          "</p>";
          echo "<small>Postado em: " .
          $row[data_postagem] . "</small>";
          echo "<hr>";
          echo "</div>";
     }
    } else {
        echo "Nenhuma resenha encontrada.";
    }

    $conn->close();
    ?>
</body>
</html>