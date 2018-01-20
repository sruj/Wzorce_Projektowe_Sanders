<?php

include_once('Product.php');

class TextProduct implements Product
{

    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "Miley Ray Cyrus, właśc. Destiny Hope Cyrus[4] 
            (ur. 23 listopada 1992[2]) – amerykańska aktorka, wokalistka i autorka tekstów.
Zdobyła sławę dzięki głównej roli w serialu Hannah Montana, emitowanym na antenie Disney Channel 
od 2006 roku. Cyrus była autorką muzyki na ścieżki dźwiękowe sitcomu, Hannah Montana (2006) oraz 
Hannah Montana 2/Meet Miley Cyrus (2007), wydane przez Walt Disney Records. W 2007 roku podpisała 
kontrakt z wytwórnią Hollywood Records, który zapoczątkował jej karierę solową. Tego samego roku 
Miley wyruszyła w trasę Best of Both Worlds Tour, która zaowocowała filmem koncertowym Hannah Montana 
& Miley Cyrus: Best of Both Worlds Concert, wydanym rok później. W lipcu 2008 roku Cyrus wydała swój 
pierwszy album solowy Breakout, który przyczynił się do tego, że wokalistka umieszczona została na 
liście Top 100 magazynu Time. Kariera filmowa Miley rozpoczęła się wraz z obrazem animowanym Piorun 
z 2008 roku, gdzie dubbingowała Penny. Przewodnia piosenka z filmu,  Thought I Lost You\, 
którą artystka nagrała w duecie z Johnem Travoltą, nominowana była do nagrody Złotego Globu[5]. 
Rok później wyemitowano kinową kontynuację serialu Hannah Montana, o tytule Hannah Montana: Film.";
        return $this->mfgProduct;
    }

}
//Możesz pomyśleć: „Wielka mi rzecz, to zwraca tylko zmienną tekstową”. Na razie 
//jest to prawdą. Możesz jednak w implementacji zawrzeć, co tylko chcesz, a 
//Metoda Fabrykująca stworzy to i zwróci do metody  Client . Kiedy więc 
//zobaczysz wynik „To jest tekst” lub „To jest grafika”, wyobraź sobie dowolny 
//obiekt, który mógłbyś chcieć stworzyć. 