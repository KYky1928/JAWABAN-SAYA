<?php

// Array1 sebagai sumber data
$Array1 = array(
    array("Ruangan1", "DokterA"),
    array("Ruangan1", "DokterB"),
    array("Ruangan2", "DokterA"),
    array("Ruangan2", "DokterC"),
    array("Ruangan2", "DokterD"),
    array("Ruangan3", "DokterB"),
    array("Ruangan3", "DokterC")
);

// Fungsi untuk mengambil informasi jumlah pasien di suatu ruangan
function getJumlahPasienByRuangan($ruangan) {
    global $Array1;
    $jumlahPasien = 0;
    foreach ($Array1 as $data) {
        if ($data[0] == $ruangan) {
            $jumlahPasien++;
        }
    }
    return $jumlahPasien;
}

// Endpoint API untuk mendapatkan informasi jumlah pasien di suatu ruangan
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['ruangan'])) {
        $ruangan = $_GET['ruangan'];
        $jumlahPasien = getJumlahPasienByRuangan($ruangan);
        $result = array(
            'namaruangan' => $ruangan,
            'jumlahpasien' => $jumlahPasien
        );
        echo json_encode($result);
    } else {
        echo "Silakan masukkan parameter ruangan.";
    }
}
?>
http://localhost/api.php?ruangan=Ruangan1

