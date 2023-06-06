<?php
$to = "dataled@utdt.edu";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['userName'];
$email = $_POST['userEmail'];
$comments = $_POST['userComments'];


$message = "
<html>
<head>
<title>Contact Form</title>
</head>
<body>
<h1>Contact information from the website</h1>
<p>User name: $name </p> 
<p>Email: $email </p> 
<p>Comments: $comments </p> 
<p>Age from the User: $age </p> 

</body>
</html>";

 echo '<h1>Thanks</h1>
<script>
setTimeout( function() { window.location.href = "https://sabrinaejemplo.000webhostapp.com/"; }, 5000 );
 </script>';

 exit;
mail($to, $subject, $message, $headers);

?>
