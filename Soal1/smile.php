<?php 

    $data = [

        "word1"=>"Hari Kamis,09 Maret 2023",
        "word2"=>"uts praktik rpl soal b",
        "word3"=>"2022-2023",
        "word4"=>"Happy Code With Smilee",

    
    ];

    $word = explode("," ,$data['word1']);
    $word1 = explode(",09" ,$data['word1']);
    $tgl = $word[1];
    $hari = $word1[0];

    $word2 = strtoupper($data['word2']);

    $word3 = explode("20",$data['word3']);
    $word3 = explode("-",$data['word3']);
    
    $tahun1 = substr($data['word3'],2,3);
    $tahun2 = substr($data['word3'],7,2);
    
  
    
    $word4 = strrev($data['word4']);
    $chars = str_split($word4);

    


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMILE WITH CODING </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-lg-8 bg-info">
                 <p class="float-end"><?=$tgl?></p>
                 <p class="float-start"><?=$hari?></p>
            </div>
            <div class="col-lg-8 bg-success">
               <h1 class="text-center"><?=$word2?></h1>
            </div>
            <div class="col-lg-8 bg-warning">
               <p class="text-center">Tahun : <?=$tahun1?><?=$tahun2?></p>
            </div>
            <div class="col-lg-8 bg-dark">
               <p class="float-start text-light">
                <?php 

                for ($i=count($chars)-1; $i > 0 ; $i--) { 
                    for ($x=0; $x <$i ; $x++) { 
                       echo "&nbsp;";
                    }

                    echo $chars[$i]."<br>";
                }
                
                ?>
               </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>