<?php
include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //ambil data dari form
    $nis = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $no_telepon = $_POST['no_telepon'];
    $kelas = $_POST['kelas'];
    //buat query update
    $sql = "UPDATE siswa SET nama_lengkap='$nama_lengkap',alamat='$alamat', jenis_kelamin='$jk', no_telepon='$no_telepon', 
    kelas='$kelas' WHERE nis = $nis";  
    $query = mysqli_query($db,$sql) or die(mysqli_error($db));
    //apakah update berhasil
    if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
        header('location:index.php?status=sukses');

    }else{
        //kalau gagal, alihkan ke halaman index.php dengan status=gagal
        header('Location:index.php?status=gagal');
    }
}else{
    die("Akses Dilarang...");
}
?>