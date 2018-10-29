<?php

include 'db.php';

$id = $_GET['post_id'];

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $short = $_POST['short'];
    $content = $_POST['content'];

    $sql = "UPDATE posts SET name = '$name', short_desc = '$short', content='$content' WHERE id = $id";

    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die('Запрос не удался');
    }

}

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
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Short description</label>
                    <input type="text" name="short" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">content</label>
                    <input type="text" name="content" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
