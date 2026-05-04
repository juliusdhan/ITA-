<?php

$email = $_GET['email'] ?? "";

function clean($data){
    return htmlspecialchars($data);
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

if (!empty($email)) {
    echo "Searching feedback for <b>" . clean($email) . "</b>...<br><br>";
    echo "Feature not connected to database yet.";
} else {
    echo "No email provided.";
}

?>

</body>
</html>