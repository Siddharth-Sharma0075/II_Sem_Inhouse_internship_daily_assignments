<form action="registration.php" method="post" enctype="multipart/form-data">

<label>Full Name:</label>
<input type="text" name="fullName"><br><br>

<label>Father's Name:</label>
<input type="text" name="fathersName"><br><br>

<label>Mother's Name:</label>
<input type="text" name="mothersName"><br><br>

<label>Email:</label>
<input type="email" name="email"><br><br>

<label>Mobile No:</label>
<input type="tel" name="mobileNo"><br><br>

<label>Gender:</label>
<select name="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
</select><br><br>

<label>Date of Birth:</label>
<input type="date" name="dob"><br><br>

<label>Course:</label>
<select name="course">
    <option>B.Tech</option>
    <option>BCA</option>
    <option>B.Sc</option>
    <option>B.Com</option>
    <option>BA</option>
</select><br><br>

<label>Address:</label>
<textarea name="address"></textarea><br><br>

<label>Profile Image:</label>
<input type="file" name="myfile" accept=".jpg,.jpeg,.png,.gif,.webp"><br><br>

<input type="submit" value="Register">

</form>