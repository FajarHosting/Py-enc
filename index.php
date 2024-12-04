<?php
include 'database.php';

// Menangani form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $status = isset($_POST['status']) ? 'Hadir' : 'Tidak Hadir';
    $jumlah_pembayaran = $_POST['jumlah_pembayaran'];

    $sql = "INSERT INTO absensi (nama, status, jumlah_pembayaran) VALUES ('$nama', '$status', '$jumlah_pembayaran')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data absen berhasil ditambahkan.');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
    }
}

// Mengambil data absensi
$sql = "SELECT * FROM absensi";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Absen Pembayaran</title>
</head>
<body>
    <h1>Absen Pembayaran</h1>
    <form action="index.php" method="POST">
        <input type="text" name="nama" placeholder="Nama" required>
        <label>
            <input type="checkbox" name="status"> Hadir
        </label>
        <input type="number" name="jumlah_pembayaran" placeholder="Jumlah Pembayaran" required>
        <button type="submit">Tambah Absen</button>
    </form>

    <h2>Data Absen</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Status</th>
            <th>Jumlah Pembayaran</th>
            <th>Tanggal</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nama']}</td>
                        <td>{$row['status']}</td>
                        <td>{$row['jumlah_pembayaran']}</td>
                        <td>{$row['tanggal']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Belum ada data absen.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
