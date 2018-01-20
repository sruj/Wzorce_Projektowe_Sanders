# Prototyp 
## OGÓLNIE
- wykorzystana technika klonowania pozwalająca replikować instancje obiektów celem redukcji kosztów tworzenia instancji obiektów.
## IMPLEMENTACJA
- klasa abstrakcyjna z funkcją __clone() i tworzenie nowych obiektów poprzez klonowanie jego obiektu macierzystego.
- Klient chcąc stworzyć nowy obiekt wywołuje metodę clone() pośrednio, za pomoca zdefiniowanej przez siebie operacji..
## ZASTOSOWANIE
- gdy należy wykreować dużą liczbę obiektów tego samego typu lub istnieje potrzeba tworzenia zbioru obiektów o bardzo podobnych właściwościach.