# PersonalitySurvey (DEV)

PersonalitySurvey is a form for collecting personal information from participants. Each participation is associated with a new or already used ID. This allows for different views.

## Installation

Download all files and adjust the config.php according to your wishes.

```
<?php
$host = "localhost";
$userName = "db-user1";
$password = "db-password1";
$dbName = "db-name1";
$baseurl = "https://example.net/personality-survey/";
$tablename = "personality_results";
$basetitle = "Personality Survey";
?>
```

The done.php file can be easily modified to create the necessary database table.

```
<?php
foreach($_POST['Field'] AS $question => $answer) {
	$sql="ALTER TABLE $tablename ADD " . $question . " LONGTEXT NOT NULL";
	$conn->query($sql);
}
?>
```
