<?php
$total_pembelian = 150000;
if ($total_pembelian >= 100000 && $total_pembelian < 200000) {
    echo "Anda mendapatkan diskon 10%!";
} else if ($total_pembelian >= 200000) {
    echo "Anda mendapatkan diskon 20%!";
} else {
    echo "Anda tidak mendapatkan diskon.";
}
?>