<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
  <body>

<?php
$originalText = $_POST["text"];
$reversedText = "Your text is: ";

if(strlen($originalText) == 0) {
  $reversedText = "No text enterered!";
}

for ($i = 1; $i <= strlen($originalText); $i++) {
  $reversedText .= $originalText[strlen($originalText) - $i];
}

?>

<?php echo $reversedText; ?>

  </body>
</html> 