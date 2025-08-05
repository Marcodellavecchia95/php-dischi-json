<?php
require_once "./functions.php";
$discs = getDiscs();
var_dump($discs);

?>

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
        <h2 class="text-center m-4">Aggiungi un Album</h2>
        <form class="mb-3" method="post" action="./server.php">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="artist" class="form-label">Artista</label>
                <input type="text" class="form-control" id="artist" name="artist">
            </div>
            <div class="mb-3">
                <label for="cover" class="form-label">Cover</label>
                <input type="text" class="form-control" id="cover" name="cover">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Anno</label>
                <input type="text" class="form-control" id="year" name="year">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genere</label>
                <input type="text" class="form-control" id="genre" name="genre">
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>