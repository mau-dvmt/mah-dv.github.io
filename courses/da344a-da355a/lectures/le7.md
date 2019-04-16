---
title: CSS Grids & Webbramverk
code: "da344a-da355a"
---

# CSS Grids & Webbramverk

<iframe src="//www.slideshare.net/slideshow/embed_code/key/GF6jDCEOUIul6m" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/vt2019-da355a-css-grid-webbramverk" title="VT2019 - DA355A - CSS Grid &amp; Webbramverk" target="_blank">VT2019 - DA355A - CSS Grid &amp; Webbramverk</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

Ni kan ladda ner dagens föreläsning [Här](web-frameworks.pdf.pdf)

## Dagens exempel

### CSS Grids - fokus responsivitet

#### HTML

```html
<!doctype html>
<html>
    <head>
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Demo - Grids</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div id="grid">
            <header>Header</header>
            <nav>Nav</nav>
            <main>Main</main>
            <aside>Aside</aside>
            <footer>Footer</footer>
        </div>

    </body>
</html>
```

#### CSS

```css
body {
    margin: 0px;
}

#grid {
    display: grid;
    grid-template-rows: repeat(3, auto);
    grid-template-columns: 200px 1fr 200px;
    grid-template-areas:
        "header header header"
        "nav main aside"
        "footer footer footer"
    ;
}

#grid > header {
    grid-area: header;
    background-color: aqua;
    min-height: 100px;
}

#grid > nav {
    grid-area: nav;
    background-color: coral;
    min-height: 200px;
}

#grid > main {
    grid-area: main;
    background-color: yellow;
    min-height: 200px;
}

#grid > footer {
    grid-area: footer;
    background-color: tomato;
    min-height: 100px;
}

#grid > aside {
    grid-area: aside;
    background-color: blueviolet;
    min-height: 200px;
}

@media screen and (max-width: 1024px) {
    #grid {
        grid-template-columns: 200px 1fr;
        grid-template-areas: 
            "nav header"
            "nav main"
            "nav aside"
            "nav footer"
        ;
    }
}

@media screen and (max-width: 600px) {
    #grid {
        grid-template-columns: auto;
        grid-template-rows: 1fr;
        grid-template-areas: 
            "header"
            "aside"
            "nav"
            "main"
            "footer"
        ;
    }
}
```

### Ramverk - Bootstrap

#### HTML

```html
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Hello, world!</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

        <button class="btn btn-danger">Min knapp</button>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-dark table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                Kolumn 1
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                Kolumn 2
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                Kolumn 3
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
```

#### CSS

```css
h1 {
    margin-top: 20px;
}
```