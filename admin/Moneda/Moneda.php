<?php

class Moneda
{
    private $idciudad;
    private $nombre;
    private $idmoneda; 
   

     function __construct($idmoneda, $nombre,$idciudad) {
       $this->idmoneda = $idmoneda;
       $this->idciudad=$idciudad;
      
       $this->nombre = $nombre;      
     }
           
 
     function setIdCiudad($idciudad){
       $this->idciudad = $idciudad;
     } 
     function getIdCiudad(){
       return $this->idciudad;
     } 

      
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     
     function setIdMoneda($idmoneda){
       $this->idmoneda =$idmoneda;
     } 

     function getIdMoneda(){
       return $this->idmoneda;
     } 
      
  
}

?> 
