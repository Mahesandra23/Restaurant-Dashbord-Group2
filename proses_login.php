<?php
session_start();

function showError($message)
{
    echo "<script>alert('{$message}')</script>";
    echo '<script type="text/javascript">window.location.href = "login.php";</script>';
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restoranmenu";
$conn = new mysqli($servername, $username, $password, $dbname, 3306);
if ($conn->connect_error) {
    showError("Koneksi gagal: " . $conn->connect_error);
}
$captcha = $_POST['captcha'];
$confirmcaptcha = $_POST['confirmcaptcha'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        if ($captcha == $confirmcaptcha) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            if ($user['role'] == 0) {
                echo "<script>alert('Login berhasil, 맛있게 드세요!'); window.location.href='index.php';</script>";
            } elseif ($user['role'] == 1) {
                $_SESSION['user_role'] = 'admin';
                echo "<script>alert('Welcome Back, Admin! Anda akan menuju halaman admin.'); window.location.href='admin.php';</script>";
            }
        } else {
            showError("CAPTCHA Salah! Silahkan coba lagi.");
        }
    } else {
        showError("Password yang Anda masukkan salah! Silahkan coba lagi.");
    }
} else {
    showError("Akun tidak ditemukan! Silahkan coba lagi.");
}

$conn->close();
