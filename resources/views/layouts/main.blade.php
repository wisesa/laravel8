<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Kamen Rider Collection | {{ $title }}</title>
  </head>
  <body>

  <header>
    @include('partials.navbar')
  </header>

    <div style="background:url('/img/sky.svg'); position:absolute; top:0; z-index:-1; width:100%; height:800px; background-size:cover; background-repeat:no-repeat;">

    </div>

    <div class="container">
        @yield('container')
    </div>

    <div style="background:url('/img/reef.svg'); position:absolute; margin-top:-80px; left:-100px !important; z-index:-1; width:120%; height:200px; background-size:cover; background-repeat:no-repeat;">

    </div>

    <div style="background:url('/img/sea.svg');  z-index:-1; width:120%; margin-top:50px; height:1000px; background-size:cover; background-repeat:no-repeat;">

    </div>

  <footer>

  </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>