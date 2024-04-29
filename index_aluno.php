<?php
header("Content-type:text/html; charset=utf8");
require_once "classes/Alunos.php";
$Alunos = new Alunos();
$listaAlunos = $Alunos->listarTodos();
if (isset($_GET["matricula"])){
    $result = $Alunos -> deletar();
    if ($result == 1){
        header("location:index_aluno.php");
    }
}
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
<div class="container lista">
    <div class="row">
        <div class="col-lg-10">
            <h3>Lista de Alunos</h3>
        </div>

        <div class="col-lg-2">
            <a class="btn btn-outline-info" href="cadastrar_aluno.php">Cadastrar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>E-mail</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaAlunos as $aluno){ ?>
                    <tr>
                        <td><?php echo $aluno->MATRICULA; ?></td>
                        <td><?php echo $aluno->NOME; ?></td>
                        <td><?php echo $aluno->SEXO; ?></td>
                        <td><?php echo $aluno->EMAIL; ?></td>
                        <td><?php echo $aluno->ENDERECO; ?></td>
                        <td><?php echo $aluno->TELEFONE; ?></td>
                        <td>
                            <a class="btn btn-outline-warning" href="editar_aluno.php?matricula=<?php echo $aluno->MATRICULA; ?>">
                                <img src="img/edit-icon.png">
                            </a>
                            <a class="btn btn-outline-danger" href="index_aluno.php?matricula=<?php echo $aluno->MATRICULA; ?>">
                                <img src="img/delete-icon.png">
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html