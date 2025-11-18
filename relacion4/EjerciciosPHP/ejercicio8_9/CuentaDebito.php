<?php
class CuentaDebito extends CuentaBancaria
{
    //Constructor
    public function __construct($numeroCuenta, $nombreTitular, $saldo, $numOperaciones)
    {
        parent::__construct($numeroCuenta, $nombreTitular, $saldo, $numOperaciones);
    }
    public function __destruct() {}

    public function __toString() {}
    public function depositarDinero($cantidadADepositar) {}

    #[\Override]
    public function extraerDinero($cantidadAExtraer)
    {
        if ($cantidadAExtraer > $this->saldo) {
            return -1;
        } else {
            return  $this->saldo =  $this->saldo - $cantidadAExtraer;
        }
    }
}
