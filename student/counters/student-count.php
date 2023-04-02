<?php
    include '../includes/dbconn.php';

    $sql = "SELECT regNo FROM userregistration";
                $query = $mysqli->query($sql);
                echo "$query->num_rows";
?>