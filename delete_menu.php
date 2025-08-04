<?php
session_start();

$conn = new mysqli("localhost", "root", "", "restoranmenu");
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $menu_id = $_GET['id'];

    $sql = "DELETE FROM menu WHERE id_menu = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $menu_id);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='admin.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
