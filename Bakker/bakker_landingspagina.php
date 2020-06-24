<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/bakker.css">
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<title>Bakker</title>
</head>

<body>

<?//php include "bakker_db.php" ?>


<?php include "bakker_header.php" ?>
<div id="inactive">
	<div id="inactive_box">&nbsp
		<img id="inactive_lines" src="assets/media/lijnen_midden.svg" alt="Rijnland Lijnen">
		<p id="inactive_message">niet nu</p>
	</div>
	
</div>

<div id="pakket_box">


	<div class="pakket">

		<p class="price">Prijs: €5,-</p>

		<img draggable="false" class="pakket_image" src="assets/media/surprise_bag.jpg" alt="bag">
		
		<div class="pakket_text">
				
				<span class="amount">Aantal: <input id="quantity" type="number" value="0" disabled></span>
				<span class="stock">Vooraad: 5</span>
				
				<div class="plus_minus_container">
					<div class="desktop_button" onclick="#">+<div class="skewblock"></div></div>
					<div class="desktop_button" onclick="#">-<div class="skewblock"></div></div>
				</div>
				
				<div id="mobile_button_container">
					<div id="mobile_plus" class="mobile_button">+</div>
					<div id="mobile_minus" class="mobile_button">-</div>
				</div>
		</div>


		
	</div>

	<div class="pakket">

<p class="price">Prijs: €7,50</p>

<img draggable="false" class="pakket_image" src="assets/media/surprise_bag.jpg" alt="bag">

<div class="pakket_text">
		
		<span class="amount">Aantal: <input id="quantity" type="number" value="0" disabled></span>
		<span class="stock">Vooraad: 5</span>
		
		<div class="plus_minus_container">
			<div class="desktop_button" onclick="#">+<div class="skewblock"></div></div>
			<div class="desktop_button" onclick="#">-<div class="skewblock"></div></div>
		</div>
		
		<div id="mobile_button_container">
			<div id="mobile_plus" class="mobile_button">+</div>
			<div id="mobile_minus" class="mobile_button">-</div>
		</div>
</div>



</div>
<div class="pakket">

<p class="price">Prijs: €10,-</p>

<img draggable="false" class="pakket_image" src="assets/media/surprise_bag.jpg" alt="bag">

<div class="pakket_text">
		
		<span class="amount">Aantal: <input id="quantity" type="number" value="0" disabled></span>
		<span class="stock">Vooraad: 5</span>
		
		<div class="plus_minus_container">
			<div class="desktop_button" onclick="#">+<div class="skewblock"></div></div>
			<div class="desktop_button" onclick="#">-<div class="skewblock"></div></div>
		</div>
		
		<div id="mobile_button_container">
			<div id="mobile_plus" class="mobile_button">+</div>
			<div id="mobile_minus" class="mobile_button">-</div>
		</div>
</div>



	


</div> 
		
	</div>



<?php include "bakker_footer.php" ?>


<script src="assets/js/bakker.js"></script>
</body>
<script>
	function isIOS() {

if (/iPad|iPhone|iPod/.test(navigator.platform)) {

	return true;

} else {

	return navigator.maxTouchPoints &&

		navigator.maxTouchPoints > 2 &&

		/MacIntel/.test(navigator.platform);

}

}



function isIpadOS() {

return navigator.maxTouchPoints &&

	navigator.maxTouchPoints > 2 &&

	/MacIntel/.test(navigator.platform);

}

if(isIpadOS()){

window.location.replace("ripad.php");

}
</script>

</html>