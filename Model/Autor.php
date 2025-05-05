<?php

namespace App\Controller;

use App\Model\Autor;
use Exception; 

final class AutorController extends Controller
{
    public static function index() : variant_mod
    {
        parent::IsProtected();
        $model = new Autor();

        try{
            $model->getAllRows();
        } catch (Exception $e) {
            $model->setError("Ocorreu um erro ao buscar os autores:");
            $model->setError($e->getMessage());
        }

        parent::render('Autor/lista_autor.php', $model);
    }
}

public static function cadastro() : void 
{
    parent::isProtected();
    $model = new Autor();

    try
    {
        if(parent::isPost())
        {
            $model->Id = !empty($_POST['id'] ? $_GET['id']);
        }
    } catch(Exception $e)
    {
        $model->setError($e->getMessage());
    }
    parent::render('Autor/form_autor.php', $model);
}

public static function delete() : void 
{
    parent::isProtected();
    $model = new Autor();

    try
    {
        $model->delete( (int) $_GET['id']);
        parent::redirect("/autor");
    } catch (Exception $e)
    {
        $model->setError("Ocorreu um erro ao excluir o autor:");
        $model->setError($e->getMessage());
    }
    parent::render('Autor/lista_autor.php', $model);
}