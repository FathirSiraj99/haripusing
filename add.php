<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> list </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
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
                        <a class="nav-link" aria-current="page" href="list.php">Admin</a>
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
                    <h5 class="card-title"> Form Coffe </h5>
                    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="inputEmail4" required="true">
                        </div>
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label">Image</label>
                            <input type="file" name="img" class="form-control" required="true">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" required="true" id="editor" placeholder="Deskripsi"><?=$description ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">category</label>
                            <input type="text" name="category" class="form-control" id="" required="true">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rating</label>
                            <input type="number" name="rating" class="form-control" id="" required="true">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">price</label>
                            <input type="number" name="price" class="form-control" id="" required="true">
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <a href="list.php" class="btn btn-dark">Back</a>
                            <button type="submit" name="submit" class="btn btn-primary" formnovalidate="formnovalidate">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $rating = $_POST['rating'];
        $price = $_POST['price'];

        $image_name = $_FILES['img']['name'];
        $image_tmp = $_FILES['img']['tmp_name'];

        $queryInsert = "INSERT INTO coffe(title,img,description,category,rating,price)
        VALUES('$title','$image_name','$description','$category','$rating','$price')";

        move_uploaded_file($image_tmp,''.$image_name);

        if($connect->query($queryInsert)){
            echo "<script>
                alert('Sukses');
                window.location.href='list.php';
                </script>";
        }
    }

?>




