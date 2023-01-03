<?php

class User extends Conn
{
    public object $conn;
    public array $formData;

    public function list()
    {
        //forma 1: $this->conn = parent::connect();
        $this->conn = $this->connectDb();
        $query_users = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 40";
        $result_users = $this->conn->prepare($query_users);
        $result_users->execute();

        //var_dump($result_users->fetchAll());
        return $result_users->fetchAll();
        
    }

    public function create()
    {
        $formData = $this->formData;
        $this->conn = $this->connectDb();
        $query_user = "INSERT INTO usuarios (nome, email, created) VALUES (
            '{$this->formData['name']}', 
            '{$this->formData['email']}', 
            NOW())";
        $add_user = $this->conn->prepare($query_user);
        $add_user->execute();
        var_dump($add_user);
        if($add_user->rowCount())return true;
        else return false;
    }
}