<?php
// Load file koneksi.php
include "con.php";
// Ambil Data yang Dikirim dari Form
$name = $_POST['name'];
$type_id = $_POST['type_id'];
$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];
// Rename name photonya dengan menambahkan tanggal dan jam upload
$photobaru = date('dmYHis') . $photo;
// Set path folder tempat menyimpan photonya
$path = "img/" . $photobaru;
// Proses upload
if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
    // Proses simpan ke Database

    $insert = "INSERT INTO heroes_tb('name','type_id','photo') values($name,$type_id,$photo)";

    // $sql = $pdo->prepare("INSERT INTO heroes_tb(name, type_id, photo) VALUES(:name,:type_id,:photo)");
    // $sql->bindParam(':name', $name);
    // $sql->bindParam(':type_id', $type_id);
    // $sql->bindParam(':photo', $photobaru);
    // $insert->execute(); // Eksekusi query insert
    if ($insert) { // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: ../index.php"); // Redirect ke halaman index.php
    } else {
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
    }
} else {
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
