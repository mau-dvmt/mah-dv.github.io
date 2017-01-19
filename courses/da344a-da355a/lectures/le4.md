---
title: Introduktion till CSS
code: "da344a-da355a"
---

# Introduktion till CSS

<iframe src="//www.slideshare.net/slideshow/embed_code/key/8AnmUAumDyXagq" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/vt17-da355a-introduktion-till-css" title="VT17 - DA355A - Introduktion till CSS" target="_blank">VT17 - DA355A - Introduktion till CSS</a> </strong> from <strong><a target="_blank" href="//www.slideshare.net/AntonTibblin">Anton Tibblin</a></strong> </div>

Ni kan ladda ner föreläsningen [här](4.pdf)

## Dagens Exempel

### HTML

```

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Min första webbsida!</title>
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<h1>Välkommen till min sida!</h1>
		<p>Kursen går på <abbr title="Malmö Högskola">MAH</abbr></p>
		<hr>
		<p>Bra filmer:</p>
		<ol>
			<li id="best-movie">Star Wars</li>
			<li>Fight Club</li>
			<li>American beauty</li>
			<li>Inception</li>
		</ol>
		<p>Bra länkar:</p>
		<ul>
			<li><a href="http://google.se">Google</a></li>
			<li><a href="http://mah.se">Malmö Högskola</a></li>
			<li><a href="http://mah.se/lms">It's Learning</a></li>
		</ul>
		<hr>
		<p>Såhär kul tycker jag att HTML är:</p>
		<p>
			<img src="bilder/me.jpg" alt="En bild på mig" class="center" id="big">
		</p>
		<p>Såhär kul tycker jag att CSS är:</p>
		<p>
			<img src="bilder/me2.jpg" alt="En bild på mig" class="center">
		</p>
		<hr>
		<table>
			<thead>
				<tr>
					<th>Filmer</th>
					<th>Betyg</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="2">Anton betyg</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td>Star Wars</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Fight Club</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Inception</td>
					<td>4</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<h2>Här kommer massa text i paragrafer</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet eros sed eleifend efficitur. Suspendisse massa enim, commodo eu mauris id, vulputate malesuada dui. Proin tempus mauris efficitur risus condimentum, sit amet consequat nibh vestibulum.</p>
		<p>Integer sed massa lacus. Vivamus aliquam, nibh in pharetra fermentum, turpis turpis congue lacus, a sollicitudin dolor elit ac ante. Suspendisse arcu turpis, tempor sit amet semper eu, ultrices et felis. Suspendisse non justo enim.</p>
		<p>Proin lacinia, dolor non tempor suscipit, justo erat convallis dui, rhoncus lobortis turpis urna ut mauris. Mauris a ullamcorper velit.</p>
	</body>
</html>
```

### CSS

```css
h1, h2{
	background-color: red;
}

#best-movie{
	font-weight: bold;
}

.center{
	margin: auto;
	display: block;
	width: 300px;
	border: 5px solid #eee;
	box-shadow: 0 0 10px #999;
}

#big{
	width: 400px;
}
```
