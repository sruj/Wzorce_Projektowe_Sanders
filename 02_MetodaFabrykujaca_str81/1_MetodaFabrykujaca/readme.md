- Client przechowuje referecję do klasy Creator (interfejs fabryki).
- Nie tworzy instancji żądanego produktu. Instancje tworzone są w fabrykach
konkrentych.
- Nie chcemy, aby klasa  Client wysyłała żądania bezpośrednio do produktów. 
Chcemy natomiast, aby żądania były przesyłane przez interfejs  Creator . 
Później, jeżeli będziemy dodawać produkty lub fabryki, klient będzie mógł
wykonać takie samo żądanie i uzyskać o wiele szerszą gamę produktów bez konieczności
wprowadzania zmian w programie.
- Zauważ, że klient nie wykonał żadnego bezpośredniego żądania do produktu, a instancje
uzyskuje poprzez fabrykę. Ważne jest to, że klient pozostawia kwestie związane z charakte-
rystyką produktu poszczególnym implementacjom.