
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

// Fungsi untuk mengambil informasi jumlah pasien yang ditangani oleh suatu dokter
function getJumlahPasienByDokter($dokter) {
    global $Array1;
    $jumlahPasien = 0;
    foreach ($Array1 as $data) {
        if ($data[1] == $dokter) {
            $jumlahPasien++;
        }
    }
    return $jumlahPasien;
}

// Endpoint API untuk mendapatkan informasi jumlah pasien yang ditangani oleh suatu dokter
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['dokter'])) {
        $dokter = $_GET['dokter'];
        $jumlahPasien = getJumlahPasienByDokter($dokter);
        $result = array(
            'namadokter' => $dokter,
            'jumlahpasien
        
function getDoctorPatients($doctorName) {
    $result = array();
    $totalPatients = 0;
    foreach ($GLOBALS['array1'] as $room => $patients) {
        foreach ($patients as $patient) {
            if ($patient['namadokter'] == $doctorName) {
                $totalPatients++;
            }
        }
    }
    $result['namadokter'] = $doctorName;
    $result['jumlahpasien'] = $totalPatients;
    return $result;
}
