<?php
include("config.php");
//cek apakah tombol simpan sudah diklik atau belum
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //ambbil data dri form
    $nis = $_POST['nis'];
    $nama_lengkap= $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $no_telepon = $_POST['no_telepon'];
    $kelas = $_POST['kelas'];
//buat query
$sql = "INSERT INTO siswa(nis, nama_lengkap, alamat, jenis_kelamin, no_telepon, kelas)
VALUE('$nis', '$nama_lengkap', '$alamat', '$jk', '$no_telepon', '$kelas')";
$query = mysqli_query($db, $sql) or die(mysqli_error($db));
//apakah query update berhasil
if($query){
    //kalau berhasil , alihkan ke halaman index.php dengan status=sukses
    header('location:index.php?status=sukses');

}else{
        //kalau gagal , alihkan ke halaman index.php dengan status=gagal
        header('Location:index.php?status=gagal');


}
}else{

die("Akses dilarang...");
}