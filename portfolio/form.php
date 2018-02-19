
<!DOCTYPE HTML>

<html>
<head>
    <title></title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type="text/css" href=''>
     <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php 

$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];
    
$header = "From: " .$email. '\r\n';
$header .= "X-Mailer: PHP/ " .phpversion(). '\r\n';
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type : text/plain";

$content = 'Message sent by: ' .$name .',\r\n';
$content .= 'His/Her e-mail is: ' .$email .' \r\n';
$content .= 'Message: ' .$message .' \r\n';
$content .= 'Sent on ' .date('d/m/Y', time());
    

//echo '<H1>User Info</H1>';
//echo "User's name: " .$name .'<br/>'; 
//echo "User's email: " .$email .'<br/>'; 
//echo "User's phone: " .$phone .'<br/>'; 
//echo "User's message: " .$message .'<br/>'; 

$to = 'queel93@gmail.com';
$affair = 'Message from my Portfolio';
    
mail($to, $affair, $content, $header);

    header('Location: index.html');
?>
</body>

</html>

