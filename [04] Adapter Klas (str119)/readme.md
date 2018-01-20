
# Adapter
## OGÓLNIE
- czyli tworzenie dodatkowej klasy adaptera która posiada metody, budowę istniejącego interfejsu i wykonuje działania dla klasy która nie implementuje tego interfejsu.
## ZASTOSOWANIE
- przydaje się w przypadku wykorzystania gotowych bibliotek o interfejsach niezgodnych ze stosowanymi w aplikacji.
- w świecie rzeczywistym adapter to przejściówka np do wtyczki gniazdka angielskiego na polski..
- przykład z życia - przejmujemy administrację nad projektem i istnieje potrzeba wymiany starej biblioteki XML na nową.Nazwy metod różnią się.Zamiast poprawiać nazwy metod -adapter.
# Adapter Klas
## OGÓLNIE
- przekształca interfejs klasy na inny, oczekiwany przez klienta.
## IMPLEMENTACJA
      Class ChildClass extends ParentClass implements ISomeInterface.
- Klasa Adapter implementuje kompinację dziedziczenia i implementacji po klasie adaptowanej i interfejsie.
- implementowana klasa abstrakcyjna w konstruktorze wywołuje metodę swoją której zadaniem jest umożliwienie współdziałania dwóm klasom.
## ZASTOSOWANIE
- umożliwia współdziałanie klasom, które z uwagi na niezgodne interfejsy standardowo nie mogą współpracować ze sobą.