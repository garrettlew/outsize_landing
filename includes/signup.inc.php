<!-- 
Outsize.net
Garrett Lew
May 22 2018
 -->

<?php
    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);


    $sql = "INSERT INTO emails_list (first_names, emails) VALUES (?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 'ss', $first, $email);
        mysqli_stmt_execute($stmt);
    }

    header("Location: ../default.html?signup=success");

    


