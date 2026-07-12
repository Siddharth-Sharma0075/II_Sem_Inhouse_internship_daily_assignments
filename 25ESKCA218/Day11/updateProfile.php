<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}

include("db_connect.php");
include("dashboardHeader.php");
include("dashboardVerticalContent.php");

$userId = $_SESSION['user_id'];

$query = "SELECT * FROM user WHERE id='$userId'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

$name = $user['name'];

if (isset($_POST['update'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $updateQuery = "UPDATE user SET name='$name' WHERE id='$userId'";

    if (mysqli_query($conn, $updateQuery)) {

        $_SESSION['user_name'] = $name;

        echo "<script>
                alert('Name Updated Successfully');
                window.location='dashboard.php';
              </script>";

    } else {
        echo "<script>alert('Update Failed');</script>";
    }
}
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">

            <h2>Update Profile</h2>

            <form method="post">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="<?php echo $name; ?>"
                           required>
                </div>

                <button type="submit"
                        name="update"
                        class="btn btn-primary">
                    Update Name
                </button>

            </form>

        </div>
    </div>
</div>

<?php
include("footer.php");
?>