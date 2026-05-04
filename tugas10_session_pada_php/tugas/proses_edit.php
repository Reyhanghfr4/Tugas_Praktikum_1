$stmt = $conn->prepare("UPDATE mahasiswa SET nim=?, nama=?, prodi=?, angkatan=?, email=? WHERE id=?");
$stmt->bind_param("sssisi", $_POST['nim'], $_POST['nama'], $_POST['prodi'], $_POST['angkatan'], $_POST['email'], $_POST['id']);
$stmt->execute();