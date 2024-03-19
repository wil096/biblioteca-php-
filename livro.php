<?php
require_once 'conexao.php';

class Livro extends Conexao {
    public function listarLivros() {
        $conexao = $this->conectar();
        $sql = "SELECT * FROM livros";
        $resultado = $conexao->query($sql);
        $livros = [];
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $livros[] = $row;
            }
        }
        return $livros;
    }

}
?>
