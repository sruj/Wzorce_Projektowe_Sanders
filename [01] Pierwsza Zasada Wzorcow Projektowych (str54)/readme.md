
## 1 Pierwsza Zasada W.P.: WYKORZYSTUJ INTERFEJSY nie IMPLEMENTACJE..
  - Korzystając z interfejsu niwelujesz powiązanie pomiędzy rozwiązaniem a implementacją (mogę podmienić skomplikowaną implementację db na porostą zaślepkę do celów testowych).
  - Problem w tym że w php nie można zadeklarować zmiennej aby miała typ interfejsu, ponieważ w php nie można deklarować typów bez tworzenia instancji klasy..
  - Dlatego obchodzi się to przez Podpowiadanie Typów -klasy implementujące interfejs są przekazywane jako parametr funkcji, która wymaga obiektu typu interfejsu jako parametru.