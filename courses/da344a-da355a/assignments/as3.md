---
title: Inlämningsuppgift VG
code: "da344a-da355a"
---

# Inlämningsuppgift - VG

Denna uppgift är inte obligatorisk för de studenter som siktar på G i kursen, utan endast till för de studenter som siktar på VG i kursen.

## 1. Inledning

I de tidigare inlämningsuppgifterna har fokus legat på att utveckla webbgränssnitt mot användaren. Detta är något som man ofta gör i team, eller i samarbete med andra utvecklare - vilket är något som man bör ta hänsyn till. Denna uppgift kommer alltså att fokusera på att bygga en enklare webbapplikation där vi inkluderar viktiga delar inom utvecklingsmetodik så som:

- Versionshantering genom Github
- Paket och beroendehantering med [Yarn](https://yarnpkg.com/lang/en/) / [NPM](https://www.npmjs.com/)
- Dokumentation kring ert projekt

## Uppgiften

Er uppgift är kan ses som fyra delar, där den första handlar om att utveckla webbapplikationen och de övriga tre om att göra det på ett bra sätt.

### Del 1 - Skapa en webbapplikation

Din uppgift här är att skapa en mindre webbapplikation, med någon funktionalitet. Denna biten är väldigt öppen och du får bygga något som faller dig i smaken. Det finns dock några krav som du behöver förhålla dig till:

1. Minst ett API ska användas
2. Minst två externa bibliotek ska användas
    - Notera att ramverk så som React / vue.js / Angular *inte* kan användas i denna uppgift som externa bibliotek. Dock går det bra att skriva sin webbapplikation i något av dessa ramverken, om så önskas.

För att konkretisera omfattningen av webbapplikationen, så skulle följande vara lagom stora webbapplikationer (men hitta gärna på eget projekt =)):

- En webbapplikation som visualiserar valutakursen för Bitcoin i ett diagram:
    - Med API:t: [https://www.coindesk.com/api](https://www.coindesk.com/api)
    - Med `axios` som bibliotek för Ajax-anrop: [https://github.com/axios/axios](https://github.com/axios/axios)
    - Med `Chart.js` som bibliotek för diagram: [Chart.js](https://www.chartjs.org)

- En webbapplikation där man kan söka på, och läsa om, Star Wars-karaktärer:
    - Med API:t: [https://swapi.co/](https://swapi.co/)
    - Med `axios` som bibliotek för Ajax-anrop: [https://github.com/axios/axios](https://github.com/axios/axios)
    - Med `popper` som bibliotek för att visa en "popper" för smidig visning av "överflödig" information: [https://popper.js.org](https://popper.js.org)

- En webbapplikation som visar slumpvis intressant fakta om katter:
    - Med API:t: [https://alexwohlbruck.github.io/cat-facts/docs/](https://alexwohlbruck.github.io/cat-facts/docs/)
    - Med `axios` som bibliotek för Ajax-anrop: [https://github.com/axios/axios](https://github.com/axios/axios)
    - Med `anime.js` som bibliotek för snyggare presentation (animering) av faktan: [https://github.com/juliangarnier/anime/](https://github.com/juliangarnier/anime/)

### Del 2 - Versionshantera projektet

Ni ska versionshantera ert projekt genom Github. Här ska ni använda god versionshanteringsmetodik som t.ex. [Gitflow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow). Ni kommer sedan att lämna in länken till ert GitHub-projekt på Canvas så att vi kan bedöma ert arbete.

Tänk på att göra detta direkt från projektets start. Detta är inget man kan fixa i slutet genom en *quick fix*.
{:.info}

### Del 3 - Paket- och beroendehantering

Ni ska använda ett verktyg för att hantera era externa bibliotek i er webbapplikation. Detta gör ni lämpligen genom något av verktygen:

- [Yarn](https://yarnpkg.com/lang/en/)
- [NPM](https://www.npmjs.com/)

Ni ska även beskriva ert projekt på ett relevant sätt, t.ex. genom er `npm-package.json` (om ni använder NPM).

### Del 4 - Instruktion för användning av er webbapplikation

Ni ska avslutningsvis skriva en `readme.md` som har tydliga instruktioner om ert projekt, så som vad projektet är för något, hur man kommer igång med det, vilken licens det är publicerat under, m.m. För inspiration, titta på olika projekt på GitHub, hur de har löst detta.

## Redovisning

Ni lämnar in er lösning i form av en länk till det GitHub-repositoriet som innehåller er lösning. Detta sker på Canvas, med deadline: *publiceras inom kort*
