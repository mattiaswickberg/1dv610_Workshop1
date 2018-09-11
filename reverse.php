<html>
  <body>

<?php 
$originalText = $_POST["text"];
$reversedText = "";

for ($i = 1; $i <= strlen($originalText); $i++) {
  $reversedText .= $originalText[strlen($originalText) - $i];
}

?>

Your text is: <?php echo $reversedText; ?>

  </body>
</html> 