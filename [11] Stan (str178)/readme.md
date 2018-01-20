
## OGÓLNIE
- Celem wzorca jest pozwolenie obiektowi na zmianę zachowania kiedy zmianie ulegnie jego stan.
- Dzięki w. s. każdy ze stanów posiada swoją własną konkretną klasę zaimplementowaną na podstawie wspólnego interfejsu..
## IMPLEMENTACJA
- klasa Kontekst z instancjami wszystkich Stanów, - metoda zmieniająca aktualny stan,- metoda wyzwalacz.
- każdy Stan posiada odrębną klasę i to one są wywoływane przez wyzwalacz w zależności od wartości właściwości.
## ZASTOSOWANIE
- Tam gdzie stan obiektu często ulega zmianie..
- Bez tego wzorca przy częstych zmianach stanu obiektu powstaje problem wielu poleceń warunkowych.