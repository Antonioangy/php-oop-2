<!-- 
    * 
    *      Definire classe Persona:
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
        . ($this -> getdataDiNascita()  ": " . $this -> getdataDiNascita() . "<br>": "");


    }

    public function __toString(){
        return $this -> printFullPerson();

    }

    
}


$person1 = new Person("Antonio", "Dumitru");
$person1 -> setdataDiNascita("26/01/2002");



echo $person1;


?>