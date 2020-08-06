<?php

    include_once "includes/db.php";
    $id = $_POST['id'];
    $userName = $_POST['username'];
    $subjects = $_POST['subject'];
    $contents = $_POST['content'];
    $sql = "INSERT INTO users ('id','userName','content','subject') VALUES ('$id','$userName','$contents','$subjects');";
    mysqli_query($conn,$sql);
    header("Location:/PHP/includes/index.php?signup=success");