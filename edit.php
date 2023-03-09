<?php
require_once 'connect.php';

$id = $_GET['id'];
$querySelectById = "SELECT * FROM coffe WHERE id='$id'";
$result = $connect->query($querySelectById);
$row = $result->fetch_assoc();

$menu = $row['title'];
$description = $row['description'];
$image = $row['img'];
$price = $row['price'];
$category = $row['category'];
$rating = $row['rating'];
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="#">Coffe Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="menu.php">Home</a>
                    </li>
                </ul>
                <ul>
                    <li class="d-flex me-2">
                        <a class="nav-link" aria-current="page" href="">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Edit</h5>
                        <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="col-md-6">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" value="<?= $menu ?>" class="form-control" id="inputEmail4" required="true">

                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Image</label>
                                <input type="file" name="img" value="<?= $image ?>" class="form-control" required="true">
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Deskripsi</label>
                                <textarea name="description"  class="form-control" required="true" id="editor" value="<?= $description ?>"><?=$description ?></textarea>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Rating</label>
                                <input type="number" name="rating" required="true" class="form-control" value="<?= $rating ?>"><? $rating ?>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Category</label>
                                <input type="text" name="category" required="true" class="form-control" value="<?= $category ?>"><? $category ?>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Price</label>
                                <input type="number" name="price" required="true" class="form-control" value="<?= $price?>"><? $price ?>
                            </div>

                            <div class="col-12 d-flex justify-content-between">
                                <a href="list.php" class="btn btn-dark">Back</a>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $menu = $_POST['title'];
        $image = $_POST['img'];
        $description = $_POST['description'];
        $rating = $_POST['rating'];
        $category = $_POST['category'];
        $target_dir = "";
        $tmp = $_FILES["img"]["tmp_name"];
        $target_file = $target_dir . $_FILES["img"]["name"];
        move_uploaded_file($tmp, $target_file);
        $uploadOk = 1;
        $queryINSERT = "UPDATE coffe SET title='$menu', img='$target_file', description='$description', rating='$rating',   category='$category' 
                        WHERE id='$id'";

        if ($connect->query($queryINSERT)) {
            echo "<script> alert('Success'); window.location.href='list.php'; </script>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>