<?php
    include '../includes/dbconn.php';

    $sql = "SELECT regNo FROM registration";
                $query = $mysqli->query($sql);
                echo "$query->num_rows";
?>