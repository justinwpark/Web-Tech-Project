<!DOCTYPE html>
<html>
<body>

<h2>Query Results</h2>

<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>USER Name</th><th>Terminal 1</th><th>Terminal 2</th><th>Instrumental 1</th><th>Instrumental 2</th><th>Time Stamp</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "jwp15b";
$password = "IT225pswd!";
$dbname = "RVS";
$search = $_POST["search"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT TERMINAL.ACU_USERNAME, TERMINAL.T1, TERMINAL.T2, INSTRUMENTAL.I1, INSTRUMENTAL.I2, INSTRUMENTAL.reg_date FROM TERMINAL, INSTRUMENTAL WHERE TERMINAL.ACU_USERNAME='$search'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>


<button onclick="myFunction()">Email Results to Admin</button>

<p id="demo"></p>

<script>
function myFunction() {
  alert("Email Sent!");
  <?php
  // the message
  $msg = "Admin Results";

  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,70);

  // send email
  mail("jwp15b","Admin Reset",$msg);
  ?>

}
</script>

<button onclick="myFunction()">Email Results to User</button>

<p id="demo"></p>

<script>
function myFunction() {
  alert("Email Sent!");
  <?php
  // the message
  $msg = "User's Results";

  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,70);

  // send email
  mail("jwp15b","Admin Reset",$msg);
  ?>

}

</script>
</body>
</html>
