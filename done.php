<?php
require 'config.php';

$ansarray = $_POST['Field'];
if(empty($ansarray)) {
   header("Location: $baseurl");
   die();
}
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection

$questarray = array_keys($ansarray);
$answers = "'" . implode("','", $ansarray) . "'";
$questions = implode(",", $questarray);

$sql="INSERT INTO $tablename ($questions) VALUES ($answers)";
//foreach($_POST['Field'] AS $question => $answer) {
//	$sql="ALTER TABLE $tablename ADD " . $question . " LONGTEXT NOT NULL";
//	$conn->query($sql);
//}
?>
<html>
<title><?php echo $basetitle; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<body>
<div id="regForm">
<div class="tab" style="display: block;">
<h3>Many thanks for your submission!</h3>
<?php
$_POST['Field'];
$sharetext = urlencode("Hi! Do you have a few minutes to fill out this survey? $baseurl");
?>
	<p>Click <a href="https://wa.me/?text=<?php echo $sharetext; ?>">here</a> to ask your friends to help.</p>
<small style="display: none;">
<?php if ($conn->query($sql) === TRUE)
{
echo "Sent successfully.";
} else {
die('Error while sending the data [' . $conn->error . ']');
}
?>
<br />
<br />
<?php
echo $questions;
// Hidden for debug
?>
<br />
<?php echo $answers; ?>
</small>
</div>
</div>
</body>
</html>