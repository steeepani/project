<?php
include 'koneksi.php';

// Langsung hapus data berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM results WHERE id = $id";

    // Eksekusi query dan redirect kembali ke halaman utama
    if ($conn->query($sql) === TRUE) {
        header("Location: modulpraktek.php"); // Redirect ke halaman utama setelah berhasil
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
