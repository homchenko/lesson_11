<?php

include 'db.php';

$id = $_GET['post_id'];

    $sql = "DELETE FROM posts WHERE id = $id";
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die('Запрос не удался');
    }
