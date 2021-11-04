<!DOCTYPE html>
<html>
<?php

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
	$u1 = $_POST["username"];
	$u2 = $_POST["password"];
	$hu2 = hash('sha256', $u3);
	$u3 = $_POST["Q1"];
	$hu3 = hash('sha256', $u3);
	$u4 = $_POST["Q2"];
	$hu4 = hash('sha256', $u4);
	// echo "$apass";
	// echo "<br>";
	// echo "$hu2";
	// echo "<br>";
	// echo "$hu3";
	// echo "<br>";
	// echo "$a1";
	// echo "$hu4";
	// echo "<br>";
	//if ($auser != 'ADMIN' or $apass != $hu2 or $a1 != $hu3 or $a2 != $hu3) {
	//	header ("location: Admin.php");
	//}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<body>

<h2>What Would You Like to Find?</h2>

<form action="Admin3.php" method="POST">
  User Name <input type="text" name="search" value='abc12a'><br>
  <input type="submit" value="USER SEARCH">
</form>
<br>
<form action="Admin4.php" method="POST">
  Top HITS (Terminal or Intrumental)<input type="text" name="search1" value='Freedom'><br>
  2nd HITS (Terminal or Intrumental)<input type="text" name="search2" value='Wisdom'><br>
  <input type="submit" value="TOP HITS SEARCH">
</form>