<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/bakker_admin.css">
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<title>Bakker</title>
</head>

<body>

<?php include "bakker_header.php" ?>
<div id="admin_maincontent">
	
	<div id="amount_box">
		<div class="amount">
		<img draggable="false" class="pakket_image" src="assets/media/surprise_bag.jpg" alt="bag">
	<p>Aantal over: <input class="input_amount"> <span id="amount5"></span></input></p>
	</div>
		<div class="amount">
		<img draggable="false" class="pakket_image" src="assets/media/surprise_bag.jpg" alt="bag">
	<p>Aantal over: <input class="input_amount"><span id="amount7"></span></input></p>
	</div>
	<div class="amount">
		<img draggable="false" class="pakket_image" src="assets/media/surprise_bag.jpg" alt="bag">
		<p>Aantal over: <input class="input_amount"> <span id="amount10"></span></input></p>
	</div>
</div>

<div id="shutdown_box">
	<p>Voor als er niks meer is om te bestellen:</p>
	<br>
	<div id="start_date">
		<p>Start Datum:</p>
		<input type="text" id="calander_start">
	</div>

	<div id="end_date">
		<p>Eind Datum:</p>
		<input type="text" id="calander_end">
	</div>

	<div id="message_box">
		<p><span class="obligated">*</span> Bericht:</p>
		<textarea name="bericht" id="message" cols="30" rows="10"></textarea>
	
	</div>

	<div class="save"><button>Klaar</button></div>

</div>


</div>



<?php include "bakker_footer.php" ?>


<script src="assets/js/bakker_admin.js"></script>

</body>

</html>