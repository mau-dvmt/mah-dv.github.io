---
title: Layout med CSS
code: "da344a-da355a"
---

# Layout med CSS

<iframe src="//www.slideshare.net/slideshow/embed_code/key/xNpdGn2IzZacpn" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/vt16-da355a-layout-med-css" title="VT16 - DA355A - Layout med CSS" target="_blank">VT16 - DA355A - Layout med CSS</a> </strong> from <strong><a target="_blank" href="//www.slideshare.net/AntonTibblin">Anton Tibblin</a></strong> </div>

Ni kan ladda ner föreläsningen [här](5.pdf)

## Dagens exempel

Ni kan ladda ner hela exemplet [här](5.zip)

### Exempel 1 - Filmer

#### HTML

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

	</body>
</html>
```

#### CSS

```css
body{
	background-color: #ddd;
	padding-top: 50px;
}

body > header{
	width: 100%;
	height: 50px;
	background-color: #000;
	position: fixed;
	z-index: 2;
	top: 0px;
	left: 0px;
}

body > header > h1{
	color: #fff;
	text-align: center;
	margin: 0px;
	line-height: 50px;
}

.movie{
	width: 500px;
	height: 200px;
	margin: 0px auto 20px auto;
	background-color: #fff;
	border: 2px solid #000;
	box-shadow: 0 0 5px #333;
}

.movie h2{
	float: left;
	line-height: 200px;
	margin: 0px;
	padding-left: 10px;
}

.movie img{
	float: right;
	height: 200px;
}

.movie .stars{
	position: absolute;
	width: 130px;
	height: 30px;
	margin-left: 370px;
	background-color: rgba(0, 0, 0, 0.5)
}

.movie .stars img{
	height: 25px;
	margin-top: 2px;
}
```


### Exempel 2 - Layout 1

#### HTML

```html
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exempel</title>
		<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper">
			<header>Sidhuvud</header>
			<nav>
				<h2>Navigation</h2>
				<a href="#article-1">Artikel 1</a>
				<a href="#article-2">Artikel 2</a>
				<a href="#article-3">Artikel 3</a>
				<a href="#article-4">Artikel 4</a>
			</nav>
			<div id="content">
				<h1>Innehåll</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis felis ultricies, porttitor justo cursus, euismod augue. Pellentesque commodo eu turpis sit amet auctor. Vestibulum congue efficitur luctus. Proin maximus diam ut ipsum tincidunt, eu viverra erat consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris et augue dapibus, gravida purus eget, aliquam ante. Suspendisse mollis ut turpis quis tincidunt. Vivamus luctus varius mi, vitae tristique erat lacinia ac. Suspendisse nec interdum magna. Sed maximus imperdiet quam, et rhoncus neque venenatis at. Duis et egestas velit, dignissim aliquam orci. Pellentesque semper gravida elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis felis ultricies, porttitor justo cursus, euismod augue. Pellentesque commodo eu turpis sit amet auctor. Vestibulum congue efficitur luctus. Proin maximus diam ut ipsum tincidunt, eu viverra erat consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris et augue dapibus, gravida purus eget, aliquam ante. Suspendisse mollis ut turpis quis tincidunt. Vivamus luctus varius mi, vitae tristique erat lacinia ac. Suspendisse nec interdum magna. Sed maximus imperdiet quam, et rhoncus neque venenatis at. Duis et egestas velit, dignissim aliquam orci. Pellentesque semper gravida elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
			</div>
			<footer>Sidfot</footer>
		</div>
	</body>
</html>
```

#### CSS

```css
body{
	font-family: 'Slabo 27px', serif;
}

#wrapper{
	width: 800px;
	margin: 20px auto;
	background-color: #ddd;
	box-shadow: 0 0 5px #333;
}

#wrapper > header{
	background-color: #eee;
	height: 150px;
	line-height: 150px;
	text-align: center;
	background-image: url(polar-bear.jpg);
	background-position: center;
	color: #fff;
	font-size: 70px;
	text-shadow: 0 0 15px #000;
}

#wrapper > nav{
	background-color: #ddd;
	width: 200px;
	float: left;
	min-height: 200px;
	padding: 20px;
	box-sizing: border-box;
}

#wrapper > nav > a{
	display: block;
	padding: 10px 5px;
	background-color: #fff;
	margin-bottom: 2px;
	color: #000;
	text-decoration: none;
	transition: 0.5s all;
}

#wrapper > nav > a:hover{
	background-color: #aaa;
	color: red;
}

#content{
	background-color: #fff;
	width: 600px;
	float: left;
	min-height: 200px;
	padding: 20px;
	box-sizing: border-box;
}

#wrapper > footer{
	background-color: #eee;
	height: 75px;
	line-height: 75px;
	text-align: center;
	clear: both;

}
```

### Exempel 3 - Layout 2

#### HTML

```html
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exempel</title>
		<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<nav>
			<h2>Meny</h2>
			<a href="#article-1">Artikel 1</a>
			<a href="#article-2">Artikel 2</a>
			<a href="#article-3">Artikel 3</a>
			<a href="#article-4">Artikel 4</a>
		</nav>

		<div id="content">
			<h1>Mina artiklar</h1>
			<article id="article-1">
				<h3>Artikel 1</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis felis ultricies, porttitor justo cursus, euismod augue. Pellentesque commodo eu turpis sit amet auctor. Vestibulum congue efficitur luctus. Proin maximus diam ut ipsum tincidunt, eu viverra erat consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris et augue dapibus, gravida purus eget, aliquam ante. Suspendisse mollis ut turpis quis tincidunt. Vivamus luctus varius mi, vitae tristique erat lacinia ac. Suspendisse nec interdum magna. Sed maximus imperdiet quam, et rhoncus neque venenatis at. Duis et egestas velit, dignissim aliquam orci. Pellentesque semper gravida elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
			</article>
			<article id="article-2">
				<h3>Artikel 2</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis felis ultricies, porttitor justo cursus, euismod augue. Pellentesque commodo eu turpis sit amet auctor. Vestibulum congue efficitur luctus. Proin maximus diam ut ipsum tincidunt, eu viverra erat consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris et augue dapibus, gravida purus eget, aliquam ante. Suspendisse mollis ut turpis quis tincidunt. Vivamus luctus varius mi, vitae tristique erat lacinia ac. Suspendisse nec interdum magna. Sed maximus imperdiet quam, et rhoncus neque venenatis at. Duis et egestas velit, dignissim aliquam orci. Pellentesque semper gravida elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
			</article>
			<article id="article-3">
				<h3>Artikel 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis felis ultricies, porttitor justo cursus, euismod augue. Pellentesque commodo eu turpis sit amet auctor. Vestibulum congue efficitur luctus. Proin maximus diam ut ipsum tincidunt, eu viverra erat consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris et augue dapibus, gravida purus eget, aliquam ante. Suspendisse mollis ut turpis quis tincidunt. Vivamus luctus varius mi, vitae tristique erat lacinia ac. Suspendisse nec interdum magna. Sed maximus imperdiet quam, et rhoncus neque venenatis at. Duis et egestas velit, dignissim aliquam orci. Pellentesque semper gravida elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
			</article>
			<article id="article-4">
				<h3>Artikel 4</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis felis ultricies, porttitor justo cursus, euismod augue. Pellentesque commodo eu turpis sit amet auctor. Vestibulum congue efficitur luctus. Proin maximus diam ut ipsum tincidunt, eu viverra erat consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris et augue dapibus, gravida purus eget, aliquam ante. Suspendisse mollis ut turpis quis tincidunt. Vivamus luctus varius mi, vitae tristique erat lacinia ac. Suspendisse nec interdum magna. Sed maximus imperdiet quam, et rhoncus neque venenatis at. Duis et egestas velit, dignissim aliquam orci. Pellentesque semper gravida elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
			</article>
		</div>
	</body>
</html>
```

#### CSS

```css
body{
	margin: 0px;
	font-family: 'Slabo 27px', serif;
}

body > nav{
	position: fixed;
	top: 0px;
	bottom: 0px;
	left: 0px;
	width: 200px;
	padding: 0px 20px;
	box-sizing: border-box;
	background-color: #eee;
	box-shadow: 0 0 5px #666;
}

body > nav > a{
	display: block;
	padding: 10px 5px;
	background-color: #fff;
	margin-bottom: 2px;
	color: #000;
	text-decoration: none;
	transition: 0.5s all;
}

body > nav > a:hover{
	background-color: #aaa;
	color: red;
}

#content{
	width: 500px;
	margin: 0px auto;
	background-color: #eee;
	min-height: 200px;
	overflow: hidden;
	padding: 0px 20px;
	box-sizing: border-box;
	box-shadow: 0 0 5px #666;
}

#content > article{
	border-bottom: 2px solid #333;
}
```
