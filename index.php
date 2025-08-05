<?php
require_once "./functions.php";
$discs = getDiscs() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>php-dischi-json</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center m-3">Dischi</h1>
        <div class="row g-3">
            <?php foreach ($discs as $disc) {

            ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src=<?php echo $disc["cover"] ?> class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $disc["title"] ?></h5>
                            <p class="card-text"><b>Artist: </b> <?php echo $disc["artist"] ?>
                                <br>
                                <b>Year: </b> <?php echo $disc["year"] ?> <br>
                                <b>Genre: </b> <?php echo $disc["genre"] ?>

                            </p>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>