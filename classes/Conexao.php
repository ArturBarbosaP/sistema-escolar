<?php


class Conexao
{
    //atributos
    private $server = "localhost";
    private $bd = "sistemaescolar_2d2";
    private $user = "root";
    private $password = "";
    private $conn = "";

    //metodos
    public function __construct()
    {
        try{
            $this -> conn = new PDO("mysql:host={$this->server}; dbname={$this->bd}; charset=utf8", $this->user, $this->password);
        }catch (PDOException $msg){
            echo "Não foi possível conectar ao servidor: ".$msg->getMessage();
        }
    }

    public function executeQuery($comando){
        try {
            $sql = $this->conn->prepare($comando);
            $sql->execute();
            if ($sql->rowCount() > 0){
                return $sql;
            }else{
                return $sql->errorInfo();
            }
        }catch (PDOException $msg){
            echo "Não foi possível executar o comando: ".$msg->getMessage();

        }
    }

    public function executeSelect($comando){
        try {
            $sql = $this->conn->prepare($comando);
            $sql->execute();
            if ($sql->rowCount() > 0){
                return $sql->fetchAll(PDO::FETCH_CLASS);
            }else{
                return $sql->errorInfo();
            }
        }catch (PDOException $msg){
            echo "Não foi possível executar o comando: ".$msg->getMessage();

        }
    }
}


?>