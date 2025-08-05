<?php
function getDiscs()
{
    $discs_text = file_get_contents("discs.json");
    return json_decode($discs_text, true);
}
