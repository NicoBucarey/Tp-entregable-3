<?php
class Viaje {

    //Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por los
    //pasajeros e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero a la
    //colección de pasajeros ( solo si hay espacio disponible), actualizar los costos abonados y retornar
    //el costo final que deberá ser abonado por el pasajero


    //ATRIBUTOS
    private $codigo;
    private $destino;
    private $costoViaje;
    private $objetoResponsable;
    private $colObjectPasajeros;
    //PRIVATE $objResponsable (hacer set get y tostring)
    //METODOS
    public function __construct($codigo, $destino, $costoViaje, $objResponsable, $coleccionObjPasajeros){
        $this -> codigo= $codigo;
        $this -> destino= $destino;
        $this -> costoViaje = $costoViaje;
        $this -> objetoResponsable = $objResponsable;
        $this -> colObjectPasajeros = $coleccionObjPasajeros;
    } 

    //METODO GET para obtener los valores de los atributos
    
    public function getCodigo (){
        return $this -> codigo;
    }
    public function getDestino (){
        return $this -> destino;
    }
    public function getCostoViaje(){
        return $this-> costoViaje;
    }
    public function getObjetoResponsable (){
        return $this -> objetoResponsable;
    }
    public function getColObjectPasajeros (){
        return $this -> colObjectPasajeros;
    }

//METODO SET para modificar los datos 

    public function setCodigo($codigo){
        $this -> codigo = $codigo;
    }
    public function setDestino ($destino){
        $this -> destino = $destino;
    }
    public function setCostoViaje($costoViajeNuevo){
        $this -> costoViaje = $costoViajeNuevo;
    }
    public function setObjetoResponsable ($objectResponsableMod){
        $this -> objetoResponsable = $objectResponsableMod;
    }
    public function setColObjectPasajeros ($colObjectPasajerosMod){
        $this -> colObjectPasajeros = $colObjectPasajerosMod;
    }


    //operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero.
    public function verificarPasajero ($dni){
        //boolean $valor
        //comprobar que el dni se encuentre dentro del dni de algun pasajero
        $valor = false; 
        $n = count($this -> getColObjectPasajeros());
        $i=0;
        while ($i<$n && $valor== false ){
            if ($dni == ($this->getColObjectPasajeros()[$i])->getDni()){
                $valor = true;
            }
         $i++;   
        }
        return $valor;
    }
    public function modificarPasajeros($dniNuevo,$nombreNuevo,$apellidoNuevo,$telefonoNuevo){
            $valor = false;
            $n = count($this -> getColObjectPasajeros());
            $i=0;
        
            while ($i<$n && $valor== false ){
                if ($dniNuevo == ($this->getColObjectPasajeros()[$i])->getDni()){
                    $valor = true;
                    $this -> getColObjectPasajeros()[$i]->setNombre($nombreNuevo);
                    $this -> getColObjectPasajeros()[$i]-> setApellido($apellidoNuevo);
                    $this -> getColObjectPasajeros()[$i]-> setTelefono($telefonoNuevo);
                }
                $i++;
            }
    }

    public function agregarPasajeros($objectPasajero){
       
        array_push($this->getColObjectPasajeros(),$objectPasajero);
    }

    public function verificarLicencia($numLicencia){
        $valor = false;
        $numLicenciaActual = $this ->getObjetoResponsable()-> getNumLicencia();
        if($numLicencia==$numLicenciaActual){
            $valor = true;
        }
    return $valor;
    }


    public function __toString(){
        $n = count($this-> getColObjectPasajeros());
        $arregloPasajeros= null;
        for($i=0;$i<$n;$i++){
            $pasajeros = $this -> getColObjectPasajeros()[$i];
            $arregloPasajeros= $pasajeros . $arregloPasajeros;
        }

     $cadena = "codigo". $this -> getCodigo(). "destino ". $this-> getDestino(). "Costo Viaje". $this-> getcostoViaje()
     "Persona responsable ". $this -> getObjetoResponsable(). "pasajeros". $arregloPasajeros;
    return $cadena;
    }
}
        

        

    
    
