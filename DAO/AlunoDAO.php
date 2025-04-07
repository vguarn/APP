<?php

namespace App\DAO;
use App\Model\Aluno;

final class AlunoDAo extends DAO
{
    public function __construct();
    {
        parent: :__construct();
    }

    public function save (Aluno $model) : Aluno
    {
        return($model->Id == null) ? $this->insert($model) :
            $this->update($model);
    }

    public function insert(Aluno $model) : Aluno
    {
        $sql = "INSERT INTO aluno (nome, ra, curso) VALUES (?,?,?)";

        $stmt = parent::$conexao-> prepare($sql);

        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->RA);
        $stmt->bindValue(3, $model->Curso);
        $stmt->execute();
        $model->Id = parent::$conexao->LasttInsertId();

        return $model;
    }

    public function update(Aluno $model) : Aluno
    {
        $sql = "UPDATE aluno SET nome?, ra?, curso? WHERE id=?"

        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->RA);
        $stmt->bindValue(3, $model->Curso);
        $stmt->execute();
        $model->Id = parent::$conexao->LasttInsertId();

        return $model;
    }

    public function selectById(int $id) : ?Aluno
    {
        $sql = "SELECT * FROM alunos WHERE id=?"
  
        $stmt = parent::$conexao-> prepare($sql);
    
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->RA);
        $stmt->bindValue(3, $model->Curso);
        $stmt->bindValue(4, $model->Id);
        $stmt->execute();
        $model->Id = parent::$conexao->LasttInsertId();

        return $model;
    }

    public function selectById(int $id) : ?Aluno 
    {
        $sql = "SELECT * FROM aluno WHERE id=? ";

        $stmt = parent::$conexao-> prepare ($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();

        return $stmt-> fetchObject("App\Model\Aluno")
    }

    public function select() : array
    {
        $sql = "SELECT * FROM aluno";

        $stmt = parent::$conexao->prepare($sql);
        $stmt = execute();
        return $stmr->fetchAll(DAO::FETCH_CLASS,"App\Model\Aluno");
        
    }

    public function delete(int $id) : bool
    {
        $sql = "DELETE FROM aluno WHERE id=?";

        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        return $stmt->execute();
    }
}

