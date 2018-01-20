<?php
//IState.php
interface IState {
    public function turnLightOff();
    public function turnLightOn();
    public function turnBrighter();
    public function turnBrightest();
}
//OffState.php
class OffState implements IState {
    private $context;
    public function __construct(Context $contextNow) {
        $this->context = $contextNow;}
    public function turnLightOn() {
        echo "<img src='lights/on.png'>";
        $this->context->setState($this->context->getOnState());}
    public function turnBrighter() {
        echo "<img src='lights/nada.png'>";}
    public function turnBrightest() {
        echo "<img src='lights/nada.png'>";}
    public function turnLightOff() {
        echo "<img src='lights/nada.png'>";}
}
//OnState.php
class OnState implements IState {
    private $context;
    public function __construct(Context $contextNow) {
        $this->context = $contextNow;}
    public function turnLightOn() {
        echo "<img src='lights/nada.png'>";}
    public function turnBrighter() {
        echo "<img src='lights/brighter.png'>";
        $this->context->setState($this->context->getBrighterState());}
    public function turnBrightest() {
        echo "<img src='lights/nada.png'>"; }
    public function turnLightOff() {
        echo "<img src='lights/nada.png'>";}
}
//BrighterState.php
class BrighterState implements IState {
    private $context;
    public function __construct(Context $contextNow) {
        $this->context = $contextNow;}
    public function turnLightOn() {
        echo "<img src='lights/nada.png'>";}
    public function turnBrighter() {
        echo "<img src='lights/nada.png'>";}
    public function turnBrightest() {
        echo "<img src='lights/brightest.png'>";
        $this->context->setState($this->context->getBrightestState());}
    public function turnLightOff() {
        echo "<img src='lights/nada.png'>";}
}
//BrightestState.php
class BrightestState implements IState {
    private $context;
    public function __construct(Context $contextNow) {
        $this->context = $contextNow; }
    public function turnLightOn() {
        echo "<img src='lights/nada.png'>";}
    public function turnBrighter() {
        echo "<img src='lights/nada.png'>"; }
    public function turnBrightest() {
        echo "<img src='lights/nada.png'>"; }
    public function turnLightOff() {
        echo "<img src='lights/off.png'>";
        $this->context->setState($this->context->getOffState());}
}
//Context.php
class Context {
    private $offState;
    private $onState;
    private $brighterState;
    private $brightestState;
    private $currentState;

    public function __construct() {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        $this->brighterState = new BrighterState($this);
        $this->brightestState = new BrightestState($this);
//Stan początkowy to światło wyłączone
        $this->currentState = $this->offState;
    }
//Metody-wyzwalacze
    public function turnOnLight() {
        $this->currentState->turnLightOn(); }
    public function turnOffLight() {
        $this->currentState->turnLightOff();}
    public function turnBrighterLight() {
        $this->currentState->turnBrighter();}
    public function turnBrightestLight() {
        $this->currentState->turnBrightest();}
//Ustawienie aktualnego stanu
    public function setState(IState $state) {
        $this->currentState = $state;}
//Pobranie stanów
    public function getOnState() {
        return $this->onState;}
    public function getOffState() {
        return $this->offState;}
    public function getBrighterState() {
        return $this->brighterState; }
    public function getBrightestState() {
        return $this->brightestState;}
}
//Client.php
function __autoload($class_name) {include $class_name . '.php';}
class Client {
    private $context;

    public function __construct() {
        $this->context = new Context();
        $this->context->turnOnLight();
        $this->context->turnBrighterLight();
        $this->context->turnBrightestLight();
        $this->context->turnOffLight();
        $this->context->turnBrightestLight();
    }
}
$worker = new Client();
