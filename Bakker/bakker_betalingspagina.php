<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/bakker_payment.css">
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<title>Bakker</title>
</head>

<body>

<?//php include "bakker_db.php" ?>

<?php include "bakker_header.php" ?>

<div id="paymentBox">

<!-- <div id="fotoFrame"> -->
<!-- <img class="bags" id="bag1"src="assets\media\surprise_bag.jpg" alt="Image could not be loaded">



<img class="bags" id="bag2" src="assets\media\surprise_bag.jpg" alt="Image cound not be loaded">



<img class="bags" id="bag3" src="assets\media\surprise_bag.jpg" alt="Image cound not be loaded"> -->
<!-- </div> -->
    <div id="tableContainer">
    <table>
        <tr>
            <th>Paketten </th>
            <th>Voorraad </th>
            <th>Aantal </th>
            <th>Prijs p/s</th>
        </tr>
        <tr>
            <td>Pakket 1</td>
            <td>5</td>
            <td>0</td>
            <td>€5.-</td>
        </tr>
        <tr>
            <td>Pakket 2</td>
            <td>5</td>
            <td>0</td>
            <td>€7.50</td>
        </tr>
        <tr>
            <td>Pakket 3</td>
            <td>5</td>
            <td>0</td>
            <td>€10.-</td>
        </tr>
    
    </table>
    <div id="totalPrice"><p id="textAmount">Totaal prijs:</p> <span id="euro">€</span>
        <div id="verandermaar">$$</div>

    </div>
</div>
<div id="formContainer">
    <form>
        <p id="gegevens">Uw gegevens</p>
            
    <!-- <label for="email"><b class="labels">email</b></label> -->
    <br>
    <input class="borders" type="email" placeholder="email adres" name="email" >
    
    <!-- <label for="name"><b class="labels">Voornaam</b></label> -->
    <br>
    <input  class="borders"type="text" placeholder="voornaam" name="surname" minlength="3" >
    <br>
    <!-- <label for="lastname"><b class="labels">Achternaam</b></label> -->
    
    <input class="borders" type="text" placeholder="achternaam" name="lastname" minlength="3" >
    <br>
    <!-- <label for="phonenumber"><b class="labels">Telefoonnummer<br></b></label> -->
    <input class="borders" type="tel" id="patsnummer" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" placeholder="Telefoonnummer" name="phonenumber" required>
    </form>
        <div id="paymentContainer">
            <p class="paymentText">Ga verder naar betaling</p>
            <button class="button" ><span id="pay_button">Betaal</span></button>
        </div>
</div>



</div>
<?php include "bakker_footer.php" ?>


<script src="assets/js/bakker.js"></script>
</body>

</html>