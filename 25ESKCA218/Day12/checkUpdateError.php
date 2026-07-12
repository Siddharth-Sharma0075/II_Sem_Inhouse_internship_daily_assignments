<?php
session_start();

include("db_connect.php");

$error = "";

$newPassword = "";
$confirmPassword = "";
$oldPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newPassword = mysqli_real_escape_string($conn, $_POST["newPassword"]);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);
    $oldPassword = mysqli_real_escape_string($conn, $_POST["oldPassword"]);

    if ($newPassword == "" || $confirmPassword == "" || $oldPassword == "") {

        echo "<script>alert('All fields are required');</script>";

    } else {

        // Get current user
        $selectQuery = "SELECT * FROM user WHERE id='" . $_SESSION['user_id'] . "'";
        $result = mysqli_query($conn, $selectQuery);
        $user = mysqli_fetch_assoc($result);

        // Check Old Password
        if ($user && $user['password'] == $oldPassword) {

            // Check New & Confirm Password
            if ($newPassword == $confirmPassword) {

                // Update Password
                $updateQuery = "UPDATE user
                                SET password='$newPassword'
                                WHERE id='" . $_SESSION['user_id'] . "'";

                $updateResult = mysqli_query($conn, $updateQuery);

                if ($updateResult) {

                    echo "<script>
                            alert('Password Updated Successfully');
                            window.location='dashboard.php';
                          </script>";
                    exit();

                } else {

                    echo "<script>alert('Password Update Failed');</script>";
                }

            } else {

                echo "<script>alert('New Password and Confirm Password do not match');</script>";

            }

        } else {

            echo "<script>alert('Old Password is Incorrect');</script>";

        }
    }
}
?>