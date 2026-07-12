<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST['fullName'];
    $fathersName = $_POST['fathersName'];
    $mothersName = $_POST['mothersName'];
    $email = $_POST['email'];
    $mobileNo = $_POST['mobileNo'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students
    (fullName, fathersName, mothersName, email, mobileNo, gender, dob, course, address)
    VALUES
    ('$fullName', '$fathersName', '$mothersName', '$email', '$mobileNo', '$gender', '$dob', '$course', '$address')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Registration Successful!</h2>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>