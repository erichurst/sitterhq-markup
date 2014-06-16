<?php include('includes/header-parent.php'); ?>

	<header role="header" class="masthead-default">
		<div class="centered">
			<div class="logo">
				<a href="homepage.php" class="logo-sitterhq">Sitter<em>HQ</em></a>
			</div>
		</div>
	</header>

	<main role="main" class="main">

		<form method="" action="" class="data-form">

			<p><label for="name">Name</label>
			<input type="text" id="name" value=""></p>

			<p><label for="email">Email Address</label>
			<input type="email" id="email" value=""></p>

			<p><label for="password">Password</label>
			<input type="password" id="password" value=""></p>

			<p><label for="password-confirm">Password Confirm</label>
			<input type="password" id="password-confirm" value=""></p>

			<p><label for="zip">Location Zip Code</label>
			<input type="number" id="zip" value=""></p>

			<p class="legal">Some legal text here?</p>

			<input type="submit" class="button" value="Sign up">

		</form>

	</main>

<?php include('includes/footer.php'); ?>