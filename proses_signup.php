
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restoranmenu";
$conn = new mysqli($servername, $username, $password, $dbname, 3306);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$role = $_POST['role'];


$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, birthdate, gender) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $first_name, $last_name, $email, $password, $birthdate, $gender);
$check_email_query = "SELECT * FROM users WHERE email = ?";
$check_email_stmt = $conn->prepare($check_email_query);
$check_email_stmt->bind_param("s", $email);
$check_email_stmt->execute();
$check_email_result = $check_email_stmt->get_result();

if ($check_email_result->num_rows > 0) {
    echo "<script>alert('Email sudah di gunakan.')</script>";
    echo '<script type="text/javascript">window.location.href = "signup.php";</script>';
} else {
    if ($stmt->execute()) {
        echo "<script>alert('Pendaftaran Berhasil! Anda akan menuju halaman utama.');window.location.href='index.php';</script>";
    } else {
        echo "Terjadi kesalahan saat mendaftar. Silakan coba lagi.";
    }
}

$stmt->close();
$check_email_stmt->close();
$conn->close();
?>