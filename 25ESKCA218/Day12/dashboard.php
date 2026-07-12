<?php
session_start();

if(!isset ($_SESSION['user_name'])){
    header("Location: login.php");
    exit();
}


include ("dashboardHeader.php");
include ("dashboardVerticalContent.php");

"Welcome, ". $_SESSION['user_name']. "!";

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
</div>
<div class="col-md-11">
    <h2> <?php echo "Welcome, ". $_SESSION['user_name']. "!";
    ?>
    </h2>
</div>
</div>
</div>
<?php
include("footer.php");
include("dashboardFooter.php");
?>