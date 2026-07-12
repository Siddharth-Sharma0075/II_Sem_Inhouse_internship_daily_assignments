<form action="registration.php" method="post" enctype="multipart/form-data">

<label>Full Name:</label>
<input type="text" name="fullName" required><br><br>

<label>Father's Name:</label>
<input type="text" name="fathersName" required><br><br>

<label>Mother's Name:</label>
<input type="text" name="mothersName" required><br><br>

<label>Email:</label>
<input type="email" name="email" required><br><br>

<label>Mobile No:</label>
<input type="tel" name="mobileNo" required><br><br>

<label>Gender:</label>
<select name="gender" required>
    <option value="">Select</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
</select><br><br>

<label>Date of Birth:</label>
<input type="date" name="dob" required><br><br>

<label>Course:</label>
<select name="course" required>
    <option>B.Tech</option>
    <option>BCA</option>
    <option>B.Sc</option>
    <option>B.Com</option>
    <option>BA</option>
</select><br><br>

<label>Address:</label>
<textarea name="address" required></textarea><br><br>

<label>Profile Image:</label>
<input type="file" name="myfile" accept=".jpg,.jpeg,.png,.gif,.webp"><br><br>

<input type="submit" value="Register">

</form>