<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();



$app->get('/', function (Request $request, Response $response) {
	$response->getBody()->write("What's up dude!");
	return $response;
});





// $app->get('/', function (Request $request, Response $response, $args) {
// $response->getBody()->write("Hello world!");
// return $response;
// });

$app->run();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="CSS/styles.css" />
	<title>Nicky B | Web Developer</title>
</head>

<body>

	<header>
		<nav class="nav">
			<div class="logo">
				<h4>Buff Developments</h4>
			</div>
			<ul class="nav-links">
				<li>
					<a href="#Skills">Skills</a>
				</li>
				<li>
					<a href="#Past-Work">Work</a>
				</li>
				<li>
					<a href="/contact.php">Contact</a>
				</li>
				<li>
					<a href="#About-Me">About</a>
				</li>
			</ul>
			<div class="burger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
		</nav>
		</div>
	</header>

	<div class="container">
		<h1>Hey, I'm Nick.</h1>
		<p>I'm a Web Developer from Buffalo.</p>
	</div>



	<footer>
		<a href=""></a>
		<a href=""></a>
		<a href=""></a>
	</footer>
</body>



</html>