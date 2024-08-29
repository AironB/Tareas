<?php
/**
 * Ejercicio 2: Encapsulamiento
 * Diseña una clase "Cuenta Bancaria" con propiedades privadas como"Saldo"
 * y metodos publicos para depositar y retirar dinero
 * ¿Como argumentarias que el saldo nunca sea negativo usando encapsulamiento?
 * 
 */
class CuentaBancaria {
    //atributos
    protected $nombre;
    protected $cuenta;
    private $password;
    private $saldo;

    public function __construct()
    {
        $this->saldo=0;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    // protected function setNombre($nombre){}
    // protected function setCuenta($cuenta){}
    public function depositar($documento, $cantidad)
    {
        //proceso de registro del depositante
        //proceso de deposito en la cuenta
        if($cantidad>0)
        {
        $this->saldo+= $cantidad;
        return true;
        }else
        { 
            return false;
        }
    }
    public retirar($password, $monto)
    {
        if($password===$this->password && $this=>  $monto)
        {
            $this=>saldo -= $monto;
        }return false;
    }
}
?>