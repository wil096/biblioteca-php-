<?php
class Conexao {
    private $host = "localhost";
    private $usuario = "seu_usuario";
    private $senha = "sua_senha";
    private $bancoDados = "nome_do_banco";

    protected function conectar() {
        $conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->bancoDados);
        if ($conexao->connect_error) {
            die("Erro na conexão: " . $conexao->connect_error);
        }
        return $conexao;
    }
}
?>
