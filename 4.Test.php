.<?php
// Array1
$Array1 = array(
    array("NamaPasien" => "Ani", "TanggalRegistrasi" => "2022-01-01", "Ruangan" => "VIP", "Dokter" => "Dr. John"),
    array("NamaPasien" => "Budi", "TanggalRegistrasi" => "2022-01-02", "Ruangan" => "VVIP", "Dokter" => "Dr. Jane"),
    array("NamaPasien" => "Cici", "TanggalRegistrasi" => "2022-01-03", "Ruangan" => "VIP", "Dokter" => "Dr. John"),
    array("NamaPasien" => "Dodi", "TanggalRegistrasi" => "2022-01-04", "Ruangan" => "Kelas 1", "Dokter" => "Dr. Sarah"),
    array("NamaPasien" => "Eva", "TanggalRegistrasi" => "2022-01-05", "Ruangan" => "Kelas 1", "Dokter" => "Dr. Sarah"),
);

// Menambahkan nomor pada setiap data di Array1
$nomor = 1;
foreach ($Array1 as &$data) {
    $data["Nomor"] = $nomor;
    $nomor++;
}

// Menampilkan Array1 yang sudah ditambahkan nomor
echo json_encode($Array1);
?>


