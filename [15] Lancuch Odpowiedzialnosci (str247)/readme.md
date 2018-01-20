
## OGÓLNIE
- switch dla obiektów..
- wzorzec oddziela wysyłającego żądanie od odbiorcy - czyli odpalam lont a reszta dzieje się za drzwiami.
## IMPLEMENTACJA
- Pierwsza konkretna klasa obsługuje żądanie i przekazuje je do kolejnej klasy.
- Każdy obiekt (występujący w 'switchu') implementuje kl. abstr. w której są 2 m. abstrak.-setSuccesor-czyli ustawienie następnego w kolejce oraz-handleRequest.
## ZASTOSOWANIE