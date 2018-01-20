<?php
//-Dzięki temu, że klasa nie ma właściwości, możemy w klasach potomnych zdecydować, co
//dokładnie chcemy zrobić z metodą  getProperties() . W PHP, w którym sygnatura zawiera
//tylko nazwę i widoczność, możemy dowolnie modyfikować metodę abstrakcyjną, włączając
//w to zwracanie wartości — a jeżeli tylko sygnatura się zgadza, implementacja będzie poprawna.
interface Product {

    public function getProperties();
}
