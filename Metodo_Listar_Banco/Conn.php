<?php

class Conn
{
    //Informações para a conexão 
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "poo";
    public $connect = null;

    public function conectar(){
        try{
            //Conexão com o banco
            $this->connect = new PDO("mysql:host=". $this->host . "; dbname=". $this->dbname, $this->user, $this->pass);
            echo "Conexão realizada com sucesso!";
            return $this->connect;
        }catch (Exception $err){
            echo 'Erro: Falha ao se conectar com a base de dados.';
            return false;
        }
        
    }
}