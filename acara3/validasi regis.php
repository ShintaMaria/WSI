<?php
$username = "shinta";
$password = "123456";
$confirm_password = "123456";
if (($username !== $username)) {
    echo "username tidak valid!";
} else if (strlen($password) < 6) {
    echo "Password minimal harus 6 karakter!";
} else if ($password !== $confirm_password) {
    echo "Password dan konfirmasi password tidak sama!";
} else {
    echo "Pendaftaran berhasil!";
}
?>