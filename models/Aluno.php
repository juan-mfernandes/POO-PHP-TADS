<?php

class Aluno {
    private string $nome;
    private int $idade;
    private bool $status = false ;
    
    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setStatus(): void {
        $this->status = true;
    }

    public function getStatus(): string {
        if($this->status === true) {
            return "Matriculado";
        }else{
            return "Não Matriculado";
        } 
    }

}