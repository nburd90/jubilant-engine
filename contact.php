<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
	<?php include 'navbar.php'; ?>

	<div class="container">
		<div name="form">
			<form action="contact.php" method="post" name="your-message">
				First Name: <input type="text" name="firstName" id="firstName" <?= (isset($_POST['firstName']) ? 'value="' . $_POST['firstName'] . '"' : '') ?> required />
				<br>
				Last Name: <input type="text" name="lastName" id="lastName" <?= (isset($_POST['lastName']) ? 'value="' . $_POST['lastName'] . '"' : '') ?> required />
				<br>
				<div class="email">
					Enter an Email: <input type="email" id="email" name="email" placeholder="email@example.com" <?= (isset($_POST['email']) ? 'value="' . $_POST['email'] . '"' : '') ?> required />
					</br></br>
				</div>
				<input type="submit" name="submit_btn" value="send message">
			</form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>