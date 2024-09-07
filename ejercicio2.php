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
    private $pin;
    private $saldo;
    private $logTransact;

    public function __construct($nombre, $cuenta, $saldoInicial)
    {
        $this->nombre=$nombre;
        $this->cuenta =$cuenta;
        $this->saldo=$saldoInicial;
        $this->pin="0000";
    }
    public function cambiarPin($pin, $newPin)
    {
        if($pin === $this->pin){
            $this->pin=$newPin;
            return true;
        }
        return false;
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
    public function retirar($pass, $monto)
    {
        if($pass===$this->pin && $this->saldo>=  $monto)
        {
            $this->saldo -= $monto;
            return true;
        }return false;
    }
}

$cuentaAiron = new CuentaBancaria("Airon Bautista", "01020304", 10);
//cambie la contraseña por una propia
$response=$cuentaAiron->cambiarPin("0000", "45678");
if($response)echo "Contraseña cambiada\n";
else echo "Error\n";

$cuentaAiron->depositar("04118131-0", 10);
echo $cuentaAiron->getSaldo(). "\n";

$cuentaAiron->retirar("0000", 15);
echo $cuentaAiron->getSaldo(). "\n";
?>