<?php
require_once "Conexao.php";
class Alunos
{
    //atributos
    public $MATRICULA;
    public $NOME;
    public $SEXO;
    public $EMAIL;
    public $ENDERECO;
    public $TELEFONE;
    public $SENHA;

    //metodos
    public function listarTodos(){
        try {
            $bd = new Conexao();
            $lista = $bd -> executeSelect("select * from alunos");
            return $lista;
        }catch (PDOException $msg){
            echo "Não foi possível listar os dados dos alunos: ".$msg->getMessage();
        }
    }

    public function deletar(){
        try {
            if ($_GET["matricula"]){
                $this->MATRICULA = $_GET["matricula"];
                $bd = new Conexao();
                $comanoDelete = "delete from alunos where matricula = {$this->MATRICULA}";
                return $bd -> executeQuery($comanoDelete);
            }
        }catch (PDOException $msg){
            echo "Não foi possível deletar os dados dos alunos: ".$msg->getMessage();
        }
    }

    public function inserir(){
        try {
            if (isset($_POST["salvar"])){
                $this ->MATRICULA = $_POST["matricula"];
                $this ->NOME = $_POST["nome"];
                $this ->SEXO = $_POST["sexo"];
                $this ->EMAIL = $_POST["email"];
                $this ->ENDERECO = $_POST["endereco"];
                $this ->TELEFONE = $_POST["telefone"];
                $this ->SENHA = $_POST["senha"];

                $bd = new Conexao();
                $comandoInsert = "insert into alunos values({$this->MATRICULA},'{$this->NOME}','{$this->SEXO}','{$this -> EMAIL}','{$this->ENDERECO}','{$this->TELEFONE}','{$this->SENHA}');";
                return $bd -> executeQuery($comandoInsert);
            }
        }catch (PDOException $msg){
            echo "Não foi possível inserir os dados dos alunos: ".$msg->getMessage();
        }

    }

    public function atualizar(){
        try {
            if (isset($_POST["salvar"])){
                $this->MATRICULA = $_POST["matricula"];
                $this->NOME = $_POST["nome"];
                $this->SEXO = $_POST["sexo"];
                $this->EMAIL = $_POST["email"];
                $this->ENDERECO = $_POST["endereco"];
                $this->TELEFONE = $_POST["telefone"];
                $this->SENHA = $_POST["senha"];

                $bd = new Conexao();
                $comandoUpdate = "update alunos set nome = '{$this->NOME}',sexo = '{$this->SEXO}',email = '{$this->EMAIL}',endereco = '{$this->ENDERECO}',telefone = '{$this->TELEFONE}',senha = '{$this->SENHA}' where matricula = {$this->MATRICULA};";
                return $bd->executeQuery($comandoUpdate);
            }
        }catch (PDOException $msg){
            echo "Não foi possível atualizar os dados dos alunos".$msg->getMessage();
        }
    }

    public function listarID($matricula){
        try {
            $this->MATRICULA = $matricula;
            $bd = new Conexao();
            $sql = "select * from alunos where matricula = {$this->MATRICULA}";
            return $bd -> executeSelect($sql);
        }catch (PDOException $msg){
            echo "Não foi possível atualizar os dados dos alunos".$msg->getMessage();
        }
    }
}