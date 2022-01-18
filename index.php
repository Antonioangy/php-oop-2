<!-- 
    * 
    *      Definire classe Person:
    *          - ATTRIBUTI (private):
    *              - nome
    *              - cognome
    *              - dataNascita (stringa)
    *          - METODI:
    *              - costruttore che accetta nome e cognome
    *              - setter/getter per ogni variabile
    *              - printFullPerson: che stampa "nome cognome: dataNascita"
    *              - toString: che ritorna "nome cognome: dataNascita"
    * 
    * 
    *      Definire classe Employee che eredita da Persona:
    *          - ATTRIBUTI (private):
    *              - stipendio
    *              - dataAssunzione
    *          - METODI:
    *              - costruttore che accetta nome, cognome e stipendio
    *              - setter/getter per variabili 
    *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
    *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
    * 
-->

<?php
    // Attributi
class Person {
    private $nome;
    private $cognome;
    private $dataDiNascita;

    // Metodi get/set
    public function getnome(){
        return $this -> nome;
    }

    public function setnome($nome){
        $this -> nome = $nome;
    }

    public function getcognome(){
        return $this -> cognome;
    }

    public function setcognome($cognome){
        $this -> cognome = $cognome;
    }

    public function getdataDiNascita(){
        return $this -> dataDiNascita;
    }

    public function setdataDiNascita($dataDiNascita){
        $this -> dataDiNascita = $dataDiNascita;
    }
    

    // construct
    public function __construct($nome, $cognome){
        $this -> setnome($nome);
        $this -> setcognome($cognome);
    }

    public function printFullPerson(){
        
        return $this -> getnome() . " " . $this -> getcognome()
        . " : " . $this -> getdataDiNascita()  . "<br>";

    }

    public function __toString(){
        return $this -> printFullPerson();

    }

}

$person1 = new Person("Antonio", "Dumitru");
$person1 -> setdataDiNascita("26/01/2002");


echo $person1;

// ----------------------------------------------------------

class Employee extends Person{
    private $stipendio;
    private $dataStipendio;

    // set/get
    public function getstipendio(){
        return $this -> stipendio;
    }

    public function setstipendio($stipendio){
        $this -> stipendio = $stipendio;
    }

    public function getdataStipendio(){
        return $this -> dataStipendio;
    }

    public function setdataStipendio($dataStipendio){
        $this -> dataStipendio = $dataStipendio;
    }
    
    
    // construct
    
    public function __construct($nome, $cognome, $stipendio){
        parent::__construct($nome, $cognome);
        $this -> setstipendio($stipendio);
    }

    public function printFullEmployee(){

        if($this -> getdataStipendio())
        return parent::printFullPerson() . " "
        . $this -> getstipendio() . " "
        . "il " . $this -> getdataStipendio() . "" . "<br>";

        
    }
}

$person1Emp = new Employee($person1 -> getnome(), $person1 -> getcognome(), "1200 euro");

$person1Emp -> setdataStipendio("15/01/2022");

echo $person1Emp -> printFullEmployee();
?>