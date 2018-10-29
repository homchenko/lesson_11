<?php

include 'db.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div="col-sm-12">
        <h1><a href="create_post.php">Create post</a></h1>
        <?php
        $query = "SELECT * FROM posts";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('Query FAILED' . mysqli_error());
        } ?>

        <table class="table table-bordered table-striped">
            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Short</td>
                <td>Content</td>
                <td>Управление</td>
            </tr>
        <?php

        while($row = mysqli_fetch_assoc($result)) {

            ?>

            <tr>
                <td><?= $row['id'];?></td>
                <td><?= $row['name'];?></td>
                <td><?= $row['short_desc'];?></td>
                <td><?= $row['content'];?></td>
                <td>
<a class="btn btn-success" href="update_post.php?post_id=<?= $row['id'];?>">Edit</a>
<a class="btn btn-danger" href="delete_post.php?post_id=<?= $row['id'];?>">Delete</a>
                </td>
            </tr>
            <?

        } ?>
        </table>
    </div>
    </div>
</div>
</body>
</html>