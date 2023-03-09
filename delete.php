<?php 
    require_once "connect.php";
    $id = $_GET['id'];
    $queryDelete = "DELETE FROM coffe WHERE id='$id'";

    if($connect->query($queryDelete)){
        echo "<script>
        alert('Sukses Delete');
        window.location.href='list.php';
        </script>";
    }

?>