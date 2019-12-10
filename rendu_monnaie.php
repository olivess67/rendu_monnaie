<?php
function renduMonnai($total)
{
    $totaltmp = $total;
    for ($i = 0; $total >= 40>; $i++) {
        $total = $total - 40;
    }
    if ($i > 0) {
        echo $i . " billets de 40 ont été rendu <br>";
    }
    for ($i = 0; $total >= 20; $i++) {
        $total = $total - 20;
    }
    if ($i > 0) {
        echo $i . " billets de 20 ont été rendu <br>";
    }
    for ($i = 0; $total >= 10; $i++) {
        $total = $total - 10;
    }
    if ($i > 0) {
        echo $i . " billets de 10 ont été rendu <br>";
    }
    for ($i = 0; $total >= 5; $i++) {
        $total = $total - 5;
    }
    if ($i > 0) {
        echo $i . " billets de 5 ont été rendu <br>";
    }
    for ($i = 0; $total >= 2; $i++) {
        $total = $total - 2;
    }
    if ($i > 0) {
        echo $i . " pièces de 2 ont été rendu <br>";
    }
    for ($i = 0; $total >= 1; $i++) {
        $total = $total - 1;
    }
    if ($i > 0) {
        echo $i . " pièces de 1 ont été rendu <br>";
    }
    if ($total > 0) {
        echo "il reste " . $total . " à rendre";
    }
    echo $totaltmp;
}
renduMonnai(408);

