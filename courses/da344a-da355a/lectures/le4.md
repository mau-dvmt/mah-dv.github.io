---
title: Introduktion till CSS
code: "da344a-da355a"
---

# Introduktion till CSS

<iframe src="//www.slideshare.net/slideshow/embed_code/key/i2jEmcawjchnO5" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/vt18-da355a-introduktion-till-css" title="VT18 - DA355A - Introduktion till CSS" target="_blank">VT18 - DA355A - Introduktion till CSS</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

Ni kan ladda ner föreläsningen [här](4.pdf)

## Dagens Exempel

### HTML

```
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Min fina webbsida</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1>Välkommen till min fina sida!</h1>
		<h1>Min andra rubrik</h1>

		<h2>Detta är en testrubrik</h2>
	</body>
</html>
```

### CSS

```css
body {
	background-color: green;
}

h1 {
	background-color: red;
	color: yellow;
	margin: 0px;
	padding: 20px;
	margin-bottom: 10px;
	border: 10px solid blue;
}

h2 {
	width: 400px;
	padding: 20px;
	border: 5px solid pink;
	box-sizing: border-box;
}
```
