Wzorce projektowe nie mieszkają na bezludnych wyspach. Funkcjonują w społeczności obiektów
programistycznych, a niektóre z tych obiektów mogą być innymi wzorcami projektowymi.
Aby to pokazać, pierwszy przykład wykorzystamy w połączeniu ze wzorcem Metoda Fabry-
kująca — efekt będzie taki sam, czyli wyświetlony zostanie obraz i jego podpis. Ponieważ
wyświetlony zostanie tylko jeden obrazek z podpisem, może się wydawać, że wykorzy-
stujemy armatę do zabicia pchły. Chodzi jednak o to, aby pokazać, jak wzorce mogą ze sobą
współpracować, a jeżeli zrozumiesz ich współpracę, będziesz mógł stworzyć o wiele więcej
ciekawych rozwiązań. Metoda Szablonowa steruje algorytmem tak, aby obraz i podpis zostały
wyświetlone w odpowiedniej kolejności, a Metoda Fabrykująca tworzy obiekty. Rysunek 9.4
przedstawia diagram plików — poszczególne wzorce zostały oddzielone szarą ramką.
Powodem wykorzystania dwóch wzorców są ich odmienne role. Metoda Szablonowa ustala
kolejność wykonywania operacji algorytmu (najpierw obraz, potem podpis), a Metoda Fa-
brykująca tworzy obraz i podpis. Na pierwszy rzut oka wydaje się, że operacje wykonywane
przez klienta skomplikują się, jednak w rzeczywistości będzie dokładnie odwrotnie.

# metoda szablonowa
## OGÓLNIE
- Ustawia kolejność metod abstrakcyjnych w sekwencji pozostawiając implementacje klasom konkretnym.
- Umożliwia modyfikację niektórych etapó algorytmu w podklasach bez zmiany jego struktury.
- Można łączyć z innymi wzorcami np. z metodą fabrykującą, której to obiekt tworzę w klasie konkretnej i wywołuje odpowiednie metody.
## IMPLEMENTACJA
- niewielki rozmiar, łatwa implementacja. Wystarczy jedna klasa abstrakcyjna i jedna konkretna..
- zasada hollywood. Odwrócenie struktury sterowania. Klasa nadrzędna wywołuje operacje podklasy
- Drugi uczestnik (kl. konkretna) implementuje operacje i może wywołać dowolne inne klasy.
## ZASTOSOWANIE
- Jeśli masz przygotowane pewne kroki algorytmu które mogą być zaimplementowane na wiele różnych sposobów..
