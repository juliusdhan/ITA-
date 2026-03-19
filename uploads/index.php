<form action="process_feedback.php" method="post" enctype="multipart/form-data">

    <label>Student Name:</label><br>
    <input type="text" name="student_name"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Course Name:</label><br>
    <select name="course">
        <option value="">Select Course</option>
        <option value="BCA">BCA</option>
        <option value="MCA">MCA</option>
        <option value="B.Tech">B.Tech</option>
        <option value="MBA">MBA</option>
    </select>
    <br><br>

    <label>Feedback Type:</label><br>
    <input type="radio" name="feedback_type" value="Positive"> Positive<br>
    <input type="radio" name="feedback_type" value="Neutral"> Neutral<br>
    <input type="radio" name="feedback_type" value="Negative"> Negative

    <br><br>

    <label>Comments:</label><br>
    <textarea name="comments" rows="4" cols="40"></textarea>

    <br><br>

    <label>Upload Image:</label><br>
    <input type="file" name="photo">

    <br><br>

    <input type="submit" value="Submit Feedback">

</form>