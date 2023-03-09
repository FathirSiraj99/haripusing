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
                        <a class="nav-link navbar-dark" aria-current="page" href="#">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> No </th>
                        <th scope="col"> title </th>
                        <th scope="col"> image </th>
                        <th scope="col"> description </th>
                        <th scope="col"> rating </th>
                        <th scope="col"> kategori </th>
                        <th scope="col"> Peice </th>
                        <th scope="col" colspan="3"> Action </th>
                    </tr>
                </thead>

                <tbody>

                    <?php 
                             $querySelect = "SELECT * FROM coffe";
                             $result = $connect->query($querySelect);
                             if($result->num_rows>0):
                                 while($row = $result->fetch_assoc()):
                    ?>

                    <tr>
                    <td><?=$row['id'] ?></td>
                        <td><?=$row['title'] ?></td>
                        <td><img src="<?=$row['img'] ?>" width="355px" height="200px"/></td>
                        <td><?=$row['description'] ?></td>
                        <td><?=$row['rating'] ?></td>
                        <td><?=$row['category'] ?></td>
                        <td><?=$row['price'] ?></td>
                        
                        <td>
                            <a href="edit.php?id=<?=$row['id'] ?>" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?=$row['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>

                    <?php 
                        endwhile;
                        endif;
                    ?>

                </tbody>
            </table>
 
            <a href="add.php" class="btn btn-dark mt-4">Add</a>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>