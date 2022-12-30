<?php

class ChequeComum extends Cheque
{
    public function calcularJuro(): string
    {
        $valorComJuro = $this->valor + (0.20 * $this->valor);
        $valorConvReal = parent::converterReal($valorComJuro);
        return "Valor do cheque {$this->tipo} sem juros:{$this->converterReal($this->valor)}, com juros  R$ {$valorConvReal}<br>";
    }
}