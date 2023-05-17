<?php
//La clase Pasajero tiene como atributos el nombre, el número de asiento y 
//el número de ticket del pasaje del viajeLa clase Pasajero tiene como atributos el nombre, 
//el número de asiento y el número de ticket del pasaje del viaje
class Pasajero{
//ATRIBUTOS
private $nombre;
private $nroAsiento;
private $nroTicket;

//METODO CONSTRUCT
public function __construct($nombre, $apellido, $dni, $telefono, $nroAsiento, $nroTicket){
    $this -> nombre = $nombre;
    $this -> apellido = $apellido;
    $this -> dni = $dni;
    $this -> telefono = $telefono;
    $this -> nroAsiento = $nroAsiento;
    $this -> nroTicket = $nroTicket;
}

//METODO DE ACCESO GET
public function getNombre (){
    return $this -> nombre;
}
public function getApellido(){
    return $this -> apellido;
}
public function getDni(){
    return $this -> dni;
}
public function getTelefono(){
    return $this -> telefono;
}
public function getNroAsiento (){
    return $this -> nroAsiento;
}
public function getNroTicket (){
    return $this -> nroTicket;
}

//METODO DE ACCESO SET
public function setNombre ($nombreNuevo){
    $this -> nombre = $nombreNuevo;
}
public function setApellido($apellidoMod){
    $this -> apellido = $apellidoMod;
}
public function setDni ($dniMod){
    $this -> dni = $dniMod;
}
public function setTelefono ($telefonoMod){
    $this -> telefono = $telefonoMod;
}
public function setNroAsiento ($nroAsientoNuevo){
    $this -> nroAsiento = $nroAsientoNuevo;
}
public function setNroTicket ($nroTicketNuevo){
    $this -> nroTicket = $nroTicketNuevo;
}

//METODO __toString
public function __toString(){
  return  "nombre: " .$this -> getNombre() . "apellido: ". $this -> getApellido() . "DNI: " .$this -> getDni() .
  "Telefono: ". $this -> getTelefono() . "Numero de asiento". $this -> getNroAsiento(). "Numero de ticket". 
  $this-> getNroTicket();
}

/**
 * da el porcentaje de incremento
 */
public function darPorcentajeIncremento(){
    $porcentaje = 35;
    return $porcentaje;
}


}