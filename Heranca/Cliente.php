<?php

class Cliente
{
    public string 
    $logradouro, 
    $bairro;

    public function verEndereco() : string 
    {
        return "<p>Endereço: {$this->logradouro}<br>Bairro: {$this->bairro} </p>";
    }

}