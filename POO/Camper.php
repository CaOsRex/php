<?php
class Camper
{
    //1.    Atributos con modificadores de acceso
    //      PRIVATE, PUBLIC, PROTECTED
    private $nombre;
    private $email;
    private $celular;

    //2.    Constructor (metodo magico o especial)
    //      en ocasiones se inicializa con valores parametrizados

/*     public function __construct($nombre, $email, $celular) // Ideal para inicializar valores de propiedades
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->celular = $celular;
    } */

    //3.    metodos (Getter and Setters)
    
    // Metodo Getter
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    //      GET --> obtener valores de atributos
    //      SET --> modificar valores de atributos

    //  Metodo Setter
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
}
//  instancia de la clase (objeto) --> variable de instancia
/* "Johan", "johan@campuslands.com", "3209090220" */
$camper = new Camper();
$camper->setNombre("Maicol");
$camper->setEmail("Maicol@campuslands.com");
$camper->setCelular(3209090220);
echo $camper->getNombre() . "<br>";
echo $camper->getEmail() . "<br>";
echo $camper->getCelular() . "<br>";

?>