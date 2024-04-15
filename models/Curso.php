<?php 

class Curso {
    private string $nomeCurso;
    private int $idadeMinimaCurso;

    public function __construct(string $nomeCurso, int $idadeMinimaCurso )
    {
        $this->nomeCurso = $nomeCurso;
        $this->idadeMinimaCurso = $idadeMinimaCurso;
    }

    public function getIdadeMinimaCurso(): int {
        return $this->idadeMinimaCurso;
    }

    public function getNomeCurso(): string {
        return $this->nomeCurso;
    }
}