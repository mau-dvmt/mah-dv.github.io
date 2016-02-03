---
title: Inlämningsuppgift 1
code: "da344a-da355a"
---
# Inlämningsuppgift 1: Responsiv webbsida

## Inledning

I den första inlämningsuppgiften ska vi göra en enklare webbapplikation som är anpassad till `desktop`, `surfplattor` och `mobiltelefoner`. Användaren ska även kunna skräddarsy appen genom att välja bland olika stilar på sidan. Varje sida ska sedan ha ett specifikt innehåll, som är specificerat närmre nedan.

## Syfte

Uppgiften har som syfte att bl.a. examinera följande punkter:

*   Kunskap kring att skapa ett HTML-dokument med god semantisk stuktur för desktop-, tablet- och mobila-enheter
*   Kunskap kring att anpassa en webbplats för olika enheter genom CSS
*   Grundläggande JavaScript
*   Kunna använda sig utav `localStorage` för att spara data lokalt hos besökaren.
*   Kunna använda sig utav HTML5 cache för att spara data "offline" på användarens enhet.

**Observera att i denna uppgift är det inte tillåtet att använda några externa ramverk/bibliotek som t.ex. Bootstrap, Foundation, MaterilizeCSS, jQuery, etc.**

## Uppgiften

### Layout i HTML/CSS

Första delen av uppgiften är att skapa en bra/tydlig layout för desktop, tablets och mobila enheter. Det är viktigt att ni använder er av god struktur i ert dokument och element ska i så stor utsträckning som möjligt motsvara det innehåll som de har. Alltså ska ni använda nya HTML5-taggar (t.ex. `<header>`, `<footer>`, `<section>`, `<article>`, `<figure>` m.fl.) där det passar istället för massor utav `<div>`-taggar.

**Observera** att bilderna nedan visar på *hur* webbplatsens layout/struktur ska vara, *inte* hur den grafiska formgivningen ska vara. Använd gärna en egen design på er sida.

### De olika sidorna

I din inlämningsuppgift ska du följa utseendet i stort nedan (hur elementen ligger) för desktop, tablet & mobil. Formgivning så som färger, typsnitt, skugga, etc. får ni välja helt själv.

#### Startsida

Här ska ni ha tre artiklar, som representerar olika saker:

1. En kort presentation om dig (med bild, men det behöver inte nödvänligtvis vara en bild på dig)
2. Varför du gör denna webbsidan (vilka lärandemål uppfyller du?)
3. En lista med tre punkt på tre saker som var utmanande i denna uppgift

#### Presentation av figurer

Denna sida ska presentera minst 4st figurer som ska lägga sig på olika sätt, beroende på vilken enhet som man surfar in på. Jag använder mig utan filmer, men ni får fritt välja vilket innehåll som ni vill ha på sidan.

#### VG- Bildspel

Här ska bildspelet ligga, se krav för detta nedan.

### Funktionalitet

Det ska finnas viss funktionalitet i er app:

#### Interaktiv mobil-meny

Er mobil-version av webbplatsen ska ha en meny som är utfällbar/ihopfällbar genom att man klickar på en menyikon i sidhuvudet. När sidan laddas ska menyn vara dold, och kunna visas genom en menyknapp. Denna funktionalitet ska skötas genom JavaScript.

#### Möjlighet att välja olika stilar på webbplatsen

Ni ska i er webbapp kunna spara information kring vilken stil på sidan som användaren vill visa. Det ska finnas tre olika layouter (tre olika CSS-varianter på er webbplats) som användaren ska kunna välja mellan. Detta ska sparas genom **"localStorage"**, och den valda stilen ska automatiskt laddas in när användaren besöker sidan. Att välja stil på webbsidan görs lämpligen genom en drop down-meny, då den aktuella stilen är förvald.

#### Hantering av offline-sida (offline manifest/cache)

Skulle era användare tappa internettäckning under användandet av er app ska man inte få "sidan kan inte visas" p.g.a. dålig internetanslutning. Ni ska istället ha gjort en snygg "offline"-sida som man kommer till där det bl.a. ska finnas en knapp som tillåter användaren att ladda om sidan (och hoppas på att internettäckning finns då).

#### För VG - Ett bildspel

För VG ska ni även bygga ett bildspel som ska ha följande funktionalitet:

*   Bildspelet ska byta bild var tredje sekund när sidan laddas (när listan på bilder är slut, då börjar bildspelet om)
*   Bilderna ska i någon mån aninmeras (t.ex. genom CSS-egenskapen `transition`)
*   Man ska se vilken bild som visas i bildspelet, t.ex. bild "2/3"
*   Er lösning ska vara utformad på så sätt att man ska kunna lägga till en ny bild i HTML-filen (utan att behöva ändra något i CSS eller JavaScript) och den inkluderas automatiskt i bildspelet.

### Resultatvideo

*Kommer inom kort*

Observera att videon visar funktionerna, er lösning behöver visuellt inte likna den ovan.

## Krav

### Generella krav

1. Er HTML- och CSS-kod ska validera enligt nuvarande standarder
2. Er JavaScript-kod ska köras utan några fel
3. Er HTML-kod ska vara bra skriven, tydlig, med rätt element för rätt innehåll
4. När man sparar något i er webbapp ska feedback ges till användaren (val av utseende)
5. Om man inte har tillgång till internet ska en felsida gjord av er visas (som sparats offline)
6. Innehållet på era sidor ska följa beskrivningen ovan

### Funktionella krav

1.  Layout
    1.  Er app ska vara anpassad för desktop, mobiltelefoner och tablets
    2.  Er app ska beté sig på ett bra sätt för olika skärmupplösningar (olika enheter)
2.  Funktion: Offline-hantering
    1.  Ni ska på ett snyggt och smidigt sätt för användaren presentera en offline-vy, men alternativ att ladda om sidan genom en knapp
3.  Funktion: Spara stil på sidan
    1.  Man ska kunna spara sin favoritstil av webbplatsen i appen (genom localStorage)
    2.  Sidans stil ska direkt i appen uppdateras (utan att man behöver ladda om webbsidan)
4.  VG: Bildspel - se instruktioner ovan

**I övrigt kommer den genomgående kvalitén att bedömas.**

## Redovisning

När ni är klara med en uppgift, dubbelkollat mot kravlistan och jämfört med videon ovan och allt ser bra ut, lämnar ni in alla filer i en ZIP-fil på It's Learning. Ni ska även publicera er lösning på dvwebb.mah.se (eller webshare.mah.se) och bifoga en länk till er sida vid inlämningen på It's Learning.
