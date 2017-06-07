<?php
$maand = 1;
$aflossen = 550;
$hypotheekbedrag = 165000;
$afgelost = 0;
$rest = $aflossen*$maand;
$restandbedrag = $hypotheekbedrag-$rest;
$hypotheekbedrag = ($hypotheekbedrag - $aflossen);


while ($maand <= 301) {
    if ($maand == 301) {
        echo "<br/>" . "klaar. <br/>";
        $maand++;
        continue;
    }

    if ($maand == 301 && $hypotheekbedrag = 0) {
        echo "<br />" . "je hypotheek is afgelost. <br />";
        break;
    }

    $afgelost = $afgelost + $aflossen;
    echo "<br /> Maand" . $maand . " je hebt afgelost: " . $afgelost . " rest ". " $restandbedrag " . "<br />";
    $maand++;
}
?>
