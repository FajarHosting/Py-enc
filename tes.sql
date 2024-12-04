CREATE TABLE absensi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    status ENUM('Hadir', 'Tidak Hadir') NOT NULL,
    jumlah_pembayaran DECIMAL(10, 2) NOT NULL,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
