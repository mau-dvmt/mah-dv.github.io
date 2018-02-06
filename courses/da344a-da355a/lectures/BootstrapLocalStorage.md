---
title: Bootstrap & LocalStorage
code: "da344a-da355a"
---

# Bootstrap & LocalStorage

## Del 1 - Bootstrap

<iframe src="//www.slideshare.net/slideshow/embed_code/key/CbmX4Lm2REDkuN" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/perthmon/work-press-meetup-bootstrap" title="Bootstrap 3 Basic - Bangkok WordPress Meetup" target="_blank">Bootstrap 3 Basic - Bangkok WordPress Meetup</a> </strong> from <strong><a target="_blank" href="//www.slideshare.net/perthmon">Woratana Perth Ngarmtrakulchol</a></strong> </div>

## Del 2 - LocalStorage

<iframe src="//www.slideshare.net/slideshow/embed_code/key/w7wbwyyEn4TxnH" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/localstorage" title="LocalStorage" target="_blank">LocalStorage</a> </strong> from <strong><a target="_blank" href="//www.slideshare.net/AntonTibblin">Anton Tibblin</a></strong> </div>

[Ladda ner dagens föreläsning här](10.pdf)

## Dagens Exempel

[Ni kan ladda ner hela exemplet här](10.zip)

### HTML

```html
<!doctype html>
<html>
	<head>
		<title>Bootstrap och LocalStorage</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Todo-lista</h1>
				</div>
			</div>
			<div class="row" id="todo-container">
				<div class="col-sm-6">
					<form action="#" id="add-item-form">
						<fieldset>
							<h2>Lägg till sak i listan</h2>
							<div class="form-group">
								<label for="title">Titel</label>
								<input type="text" id="title" class="form-control" placeholder="Skriv saken här...">
							</div>
							<div class="form-group">
								<label for="prio">Prioritering</label>
								<select id="prio" class="form-control">
									<option value="1" selected>Låg</option>
									<option value="2">Mellan</option>
									<option value="3">Hög</option>
								</select>
							</div>
							<input type="submit" value="Spara sak i listan" class="btn btn-success">
						</fieldset>
					</form>
				</div>
				<hr class="mobile-only">
				<div class="col-sm-6">
					<h2>Saker i listan</h2>
					<table class="table table-striped" id="todo-table">
						<tr>
							<th>Sak</th>
							<th>Prio</th>
							<th>Ta bort</th>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="script.js"></script>
	</body>
</html>
```

### JavaScript

```js
$(document).on("ready", renderTodoList);

function renderTodoList(){
	// 1. Hämta todolistan
	var todo = getTodoList();

	// 2. Nollställ tabellen (utom första raden)
	$("#todo-table tr:not(:first-child)").remove();

	// 3. Skriv ut alla todo-sakerna
	for(var i = 0; i < todo.length; i++){
		$("#todo-table tbody").append("\
			<tr class='"+getPrioClass(todo[i].prio)+"'>\
				<td>"+todo[i].title+"</td>\
				<td>"+todo[i].prio+"</td>\
				<td><img src='delete.png' class='delete-item'></td>\
			</tr>\
		");
	}
}

function getPrioClass(prio){
	if(prio == 1){
		return "success";
	}else if(prio == 2){
		return "warning";
	}else{
		return "danger";
	}
}

function getTodoList(){
	if(localStorage.getItem("todo") == null){
		// Det finns inget spara med nyckeln "todo" i localStorage
		var todo = [];
	}else{
		// Hämtar den sparade listan och läser in JSON till JavaScript
		var todo = JSON.parse(localStorage.getItem("todo"));
	}
	return todo;
}

function deleteItem(item){
	var todo = getTodoList();
	// Letar upp index i arrayen av den sak vi vill ta bort
	var indexOfItem = todo.indexOf(item);
	// Tar bort saken
	todo.splice(indexOfItem, 1);
	// Sparar den nya listan till localStorage
	saveTodoList(todo);
	// Skriver ut den nya listan på webbplatsen
	renderTodoList();
}

function saveTodoList(todoList){
	// Gör om vår lista med saker till JSON
	var JSONTodo = JSON.stringify(todoList);
	// Sparar vår lista (i JSON) i localStorage
	localStorage.setItem("todo", JSONTodo);
}

$("#add-item-form").on("submit", function(e){
	// Hindrar formuläret från att skickas iväg
	e.preventDefault();

	// 1. Hämta värde
	var title = $("#title");
	var prio = $("#prio");

	// 2. Validera input
	if(title.val() == ""){
		title.parent().addClass("has-error has-feedback");
		title.after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
		return false;
	}

	// 3. Läs in / skapa vår array med todo-saker
	var todo = getTodoList();

	// 4. Lägg till vår sak i listan
	todo.push({
		title: title.val(),
		prio: prio.val()
	});

	// 5. Uppdatera vår listan
	saveTodoList(todo);

	// 6. Skriv ut vår lista
	renderTodoList();

});

$("#todo-table").on("click", ".delete-item", function(){
	// Hämtar titeln på den sak vi vill ta bort
	var item = $(this).parent().prev().prev().text();
	// Tar bort saken
	deleteItem(item);
});

$("#title").on("keyup", function(){
	if($(this).val().length > 0){
		// Om längden på användarens input är minst ett tecken, ta bort ev. element & klasser
		$(this).next().remove();
		$(this).parent().removeClass("has-error has-feedback");
	}else{
		// Om längden på användarens input är tom, lägger till ev. element & klasser
		$(this).parent().addClass("has-error has-feedback");
		$(this).after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
	}
});
```

### CSS

```css
body{
	background-color: #eee;
}

h1, h2{
	text-align: center;
}

#todo-container{
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 0 10px #999;
	margin-top: 20px;
	padding-bottom: 20px;
}

.mobile-only{
	display: none;
}

.delete-item{
	width: 20px;
}

@media screen and (max-width: 768px){
	#todo-container{
		border-radius: 0px;
	}
	.mobile-only{
		display: block;
	}
}
```
