<?php
/*
Crea una classe que representi un empleat, amb atributs referits al seu nom i sou. Defineix un mètode que rebi com a paràmetres el nom i el sou. Planteja un segon mètode que imprimeixi el nom i un missatge que mostri si ha de pagar o no impostos (si el sou en supera 6000, paga impostos).
*/

class Employee{
    private string $name;
    private int $salary;

    function __construct(string $name, int $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    function showTaxInfo(): void{
        echo $this->name;
        if($this->salary > 6000){
            echo " has to pay taxes <br>";
        } else {
            echo " doesn't have to pay taxes <br>";
        }
    }
}
//Testing
$Manolo = new Employee('Manolo', 180000);
$Manolo->showTaxInfo();

$Pedro = new Employee('Pedro', 4000);
$Pedro->showTaxInfo();

?>