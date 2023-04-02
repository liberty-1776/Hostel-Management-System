<?php
    include '../includes/dbconn.php';

    $sql = "SELECT regNo FROM grievance";
                $query = $mysqli->query($sql);
                echo "$query->num_rows";
?>