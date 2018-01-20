
# Fabryka - Metoda Fabrykująca
https://paper.dropbox.com/doc/wzorce-fabryka-Fabryka-Metoda-Fabrykujaca-DOBRE-RADY-2016-ithG1H6cjE8VWiKyUZkj4
## OGÓLNIE
- ma za zadaniie stworzyć produkt niezwiązany z klasą która go stworzyła.
- ten wzorzec to ukłon dla zasady 'uzalezniaj się od abstrakcji a nie klas rzeczywistych'.
- czyli zamiast tworzyć kolejne obiekty w kliencie uzależniam się od stałego interfejsu fabryki do której mogę upchac co chcę..
- Interfejs jest niezmienny a podklasa wyznacza klasę tworzonego obiektu..
- Struktura aplikacji niezmienna, podtrzymuje się klasasmi abstrakcyjnymi relacje między obiektami.
- Modyfikacje produktów- w związku z tym że żądania uzależnione są od interfejsów a nie klas konkretnych to modyfikacje produktów robi się w klasach produktów..
- Dbanie o pojedynczy interfejs jest wiele łatwiejsze niż dbanie o większą liczbę klas i obiektów. (ten wzorzec zachowuje pojedynczy interfejs).
## IMPLEMENTACJA
- aby zachowane było luźne łączenie, klient przesyła żądanie przez fabrykę, następnie fabryka tworzy żądany produkt..
- Klient przechowuje referencję do fabryki, dzięki której może zarządać produktu. Nie tworzy instancji żądanego produktu. Instancje tworzone są w fabrykach konkretnych..
- ważne jest to że Klient pozostawia kwestie związaną z charakterystyką produktu poszczególnym implementacjom..
## ZASTOSOWANIE
- Gdy podklasa tworzonego obiektu może się zmieniać ( nawet podklasy interfejsu).
- Kiedy klasa nie może przewidzieć liczby obiektów które będzie musiała stworzyć , a więc gdy nie chcemy aby była z tymi obiektami silnie związana..
