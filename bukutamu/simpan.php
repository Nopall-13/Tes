<?php
include 'db.php';

$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$pesan = htmlspecialchars($_POST['pesan']);

$stmt = $conn->prepare("INSERT INTO tamu (nama, email, pesan, tanggal) VALUES (?, ?, ?, NOW())");
$stmt->bind_param("sss", $nama, $email, $pesan);
$stmt->execute();
$stmt->close();

header("Location: index.php");
exit();
?>
