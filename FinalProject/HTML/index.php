<html>
<body>
<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = "Newsletter";
$mailFrom = $_POST['mail'];
$age = $_POST['age'];
$address = $_POST['address'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$frequency = $_POST['frequency'];
$message = $_POST['message'];

$mailTo = "tbeheler1@gmail.com";
$headers = "From: ".$mailFrom;
$txt ="You have received the following information from ".$name.".\n\n
Email: ".$mailFrom."\n
Age: ".$age."\n
Your address is: ".$address."\n
You visit our library ".$frequency."\n
Comments: ".$message."\n";
mail($mailTo, $subject, $txt, $headers);
header("Location: index2.html");
}

?>
</body>
</html>
