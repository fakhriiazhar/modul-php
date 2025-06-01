<html>
<head>
    <title>Baca input dari form</title>
</head>
<body>
<h1>Baca input dari form</h1>

<p>Berikut ini data yang telah anda masukkan dalam form</p>

<?php
$namaAnda = $_POST['nama'];
$alamatAnda = $_POST['alamat'];
$sexAnda = $_POST['sex'];
$jobAnda = $_POST['job'];
$statusMenikah = $_POST['status'];

echo "<table>";
echo "<tr><td>Nama anda</td><td>:</td><td>".$namaAnda."</td></tr>";
echo "<tr><td>Alamat anda</td><td>:</td><td>".$alamatAnda."</td></tr>";
echo "<tr><td>jenis Kelamin</td><td>:</td><td>".$sexAnda."</td></tr>";
echo "<tr><td>Pekerjaan anda</td><td>:</td><td>".$jobAnda."</td></tr>";
echo "<tr><td>Status Menikah</td><td>:</td><td>".$statusMenikah."</td></tr>";
?>

</body>
</html>