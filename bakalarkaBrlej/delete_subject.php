<?php
include("includes/header.php");

/* Delete produktu podla id*/
    $id = $_GET["id"];
    mysqli_query($con, "DELETE FROM questions where id=$id");
    header("Location: /bakalarkaBrlej/edit_subject.php");
?>
