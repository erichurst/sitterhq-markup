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

			<p><label for="title">Your Name</label>
			<input type="text" id="title" value=""></p>

			<p><label for="details">About Your Family</label>
			<textarea type="textarea" id="details"></textarea></p>

			<p>
				<label for="title">Location</label>
				<input type="text" id="title" value="">
				<a href=""><i class="fa fa-plus"></i> Add another date and time</a>
			</p>

			<p class="file-upload clearfix">
				<label for="title">Family Photo</label>
				<img src="http://placehold.it/125x125" alt="">
				<input type="file"> 
			</p>

			<p>
				<label for="title">Add a Child</label>
				<input type="text" id="title" value="">
				<a href=""><i class="fa fa-plus"></i> Add another child</a>
			</p>

			<input type="submit" class="button" value="Save profile">

		</form>

	</main>

<?php include('includes/footer.php'); ?>