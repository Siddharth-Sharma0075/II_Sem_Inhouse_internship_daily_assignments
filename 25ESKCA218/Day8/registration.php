<?php
include("db.php");

$imageName = "";

$folder = "uploads/";

if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Image Upload
    if (isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] == 0) {

        $allowedTypes = ["jpg", "jpeg", "png", "gif", "webp"];
        $extension = strtolower(pathinfo($_FILES["myfile"]["name"], PATHINFO_EXTENSION));

        if (in_array($extension, $allowedTypes)) {

            $imageName = time() . "_" . rand(1000,9999) . "." . $extension;
            $targetFile = $folder . $imageName;

            move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile);
        }
    }

    // Form Data
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $fathersName = mysqli_real_escape_string($conn, $_POST['fathersName']);
    $mothersName = mysqli_real_escape_string($conn, $_POST['mothersName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobileNo = mysqli_real_escape_string($conn, $_POST['mobileNo']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $sql = "INSERT INTO students
    (fullName, fathersName, mothersName, email, mobileNo, gender, dob, course, address, image)
    VALUES
    ('$fullName','$fathersName','$mothersName','$email','$mobileNo','$gender','$dob','$course','$address','$imageName')";

    if (mysqli_query($conn, $sql)) {

    echo "<h2 style='color:green;'>Registration Successful!</h2>";

    echo "<h3>Student Details</h3>";

    echo "Full Name : " . $fullName . "<br>";
    echo "Father's Name : " . $fathersName . "<br>";
    echo "Mother's Name : " . $mothersName . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Mobile No : " . $mobileNo . "<br>";
    echo "Gender : " . $gender . "<br>";
    echo "Date of Birth : " . $dob . "<br>";
    echo "Course : " . $course . "<br>";
    echo "Address : " . $address . "<br><br>";

    if ($imageName != "") {
        echo "<img src='uploads/$imageName' width='200' height='200'>";
    }

} else {
    echo "Error : " . mysqli_error($conn);
}
}
?>