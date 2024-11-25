<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['Nama Lengkap'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone Number'];
    $query = "INSERT INTO results (name, email, phone) 
              VALUES ('$name', '$email', '$phone')";

    if ($conn->query(query: $query) === TRUE) {
        header("Location:   adddata.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn -> error;
    }
}
?>