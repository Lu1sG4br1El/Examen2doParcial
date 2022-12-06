<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
	    <title>EL cyber de vegeta</title>
	</head>
	<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="nav-link {{ request()->routeIs('NFormulario') ?'text-warning ':'' }}" href="/formulario">Formulario</a>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	      <a class="nav-link {{ request()->routeIs('NConsulta') ?'text-warning ':'' }}" href="consulta">Consulta</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	@yield('contenido')


	            <footer class="text-center text-light">▷ 0:23 ━━━━━━⬤────────────────── 05:55 │ ⇆◁ || ▷ ↺</footer>
	</body>
</html>