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

**Observera att i denna uppgift är det inte tillåtet att använda några externa ramverk/bibliotek som t.ex. Bootstrap, Foundation, MaterializeCSS, jQuery, etc.**

## Uppgiften

### Layout i HTML/CSS

Första delen av uppgiften är att skapa en bra/tydlig layout för desktop, tablets och mobila enheter. Det är viktigt att ni använder er av god struktur i ert dokument och element ska i så stor utsträckning som möjligt motsvara det innehåll som de har. Alltså ska ni använda nya HTML5-taggar (t.ex. `<header>`, `<footer>`, `<section>`, `<article>`, `<figure>` m.fl.) där det passar istället för massor utav `<div>`-taggar.

**Observera** att bilderna nedan visar på *hur* webbplatsens layout/struktur ska vara (**viktigt att layouten/strukturen är samma!**), *inte* hur den grafiska formgivningen ska vara. Använd gärna en egen formgivning på er sida.

### De olika sidorna

I din inlämningsuppgift ska du följa utseendet i stort nedan (hur elementen ligger) för desktop, tablet & mobil. Formgivning så som färger, typsnitt, skugga, etc. får ni välja helt själv.

#### Startsida

Här ska ni ha tre artiklar, som representerar olika saker:

1. En kort presentation om dig (med bild, men det behöver inte nödvänligtvis vara en bild på dig)
2. Varför du gör denna webbsidan (vilka lärandemål uppfyller du?)
3. En lista med tre punkt på tre saker som var utmanande i denna uppgift

**Ni ska följa strukturen på hur boxarna (innehållssektionerna) ligger nedan på er sida**

Skärmdumpar på hur det kan se ut på de olika enheterna (och hur era delar av sidan ska anpassa sig efter skärmupplösningarna):

![Resultatbild](images/desktop1.png)
![Resultatbild](images/tablet1.png)
![Resultatbild](images/mobile1.png)

#### Presentation av figurer

Denna sida ska presentera minst 6st figurer (bild + bildtext) som ska lägga sig på olika sätt, beroende på vilken enhet som man surfar in på. Jag använder mig utan filmer, men ni får fritt välja vilket innehåll som ni vill ha på sidan.

Skärmdumpar på hur det kan se ut på de olika enheterna (och hur era delar av sidan ska anpassa sig efter skärmupplösningarna):

![Resultatbild](images/desktop2.png)
![Resultatbild](images/tablet2.png)
![Resultatbild](images/mobile2.png)
![Resultatbild](images/mobile2b.png)

#### Bildspel

Här ska bildspelet ligga, se krav för detta nedan.

Skärmdumpar på hur det kan se ut på de olika enheterna (och hur era delar av sidan ska anpassa sig efter skärmupplösningarna):

![Resultatbild](images/desktop3.png)
![Resultatbild](images/tablet3.png)
![Resultatbild](images/mobile3.png)

### Funktionalitet

Det ska finnas viss funktionalitet i er app:

#### Interaktiv mobil-meny

Er mobil-version av webbplatsen ska ha en meny som är utfällbar/ihopfällbar genom att man klickar på en menyikon/texten meny i sidhuvudet på er webbsida. När sidan laddas (på en mobilskärm) ska menyn vara dold (den ska visas för tablet/desktop), och kunna visas genom en menyknapp. Denna funktionalitet ska skötas genom JavaScript. Knappen som visar/döljer er meny ska bara visas på mobilvyn.

#### Möjlighet att välja olika stilar på webbplatsen

Ni ska i er webbapp kunna spara information kring vilken stil på sidan som användaren vill visa. Det ska finnas tre olika layouter (tre olika CSS-varianter (olika CSS-dokument) på er webbplats) som användaren ska kunna välja mellan. Detta ska sparas genom **"localStorage"**, och den valda stilen ska automatiskt laddas in när användaren besöker sidan. Att välja stil på webbsidan görs lämpligen genom en drop down-meny, då den aktuella stilen är förvald.

#### Ett bildspel

Ni ska även bygga ett bildspel i JavaScript som ska ha följande funktionalitet:

*   Bildspelet ska byta bild var tredje sekund när sidan laddas (när listan på bilder är slut, då börjar bildspelet om)
*   Bilderna ska i någon mån aninmeras (t.ex. genom CSS-egenskapen `transition`)
*   Man ska se vilken bild som visas i bildspelet, t.ex. bild "2/3"
*   Er lösning ska vara utformad på så sätt att man ska kunna lägga till en ny bild i HTML-filen (utan att behöva ändra något i CSS eller JavaScript) och den inkluderas automatiskt i bildspelet.

**Återigen, er kod ska var egenskriven, utan hjälp av ramverk**

## Krav

**Observera att alla krav ska vara uppfyllda för att bli godkänd**. Tänk även på att er inlämningsuppgift ska hålla hög kvalité, vilket kommer att bedömas vid redovisning.

### Generella krav

1. Er HTML- och CSS-kod ska validera enligt nuvarande standarder
2. Er JavaScript-kod ska köras utan några fel
3. Er HTML-kod ska vara bra skriven, tydlig, med rätt element för rätt innehåll
4. När man sparar något i er webbapp ska feedback ges till användaren (val av utseende)
5. Er webbapp ska vara responsiv, och anpassa sig olika skärmstorlekar och enheter på ett smidigt, användbart och strukturerat sätt.
6. Innehållet på era sidor ska följa uppgiftbeskrivningen ovan, inkluderat men ej exkluderat till:
    - Rätt layout på "boxarna" på startsidan för de olika enheterna
    - Rätt antal bilder på bildsidorna för de olika enheterna
7. Designen på er sida ska vara väl strukturerad, och fokusera på att vara användbar
    - T.ex. ska centrerade element ha lika mycket luft till höger/vänster om sig (inte vara förskjutna)
    - T.ex. ska man inte kunna skrolla i sidled på någon version av er webbplatsen
    - T.ex. bör element på mobilvyn vara 100% breda (med ev. padding, eller liknande) för att utnyttja skärmytan
8. En generell helhetsbedömning av kvalitén på er uppgift kommer också att göras

### Specifika krav

1.  Layout
    1.  Er app ska vara anpassad för desktop, mobiltelefoner och tablets
    2.  Er app ska beté sig på ett bra sätt för olika skärmupplösningar (olika enheter), se skärmdumpar ovan
2.  Funktion: Interaktiv meny (för mobilversionen)
    1.  Om användaren surfar in med en mobil så ska menyn vara dold, men kunna visas genom att man klickar på texten "meny", alternativt en meny-ikon
3.  Funktion: Spara stil på sidan
    1.  Man ska kunna spara sin favoritstil av webbplatsen i appen (genom localStorage)
    2.  Sidans stil ska direkt i appen uppdateras (utan att man behöver ladda om webbsidan)
	3.  När man sedan laddar om sidan ska den förvalda stilen visas, samt vara förvald i er drop down-meny
4.  Bildspelet ska vara implementerat enligt beskrivningen ovan

**I övrigt kommer den genomgående kvalitén att bedömas.**

## Redovisning

När ni är klara med en uppgift, dubbelkollat mot kravlistan och allt ser bra ut, lämnar ni in alla filer i en **ZIP-fil** (som ni döper enligt `Förnamn-Efternamn-Inl1.zip`) på Canvas. Ni ska även publicera er lösning på **webshare.mah.se** och **bifoga en länk** till er sida vid inlämningen på Canvas.

**Inlämningsuppgiften ska sedan presenteras muntligt, via en tid [som bokas här (kommer när det närmar sig)](#)**. Vi detta redovisningstillfället ska studenten presentera sin uppgift, svara på frågor kring sin lösning samt reflektera kring ev. bra / mindre bra lösningar av uppgiften. Studenten behöver kunna redogöra för alla delar av sin kod.

Inlämningar som inte uppfyller dessa inlämningskrav ovan kommer inte att rättas, utan direkt skickas tillbaka som komplettering.
{: .info}
