<?php

    class Producto{
        private $precio;
        private $nombre;
        private $categoria; 
        private $stock;
        private $color;
        private $tamaño;
        private $garantia;

        public function __construct(){
            $this->precio = $precio;
            $this->nombre  = $nombre;
            $this->categoria = $categoria;
            $this->stock = $stock;
            $this->color = $color;
            $this->tamaño = $tamaño;
            $this->garantia = $garantia;
        }

        public function get_precio(){
            return $this->precio;
        }

        public function get_nombre(){
            return $this->nombre;
        }

        public function get_categoria(){
            return $this->categoria;
        }

        public function get_stock(){
            return $this->stock;
        }

        public function get_color(){
            return $this->color;
        }

        public function get_tamaño(){
            return $this->tamaño;
        }

        public function get_garantia(){
            return $this->garantia;
        }

        public function set_precio($precio){
            return $this->precio = $precio;
        }

        public function set_nombre($nombre){
            return $this->nombre = $nombre;
        }

        public function set_categoria($categoria){
            return $this->categoria = $categoria;
        }

        public function set_stock($stock){
            return $this->stock = $stock;
        }

        public function set_color($color){
            return $this->color = $color;
        }

        public function set_tamaño($tamaño){
            return $this->tamaño = $tamaño;
        }

        public function set_garantia($garantia){
            return $this->garantia = $garantia;
        }
    }

    $televisor = new Product();
    $televisor->set_precio(50000 . "USD");
    $televisor->set_nombre("LG 4320");
    $televisor->set_categoria("Electrodomestico");
    $televisor->set_stock(50);
    $televisor->set_color("Negro");
    $televisor->set_tamaño("Grande");
    $televisor->set_garantia("5 Años");

    echo $televisor->get_precio() . "<br>";
    echo $televisor->get_nombre() . "<br>";
    echo $televisor->get_categoria() . "<br>";
    echo $televisor->get_stock() . "<br>";
    echo $televisor->get_color() . "<br>";
    echo $televisor->get_tamaño() . "<br>";
    echo $televisor->get_garantia() . "<br><br>";
?>