---
title: Responsiv webbutveckling
code: "da344a-da355a"
---

# Responsiv webbutveckling

<iframe src="//www.slideshare.net/slideshow/embed_code/key/n4BmjAovHvFZ1Z" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/vt2019-da355a-responsiv-webbutveckling" title="VT2019 - DA355A - Responsiv webbutveckling" target="_blank">VT2019 - DA355A - Responsiv webbutveckling</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

Ni kan ladda ner dagens föreläsning [Här](Responsiv-Webbutveckling.pdf)

## Dagens exempel

### Exempel på resonsiv layout

#### HTML

```html
<!doctype html>
<html>
	<head>
		<title>CSS: Layout</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript">
			alert(document.documentElement.clientWidth);
		</script>
	</head>
	<body>
	
		<div id="wrapper">
			<header>
				<h1>Min Webbsida</h1>
				<form>
					<label for="search">Sök: </label>
					<input type="search" id="search">
				</form>
			</header>
			<nav>
				<h2>Meny</h2>
				<ul>
					<li><a href="#">Länk 1</a></li>
					<li><a href="#">Länk 2</a></li>
					<li><a href="#">Länk 3</a></li>
					<li><a href="#">Länk 4</a></li>
				</ul>
			</nav>
			<main>
				<h2>Lite innehåll</h2>
				<img src="https://madthedj.files.wordpress.com/2011/12/star_wars-11308.png" alt="star wars">
				<p>Seventeen thousand! Those guys must really be desperate. This could really save my neck. Get back to the ship and get her ready. You'll have to sell your speeder. That's okay. I'm never coming back to this planet again. Going somewhere, Solo? Yes, Greedo. As a matter of fact, I was just going to see your boss. Tell Jabba that I've got his money. It's too late. You should have paid him when you had the chance. Jabba's put a price on your head, so large that every bounty hunter in the galaxy will be looking for you. I'm lucky I found you first. Yeah, but this time I got the money. If you give it to me, I might forget I found you. I don't have it with me. Tell Jabba...</p>
				<p>This is Chewbacca. He's first-mate on a ship that might suit our needs. I don't like the look of this. Han Solo. I'm captain of the Millennium Falcon. Chewie here tells me you're looking for passage to the Alderaan system. Yes, indeed. If it's a fast ship. Fast ship? You've never heard of the Millennium Falcon?</p>
			</main>
			<footer>Sidfot</footer>
		</div>

	</body>
</html>
```

#### CSS

```css
#wrapper {
	background-color: #fff;
	max-width: 900px;
	margin: auto;
	font-family: "century gothic";
	box-shadow: 0 0 10px #999;
}

#wrapper > header {
	background-color: #fff;
	height:100px;
	border-bottom: 2px solid #ccc;
}

#wrapper > header h1 {
	float: left;
	padding-left: 20px;
	line-height: 100px;
	margin: 0px;
}

#wrapper > header form {
	float: right;
	line-height: 100px;
	margin-right: 10px;
}

#wrapper > nav {
	background-color: #fff;
	min-height: 200px;
	width: 25%;
	float: left;
}

#wrapper > nav h2 {
	padding-left: 10px;
}

#wrapper > nav ul {
	padding: 0px;
}

#wrapper > nav li {
	background-color: #eee;
	list-style: none;
	margin: 0px;
}

#wrapper > nav li a {
	color: #333;
	text-decoration: none;
	display: block;
	padding: 10px;
	margin-bottom: 1px;
}

#wrapper > main {
	background-color: #fff;
	min-height: 200px;
	width: 75%;
	float: right;
	padding: 0 20px 20px 20px;
	box-sizing: border-box;	
}

#wrapper > main > img {
	float: right;
	width: 300px;
	margin: 0 0 10px 10px;
}

#wrapper > footer {
	background-color: #fff;
	border-top: 2px solid #ccc;
	height: 50px;
	clear: both;
	text-align: center;
	line-height: 50px;
}

@media screen and (max-width: 500px) {
	#wrapper > nav, #wrapper > main {
		width: 100%;
	}

	#wrapper > header {
		height: auto;
		overflow: hidden;
	}

	#wrapper > header form {
		float: left;
	}

	#wrapper > header > h1 {
		text-align: center;
		float: none;
	}
	
	#wrapper > main > img {
		display: block;
		width: 100%;
	}
	
	#wrapper > header > form {
		display: block;
		width: 100%;
		text-align: center;
	}
}
```

### Exempel på flexbox

#### HTML

```html
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Demo</title>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="a.css" rel="stylesheet">
	</head>
	
	<body>
		<div id="container">
			<div class="item">1</div>
			<div class="item">2</div>
			<div class="item">3</div>
			<div class="item">4</div>
			<div class="item">5</div>
			<div class="item">6</div>
		</div>
		
		<div id="menu">
			<a href="#">Hem</a>
			<a href="#">Produkter</a>
			<a href="#">Återförsäljare</a>
			<a href="#">Kontakt</a>
			<input type="search" placeholder="Sök här...">
		</div>
		
		<div id="absolute-center">
			<div>This is some content</div>
		</div>
	</body>
</html>
```

### CSS

```css
#wrapper {
	display: grid;
	grid-template-columns: 200px 1fr 200px;
	grid-template-rows: auto;
	grid-gap: 10px;
	grid-template-areas: 
		"header header header"
		"nav main aside"
		"footer footer footer"
	;
}

#wrapper > * {
	min-height: 100px;
}

#wrapper > header {
	grid-area: header;
	background-color: lightblue;
}

#wrapper > footer {
	grid-area: footer;
	background-color: lightblue;
}

#wrapper > nav {
	grid-area: nav;
	background-color: lightgreen;
}

#wrapper > main {
	grid-area: main;
	background-color: red;
}

#wrapper > aside {
	grid-area: aside;
	background-color: purple;
}
```