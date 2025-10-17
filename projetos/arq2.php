<?php
// Inclua a definição da classe Curso aqui...

// Criando objetos (instanciando a classe)
$cursoPHP = new Curso("Formação PHP Completa", 80, "Isabela");
$cursoJS = new Curso("JavaScript Moderno", 60);

// Acessando propriedades e métodos públicos
echo "Nome do curso: " . $cursoPHP->getNome() . "<br>"; // Formação PHP Completa
echo "Carga horária: " . $cursoPHP->getCargaHoraria() . " horas<br>"; // 80 horas

// $cursoPHP->cargaHoraria = -10; // Erro! 'cargaHoraria' é private
$cursoPHP->setCargaHoraria(-10); // Usa o método para validar
echo "Nova carga horária: " . $cursoPHP->getCargaHoraria() . " horas<br>"; // 10 horas (valor mínimo)

var_dump($cursoJS);
?>
