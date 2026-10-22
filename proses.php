<?php
$conn = mysqli_connect ("localhost", "root", "hidroponik")

$nama = $_POST['nama_tanaman'];
$media = $_POST['media_tanam'];

mysqli_query($conn, "INSERT INTO tanaman (nama_tanaman, media_tanam) VALUES ('$nama', '$media')");

header("Location: index.html");
?>

