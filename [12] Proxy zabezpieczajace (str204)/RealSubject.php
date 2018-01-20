<?php

include_once('ISubject.php');

class RealSubject implements ISubject {

    public function request() {
        $practice = <<<REQUEST
<html>
<link rel='stylesheet' type='text/css' href='proxy.css' />
<body>
<header>Wskazówki PHP:<br>
<span class='subhead'>Dla programistów obiektowych</span></header>
<ol>
<li>Korzystaj z interfejsów, a nie implementacji.</li>
<li>Enkapsuluj swoje obiekty.</li>
<li>Kompozycja jest lepsza od dziedziczenia.</li>
<li>Klasa powinna posiadać tylko jedną odpowiedzialność.</li>
</ol>
</body>
</html>
REQUEST;
        echo $practice;
    }

}
