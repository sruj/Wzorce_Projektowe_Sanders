<!--
co chcę zrobić?
- switch z klasami

a dokładniej?
- klient klika w radiobutton, zostaje przesłane żadanie do Clienta ze zmienną
POST o wartości od q1 do q5.
- w zależności od zmiennej wyświetlam odpowiedź z bazy danych.

jak to zrealizować?
- łancuch odpowiedzialności

czyli?
- Client
- interfejs klas odpowiedzialności 
- klasy konkretne dla każdej możliwości (q1,q2,..)

co w Cliencie?
- stworzyć obiekty klas łańcucha
- ustawić sekwencję (sukcesory)
- odpalić lont na pierwszej klasie (handle request)

co w interfejsie?
- 

co w klasach konkretnych?
- handleRequest; sprawdzenie czy POST == $this->q. Jeśli tak to sql i wyświetl
odpowiedź HTML, jeśli nie to handleRequest następnego obiektu łańcucha

skąd ma wiedzieć który jest następny?
- sukcesor; polega na tym, że w Cliencie na obiektach wywołuję metody , którym 
podaję kolejny obiekt. Ta metoda zapisuje w zmiennej ten argument.-->

    
<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

class Client {
    private $q;
    
    public function __construct() {
    
        $this->q = $_POST['help'];
    
        $q1 = new Q1();
        $q2 = new Q2();
        $q3 = new Q3();
        $q4 = new Q4();
        $q5 = new Q5();

        $q1->setSuccessor($q2);
        $q2->setSuccessor($q3);
        $q3->setSuccessor($q4);
        $q4->setSuccessor($q5);
        
        $q1->handleRequest($this->q);
    }
}
$worker = new Client();











    
    
    
    
    
    
    
    
    

