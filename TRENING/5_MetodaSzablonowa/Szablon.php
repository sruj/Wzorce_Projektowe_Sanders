<?php
include_once './ISzablon.php';

class Szablon extends ISzablon{
    public function france() {
        (new FactoryFrance())->go();
    }
    public function poland() {
        (new FactoryPoland())->go();
    }
    public function germany() {
        (new FactoryGermany())->go();
    }
    public function russia() {
        (new FactoryRussia())->go();
    }
}
