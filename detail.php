<?php 
    require_once 'connect.php';
    $id = $_GET['id'];
    $row = $connect->query("SELECT * FROM coffe WHERE id='$id'");
    $row = mysqli_fetch_assoc($row);
    $menu = $row ['title'];
    $image = $row ['img'];
    $deksripsi = $row ['description'];
    $price = $row ['price'];
    $category = $row ['category'];
    $rating = $row ['rating'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row d-flex justify-content-around mt-5">
            <div class="col-md-4">
               <img src="<?=$image?>" style="width:350px;height:230px;">
            </div>
            <div class="col-md-6">
                <h4 class="text-center"><?=$menu?></h4>
                <h5>Deskripsi:</h5>    
                <p class="text-justify">
                <?=$deksripsi?>
                   
                </p>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-md-6 bg-light">
                            <h5 class="text-success">Rating</h5>
                           <?php 
                                for ($rate = 0; $rate <5; $rate++){
                                    if($rate<$rating){
                                        echo '<span class="fa fa-star text-warning"></span>';
                                    }else{
                                        echo '<span class="fa fa-star"></span>';
                                    }
                                }
                            ?>
                        </div>
                        <div class="col-md-6 bg-light">
                            <h5 class="text-success">Price</h5>
                            <h3><?=$price?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>