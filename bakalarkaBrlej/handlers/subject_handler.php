<?php
require '../includes/connection.php';

if($userRole > 1) {
    header("Location: /bakalarkaBrlej/homepage.php");
    exit();
}

if(isset($_POST['addSubjectButton'])) {
    $userLoggedIn = $_POST['userLoggedIn'];

    mysqli_query($con, "INSERT INTO subjects values(NULL,'$_POST[addSubject]', '$userLoggedIn')");
}
header("Location: /bakalarkaBrlej/homepage.php");
?>
