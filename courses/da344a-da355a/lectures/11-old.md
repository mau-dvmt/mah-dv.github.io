---
title: Geolocation & media
code: "da344a-da355a"
---

# Geolocation & media

<iframe src="//www.slideshare.net/slideshow/embed_code/key/JeZGrYSdPxeLvS" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/vt16-da355a-geolocation-media" title="VT16 - DA355A - Geolocation &amp; media" target="_blank">VT16 - DA355A - Geolocation &amp; media</a> </strong> from <strong><a target="_blank" href="//www.slideshare.net/AntonTibblin">Anton Tibblin</a></strong> </div>

[Ladda ner dagens föreläsning här](11.pdf)

## Dagens exempel

### Geolocation

```js
/*https://maps.googleapis.com/maps/api/staticmap?center=55.7062733,13.1811253&zoom=13&size=300x300&sensor=false
*/

navigator.geolocation.getCurrentPosition(onSuccess, onFail, {
	enableHighAccuracy: false,
	timeout: 5000,
	maximumAge: 0
});

function onSuccess(position){
	console.log(position);
}

function onFail(err){
	console.log(err);
}
```

### Media

```html
<!doctype html>
<html>
	<head>
		<title>Bootstrap och LocalStorage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<style>
			video{
				max-width: 400px;
			}
		</style>
	</head>
	<body>

		<video id="movie">
			<source src="video.ogg" type="video/ogg">
			<source src="video.mp4" type="video/mp4">
		</video>


		<br>

		<button class="btn btn-success" id="start-movie">Starta</button>
		<button class="btn btn-warning" id="paus-movie">Pausa</button>

		<button class="btn btn-default" id="mute-movie">Mute/unmute</button>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>
		$("#start-movie").on("click", function(){
			// document.querySelector("#movie").play();
			$("#movie")[0].play();
		});
		$("#paus-movie").on("click", function(){
			// document.querySelector("#movie").play();
			$("#movie")[0].pause();
		});

		$("#mute-movie").on("click", function(){
			// document.querySelector("#movie").play();
			var videoElement = $("#movie")[0];
			if(videoElement.muted == true){
				videoElement.muted = false;
			}else{
				videoElement.muted = true;
			}
		});


		</script>
	</body>
</html>
```
