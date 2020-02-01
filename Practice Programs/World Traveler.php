<?php

//money amounts
$riel = 2103942;
$kyat = 19092;
$krone = 109;
$lek = 9094;

echo "you start out with $riel riel, $kyat kyat, $krone krone and $lek lek \n\n"; //disaplays current amounts

//converts to usd, conversions cost 1 usd
$riel_usd = (0.00026 * $riel) - 1;
$kyat_usd = (0.00066 * $kyat) - 1;
$krone_usd = (0.11 * $krone) - 1;
$lek_usd = (0.009 * $lek) - 1;

$total = $riel_usd + $kyat_usd + $krone_usd + $lek_usd; //calculate total USD

echo "Your new amount is ".round($total,2)." USD"; //output total

?>
