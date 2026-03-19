<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function clean_input($data) {
        return htmlspecialchars(trim($data));
    }

    $student_name = clean_input($_POST['student_name'] ?? '');
    $email = clean_input($_POST['email'] ?? '');
    $course = clean_input($_POST['course'] ?? '');
    $type = clean_input($_POST['feedback_type'] ?? '');
    $comments = clean_input($_POST['comments'] ?? '');

    // Validation
    if (empty($student_name) || empty($email) || empty($course) || empty($type) || empty($comments)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    $uploadDir = "uploads/";
    $uploadedFile = "";

    if (!empty($_FILES["photo"]["name"])) {

        $fileName = basename($_FILES["photo"]["name"]);
        $targetFile = $uploadDir . time() . "_" . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedTypes = ["jpg", "jpeg", "png", "gif"];

        if (!in_array($fileType, $allowedTypes)) {
            die("Only JPG, JPEG, PNG & GIF files are allowed.");
        }

        if ($_FILES["photo"]["size"] > 2 * 1024 * 1024) {
            die("File size must be less than 2MB.");
        }

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            $uploadedFile = $targetFile;
        } else {
            die("Error uploading file.");
        }
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
<p><strong>Course:</strong> <?= $course; ?></p>
<p><strong>Feedback Type:</strong> <?= $type; ?></p>
<p><strong>Comments:</strong> <?= $comments; ?></p>

<?php if ($uploadedFile != ""): ?>
    <p><strong>Uploaded Image:</strong></p>
    <img src="<?= $uploadedFile; ?>" width="200">
<?php endif; ?>

<h3>Thank you, <?= $student_name; ?>!</h3>

</body>
</html>

<?php
}
?>