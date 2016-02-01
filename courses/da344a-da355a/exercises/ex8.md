---
title: Laboration 5b
code: "da344a-da355a"
---

# Laboration 5b - Intro DOM

Syfte med laborationen:

* att komma igång med JavaScript
* att öva på att använda Document Object Model (DOM)

Övrigt:

* var nogranna med att dokumentera den kod som ni anser inte beskriver sig själv

Innan ni börjar med laborationen rekommenderas det att läsa på om funktionerna `alert`, `prompt` och `confirm` som finns tillgängliga i webbläsare utan att ni själva behöver skapa dessa.

* [alert](https://developer.mozilla.org/en-US/docs/Web/API/Window/alert)
* [prompt](https://developer.mozilla.org/en-US/docs/Web/API/window/prompt)
* [confirm](https://developer.mozilla.org/en-US/docs/Web/API/window/confirm)

### Uppgift 1

I den första uppgiften kommer ni bli tilldelad HTML och CSS, er uppgift är att genom JavaScript göra så att, exempelvis, när en användare klickar på knappen "Success" så kommer klassen "success" att läggas till på elementet `<div id="message-box">`. Detta innebär att ni kommer skapa detta för samtliga av de tre knapparna som ni finner i HTML exemplet nedan.

{% highlight html linenos %}
<div id="message-box">
    <p>This is a very important message box!</p>
</div>

<button type="button" id="success">Success</button>
<button type="button" id="error">Error</button>
<button type="button" id="info">Info</button>
{% endhighlight %}

{% highlight css linenos %}
#message-box {
    border: 1px solid black;
    padding: 15px;
    font-size: 20px;
}
.success {
    background-color: #dff0d8;
    border-color: #98B98B;
}
.error {
    background-color: #f2dede;
    border-color: #BE9090;
}
.info {
    background-color: #d9edf7;
    border-color: #7294A5;
}
{% endhighlight %}

**Tips!** Använd [document.querySelector()](https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector) för att leta upp elementen du vill identifiera på din webbsida. För att ange ett attribut för ett element (t.ex. klass) så använd funktionen [setAttribute()](https://developer.mozilla.org/en-US/docs/Web/API/Element/setAttribute).
{:.info}

### Uppgift 2

I denna uppgiften kommer ni behöva använda er av funktionen `prompt`. Ni ska genom JavaScript göra så att när en användare klickar på knappen som ni finner nedan så ska användaren (genom `prompt`) få fylla i en text - denna text ska sedan sparas som ett nytt list-element i listan som ni också finner nedan.

{% highlight html linenos %}
<ul id="items">
    <li>The first item is free!</li>
</ul>

<button type="button" id="add-item">Add item</button>
{% endhighlight %}

För att kunna göra detta behöver vi lära oss tre saker:

* Att skapa element i JavaScript
* Att skapa text-noder i JavaScript
* Att lägga till barn (till befintligt element) i JavaScript

Här kommer ett litet exempel för att göra detta:

{% highlight js linenos %}
// Skapar ett <p>-element
var p = document.createElement("p");
// Skapar en text-nod, alltså det som ska stå i paragrafen
var textNode = document.createTextNode("Lite torr exempeltext");
// Lägg till text-noden till paragrafen
p.appendChild(textNode)
// Lägger till paragrafen som ett barn till elementet <body>
document.querySelector("body").appendChild(p);
{% endhighlight %}

Använd gärna exempelkoden ovan, men tänk på att anpassa den så att den passar er uppgift - d.v.s. ni ska ju göra ett `<li>`-element som innehåller den text som användaren matat in.

### Uppgift 3

Komplettera __Uppgift 2__ med en extra knapp, `<button>` - ni väljer id och text själv, som raderar det sista elementet i listan varje gång en användare klickar på denna knappen.

**Tips** För att ta bort ett barn från ett element så använder man funktionen [removeChild](https://developer.mozilla.org/en-US/docs/Web/API/Node/removeChild).
{:.info}

### Uppgift 4

Utifrån den HTML-lista som presenteras nedan gör så att när en användare klickar på knappen "X" i ett list-element kommer detta element att raderas från listan (dvs. hela list-elementet, inte bara knappen). __Dock__ måste användaren godkänna att elementet ska raderas från listan genom att ni använder funktionen `confirm` innan ni raderar något list-element.

{% highlight html linenos %}
<ul>
    <li>
        This is the first item
        <button type="button" class="remove-list-item">X</button>
    </li>
    <li>
        This is the second item
        <button type="button" class="remove-list-item">X</button>
    </li>
    <li>
        This is the third item
        <button type="button" class="remove-list-item">X</button>
    </li>
    <li>
        This is the fourth item
        <button type="button" class="remove-list-item">X</button>
    </li>
</ul>
{% endhighlight %}

**Tips** Använd funktionen [parentNode](https://developer.mozilla.org/en-US/docs/Web/API/Node/parentNode) för att identifiera förälderelement till ett givet element.
{:.info}

### Uppgift 5

I denna uppgiften ska ni skapa en timer, dvs. ni kommer ha en knapp som startar er timer, en knapp som stannar den och slutligen en knapp som återställer den. Det räcker att det är en timer som räknar sekunder. Inför denna uppgift rekommenderas det att kort läsa om [setInterval](https://developer.mozilla.org/en-US/docs/Web/API/WindowTimers/setInterval). För att kort demonstrera hur denna fungerar kan ni ta en titt på exemplet nedan. Kort kan vi beskriva det som att vi kan välja att upprepa en funktion, där varje upprepning fördröjs en viss tid (som vi själva anger i millisekunder) - vi har därmed även möjlighet att avbryta dessa uppreningar genom funktionen `clearInterval`.

{% highlight js linenos %}
function start() {
    // Tom variabel som kommer innehålla vårt intervall
    var printInterval;
    // Variabel som vi använder för att kontrollera
    // antal gånger vi upprepat vår funktion
    var times = 0;
    // Tiden mellan upprepningar skrivs i millisekunder
    // vilket innebär att 1000 = 1 sekund
    var delay = 1000;

    function print() {
        times += 1;

        if (times > 10) {
            clearInterval(printInterval);
        }

        console.log("It has been run ", times, " times");
    }

    printInterval = setInterval(print, delay);
}
{% endhighlight %}

För denna uppgift kan ni även utgå från följande HTML-mall.

{% highlight html linenos %}
<p id="timer">0s</p>
<button type="button" id="start-timer">Start</button>
<button type="button" id="stop-timer">Stop</button>
<button type="button" id="reset-timer">Reset</button>
{% endhighlight %}

För att underlätta kommer en lista presenteras nedan med lite tips, tänk på att det går att lösa problemet på en mängd olika vis och dessa tips är bara ett förslag.

* Använd er av två globala variabler, `time` som representerar hur länge vår timer har pågått och `interval` som kan representera det intervall vi använder oss av för att öka vår timer.
* Skapa tre funktioner, `start`, `stop` och `reset`. `start` skapar vårt intervall, ökar vår `time` variabel med `1` och ändrar textinnehållet på vår paragraf. `stop` denna raderar endast intervallet genom `clearInterval`. `reset` avbryter (stop) vårt intervall, återställer vår variabel `time` och återställer även vår paragrafs textinnehåll.
* Applicera de tre funktionerna till eventet `"click"` på respektive HTML-knapp.
