---
title: Laboration 1
code: "da344a-da355a"
---

# Laboration 1 - Introduktion till JavaScript

Syfte med laborationen:

* att skapa ett första JavaScript-projekt.
* att göra sig bekant med en webbkonsoll från valfri webbläsare.
* att exekvera grundläggande JavaScript-kod.


Att skapa ett JavaScript-projekt behöver inte vara mer än en HTML-fil (t.ex. `index.html`) och en JavaScript-fil (t.ex `main.js`), namnen på era filer spelar ingen roll så länge ni håller koll på era sökvägar. Placera dessa filer i samma mapp. Att koppla samman en JavaScript-fil med en HTML-fil görs på följande vis:

HTML:

```html
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JavaScript Test</title>
    </head>
    <body>
        <!--
        Observera att vi placerar alltid <script>
        precis innan vi stänger <body>, dvs. sist.
        -->
        <script src="main.js"></script>
    </body>
</html>
```

JavaScript:

```javascript
var name = "Jane Doe";
var age = 33;
```


Öppna nu er HTML-fil i en valfri webbläsare och därefter webbkonsollen (t.ex. `alt + cmd + j` / `alt + ctrl + j` i Google Chrome). Ni bör nu ha tillgång till dessa variabler som ni själva definerat i er JavaScript-fil - testa att skriva in namnet på en variabel och tryck `Enter`, exemplet nedan utgår från webbläsaren Google Chrome.

![Webbkonsollen](7/webconsole_1.png) _Figur 1. All JavaScript-kod är tillgänglig genom webbkonsollen._

Nu bör ni ha ert första fungerande JavaScript-projekt vilket innebär att ni kan gå vidare till nästa del. __Observera__ att kommande exempel och laborationer utgår från att ni har en existerande HTML-fil som inkluderar en JavaScript-fil.

För att få en utskrift, dvs. att slippa behöva skriva in namn på variabler i konsollen manuellt, kan vi använda följande kod i våra JavaScript-filer:

```javascript
// Skapa en variabel som vi vill skriva ut
var hobby = "Programming";
// Utskrift i konsollen
console.log( hobby );
```

Pröva nu att öppna er HTML-fil igen (eller ladda om / uppdatera i webbläsaren). Ni bör nu få något liknande det som visas i figur 2.

![Webbkonsollen](7/webconsole_2.png) _Figur 2. Automatisk utskrift genom `console.log`._

Använd `console.log(värde/variabel/uträkning);` för att göra en utskrift automatiskt i webbkonsollen.
{: .info}

JavaScript-kommentarer kan skrivas på ett av två vis:

* `// Kommentar som sträcker sig över en rad`
* `/* Kommentar som kan sträcka sig över flera rader */`

Låt oss pröva att göra lite utskrifter av olika typer:

```javascript
// Testa utskrift av olika typer av värden, och en vektor
console.log( 5 );
console.log( "Hello World!" );
console.log( true );
console.log( ["Sweden", "Denmark", "Finland"] );
```

__Fråga 1.__ Vad händer, och varför, om vi skriver följande?

```javascript
// Observera att det är inga citationstecken
console.log( hello );
```

Utöver att endast skriva ut värden kan vi även skriva ut resultatet av en uträkning eller en jämförelse.

```javascript
// Uträkningar
console.log( 5 + 12 );
console.log( 12 - 20 );
console.log( 80 / 4 );
console.log( 10 * 100 );
// Det går även att konkatenera (addera) strängar
console.log( "Wat" + "son" );
console.log( "Sherlock" + " Holmes" );

// Jämförelser
console.log( 10 > 8 );
console.log( 15 == 10 );
console.log( 34 >= 12 );
console.log( 12 < 5 );
console.log( 12 <= 12 );
// Det går även att jämföra strängar
console.log( "Watson" == "Watson" );
console.log( "Sherlock" != "Watson" );
// Vi kan jämföra längden
console.log( "Bo".length > "Johannes".length );

// Slutligen kan vi även kombinera uträkningar och jämförelser
console.log( 5 + 5 > 2 );
console.log( 10 / 2 == 5 );
console.log( 8 * 2 != 200 );
```

__Uppgift 1.__ Färdigställ exemplet nedan. Samtliga utskrifter måste ge värdet `true` och ni får endast använda följande operatorer __en__ gång: `<, >, <=, ==, !=`.

```javascript
// Förtydliga gärna vilken uppgift utskrifterna kommer ifrån
console.log( "Uppgift 1." );
console.log( 5 * 2   12 );
console.log( 55   22 );
console.log( 16 / 4   4 );
console.log( 8 + 2   128 );
console.log( 32 * 8   255 );
```

När vi arbetar med strängar (text) uppstår det ibland fall där vi endast vill skriva ut en del av en sträng. T.ex. om vi skulle vilja skriva ut `"Hello"` från strängen `"Hello World!"` kan vi använda mig av metoden `substring`. Denna metod fungerar på så vis att vi kan bestämma ett start och slut _index_ (tänk på att en sträng är en vektor av karaktärer där vi börjar räkna från 0). För att förstå hur detta fungerar kan ni experimentera med exemplet nedan.

```javascript
// Tips: tänk att värdet 0 är innan första bokstaven
console.log( "Hello World!".substring(0, 5) );
console.log( "Foo bar".substring(4, 7) );
console.log( "What is your name?".substring(8, 12) );

// Ett alternativ till att skriva ovanstående exempel
var string1 = "Hello World!";
var string2 = "Foo bar";
var string3 = "What is your name?";

console.log( string1.substring(0, 5) );
console.log( string2.substring(4, 7) );
console.log( string3.substring(8, 12) );
```

__Fråga 2.__ Vad händer, och varför, om vi skriver följande?

```javascript
var name = "Jane Doe";
// Vi utelämnar den andra siffran
console.log( name.substring(5) );
```

__Uppgift 2.__ Använd metoden `substring` för att skriva ut följande delar av dessa strängar:

* Skriv ut `"Tis"` av `"Tisdag"`.
* Skriv ut `"burgare"` av `"Hamburgare"`.
* Skriv ut `"be back"` av `"I'll be back!"`.

Givet följande exempel:

```javascript
var title = "Eloquent JavaScript";
// Spara första delen av boktiteln i en ny variabel
var firstPart = title.substring(0, 8);
// Skriv ut värdet i versaler
console.log( firstPart.toUpperCase() );
```

__Uppgift 3.__ Använd metoden `substring`, `toUpperCase` och `toLowerCase` för att skriva ut följande delar av dessa strängar:

* Skriv ut `"LEARNING"` av `"It's Learning"`.
* Skriv ut `"good parts"` av `"JavaScript: The Good Parts"`.

Likt värden och variabler kan vi givetvis utföra samma saker med vektorer.

```javascript
// En vektor av åldrar
var ages = [20, 21, 22, 23, 24];

// Utskrift av ett element (det tredje i detta fallet)
console.log( ages[2] );
// Jämför första och sista elementet
console.log( ages[0] < ages[4] );
// Summera, exempelvis de tre första elementen
console.log( ages[0] + ages[1] + ages[2] );
// Vi kan även skriva ut längden (antal) element
console.log( ages.length );
```

__Uppgift 4.__ Givet vektorn som presenteras nedan, kan ni:

* Skapa en variabel vars värde är summan av alla element. Skriv även ut denna i konsollen.
* Räkna och skriv ut medelvärdet av alla element, detta görs genom `summan / antal`. Tänk på att uträkningen av medelvärdet ska vara oberoende av antal element i er vektor, dvs. ni kan inte skriva något i stil med `sum / 5`.
* Lägg till ett element i slutet av vektorn vars värde är summan av alla element. Skriv även ut hela vektorn i konsollen.

```javascript
var numbers = [128, 256, 512, 1024, 2048];
```

__Uppgift 5.__ Givet vektorn som presenteras nedan, kan ni:

* Skriva ut de tre första bokstäverna av det andra elementet.
* Räkna och skriv ut medelvärdet för antal bokstäver för alla element.

```javascript
var countries = ["Sweden", "Denmark", "Finland", "Norway"];
```
