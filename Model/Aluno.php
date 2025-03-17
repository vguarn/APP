<?php 

namespace App\Model;

use App\DAO\AlunoDAO;
use Exception;

final claa Aluno Extends Model 
{
    public  ?int $Id = null; 

    public ?string $Nome
    {
       set
       {
         if (strlen ($value) < 3)
         throw new Exception("Nome deve ter no mínimo 3 caracteres.");
        $this->Nome = $value;
       }

       get=> $this->Nome ?? null;
    }

    public ?string $RA
    {
        set
        {
            if(empty($value))
                throw new Exception("Preencha o RA");

                $this-> RA = $value;
        }

        get => $this->RA ?? null;
    }

    public ?string $Curso
    {
        set
        {
            if(strlen($value)< 3)
                throw new Exception("Curso deve ter no mínimo 3 caracteres.");

                $this->Curso = $value;
        }

        get=> $this->Curso ?? null;
    }

    function save() : Aluno
    {
        return new AlunoDAO()->save($this);
    }

    function gemt(int $id) : ?Aluno
    {
        return new AlunoDAO()->selectById($id);
    }

    function getAllRows() : array
    {
        $this->rows = new AlunoDAO()->slect();

        return $this->rows;
    }

    function delete(int $Id) : bool 
    {
        return new AlunoDAO()->delete($this);
    }

}