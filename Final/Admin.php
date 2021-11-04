<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>

<h2>Admin Login</h2>

<!-- <?php

$servername = "localhost";
$username = "ADMIN";
$password = "ADMINPSWD";
$dbname = "RVS";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $conn->prepare("SELECT user_name, password, Q1, Q2 FROM ADMIN");
	$sth->execute();

	$result = $sth->fetch(PDO::FETCH_BOTH);

	$auser = $result[0];
	$apass = $result[1];
	$a1 = $result[2];
	$a2 = $result[3];

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?> -->

<!-- <form name="myForm" action="Admin2.php" onsubmit="return validateForm()" method="POST"> -->
<form name="myForm" action="Admin2.php" method="POST">
User Name: <input type="text" id="username" name="username" value="ADMIN">
<br>
Admin Password: <input type="password" id=password name="password" value="d8a4ae">
<br>
What Year Was Justin Park Founded:<input type="password" name="Q1" id="Q1" value="1197">
<br>
What Institution Did Justin Park Attend Univerisity:<input type="password" name="Q2" id="Q2" value="ACU">
<br>
<input type="submit" value="Submit">
</form>
<br>

<script>

// function validateForm() {
//  var x = document.forms["myForm"]["username"].value;
//  var y = document.forms["myForm"]["password"].value;
//  var l = document.forms["myForm"]["Q1"].value;
//  var m = document.forms["myForm"]["Q2"].value;
// var apass = "<?php echo $apass; ?>";
//  var apass = "<?php echo $apass; ?>";
//  var a1 = "<?php echo $a1; ?>";
//  var a2 = "<?php echo $a2; ?>";
//  if (x != "ADMIN" || y != apass || l != a1 || m != a2) {
//    alert("That is inncorrect");
//    return false;
//  }
// }
<button onclick="myFunction()">Forgot Password</button>

<p id="demo"></p>

<script>
function myFunction() {
	alert("Email Sent!");
	<?php
	// the message
	$msg = "A User Forgot The Admin Password. Go to this link to reset: 150.252.118.197/pswd_reset";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// send email
	mail("jwp15b","Admin Reset",$msg);
	?>

}


</script>

</body>
</html>
