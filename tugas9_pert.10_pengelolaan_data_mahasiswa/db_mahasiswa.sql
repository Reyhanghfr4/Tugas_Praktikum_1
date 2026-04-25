CREATE DATABASE aplikasi_pengelolaan_data_mahasiswa;
USE aplikasi_pengelolaan_data_mahasiswa;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(15) NOT NULL UNIQUE,
    nama VARCHAR(255) NOT NULL,
    prodi VARCHAR(100) NOT NULL,
    angkatan INT NOT NULL,
    email VARCHAR(255) NOT NULL
);