<?php

include_once('Moneda.php');
include_once('../Collector.php');

class MonedaCollector extends Collector
{
  
function showMonedas() {
   $rows = self::$db->getRows("SELECT * FROM moneda");       
   $arrayParroquia= array();        
    foreach ($rows as $c){
      $aux = new Moneda($c{'idmoneda'},$c{'nombre'},$c{'idciudad'});
      array_push($arrayParroquia, $aux);
    }
    return $arrayParroquia;        
  }

function showMoneda($id) {
$rows = self::$db->getRows("SELECT * FROM moneda where idparroquia= ? ", array ("{$id}"));        
$ObjParroquia= new Moneda($rows[0]{'idmoneda'},$rows[0]{'nombre'},$rows[0]{'idciudad'});
  return $ObjParroquia;        
}

function showMonedaCuenca() { $rows = self::$db->getRows("SELECT * FROM moneda where idciudad= 5");       
   $arrayParroquia= array();        
    foreach ($rows as $c){
      $aux = new Moneda($c{'idmoneda'},$c{'nombre'},$c{'idciudad'});
      array_push($arrayParroquia, $aux);
    }
    return $arrayParroquia;        
  }
function updateMoneda($id,$nombre,$idciudad) {
 $insertrow = self::$db->updateRow("UPDATE public.moneda SET nombre= ?, idciudad= ? where idmoneda= ? ", array ("{$nombre}","{$idciudad}",$id));

}

function deleteMoneda($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.moneda where idmoneda= ? ", array ("{$id}"));
}


function insertMoneda($nombre,$idciudad) {
  $rows = self::$db->insertRow("INSERT INTO public.moneda(nombre,idciudad) VALUES (?,?)", array ("{$nombre}","{$idciudad}"));             
}


}
?>

