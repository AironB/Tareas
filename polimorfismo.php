<?php
interface TransporteAereo{
    public function volar($origen, $destino, $pasajero);
}
class Parapente implements TransporteAereo{
    //...
    public function volar($origen, $destino, $pasajeros){
        //pasos para volar en un parapente
    }
}
class AlaDelta implements TransporteAereo{
    //...
    public function volar($origen, $destino, $pasajeros){
        //pasos para volar en un AlaDelta
    }
}
?>