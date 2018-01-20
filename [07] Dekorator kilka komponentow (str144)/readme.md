
## OGÓLNIE
- alternatywa dla dziedziczenia (dziedziczenie rozszerza klasy w trakcie kompilacji, dekoratory w trakcie działania programu)(czyli pozwala tworzyć klasy dynamicznie np. na podst jakiś paramet.).
- uczestnik dekorator opakowuje obiekt komponent w celu dodania do niego dodatkowych odpowiedzialności bez konieczności modyfikacji.
## IMPLEMENTACJA
- składa się z obiektu dekorowanego i dekoratorów..
- dekorator przechowuje referencję do komponentu i opakowuje jego metody.
- dekorator dziedziczy klasę dekorowaną, dzięki temu metod których nie nadpisuję nie muszę przepisywać, a wywołuję bezpośrednio z klasy dekorowanej.
- czyli tworzę nowe opakowujące metody tylko dla pojedynczych metod które chcę udekorować, reszty metod nie dotykam, będą one dostępne z klasy dziedziczonej..
## ZASTOSOWANIE
- pozwala uniknąć tworzenie przeładowanych funkcjami klas na wysokim poziomie hierarchii.
- jeśli chcesz zbudować podstawowe funkcjonalności, a następnie udekorować je funkcjonalnościami dedykowanymi dla poszczególnego klienta..
- wykorzystywany W DYNAMICZNYM TWORZENIU KLAS w trakcie działania programu dzięki czemu nie muszę TWORZYĆ PRZEŁADOWANYCH FUNKCJAMI klas, ''na wszelki wypadek'', lecz w zależności od wydarzeń dodaję funkcjonalność w trakcie działania programu.