<?php
include_once './AbstractClass.php';
class ConcreteClass extends AbstractClass{
    protected function putObrazek($obrazek) {
        $formatter = "<img src=$obrazek><br/>";
        echo $formatter;
    }
    protected function putPodpis($podpis) {
        echo "<em>Podpis:</em>" . $podpis . "<br/>";
    }
}
