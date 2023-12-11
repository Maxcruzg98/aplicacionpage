<?php

?>

<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Apk Duoc UC</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="css/main.css" />
	<noscript>
		<link rel="stylesheet" href="css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<span class="logo"><img src="img/logo.png" alt="" /></span>
			<h1><strong>
					Prueba la nueva aplicacion de DUOC UC</h1>
			</strong>
		</header>

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li><a class="titulo" href="#intro" class="active">Nuestra Aplicación</a></li>
				<li><a class="titulo" href="#first">Facilidades</a></li>
				<li><a class="titulo" href="#second">Escanea códigos QR</a></li>
				<li><a class="titulo" href="#cta">Obten la asistencia</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">

			<!-- Introduction -->
			<section id="intro" class="main">
				<div class="spotlight">
					<div class="content">
						<header class="major">
							<h2 class="titulo">Nuestra Aplicación</h2>
						</header>
						<p>Prueba la nueva Apk que Duoc UC tiene preparada para tí.
							Con esta Aplicación podras registrarte, Listar usuarios,
							Escanear códigos QR y más.
						</p>

					</div>
					<span class="image"><img src="img/celular.avif" alt="" /></span>
				</div>
			</section>

			<!-- First Section -->
			<section id="first" class="main special">
				<header class="major">
					<h2 class="titulo">Facilidades</h2>
				</header>
				<ul class="features">
					<li>

						<span class="image"><img class="img" src="img/addu.png" alt="" /></span>
						<h3>
							<strong>
								INTERFAZ
							</strong>
						</h3>
						<p>Una interfaz de usuario facil y práctica</p>

					</li>
					<li>
						<span class="image"><img class="img2" src="img/listar.png" alt="" /></span>
						<h3>
							<strong>
								LISTA USUARIOS
							</strong>
						</h3>
						<p>Dentro de nuestr aplicacion podras agregar todos los usuarios
							que gustes para tener un registro de ellos</p>
					</li>
					<li>
						<span class="image"><img class="img" src="img/manitoqr.png" alt="" /></span>
						<h3>
							<strong>
								DESCARGA RÁPIDA
							</strong>
						</h3>
						<p>Puedes descargar nuestra aplicacion escanenado el código QR
							que tenemos para tí. </p>
					</li>
				</ul>
				<!-- <footer class="major">
					<ul class="actions special">
						<li><a href="generic.html" class="button">Learn More</a></li>
					</ul>
				</footer> -->
			</section>

			<!-- Second Section -->
			<section id="second" class="main special">
				<header class="major">
					<h2 class="titulo">Descarga mediante código QR</h2>
				</header>
				<span class="image"><img class="" src="img/addu.png" alt="" /></span>
			</section>

			<section id="cta" class="main special">
				<header class="major">
					<h2 class="titulo">Descarga nuestra app aquí</h2>
					<p>En caso de que tengas problemas para descargar la APK con nuestro código QR,
						podrás descargarla acá mismo.</p>
					<?php
					echo $this->Html->tag(
						'button',
						'Descargar APK',
						[
							'class' => 'btn btn-warning btn-lg',
							'onclick' => "window.location.href='" . $this->Url->build(['controller' => 'home', 'action' => 'download']) . "';"
						]
					);
					?>


				</header>

			</section>

		</div>

		<!-- Footer -->
		<footer class="colorcito" id="footer">
			<section>
				<h2>Descargala ya</h2>
				<p>Esta página solo tiene usos estudiantiles.
				</p>
			</section>
			<section>
				<h2>Datos importantes</h2>
				<dl class="alt">
					<dt>Alumnos</dt>
					<dd>Maximiliano Cuz &bull; Mario Fica</dd>
					<dt>Profesor</dt>
					<dd>Fernando Sepulveda</dd>
					<dt>Asignatura</dt>
					<dd><a href="#">Aplicaciones Moviles</a></dd>
				</dl>
			</section>
			<p class="copyright">&copy; Derechos Reservados</a>.</p>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.scrollex.min.js"></script>
	<script src="js/jquery.scrolly.min.js"></script>
	<script src="js/browser.min.js"></script>
	<script src="js/breakpoints.min.js"></script>
	<script src="js/util.js"></script>
	<script src="js/main.js"></script>

</body>

</html>

<style>
	.img {


		width: 130px !important;
		height: 130px !important;
	}

	.img2 {


		width: 180px !important;
		height: 130px !important;
	}

	.titulo {
		color: blue !important;

	}

	.duoc {
		color: #ffbc04 !important;

	}

	.btn {
		background-color: #ffbc04 !important;
		width: 200px !important;
		height: 50px !important;
	}
</style>