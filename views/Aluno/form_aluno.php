<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sistema Biblioteca - Cadastro de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@s.3.3/dist/css/booststrap.m"
</head> 

<body>
    
    <div>
        <?php include VIEWS . '/Includes/menu.php' ?>

        <h1> Cadastro de alunos </h1>

        <?= $model-> getErrors() ?>

        <form method="post" action ="/aluno/cadastro" class="p-5">

        <input name ="id" type="hidden" value="<?= $model->Id ?>" />


        <div class="mb-3">
            <label for = "nome" class = "form-label"> Nome: </label>
            <input typw="text" value="<?= $model->Nome ?>" class="form-control" name="nome" id="nome"> 
        </div>

        <div class="mb-3">
            <label for = "curso" class = "form-label"> Curso: </label>
            <input typw="text" value="<?= $model->Curso ?>" class="form-control" name="curso" id="curso"> 
        </div>

        <div class="mb-3">
            <label for = "ra" class = "form-label"> RA: </label>
            <input typw="text" value="<?= $model->RA ?>" class="form-control" name="ra" id="ra"> 
        </div>






