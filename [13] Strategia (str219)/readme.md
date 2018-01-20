
## OGÓLNIE
- czyli tworzę interfejs, na jego podstawie implementuję klasy, i w kodzie w warunku switch w zależności od argumentu dokonuję wybór jednej z klas.
- By nie używać poleceń warunkowych dla kolejnych implementacji jednego rozwiązania..
- dzięki wzorcowi dodanie nowego sposobu rozwiązania nie wymaga ingerencji w klasie Context (klasa Context w normalnym życiu to jakakolwiek klasa).
- programista najpierw decyduje co będzie zmienne a następnie enkapsuluje te elementy.
- kiedy konieczne jest wprowadzenie zmian, enkapsulowane elementy mogą zostać zmienione bez wpływu na pozostałą część systemu..
- Dzięki temu całemu cyrkowi rozdzielonych plików, chcąc dodać nowy element zmienny wystarczy dodać nową kapsułę do struktury, która tę kapsułę automatycznie rozprowadzi po organiźmie..
- Polimorfizm w tym wzorcu polega na tym że ta sama metoda klasy Context robi co innego w zależności od podane klasy strategi w konstruktorze Context..
## IMPLEMENTACJA
- Każde zdarzenie element zmienny posiada swoją klasę implementującą współny interfejs który zostaje wywołany zależnie od parametru w klasie Client..
## ZASTOSOWANIE
- gdy daną czynność mogę wykonać na wiele sposobów.