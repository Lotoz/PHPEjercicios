<?php
class CuentaDebito extends CuentaBancaria
{
    //Atributos
    private string $numeroCuenta;
    private string $nombreTitular;
    private float $saldo;
    private int $numOperaciones;

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
    public function extraerDinero($cantidadAExtraer)
    {
        if ($cantidadAExtraer > $this->saldo) {
            return -1;
        } else {
            return  $this->saldo =  $this->saldo - $cantidadAExtraer;
        }
    }
}
