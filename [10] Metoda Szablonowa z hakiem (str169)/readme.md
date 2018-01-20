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
# Hak w m. sz.
- można użyć gdy wśród kroków znajduje się taki który w pewnych okolicznościach powinien zostać pominięty.
    