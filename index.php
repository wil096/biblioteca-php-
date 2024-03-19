<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Sistema de Biblioteca</h1>
        <table>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano de Publicação</th>
                <th>Quantidade Disponível</th>
            </tr>
            <?php
            require_once 'livro.php';
            $livro = new Livro();
            $livros = $livro->listarLivros();
            foreach ($livros as $livro) {
                echo "<tr>";
                echo "<td>" . $livro['titulo'] . "</td>";
                echo "<td>" . $livro['autor'] . "</td>";
                echo "<td>" . $livro['ano_publicacao'] . "</td>";
                echo "<td>" . $livro['quantidade_disponivel'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
