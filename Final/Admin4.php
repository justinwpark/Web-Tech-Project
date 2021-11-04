<!DOCTYPE html>
<html>
<body>

<h2>Query Results</h2>

<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>USER Name</th><th>Terminal 1</th><th>Terminal 2</th><th>Terminal 3</th><th>Terminal 4</th><th>Terminal 5</th><th>Terminal 6</th><th>Terminal 7</th><th>Terminal 8</th><th>Terminal 9</th><th>Terminal 10</th><th>Terminal 11</th><th>Terminal 12</th><th>Terminal 13</th><th>Terminal 14</th><th>Terminal 15</th><th>Terminal 16</th><th>Terminal 17</th><th>Terminal 18</th><th>Instrumental 1</th><th>Instrumental 2</th><th>Instrumental 3</th><th>Instrumental 4</th><th>Instrumental 5</th><th>Instrumental 6</th><th>Instrumental 7</th><th>Instrumental 8</th><th>Instrumental 9</th><th>Instrumental 10</th><th>Instrumental 11</th><th>Instrumental 12</th><th>Instrumental 13</th><th>Instrumental 14</th><th>Instrumental 15</th><th>Instrumental 16</th><th>Instrumental 17</th><th>Instrumental 18</th><th>Time Stamp</th></tr>";

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
$search1 = $_POST["search1"];
$search2 = $_POST["search2"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT TERMINAL.ACU_USERNAME, TERMINAL.T1, TERMINAL.T2, TERMINAL.T3, TERMINAL.T4,TERMINAL.T5, TERMINAL.T6, TERMINAL.T7, TERMINAL.T8, TERMINAL.T1, TERMINAL.T9, TERMINAL.T10, TERMINAL.T11,TERMINAL.T12, TERMINAL.T13, TERMINAL.T14, TERMINAL.T15, TERMINAL.T16, TERMINAL.T17, TERMINAL.T18, INSTRUMENTAL.I1, INSTRUMENTAL.I2, INSTRUMENTAL.I3, INSTRUMENTAL.I4, INSTRUMENTAL.I5, INSTRUMENTAL.I6, INSTRUMENTAL.I7, INSTRUMENTAL.I8, INSTRUMENTAL.I9, INSTRUMENTAL.I10, INSTRUMENTAL.I11, INSTRUMENTAL.I12, INSTRUMENTAL.I13, INSTRUMENTAL.I14, INSTRUMENTAL.I15, INSTRUMENTAL.I16, INSTRUMENTAL.I17, INSTRUMENTAL.I18, INSTRUMENTAL.reg_date FROM TERMINAL, INSTRUMENTAL WHERE TERMINAL.T1='$search1' OR TERMINAL.T2='$search1' OR TERMINAL.T1='$search2' OR TERMINAL.T2='$search2' OR INSTRUMENTAL.I1='$search1' OR INSTRUMENTAL.I2='$search1' OR INSTRUMENTAL.I1='$search2' OR INSTRUMENTAL.I2='$search2'"); 
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
