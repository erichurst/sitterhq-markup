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

			<p><label for="title">Title</label>
			<input type="text" id="title" value=""></p>

			<p><label for="details">Details</label>
			<textarea type="textarea" id="details"></textarea></p>

			<!-- begin job -->
			<ul class="date-time clearfix">
				<li>
					<label for="date">Date</label>
					<input type="number" id="" value="" placeholder="mm/dd/yyyy">
				</li>
				<li>
					<label for="date">Time</label>
					<select class="chosen-select">
						<option value="" selected="selected">Start time</option>
						<option value="">12:00 am</option>
						<option value="">1:00 am</option>
						<option value="">2:00 am</option>
						<option value="">3:00 am</option>
					</select>
				</li>
				<li class="divider"><i class="fa fa-minus"></i></li>
				<li>
					<label for="date">Date</label>
					<input type="number" id="" value="" placeholder="mm/dd/yyyy">
				</li>
				<li>
					<label for="date">Time</label>
					<select class="chosen-select">
						<option value="" selected="selected">End time</option>
						<option value="">7:00 pm</option>
						<option value="">8:00 pm</option>
						<option value="">9:00 pm</option>
						<option value="">10:00 pm</option>
						<option value="">11:00 pm</option>
						<option value="">12:00 am</option>
					</select>
				</li>
			</ul>
			<!-- end job -->

			<!-- begin job -->
			<ul class="date-time clearfix">
				<li>
					<label for="date">Date</label>
					<input type="number" id="" value="" placeholder="mm/dd/yyyy">
				</li>
				<li>
					<label for="date">Time</label>
					<select class="chosen-select">
						<option value="" selected="selected">Start time</option>
						<option value="">12:00 am</option>
						<option value="">1:00 am</option>
						<option value="">2:00 am</option>
						<option value="">3:00 am</option>
					</select>
				</li>
				<li class="divider"><i class="fa fa-minus"></i></li>
				<li>
					<label for="date">Date</label>
					<input type="number" id="" value="" placeholder="mm/dd/yyyy">
				</li>
				<li>
					<label for="date">Time</label>
					<select class="chosen-select">
						<option value="" selected="selected">End time</option>
						<option value="">7:00 pm</option>
						<option value="">8:00 pm</option>
						<option value="">9:00 pm</option>
						<option value="">10:00 pm</option>
						<option value="">11:00 pm</option>
						<option value="">12:00 am</option>
					</select>
				</li>
			</ul>
			<!-- end job -->

			<a href="" class="add-date"><i class="fa fa-plus"></i> Add another date and time</a>

			<input type="submit" class="button" value="Add job">

		</form>

	</main>

<?php include('includes/footer.php'); ?>