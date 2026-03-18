<?php
 
$email = "";
 
if(isset($_GET['email'])){
    $email = $_GET['email'];
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>View Feedback</title>
</head>
 
<body>
 
<h2>Feedback Details</h2>
 
<?php
 
if($email != ""){
    echo "Feedback details for <b>$email</b> are not available at the moment. Please contact admin.";
}
else{
    echo "No email provided.";
}
 
?>
 
</body>
</html>