---
title: Introduktion till JavaScript
code: "da344a-da355a"
---

# Introduktion till JavaScript

<iframe src="//www.slideshare.net/slideshow/embed_code/key/vrpqpz81JRPWxJ" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/javascript-intro-57743384" title="JavaScript - Intro" target="_blank">JavaScript - Intro</a> </strong> from <strong><a href="//www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>


## Dagens Exempel

### Att ändra bakgrundsfärg (och spara valet)

#### HTML

{% highlight html linenos %}
<!doctype html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, width=device-width">
        <title>Bakgrundsfärg-byte</title>
    </head>
    <body>
		<label for="color">Vilken färg?</label>
		<input type="color" id="color">
		<button id="saveColor">Spara</button>
		<script src="script.js"></script>
    </body>
</html>
{% endhighlight %}

#### JavaScript

{% highlight js linenos %}
document.querySelector("#saveColor").addEventListener("click", function(){
  var color = document.querySelector("#color").value;
  document.querySelector("body").style.backgroundColor = color;
  localStorage.setItem("color", color);
}, false);

if(localStorage.getItem("color") != undefined){
  var color = localStorage.getItem("color");
  document.querySelector("body").style.backgroundColor = color;
}
{% endhighlight %}

### Att "highlighta" en figur

#### HTML

{% highlight html linenos %}
<figure>
  <img src="images/1.jpg">
  <figcaption>The phantom menace</figcaption>
</figure>
<figure>
  <img src="images/2.jpg">
  <figcaption>The clone wars</figcaption>
</figure>
<figure>
  <img src="images/3.jpg">
  <figcaption>Revenge of the sith</figcaption>
</figure>
<figure>
  <img src="images/4.jpg">
  <figcaption>A new hope</figcaption>
</figure>
<!-- osv. -->
{% endhighlight %}

#### JavaScript

{% highlight js linenos %}
var figures = document.querySelectorAll("figure");
for(var i = 0; i < figures.length; i++){
	figures[i].addEventListener("click", colorize, false);
}

function colorize(){
	this.style.backgroundColor = "#aaa";
}
{% endhighlight %}
