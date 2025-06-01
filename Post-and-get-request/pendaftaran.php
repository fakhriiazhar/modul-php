<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nilai_uan = $_POST['nilai_uan'];

    echo "<h2>Terimakasih $nama sudah mengisi form pendaftaran.</h2>";
    echo "<p>Nama Lengkap : $nama</p>";
    echo "<p>Tempat Lahir : $tempat_lahir</p>";
    echo "<p>Tanggal Lahir : $tanggal-$bulan-$tahun</p>";
    echo "<p>Alamat Rumah : $alamat</p>";
    echo "<p>Jenis Kelamin : $jenis_kelamin</p>";
    echo "<p>Asal Sekolah : $asal_sekolah</p>";
    echo "<p>Nilai UAN : $nilai_uan</p>";
} else {
    echo "Form belum diisi!";
}
?>
