<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kasir</title>
</head>
<body>
    <h2>Aplikasi Kasir</h2>

    <!-- Form untuk jumlah jenis barang -->
    <form method="POST">
        <label>Masukkan banyaknya jenis barang yang dibeli:</label><br>
        <input type="number" name="banyak_jenis" required><br><br>
        <input type="submit" name="submit_jumlah" value="Lanjut">
    </form>

    <?php
    // Daftar barang dengan kode, nama, dan harga
    $barang = [
        "1001" => ["nama" => "Sabun Lifebuoy", "harga" => 1500],
        "1002" => ["nama" => "Permen Blaster", "harga" => 5600],
        "1003" => ["nama" => "Pasta Gigi Pepsodent", "harga" => 4560],
        "1004" => ["nama" => "Madu Arbain", "harga" => 30000],
        "1005" => ["nama" => "Kecap ABC", "harga" => 7250],
        "1006" => ["nama" => "Saus Tomat ABC", "harga" => 6750],
        "1007" => ["nama" => "Gula Gulaku", "harga" => 8900],
        "1008" => ["nama" => "Rinso", "harga" => 7100],
        "1009" => ["nama" => "Super Pel", "harga" => 6450],
        "1010" => ["nama" => "Permen Tango", "harga" => 5600],
    ];

    // Jika jumlah jenis barang sudah diinput
    if (isset($_POST['submit_jumlah'])) {
        $banyak_jenis = $_POST['banyak_jenis'];

        echo "<form method='POST'>";
        echo "<h3>Masukkan kode barang dan jumlah barang:</h3>";

        for ($i = 1; $i <= $banyak_jenis; $i++) {
            echo "Barang ke-$i:<br>";
            echo "Kode Barang: <input type='text' name='kode_barang[]' required><br>";
            echo "Jumlah: <input type='number' name='jumlah_barang[]' required><br><br>";
        }

        echo "<input type='hidden' name='banyak_jenis' value='$banyak_jenis'>";
        echo "<input type='submit' name='submit_barang' value='Hitung Total'>";
        echo "</form>";
    }

    // Jika data barang sudah diinput
    if (isset($_POST['submit_barang'])) {
        $kode_barang = $_POST['kode_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $total_harga = 0;

        echo "<h3>Daftar Barang yang Dibeli:</h3>";
        echo "<table border='1'>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                </tr>";

        foreach ($kode_barang as $index => $kode) {
            $jumlah = $jumlah_barang[$index];
            if (array_key_exists($kode, $barang)) {
                $nama = $barang[$kode]["nama"];
                $harga = $barang[$kode]["harga"];
                $subtotal = $harga * $jumlah;
                $total_harga += $subtotal;

                echo "<tr>
                        <td>$kode</td>
                        <td>$nama</td>
                        <td>$jumlah</td>
                        <td>Rp " . number_format($harga, 0, ',', '.') . "</td>
                        <td>Rp " . number_format($subtotal, 0, ',', '.') . "</td>
                      </tr>";
            } else {
                echo "<tr>
                        <td colspan='5'>Kode barang $kode tidak ditemukan!</td>
                      </tr>";
            }
        }

        echo "</table>";
        echo "<h3>Total Harga: Rp " . number_format($total_harga, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
