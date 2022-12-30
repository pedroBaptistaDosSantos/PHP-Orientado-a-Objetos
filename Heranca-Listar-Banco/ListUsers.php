<?php

class ListUsers extends Conn
{
    public object $conn;

    public function list()
    {
        //forma 1: $this->conn = parent::connect();
        $this->conn = $this->connect();
        $query_users = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 40";
        $result_users = $this->conn->prepare($query_users);
        $result_users->execute();

        //var_dump($result_users->fetchAll());
        return $result_users->fetchAll();
        
    }
}