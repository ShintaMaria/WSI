<?php
$role = "admin";
if ($role === "admin") {
    echo "Selamat datang Admin!";
} else if ($role === "user") {
    echo "Selamat datang Pengguna!";
} else {
    echo "Role tidak dikenal.";
}
?>