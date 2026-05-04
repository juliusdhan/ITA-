<form action="process.php" method="post" onsubmit="return validation()">


    <label for="student_name">Student Name:</label><br>

    <input type="text" id="student_name" name="student_name"><br><br>


    <label for="email">Email:</label><br>

    <input type="email" id="email" name="email"><br><br>



    <label for="comments">Comments:</label><br>

    <textarea id="comments" name="comments" rows="4" cols="40"></textarea>

    <br><br>

    <label for="rating">Rating:</label>

    <select name="rating">
        <option value="">Rating</option>
        <option value="1">1 - Poor</option>
        <option value="2">2 - Fair</option>
        <option value="3">3 - Good</option>
        <option value="4">4 - Very Good</option>
        <option value="5">5 - Excellent</option>


    </select>
    <br><br>


    <input type="submit" value="Submit Feedback">


</form>

<script>
    function validation(){
        let u_name = document.getElementById('student_name').value.trim();
        let u_email = document.getElementById('email').value.trim();
        let u_comments = document.getElementById('comments').value.trim();
        let u_rating = document.getElementById('rating').value;

        if (u_name === "" || u_email === "" || u_comments === "" || u_rating === "") {
            alert("All fields are required.");
            return false;
        }

        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(u_email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        // Rating validation
        if (u_rating === "") {
            alert("Please select a rating.");
            return false;
        }

        return true;
    }


</script>

</body>
</html>
