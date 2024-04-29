<?php
header("Content-type:text/html; charset=utf8");
require_once "classes/Alunos.php";
$Alunos = new Alunos();

if(isset($_GET["matricula"])){
    $dadosAlunos = $Alunos->listarID($_GET["matricula"]);
}

if(isset($_POST["salvar"])){

     $result = $Alunos->atualizar();

     if($result == 1){
         header('location: index_aluno.php');
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
    <div class="row titulos">
        <div class="col-lg-10">
            <h3>Editar Aluno</h3>
        </div>
        <div class="col-lg-2">
            <a class="btn btn-outline-success"  href="index_aluno.php">Voltar</a>
        </div>
    </div>
     <div class="row">
       <div class="col-lg-12">
           <form action="editar_aluno.php" method="post">
               <div class="row">
               <div class="form-group col-lg-2">
                   <label for="matricula">Matrícula</label>
                   <input type="text" name="matricula" id="matricula" value="<?php echo $dadosAlunos[0]->MATRICULA; ?>" class="form-control" readonly >
               </div>
               <div class="form-group col-lg-6">
                   <label for="nome">Nome</label>
                   <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $dadosAlunos[0]->NOME; ?>" required>
               </div>
               <div class="form-group col-lg-4">
                   <label for="sexo">Sexo</label>
                   <select name="sexo" id="sexo" class="form-control" required>
                       <option value="">Selecionar uma opção</option>
                       <option value="F" <?php if($dadosAlunos[0]->SEXO == 'F'){ echo 'selected'; } ?>>Feminino</option>
                       <option value="M" <?php if($dadosAlunos[0]->SEXO == 'M'){ echo 'selected'; } ?>>Masculino</option>
                       <option value="N" <?php if($dadosAlunos[0]->SEXO == 'N'){ echo 'selected'; } ?>>Não Declarar</option>
                       <option value="O" <?php if($dadosAlunos[0]->SEXO == 'O'){ echo 'selected'; } ?>>Outro</option>
                   </select>
               </div>
               <div class="form-group col-lg-6">
                   <label for="email">E-mail</label>
                   <input type="email" name="email" id="email" class="form-control" value="<?php echo $dadosAlunos[0]->EMAIL; ?>" required>
               </div>
               <div class="form-group col-lg-6">
                   <label for="endereco">Endereço</label>
                   <input type="text" name="endereco" id="endereco" class="form-control"  value="<?php echo $dadosAlunos[0]->ENDERECO; ?>"required>
               </div>
               <div class="form-group col-lg-4">
                   <label for="telefone">Telefone</label>
                   <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $dadosAlunos[0]->TELEFONE; ?>" required>
               </div>
               <div class="form-group col-lg-4">
                   <label for="senha">Senha</label>
                   <input type="password" name="senha" id="senha" class="form-control" value="<?php echo $dadosAlunos[0]->SENHA; ?>" required>
               </div>
               <div class="col-lg-12">
                   <button type="submit" class="btn btn-outline-success" name="salvar">Salvar</button>
               </div>
               </div>
           </form>
       </div>
    </div>
</div>


</body>
</html