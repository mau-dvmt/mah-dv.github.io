---
title: Introduktion till Ajax
code: "da344a-da355a"
---

# Introduktion till Ajax

<iframe src="//www.slideshare.net/slideshow/embed_code/key/8oSbUfVxJ7pwbm" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ajax-jquery-58311577" title="Ajax - jQuery" target="_blank">Ajax - jQuery</a> </strong> from <strong><a href="//www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>


## Dagens Exempel

### 1. Ladda ner: [Chuck Norris-exempel](6/cn.zip)

#### HTML

```html
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chuck Norris Jokes</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <div class="row container-fluid" style="padding:0 50px;">
      <div class="xs-col-12">
        <h1>Chuck Norris Jokes!</h1>
        <hr>
        <button id="get-joke" class="btn btn-success">Give me a joke!</button>
        <hr>
        <div id="joke"></div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
```

#### JavaScript

```js
$("#get-joke").on("click", function(){
  $.ajax({
      url: "http://api.icndb.com/jokes/random",
      dataType: "JSON",
      data: {
        escape: "javascript"
      }
    }).done(function(data){
      $("#joke").text(data.value.joke).fadeIn(500);
  });
});
```

#### CSS

```css
#joke{
  font-style: italic;
  padding: 20px;
  background-color: #eee;
  box-shadow: 0 0 5px #999;
  font-size: 18px;
  display: none;
}
```
