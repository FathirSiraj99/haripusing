<?php
require_once 'connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="list.php">Admin</a>
                    </li>
                </ul>
                <ul>
                    <li class="d-flex me-2">
                        <a class="nav-link" aria-current="page" href="#">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row d-flex justify-content-between mt-4">

            <?php
            $result = $connect->query("SELECT * FROM coffe");
            foreach ($result as $r) {
            ?>

                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $r['img'] ?>" style="width:355px;height:220px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $r['title'] ?></h5>
                            <p class="card-text">
                                <?= $r['description'] ?>
                            </p>
                            <a href="detail.php?id=<?= $r['id'] ?>" class="btn btn-outline-dark">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>