<!DOCTYPE html>
<html>
<head>
<title>Student Feedback Form</title>
</head>
 
<body>
 
<h2>Student Feedback Form</h2>
 
<form action="process_feedback.php" method="post">
 
<label>Student Name:</label><br>
<input type="text" name="student_name" required><br><br>
 
<label>Email:</label><br>
<input type="email" name="email" required><br><br>
 
<label>Course Name:</label><br>
<select name="course" required>
<option value="">Select Course</option>
<option value="BCA">BCA</option>
<option value="MCA">MCA</option>
<option value="B.Tech">B.Tech</option>
<option value="MBA">MBA</option>
</select>
<br><br>
 
<label>Feedback Type:</label><br>
 
<input type="radio" name="feedback_type" value="Positive" required> Positive
<br>
 
<input type="radio" name="feedback_type" value="Neutral"> Neutral
<br>
 
<input type="radio" name="feedback_type" value="Negative"> Negative
 
<br><br>
 
<label>Comments:</label><br>
<textarea name="comments" rows="4" cols="40" required></textarea>
 
<br><br>
 
<input type="submit" value="Submit Feedback">
 
</form>
 
</body>
</html>