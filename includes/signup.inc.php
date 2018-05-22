<!-- 
Outsize.net
Garrett Lew
May 22 2018
 -->

<?php
    include_once 'dbh.inc.php';

    $first = $_POST['name'];
    $email = $_POST['email'];


    $sql = "INSERT INTO emails_list (first_names, emails, date)
                VALUES ('$first', '$email', date(Y m d h:i:s));";

    mysql_query($conn, $sql);

    header("Location: ../index.php?signup=success");

    


