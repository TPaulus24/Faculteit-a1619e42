<?php
echo "Vul een getal in.\n";
$Num = readline();
if (is_numeric($Num)) {
    $totaal = 1;
    for ($i = 1; $i <= $Num; $i++) {
        $totaal = $i * $totaal;
    }
    echo $totaal;
}
