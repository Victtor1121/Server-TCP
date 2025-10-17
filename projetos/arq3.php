<?php
// ... (classe Curso definida acima) ...

class CursoOnline extends Curso { // Herda de Curso
    public $plataforma = "Etec Ourinhos";

    public function exibirDetalhes() {
        // Acessa método público da classe pai
        echo "Curso: " . $this->getNome() . "<br>";
        // Acessa propriedade protegida da classe pai
        echo "Instrutor: " . $this->instrutor . "<br>";
        // Acessa propriedade da própria classe
        echo "Plataforma: " . $this->plataforma . "<br>";
    }
}

$cursoLaravel = new CursoOnline("Laravel Avançado", 50, "Mayk");
$cursoLaravel->exibirDetalhes();
?>
