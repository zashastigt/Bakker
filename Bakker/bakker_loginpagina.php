<?php include "bakker_db.php" ?>
<style>

<?php include "assets\css\login.css" ?>

</style>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="\assets\css\login.css">
	<script src="assets/js/jquery-3.4.1.min.js"></script>

</head>
<body>
  


 
<div id="container">
<form method="post">
  <div id="tableContainer">
  <img id="stripe" src="assets\media\rijnland.svg"></img>
        <table class="loginTable">
            <tr>
               <th><div id="logText">Log in</div></th>
                
            </tr>
            <hr>
            <tr>
                <td>
                    
                  <input  type="text" name="username" placeholder="Gebruikers naam" id="username" value="" autocomplete="off" />  
                </td>
            </tr>
            <tr>
                <td>
                  
                    <input type="password" name="password" placeholder="Wachtwoord" id="password" value="" autocomplete="off" />
                  </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submitBtnLogin" id="submitBtnLogin" value="Login" />
                    <span class="loginMsg"><?php echo @$msg;?></span>
                </td>
            </tr>
        </table>
  </div>
</form>
<a href="bakker_landingspagina.php" id="cancel">Annuleer</a>
</div>  
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bakker.js"></script>
</body>
</html>
<?php $msg = ""; 
  if(isset($_POST['submitBtnLogin'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    // $username_admin = $_POST['username'];
    // $password_admin = $_POST['password'];

    if($username != "" && $password != "") {
      try {
        $query = "select * FROM users WHERE username=$username and password=$password";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam('username', $username, PDO::PARAM_STR);
        $stmt->bindValue('password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $row   = $stmt->fetch(PDO::FETCH_ASSOC);
        if($count == 1 && !empty($row)) {
          header("location: bakker_adminpagina.php");
        } else {
          $msg = "Invalid username and password!";
        }
      } catch (PDOException $e) {
        echo "Error : ".$e->getMessage();
      }
    } else {
      $msg = "Both fields are required!";
    }
  }
  ?>