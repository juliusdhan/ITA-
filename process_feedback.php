<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
$student_name = $_POST['student_name'];
$email = $_POST['email'];
$course = $_POST['course'];
$type = $_POST['feedback_type'];
$comments = $_POST['comments'];
 
if (empty($student_name) || empty($email) || empty($course) || empty($type) || empty($comments)) {
    echo "All fields are required.";
    exit();
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Feedback Submitted</title>
</head>
 
<body>
 
<h2>Feedback Submitted Successfully</h2>
 
<p><strong>Student Name:</strong> <?php echo $student_name; ?></p>
 
<p><strong>Email:</strong> <?php echo $email; ?></p>
 
<p><strong>Course:</strong> <?php echo $course; ?></p>
 
<p><strong>Feedback Type:</strong> <?php echo $type; ?></p>
 
<p><strong>Comments:</strong> <?php echo $comments; ?></p>
 
<h3>Thank you, <?php echo $student_name; ?>, for your feedback!</h3>
 
</body>
</html>
 
<?php
}
?>