<?php
class CuentaBancaria
{
    //Atributos
    private string $numeroCuenta;
    private string $nombreTitular;
    private float $saldo;
    private int $numOperaciones;

    //Constructor
    public function __construct($numeroCuenta, $nombreTitular, $saldo, $numOperaciones)
    {
        $this->numeroCuenta = $numeroCuenta;
        $this->nombreTitular = $nombreTitular;
        $this->saldo = $saldo;
        $this->numOperaciones = $numOperaciones;
    }
    public function __destruct() {}


    public function depositarDinero($cantidadADepositar) {}
    /**return $this->saldo = $this->saldo + $dineroIngresado; */
    public function extraerDinero($cantidadAExtraer) {}
}
