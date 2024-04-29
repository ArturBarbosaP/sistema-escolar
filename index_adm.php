<?php
header("Content-type:text/html; charset=utf8");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Sistema Escolar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">Sistema Escolar - Painel Administrativo</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index_aluno.php">Alunos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_professor.php">Professor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_funcionario.php">Funcionários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_curso.php">Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_disciplina.php">Disciplinas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Sair</a>
        </li>
    </ul>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4">
              <div class="card card_alunos">
                  <div class="card-title">Alunos</div>
                  <div class="card-body">
                      <img src="img/alunos.png" alt="">&nbsp;&nbsp;1500</div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card card_professor">
                <div class="card-title">Professores</div>
                <div class="card-body">
                    <img src="img/professor.png" alt="">&nbsp;&nbsp;35</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card_curso">
                <div class="card-title">Cursos</div>
                <div class="card-body">
                    <img src="img/cursos.png" alt="">&nbsp;&nbsp;3</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card_disciplina">
                <div class="card-title">Disciplinas</div>
                <div class="card-body">
                    <img src="img/disciplinas.png" alt="">&nbsp;&nbsp;56</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card_funcionario">
                <div class="card-title">Funcionários</div>
                <div class="card-body">
                    <img src="img/funcionarios.png" alt="">&nbsp;&nbsp;13</div>
            </div>
        </div>

    </div>
</div>
</body>
</html