<?php

class ChequeEspecial extends Cheque
{
    public function calcularJuro(): string
    {
        $valorComJuro = $this->valor + (0.40 * $this->valor);
        //PHP 8 -> $valorConvReal = parent::converterReal($valorComJuro);
        $valorConvReal = $this->converterReal($valorComJuro);
        return "Valor do cheque {$this->tipo} sem juros:{$this->converterReal($this->valor)}, com juros  R$ {$valorConvReal}<br>";;
    }
}