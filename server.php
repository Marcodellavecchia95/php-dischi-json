<?php
if ($_POST["title"] && $_POST["artist"] && $_POST["cover"] && $_POST["year"] && $_POST["genre"]) {
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $cover = $_POST["cover"];
    $year = $_POST["year"];
    $genre = $_POST["genre"];
}
$discs_json = file_get_contents("./discs.json");
$discs = json_decode($discs_json, true);

$discs[] = [
    "title" => $title,
    "artist" => $artist,
    "cover" => $cover,
    "year" => $year,
    "genre" => $genre,

];

$discs_json = json_encode($discs);

file_put_contents("./discs.json", $discs_json);

header("location: ./index.php");
