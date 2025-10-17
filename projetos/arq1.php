<?php
class Curso {
    // Propriedades (Atributos)
    public $nome; // Acessível de qualquer lugar
    private $cargaHoraria; // Acessível apenas dentro desta classe
    protected $instrutor; // Acessível aqui e em classes filhas

    // Construtor: Método especial chamado ao criar um objeto (new)
    public function __construct($nome, $cargaHoraria, $instrutor = "A definir") {
        $this->nome = $nome; // '$this' se refere ao objeto atual
        $this->setCargaHoraria($cargaHoraria);
        $this->instrutor = $instrutor;
        echo "Curso '{$this->nome}' criado!<br>";
    }

    // Métodos (Ações)
    public function getNome() {
        return $this->nome;
    }

    public function setCargaHoraria($horas) {
        if ($horas > 0) {
            $this->cargaHoraria = $horas;
        } else {
            $this->cargaHoraria = 10; // Valor padrão mínimo
        }
    }

    public function getCargaHoraria() {
        return $this->cargaHoraria;
    }

    // Destrutor: Chamado quando o objeto é destruído
    public function __destruct() {
        // echo "Curso '{$this->nome}' destruído.<br>"; // Útil para liberar recursos
    }
}
?>
