# Adapter
## OGÓLNIE
- czyli tworzenie dodatkowej klasy adaptera która posiada metody, budowę istniejącego interfejsu i wykonuje działania dla klasy która nie implementuje tego interfejsu.
## ZASTOSOWANIE
- przydaje się w przypadku wykorzystania gotowych bibliotek o interfejsach niezgodnych ze stosowanymi w aplikacji.
- w świecie rzeczywistym adapter to przejściówka np do wtyczki gniazdka angielskiego na polski..
- przykład z życia - przejmujemy administrację nad projektem i istnieje potrzeba wymiany starej biblioteki XML na nową.Nazwy metod różnią się.Zamiast poprawiać nazwy metod -adapter.

# Adapter Obiektów
## OGÓLNIE
- 'jeden z bardziej użytecznych wzorców'.
- 'obiektów' bo wzorzec wykorzystuje referencję do obiektów klasy adaptowanej w adapterze, a wzorzec 'klas' dziedziczy klasę adaptowaną..
## IMPLEMENTACJA
- opakowuję metody klasy niedoskonałej opakowaniem (nazwami metod) klasy wzorowej.
- Do Adaptera w konstruktorze wprowadzam obiekt klasy adaptowanej i w kolejnych metodach wywołuje metody jego.
- Adapter implementuje nowy interfejs zawierający wszystkie metody i właściwości klasy wzorowej.
## ZASTOSOWANIE
- Gdy chcę 2 odrębne klasy ujednolicić bez ich przebudowy.