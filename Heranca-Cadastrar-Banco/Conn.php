<?php

class Conn
{
    public string $db="mysql", $host="localhost", $user="root", $pass="", $dbname="poo";
    public object $connect;
    
    public function connectDb()
    {
        try{
            $this->connect = new PDO("{$this->db}:host={$this->host};
            dbname={$this->dbname}",
            $this->user,
            $this->pass);

            //echo "Conexão realizada com sucesso!<br>";
            return $this->connect; 
        }catch(Exception $err){
            die('Erro, por favor tente novamente mais tarde.'); 
        }
        
    }
}