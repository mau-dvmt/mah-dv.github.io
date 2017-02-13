---
title: Introduktion JS
code: "da344a-da355a"
---

# Introduktion JS

<iframe src="//www.slideshare.net/slideshow/embed_code/key/6vP4KVSm9iQDjU" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/vt17-da355a-intro-js" title="VT17 - DA355A - Intro JS" target="_blank">VT17 - DA355A - Intro JS</a> </strong> from <strong><a target="_blank" href="//www.slideshare.net/AntonTibblin">Anton Tibblin</a></strong> </div>

Ni kan ladda ner dagens föreläsning [Här](7.pdf)

## Dagens exempel

Ni kan ladda ner alla dages exempel [Här](7.zip)

### 1. Valutakonverterare (1)

#### HTML

```html
<!doctype html>
<html>
    <head>
		<meta charset="utf-8">
        <title>Demo</title>

    </head>
    <body>
		<h1>Testsida</h1>

		<script type="text/javascript" src="script.js"></script>
    </body>
</html>
```

#### JS

```js
function krToDollar(kr){
	var result = kr/8.7;
	return result;
}

var userInput = prompt("Hur många kr vill du konvertera till dollar?");

if(isNaN(userInput)){
	alert("Du måste ange ett nummer!");
}else{
	var dollar = krToDollar(parseInt(userInput));

	alert(userInput + "kr blir $" + dollar);
}
```

### 2. Eventlistener &amp; modifiera element

[Ladda ner hela exemplet här](7a.zip)

```html
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exempel</title>
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>
	<body>

		<header>
			<h1>Star Wars</h1>
		</header>

		<article class="movie">
			<div class="stars">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
			</div>
			<h2>Star Wars: Episode I</h2>
			<img src="images/1.png" alt="poster">
		</article>

		<article class="movie">
			<div class="stars">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
			</div>
			<h2>Star Wars: Episode 2</h2>
			<img src="images/2.png" alt="poster">
		</article>

		<article class="movie">
			<div class="stars">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
			</div>
			<h2>Star Wars: Episode 3</h2>
			<img src="images/3.png" alt="poster">
		</article>

		<article class="movie">
			<div class="stars">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
				<img src="images/star.png" alt="star">
			</div>
			<h2>Star Wars: Episode 4</h2>
			<img src="images/4.png" alt="poster">
		</article>
		<script src="script.js"></script>
	</body>
</html>
```

#### JS

```js
function colorize(){
	if(this.className == "movie"){
		this.className = "movie red";
	}else{
		this.className = "movie";
	}
}

var articles = document.querySelectorAll("article");
for(var i = 0; i < articles.length; i++){
	articles[i].addEventListener("click", colorize, false);
}
```

#### 3. Valutakonverterare (2)

```html
<!doctype html>
<html>
    <head>
		<meta charset="utf-8">
        <title>Demo</title>
    </head>
    <body>
		<h1>Valutakonverterare</h1>
		<form>
			<input type="number" id="kr" placeholder="Ange antal kr.">
			= $
			<input type="text" id="result" disabled>
		</form>
		<script src="script.js"></script>
    </body>
</html>
```

```js
document.querySelector("#kr").addEventListener("keyup", function(){
    var kr = parseInt(this.value);
    var result = kr/8.7;
    document.querySelector("#result").value = result;
}, false);
```

#### 4. Extra, tooltip

[**Bonus**: Här byggde jag (och kommenterade väl) ett exemepel på tool-tips](http://codepen.io/anon/pen/mRwYzZ)
