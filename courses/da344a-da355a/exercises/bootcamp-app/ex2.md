---
title: Laboration 1b
code: "da344a-da355a"
---

# Bootcamp - Del 2: Tabeller &amp; formulär

## 1. Syfte

Formulär är historiskt sett den primära metoden för kommunikation mellan webbläsare (klient) och webbserver. I HTML finns det en mängd element specifikt utformade för datainmatning; dessa ska utforskas i i denna laboration. Du kommer även att studera en vanlig metod för att presentera data: tabeller.

## 2. Lärandemål

Efter genomförd laboration ska du:

*   veta hur formulär byggs upp i HTML.
*   veta hur tabeller byggs upp i HTML.
*   kunna använda de vanligaste formulärkontrollerna.
*   vet hur tillgänlighet och användbarhet optimeras med avseende på benämningar.

## 3. Uppgiften

Ponera att du fått i uppdrag av en hyresvärd att producera ett formulär för ansökan om lägenhet. Hyresvärden har redan, genom en extern utvecklare, ett skript för att ta emot och spara ansökningar, men behöver din hjälp för att producera ett HTML-formulär. Detta formulär behöver inte vara grafiskt tilltalande, men måste vara tillgängligt för så många personer som möjligt.

### 3.1. Lägenhetstabell

I samma HTML-dokument ska det även finnas kort information om hyresvärdens lediga objekt. Då det ska vara enkelt att snabbt få en bild om hur objekten skiljer sig, ska denna information presenteras i tabellform.

Börja med att skapa ett nytt HTML-dokument (HTML5-standard), för att sedan producera tabellen som över lediga lägenheter. Nedan ser du vilka kolumner som ska finnas, tillsammans med exempeldata.

![Tabellen ska ha följande rubriker: Objektnummer, Antal rum, Våning, Yta, Hyra och Adress](2a-01.png)

Tabellen ska byggas med taggar som beskriver innehållet så bra som möjligt. Förutom de vanligaste tabellelementen `table`, `tr` (tabellrad) och `td` (tabellcell) så ska du använda:

*   `thead` och `tbody` för att skilja på tabellhuvud och tabellinnehåll.
*   `th` för markera alla rubrikceller.
*   `caption` för att inkludera en beskrivning av tabellen.

Du kan läsa mer om alla dessa element i en [genomgång i Mozilla Developer Network](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table).

### 3.2. Steg 2: Ett grundläggande formulär

Under tabellen ska du nu konstruera ett ansökningsformulär. Ett HTML-formulär kan vara väldigt enkelt. Låt oss studera ett exempel:

{% highlight html linenos %}
<form action="http://webshare.mah.se/ctfroh/da158a/formtest.php">
    <fieldset>
        <legend>Ansök om bostad</legend>
        <input type="button" value="Ansök">
    </fieldset>
</form>
{% endhighlight %}


Från detta kan det utläsas att:

*   All data från detta formulär ska skickas till ett mottagande skript (på en server hos Malmö högskola, under användaren ctfroh).
*   Som enda innehåll i formuläret finns en knapp, med texten “ansök”.
*   Knappen är innesluten i ett `fieldset` eftersom den strikta dokumenttypen säger att endast blockelement får placeras direkt i ett formulär. Det hade gått bra att använda `div`, `p` eller andra blockelement istället - men `fieldset` är specifikt till för att ge mer struktur till formulär. Den kan användas för att dela upp formulär i olika delar; här används `fieldset` endast en gång.

_Infoga ovanstående miniformulär i ditt HTML-dokument_. Hur ser det ut? Vad står på knappen och vad händer när man trycker på den?

*   För att formuläret verkligen ska skickas när man klickar på knappen så måste den vara av en speciell typ. Undersök type-attributet och uppdatera knappen så att den skicka formuläret.
*   Uppdatera även formuläret så att det skickas via HTTP-metoden `POST`.

### 3.3. Steg 3: Inmatningsmöjligheter

Användaren ska ju kunna mata in lite information också. Börja med förnamn och efternamn, med en textruta till varje. Skapa dessa två textrutor ovanför submit-knappen. För att skapa textrutor använder du taggen `input` igen, men med ett annat värde på attributet `type`.

För data ska kunna skickas krävs en benämning på dessa data (något du kanske känner till från HTTP-standarden, där data skickas namn-/värdepar). Konkret betyder detta att du måste namnge alla formulärkontroller som ska skicka data - detta gör du med attributet `name`. Tänk på att välja namn som syftet med formulärkontroller och undvik specialtecken och mellanslag i namnen.

När du kommit hit kan formuläret se ut såhär:

![2 enradiga textrutorn med "Förnamn" resp. "Efternamn". En knapp med texten "Ansök"](2a-02.png)

När detta formulär skickas (man klickar på “Ansök”) bör det se ut ungefär såhär:

![first_name = IFYLLT FÖRNAMN, last_name = IFYLLT_EFTERNAMN](2a-03.png)

Exakta namn är inte jätteviktiga, bara de är beskrivande. Om det inte syns någon grön ruta alls så skickas inga data via `POST`. Om inga namn/värden syns så är det problem med `name`-attributen.

## 4. Steg 4: Öka tillgänglighet och användbarhet

Nästa steg är att förbättra hur benämningarna på textrutorna är skrivna (benämningarna är “Förnamn” och “Efternamn” i exempelbilden ovan). Detta görs med taggen label, som just är till för att koppla ihop benämningar med formulärkontroller `label` ger ingen visuell skillnad, med ökar användbarheten genom att göra benämningen klickbar, samt ökar tillgängligheten genom att göra benämningens syfte explicit. Läs mer om dessa fördelar på [Sitepoint](http://reference.sitepoint.com/html/label). Här är ett exempel:

{% highlight html linenos %}
<label for="pris">Pris</label>
<input type="text" name="price" id="pris">
{% endhighlight %}

*   Textrutan (`input`) har attributet `id` (med värdet `pris`), som unikt identifierar den i dokumentet.
*   Benämningen (`label`) har attributet `for` (med värdet `pris`), som anger vilket element den ska kopplas ihop med.
*   `label` kan självklart användas med andra formulärrelaterade taggar än input.

**_Uppdatera ditt formulär så att båda textrutorna har en `label`._**

## 5. Steg 5: Utöka formuläret

Du har nu provat på de grundläggande koncepten kring formulärskapande. Det finns några andra viktiga formulärelement som är bra att känna till. Här är några förslag på vad du kan utöka med för att öva detta:

*   Nya textfält för telefonnummer och nuvarande adress (adress kanske kräver mer än ett textfält, använd bästa omdöme kring vad som blir lättast att använda).
*   En [textarea](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea) där man kan ange sina eventuella extrabehov (allergier etc.).
*   En “[drop-down](http://reference.sitepoint.com/html/select)” där man får välja bostad att ansöka om. Valen ska motsvara de objektnummer som finns i tabellen.
*   Radioknappar där man anger om man ska bo ensam, sambo eller flera stycken i lägenheten. Radioknapp är en skapas med hjälp av `input`, [läs mer här](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input).
*   Checkboxar där man anger att man a) är över 18 och b) har godkänner att ens uppgifter hanteras enligt personuppgiftslagen.

## 6. Validering & feedback

Som alltid, se till att dokumentet [validerar](http://validator.w3.org/). Be kursare och labbassistenter om feedback för en djupar bild av vad som är bra och dåligt.
