# Laboration 6 - Intro jQuery

## Introduktion

jQuery är ett väldigt populärt JavaScript-bibliotek. Det är designat bl.a. för att göra det enklare att anropa och modifiera element på webbsidor, hantera händelser (t.ex. musklick), CSS-modifikationer samt skapa effekter och animationer. jQuery stödjer också plugin, och det finns många smidiga plugin som är gratis att ladda ner och använda.

På [jQuerys](http://jquery.com/) webbplats hittar ni bland annat [hur man kommer igång](http://jquery.com/download/) och deras [dokumentation](http://api.jquery.com/). Det är en väldigt god kunskap att kunna läsa och förstå dokumentation när man använder biliotek/ramverk och därför kommer det att vara en del utav denna laboration.

## Uppgift 1 - Kom igång

Första uppgiften går ut på att vi ska komma igång med jQuery. Det första vi behöver göra då är att inkludera jQuery på vår webbplats. Det kan man göra på två sätt:

1. Man länkar till jQuerys JavaScript-fil(er) resurser online (där de finns tillgängliga)
2. Man laddar ner jQuerys JavaScript-fil(er) och länkar till dem lokalt

Alternativ 1 fungerar fint i denna labb, men tänk på att ni då hela tiden behöver ha internetuppkoppling så att resurserna ni länkar till är tillgängliga. Vi kommer i exemplen nedan att använda oss utav metod 1.

### Inkludera jQuery på sin webbplats.

Det första vi måste göra för att kunna använda oss utav jQuerys funktioner, är att se till att vi laddar in biblioteket. Det görs lämpligen på följande sätt:

```html
<html>
    <head>
        <meta charset="utf-8">
        <title>Into jQuery</title>
    </head>
    <body>
        <h1>Min fina sida</h1>
        
        <!-- Länkar in jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Länkar in vår egna JavaScript-fil -->
        <script src="script.js"></script>
    </body>
</html>
```

Nu kan vi alltså använda oss utav jQuerys funktioner i vårt JavaScript-dokument `script.js`. Får att testa att det verkligen fungera, så lägga till följande kod i `script.js´:

```js
// Event som körs när sidan laddats klart
$(document).on("ready", function(){
    // Sidan har laddat klart
    alert("Sidan har laddat klart!");
});
```

Fungerar allt som det ska? Toppen! Då går vi vidare! (annars fråga lärare i labbsalen)

## Uppgift 2 - Lär känna jQuery

Vi ska nu introduceras till jQuerys syntax, alltså hur vi skriver för att använda den funktionalitet som jQuery erbjuder. Bra att veta är att `$` används för att leta upp element genom jQuery och `$.` används för att använda funktioner genom jQuery. Här några snabba exempel på hur man hittar element i sitt HTML-dokument genom jQuery

```js
// Hämtar alla paragrafer
$("p");
// Hämtar alla element med klassen "center"
$(".center");
// Hämtar elementet med id "start"
$("#start");
```

Som ni kan se så liknade detta väldigt mycket funktionerna `document.querySelectorAll` och `document.querySelector` som vi tidigare använt. Skillnaden är att vi använder samma funktion i jQuery för att hämta ett eller flera element.

### Ändra CSS-egenskaper genom jQuery

jQuery har många [användbara CSS-funktioner](http://api.jquery.com/category/css/). En av de eknlare, för att ändra CSS-egenskaper för ett eller flera element ser ut på följande sätt `.css("egenskap", "värde")`. Exempel:

```js
// Ge alla paragrafer på sidan blå text-färg
$("p").css("color", "blue");
// Gör alla element med klassen "important" fetstilda
$(".important").css("font-weight", "bold");
// Ge elementet med id="contact" grön bakgrund
$("#contact").css("background-color", "green");
```
### Er tur att testa på att ändra CSS-egenskaperna för olika element

Ladda ner [denna HTML-fil](#), länka in jQuery (på valfritt sätt) samt skapa en egen JavaScript-fil att jobba i (glöm inte att länka in denna i HTML-dokumentet). Era uppgifter änr nu att göra följande i jQuery:

- Ge webbsidan grå bakgrundsfärg
- Ge alla `<section>`-element grön bakgrundsfärg
- Ge huvudrubriken på sidan blå textfärg
- Ge länkarna på sidan gul textfärg & gör så att de inte länge är understrukna. För att se hur man kan ange flera egenskaper för ett element [läs jQuerys dokumentation om detta](http://api.jquery.com/css/#css-properties).

### Ta reda på ett värde för en CSS-egenskap för ett element

Precis som man kan modifiera CSS-egenskaper för olika element på webbplatsen, så kan man även ta reda på vilket värde en viss CSS-egenskap som ett element har. Detta gör man också med funktionen `.css` men nu skickar man bara med ett argument - alltså vilken egenskap vi vill veta värdet för. Exempel:

```js
// Vilken bakgrundsfärg har elementet med id:t "start"
$("#start").css("background-color");
```
### Er tur att testa på att leta upp CSS-egenskaperna för olika element

Ladda ner [denna HTML-fil](#), länka in jQuery (på valfritt sätt) samt skapa en egen JavaScript-fil att jobba i (glöm inte att länka in denna i HTML-dokumentet). Era uppgifter änr nu att göra följande i jQuery:

- Ta reda på vilken bakgrundsfärg webbsidan har
- Ta reda på vilket text-storlek som huvudrubriken har
- Ta reda på vilken text-storlek som paragraferna har
- Ta reda på höjden för elementet med id "primary"

Ett smidigt sätt att se egenskaperna är att skriva ut dessa i loggen (`console.log`)
{:.info}

## 3. Händelser i jQuery

Vi har pratar en del om att webbplatser är händelsedrivna. T.ex.

- När användaren klickar på knappen ska vi...
- När sidan har laddat klart ska vi...
- När användren för muspekaren över menyn ska vi...
- etc.

Vi skötte detta i förra labben genom funktionen `element.addEventListener`, där vi sedan kunde specificera vilken funktion som skulle köras (alt. en anonym funktion) när användaren utlöste en händelse (t.ex. klickade på något). jQuery har en inbyggd funktion för detta, nämligen `.on()` (och en funktion för att ta bort, `.off()`. Exempel på detta:

```js
// När användaren klickar på elementet med id "start" ska vi köra funktionen "welcome"
$("#start").on("click", welcome);

// När användaren klickar på en paragraf ska vi köra en anonym funktion
$("p").on("click", function(){
    // Denna kod körs när användaren klickat på en paragraf
});

// När användaren klickar på elementet med klassen "make-green" ska vi göra det elementets text grön
$(".make-green").on("click", function(){
    // Se hur vi enl. jQuery-syntax använder "this" för att göra det elementet vi klickade på grönt
    $(this).css("color", "green");
});
```

### Övningar

Ladda ner [denna HTML-fil](#), länka in jQuery (på valfritt sätt) samt skapa en egen JavaScript-fil att jobba i (glöm inte att länka in denna i HTML-dokumentet). Era uppgifter änr nu att göra följande i jQuery:

- När man klickar på en paragraf ska paragrafen man klickar på bli röd
- När man för muspekaren över någon av rubrikerna, ska rubriken bli understruken (och när man för bort muspekaren ska den inte längre vara understruken)
- När man dubbelklickar på en paragraf ska texten bli större (större för varje gång man dubbelklickar)

## 4. Nyttiga funktioner i jQuery

Det finns några funktioner gällande att lägga till/ta bort element, animera element, visa/dölja element som kan vara bra att kunna. Här kommer några:

```js
/*
    el  Representerar en selektor (t.ex. "p", ".min-klass", "#mitt-id")
*/

// Visar ett eller flera element
$(el).show();
// Med animation (i milisekunder)
$(el).show(500);
// Visar ett element so det är dolt/döljer ett element om det visas
$(el).toggle();

// Döljer ett eller flera element
$(el).hide();
// Med animation (i milisekunder)
$(el).hide(500);

// Tonar in/ut ett element (tid i milisekunder)
$(el).fadeIn(200);
$(el).fadeOut(200);

// Fäller ut/in ett element (tid i milisekunder)
$(el).slideUp(200);
$(el).slideDown(200);

// Tar bort ett eller flera element
$(el).remove();

// Lägger till som första barn till ett element
$(el).prepend("T.ex. lite text...");

// Lägger till som sista barn till ett element
$(el).append("T.ex. lite text...");

// Hämtar texten för ett element
$(el).text();
// Ersätter texten för ett element
$(el).text("Ny text");

// Hämtar HTML för ett element
$(el).html();
// Ersätter HTML för ett element
$(el).html("<b>Ny HTML</b>");

// Hämtar värdet från ett element (t.ex. <input>, <select>, etc)
$(el).val();
// Ersätter värdet för ett element
$(el).val("Nytt värde");

// Hämtar ett attributs värde från ett element
$(el).attr("attribut");
// Ersätter/lägger till ett värde för ett attribut för ett element
$(el).attr("attribut", "värde");

// Lägger till en klass för ett element
$(el).addClass("new-class");
// Tar bort en klass för ett element
$(el).removeClass("new-class");

// Och många fler väldigt smidiga funktioner
```

Fler nytta funktioner finns ni i [jQuerys dokumentation](http://api.jquery.com/)
{:.info}

## 5. Något större övningar med jQuery

### 5.1. Gör miniräknare för räknesättet multiplikation

Gränssnittet ska bestå utav följande:

- En textruta för tal 1
- En textruta för tal 2
- En textruta (ej redigerbar) för resultatet

Resultatet ska beräknas så fort som det finns två tal i båda rutorna. Exemepel på hur det skulle kunna se ut när det är klart:

![Resultat](9/calc.png)

### 5.2. Validering av formulär

Ni ska nu validera ett formulärs data innan det skickas iväg. De fält som ni ska ha är följande:

- Namn
- Ålder
- Epost

När användaren vill skicka iväg formuläret (använd händelsen `submit` för formulärselementet) ska ni validera så att användaren matat in korrekt data. Om inte - så ska ni göra bakgrundsfärden röd för de fält som inte valideras. Dessutom ska ni - så fort ett fält har korrekt data i sig - göra det vitt igen. Det skulle kunna se ut t.ex. såhär:

![Resultat](9/validation.png)

Att utgå från i denna uppgift, HTML:

```html
<form action="#" method="get" id="newsletter">
    <!-- Era indatafält med etiketter -->
    <input type="submit" value="Skicka">
</form>
```

JavaScript:

```js
// När användaren klickar på "skicka"-knappen
$("#newsletter").on("submit", function(e){
    // Hindrar formuläret från att skickas iväg.
    e.preventDefault();
    //... er kod som validerar formuläret
    
    // Om allt går bra, skicka iväg formuläret
    $("#newsletter").submit();
});
```

Parametern `e` som skickar med i funktionen ovan är ett `event`-objekt som innehåller information om själva händelsen. Bland annat kan man hindra *standaradbeteende* för olika element, i detta fallet hindra att formuläret skickas iväg när man klickar på en `submit`-knapp. Andra exempel där man kan hindra standardbeteend skulle vara att man kan hindra länkar från att gå till en annan webbplats när man klickar på dem. Parametern `e` skickas alltid med (om man anger den) vid händelse-funktioner.

### 5.3. Filmlista

Vi ska nu skapa oss en lista på filmer som vi sett, samt ge betyg till dessa filmerna. Uppgiften börjar är uppdelad i olika steg, för olika svårighetsgrad. Men såhär tänker vi oss att det kan se ut när det är klart (jag har använt [bootstrap](http://getbootstrap.com/) för att snabbt få till ett snyggt utseende):

![Result](9/movies.png)

#### Kunna lägga till en film

Det första vi vill göra att att ge användaren möjlighet att lägga till en film. Användaren behöver då ange två saker:

1. Titel för filmen
2. Betyget för filmen

Vi ska sedan ha en knapp, *Spara film*, som när man klickar på den så ska filmen sparas i listan av filmer. Vi vill här visuellt visa filmens betyg genom stjärnor, och möjligheten att ta bort en film genom ett kryss. Ikoner för detta kan ni t.ex. hitta på [iconfinder](http://iconfinder.com/). Glöm inte att kolla licensen på bilderna, alltid bra att ha koll på! Exempel på hur ni kan bygga upp ert `<li>`-element för en film skulle kunna vara enligt följande:

```html
<li data-grade="5" data-title="Star Wars">
	Star Wars
	<img src="delete.png" alt="Delete movie">
	<img src="star.png" alt="Star">
	<img src="star.png" alt="Star">
	<img src="star.png" alt="Star">
	<img src="star.png" alt="Star">
	<img src="star.png" alt="Star">
</li>
```

Där vi använder oss utav `data-`-attribut, där vi kan spara information om filmen direkt ner i HTML-koden (t.ex. om vi skulle vilja sortera filmerna efter detta senare). Mer om detta kan ni läsa [här](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Using_data_attributes).

Använd jQuery-funktionen `.val()` för att hämta indata från användaren (text-rutan och drop down-menyn). Använd sedan jQuery-funktionen `.append()` för att lägga till filmen sist i listan på era filmer.

#### Bättre hantering av indata från användaren

Nu ska vi se till att användaren verkligen ger oss rätt information när vi skapar en film. Kontrollera att:

1. Användaren verkligen skriver in en titel
2. Att användaren väljer ett betyg (och inte *Välj betyg här...*)
3. Återställ formuläret när filmen är tillagd (tips, använd jQuery-funktionen `.trigger("reset")` för ert formulär)

Skulle användaren inte mata in korrekt indata ska ni visa detta på ett lämpligt sätt för användare, och be denna (helst på ett vänligt sätt) att mata in korrekt information.

#### Kunna ta bort en film från listan

Vi vill nu kunna ta bort en film från listan, detta genom att klicka på bilden på det röda krysset. Använd funktionen `.remove()` för att göra detta. Notera att ni vill ta bort hela `<li>`-elementet och bör således navigera er upp från bild-elementet till dess förälder, vilket ni kan göra genom `.parent()`.

Tänk på att det även ska fungera att ta bort en film som ni lagt till genom formuläret
{:.info}

#### Sortera våra filmer

Det är dags att sortera vår lista av filmer! Eftersom sorteringsfunktionen inte alltid är självklar, och man ofta använder plugins för att underlätta sortering, så får nu följande kod:

```js
$("#movie-list").find('li').sort(function(a, b) {
	return $(b).attr('data-grade') - $(a).attr('data-grade');
})
.appendTo($("#movie-list"));
```

Det som händer är helt enkelt att vi letar upp alla `<li>`-element i listan `#movie-list` (mitt `<ul>`-element) och sorterar dessa efter attributet `data-grade`, vilket ju är betyget. Vill vi istället sortera listan efter alfabetisk ordning så kan vi använda följande kod:

```js
$("#movie-list").find('li').sort(function(a, b){
	a = a.getAttribute('data-title');
	b = b.getAttribute('data-title');
	return a < b ? -1 : a > b ? 1 : 0;
}).appendTo($("#movie-list"));
```

#### Bonus: Antalet filmer

Visa på lämpligt ställe på er sida hur många filmer som listan innehållet.

#### Bonus: Färglägg filmerna

- Betyg 4-5: Grön bakgrundsfärg
- Betyg 2-3: Gul bakgrundsfärg
- Betyg 1: Röd bakgrundsfärg