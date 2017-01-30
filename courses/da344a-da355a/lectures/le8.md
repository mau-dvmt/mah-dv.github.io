---
title: Responsive design
code: "da344a-da355a"
---

# Responsive design

<iframe src="//www.slideshare.net/slideshow/embed_code/key/4hz266yj2v5m7t" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/vt17-da355a-responsive-design" title="VT17 - DA355A - Responsive design" target="_blank">VT17 - DA355A - Responsive design</a> </strong> from <strong><a target="_blank" href="//www.slideshare.net/AntonTibblin">Anton Tibblin</a></strong> </div>

Ni kan ladda ner alla dages föreläsning [Här](8.pdf)

## Dagens exempel

Ni kan ladda ner alla dages exempel [Här](8.zip)

### Det sista exemplet

#### HTML

```HTML
<!doctype html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ex 1</title>
		<link href="style2.css" rel="stylesheet">
    </head>
    <body>
		<div id="wrapper">
			<header>
				Mitt sidhuvud
			</header>
			<nav>
				<h2 id="toogle-menu">Meny</h2>
				<ul>
					<li><a href="#">Länk</a></li>
					<li><a href="#">Länk</a></li>
					<li><a href="#">Länk</a></li>
					<li><a href="#">Länk</a></li>
				</ul>
			</nav>
			<main>
				<h1>Innehåll</h1>
				<img src="https://assets.entrepreneur.com/content/3x2/1300/20151103175631-star-wars-darth-vader-light-sabor-movie-villian.jpeg" alt="Vader">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam suscipit a mi nec convallis. Morbi faucibus sollicitudin diam, in congue velit venenatis in. Quisque leo magna, lobortis id auctor in, suscipit at ipsum. Morbi venenatis lacus auctor, cursus tellus ut, vestibulum eros. Nulla aliquam sagittis diam, ac consectetur orci volutpat quis. Fusce finibus vulputate dui ut efficitur. Aenean rutrum ultrices sem, non lacinia quam feugiat sed. Nunc scelerisque massa est, a malesuada quam convallis ac. Nulla maximus ipsum et consequat iaculis. Nam varius sapien id nibh dapibus vulputate. Praesent suscipit risus arcu, eu faucibus magna pretium non. In hac habitasse platea dictumst.</p>

				<p>Mauris pretium nec sapien eget rutrum. Aenean ipsum augue, tincidunt in sapien nec, viverra aliquet tellus. Sed tincidunt enim urna, id feugiat diam mattis eu. Quisque id nunc mattis, laoreet sapien ut, fringilla nisi. Ut mattis magna arcu, sit amet blandit augue aliquet vitae. Donec in nibh sit amet nisl rutrum interdum. Praesent ac leo neque. Maecenas urna augue, mattis non nunc lobortis, accumsan venenatis erat. Proin placerat tincidunt lorem, vitae posuere tellus sodales sed. Ut dignissim tellus metus, in placerat augue vestibulum eget. Cras id gravida mi. Proin gravida blandit nisi vel iaculis. Pellentesque commodo commodo luctus. Praesent ut gravida urna. Donec sit amet ipsum elementum, posuere arcu id, vestibulum velit. Donec ultricies imperdiet elit, ut porttitor dui tristique sodales.</p>
			</main>
			<footer>
				Sidfot
			</footer>
			<script src="script.js"></script>
		</div>		
    </body>
</html>
```

#### CSS
```CSS
body{
	font-family: "Century gothic", "arial";
}

#wrapper{
	width: 100%;
	overflow: hidden;
	margin: 20px auto;
	background-color: #eee;
	box-shadow: 0 0 5px #333;
	border: 2px solid #222;
	box-sizing: border-box;
}

#wrapper > header{
	width:100%;
	height: 75px;
	line-height: 75px;
	background-color:#222;
	color: #eee;
	padding-left: 2%;
	box-sizing: border-box;
	font-size: 24px;
	font-weight: bold;
}

#wrapper > nav{
	width: 20%;
	float: left;
	background-color: #eee;
	padding: 2%;
	box-sizing: border-box;
}

#wrapper > main{
	width: 80%;
	float: left;
	background-color: #eee;
	padding: 2%;
	box-sizing: border-box;
	background-color: #ddd;
	min-height:200px;
}

#wrapper > footer{
	width: 100%;
	height: 50px;
	line-height: 50px;
	background-color:#222;
	color: #eee;
	padding-left: 2%;
	box-sizing: border-box;
	font-size: 16px;
	font-weight: bold;
	text-align: center;
	clear: both;
}


@media screen and (min-width:480px){
	#wrapper > main img{
		max-width: 200px;
		float: right;
	}
}

@media screen and (max-width:480px){
	body{
		margin: 0px;
	}
	#wrapper{
		margin:0px;
		border:none;
	}
	#wrapper > nav, #wrapper > main{
		width: 100%;
	}

	#wrapper > nav > ul{
		margin: 0px;
		padding: 0px;
		list-style: none;
	}

	#wrapper > nav h2{
		text-align: center;
	}

	#wrapper > nav > ul a{
		display: block;
		text-align: center;
		padding: 10px;
		border-bottom: #fff 1px solid;
	}

	#wrapper > main img{
		max-width: 100%;
	}
}
```

## JavaScript
```JS
document.querySelector("#toogle-menu").addEventListener("click", function(){
    if(window.innerWidth < 480){
        var menuUl = this.nextElementSibling;
        if(menuUl.style.display == "none"){
            menuUl.style.display = "block";
        }else{
            menuUl.style.display = "none";
        }
    }
}, false);
```
