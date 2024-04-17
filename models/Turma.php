<?php 

class Turma {
    private int $ano;
    private array $alunos = [];
    private Curso $curso;
    
    public function __construct(int $ano, Curso $curso ){
        $this->ano = $ano;
        $this->curso = $curso;
    }

    public function getAno(): int {
        return $this->ano;
    }

    protected function validarMatricula(Aluno $aluno): bool {
        $nomeAluno = $aluno->getNome();
        if ($aluno->getIdade() < $this->curso->getIdadeMinimaCurso()) {
            echo "O aluno " . $nomeAluno . " precisa ter a idade minima para ser matriculado no curso.";
            return 0;
        }else {
            return 1;
        }
    }

    public function matricularAluno(Aluno $aluno ) {
        if (self::validarMatricula($aluno) === true) {
            $aluno->setStatus();
            return $this->alunos[] = $aluno;
        } else {
            return 0;
        }
    }

    public function getAlunos(): array {
        return $this->alunos;
    }

    public function getCurso(): Curso {
        return $this->curso;
    }

    public function getIdadeMinimaCurso(): int {
        return $this->curso->getIdadeMinimaCurso();
    }

}