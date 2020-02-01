<?php
//money amounts
$riel = 2103942;
$kyat = 19092;
$krone = 109;
$lek = 9094;

echo "you start out with $riel riel, $kyat kyat, $krone krone and $lek lek";

//converts to usd, conversions cost 1 usd
$riel_usd = (0.00026 * $riel) - 1;
$kyat_usd = (0.00066 * $kyat) - 1;
$krone_usd = (0.11 * $krone) - 1;
$lek_usd = (0.009 * $lek) - 1;

?>
