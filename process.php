<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function clean_input($data) {
        return htmlspecialchars(trim($data));
    }

    $student_name = clean_input($_POST['student_name'] ?? '');
    $email = clean_input($_POST['email'] ?? '');
    $comments = clean_input($_POST['comments'] ?? '');
    $rating = clean_input($_POST['rating'] ?? '');

   
    if (empty($student_name) || empty($email) || empty($comments) || empty($rating)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Submitted</title>
</head>
<body>

<h2>Feedback Submitted Successfully</h2>

<p><strong>Student Name:</strong> <?= $student_name; ?></p>
<p><strong>Email:</strong> <?= $email; ?></p>
<p><strong>Comments:</strong> <?= $comments; ?></p>
<p><strong>Rating:</strong> <?= $rating; ?></p>



<h3>Thank you, <?= $student_name; ?>!</h3>

</body>
</html>

<?php
}
?>
