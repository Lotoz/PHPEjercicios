<?php
class CuentaCredito extends CuentaBancaria
{
    //Constructor
    public function __construct($numeroCuenta, $nombreTitular, $saldo, $numOperaciones)
    {
        parent::__construct($numeroCuenta, $nombreTitular, $saldo, $numOperaciones);
    }
    public function __destruct() {}



    public function __toString() {}
    #[\Override]
    public function depositarDinero($cantidadADepositar) {}
    #[\Override]
    public function extraerDinero($cantidadAExtraer) {}
}
