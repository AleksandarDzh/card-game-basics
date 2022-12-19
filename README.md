# card-game-basics
This is a simple structure of card game basics.

The repositority contains two projects:  CardGame_Basics & CardGame_Basics_Separate_SuitStructure.

## What's the difference?
The only difference is that **CardGame_Basics_Separate_SuitStructure** represents the Suits as separate objects, while in **CardGame_Basics** they are part of the card.

## How to run the tests?

They can be run manually or by calling the ***assistant.php*** file through the consol.

``` php assistant.php ``` 

For **CardGame_Basics**
```
Card
 ✔ Human readable representation [117.17 ms]
 ✔ Is face card [11.51 ms]
 ✔ Is higher than [0.03 ms]
 ✔ Is lower than [0.02 ms]
 ✔ Is equals to [0.02 ms]

Deck
 ✔ Count [5.85 ms]
 ✔ Draw count [5.58 ms]
 ✔ Draw returned cards [14.27 ms]
 ✔ Shuffle [30.15 ms]
 ```
 
 For **CardGame_Basics_Separate_SuitStructure**
 ```
 Card
 ✔ Human readable representation [26.69 ms]
 ✔ Is face card [0.88 ms]
 ✔ Is higher than with data set #0 [8.68 ms]
 ✔ Is higher than with data set #1 [0.02 ms]
 ✔ Is higher than with data set #2 [0.01 ms]
 ✔ Is lower than with data set #0 [0.04 ms]
 ✔ Is lower than with data set #1 [0.01 ms]
 ✔ Is lower than with data set #2 [0.01 ms]
 ✔ Is equal to with data set #0 [0.02 ms]
 ✔ Is equal to with data set #1 [0.01 ms]
 ✔ Is equal to with data set #2 [0.01 ms]

Deck
 ✔ Count [6.41 ms]
 ✔ Draw count [0.68 ms]
 ✔ Draw returned cards [0.38 ms]
 ✔ Shuffle [12.05 ms]

Suit (Src\Suit)
 ✔ Factory positive case [0.03 ms]
 ✔ Factory negative case [6.26 ms]
 ✔ Card taking [0.04 ms]
 ```
