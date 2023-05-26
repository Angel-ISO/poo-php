<?php 

class productos{
     public $nombre;
     public $precio;
     public $disponibilidad;

     public $cantidad;

     static $valorTotal;


     public function __construct($nombre, $precio, $disponibilidad){
             $this->nombre = $nombre;
             $this->precio = $precio;
             $this->disponibilidad = $disponibilidad;
          }
          public function getNombre(){
              return $this->nombre;
          }
          public function setNombre($nombre){
              $this->nombre = $nombre;
            }
            public function getPrecio(){
              return $this->precio;
            }
            public function setPrecio($precio){
              $this->precio = $precio;
            }
            public function getDisponibilidad(){
              return $this->disponibilidad;
            }
            public function setDisponibilidad($disponibilidad){
              return $this->disponibilidad;   
                    }
            public function getCantidad(){
              return $this->cantidad;
            }
            public function setCantidad($cantidad){
              $this->cantidad = $cantidad;
            }
            public function getValorTotal(){
              return $this->valorTotal;
            }
            public function setValorTotal($valorTotal){
              $this->valorTotal = $valorTotal;
            }

  private function calcularvalor(){
    echo "el valor total es:" . $this->valorTotal;

  } 
}
?>