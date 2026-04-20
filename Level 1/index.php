<?php
/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.
*/
class Shape {
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

    
//Testing
require_once  'Triangle.php';
$triangle= new Triangle(10,5);
echo "Area del triangulo: " . $triangle->calculateArea() . "<br>";

require_once  'Rectangle.php';
$rectangle= new Rectangle(15,4);
echo "Area del rectangulo: " . $rectangle->calculateArea() . "<br>";

?>