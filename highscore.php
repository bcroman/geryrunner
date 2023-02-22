<html>

<body>
<h1>high score</h1>
<?php

include("dbconnect.php");

$sql = "SELECT userNum, score FROM highscore ORDER BY score DESC LIMIT 10";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "User ID: " . $row["userNum"]. " - Score: " . $row["score"]. "<br>";
  }
} else {
  echo "0 results";
}
$con->close();
?>

</body>

</html>