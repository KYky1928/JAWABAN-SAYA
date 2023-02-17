<?php

// Array data pasien
$dataPasien = array(
    array("nama" => "Adi", "ruangan" => "VIP"),
    array("nama" => "Budi", "ruangan" => "VIP"),
    array("nama" => "Caca", "ruangan" => "Rawat Inap"),
    array("nama" => "Dodi", "ruangan" => "Rawat Inap"),
    array("nama" => "Eka", "ruangan" => "Rawat Jalan"),
    array("nama" => "Fani", "ruangan" => "Rawat Jalan")
);

// Fungsi untuk membuat array berisi nama ruangan dan jumlah pasien
function hitungJumlahPasienPerRuangan($dataPasien, $namaRuangan) {
    $jumlahPasien = 0;
    foreach($dataPasien as $pasien) {
        if($pasien["ruangan"] == $namaRuangan) {
            $jumlahPasien++;
        }
    }
    return array("namaruangan" => $namaRuangan, "jumlahpasien" => $jumlahPasien);
}

// Contoh penggunaan fungsi
$result = hitungJumlahPasienPerRuangan($dataPasien, "Rawat Inap");
print_r($result); // Output: Array ( [namaruangan] => Rawat Inap [jumlahpasien] => 2 )

<?php

// Array data pasien
$dataPasien = array(
    array("nama" => "Adi", "dokter" => "Dr. A"),
    array("nama" => "Budi", "dokter" => "Dr. A"),
    array("nama" => "Caca", "dokter" => "Dr. B"),
    array("nama" => "Dodi", "dokter" => "Dr. B"),
    array("nama" => "Eka", "dokter" => "Dr. C"),
    array("nama" => "Fani", "dokter" => "Dr. C")
);

// Fungsi untuk membuat array berisi nama dokter dan jumlah pasien
function hitungJumlahPasienPerDokter($dataPasien) {
    $jumlahPasienPerDokter = array();
    foreach($dataPasien as $pasien) {
        $dokter = $pasien["dokter"];
        if(!isset($jumlahPasienPerDokter[$dokter])) {
            $jumlahPasienPerDokter[$dokter] = 0;
        }
        $jumlahPasienPerDokter[$dokter]++;
    }
    $result = array();
    foreach($jumlahPasienPerDokter as $dokter => $jumlahPasien) {
        $result[] = array("namadokter" => $dokter, "jumlahpasien" => $jumlahPasien);
    }
    return $result;
}

// Contoh penggunaan fungsi
$result = hitungJumlahPasienPerDokter($dataPasien);
print_r($result); // Output: Array ( [0] => Array
<?php
// Array data
$Array1 = array(
    array(
        'No' => '1',
        'NamaPasien' => 'Andi',
        'Ruangan' => 'A',
        'TanggalRegistrasi' => '2022-02-10',
        'Dokter' => 'Dr. A',
    ),
    array(
        'No' => '2',
        'NamaPasien' => 'Budi',
        'Ruangan' => 'A',
        'TanggalRegistrasi' => '2022-02-10',
        'Dokter' => 'Dr. A',
    ),
    array(
        'No' => '3',
        'NamaPasien' => 'Cici',
        'Ruangan' => 'B',
        'TanggalRegistrasi' => '2022-02-10',
        'Dokter' => 'Dr. B',
    ),
    array(
        'No' => '4',
        'NamaPasien' => 'Dedi',
        'Ruangan' => 'B',
        'TanggalRegistrasi' => '2022-02-10',
        'Dokter' => 'Dr. B',
    ),
);

// API untuk menghitung jumlah huruf dalam NamaPasien
if (isset($_GET['letter'])) {
    $letter = $_GET['letter'];
    $count = 0;

    foreach ($Array1 as $data) {
        $count += substr_count($data['NamaPasien'], $letter);
    }

    $response = array('count' => $count);
    echo json_encode($response);
}

// API untuk memunculkan NamaPasien dan TanggalRegistrasi saja
if (isset($_GET['fields']) && $_GET['fields'] == 'namapasien,tanggalregistrasi') {
    $result = array();

    foreach ($Array1 as $data) {
        $result[] = array(
            'NamaPasien' => $data['NamaPasien'],
            'TanggalRegistrasi' => $data['TanggalRegistrasi'],
        );
    }

    echo json_encode($result);
}

// API untuk menambahkan penomoran pada array
if (isset($_GET['numbered'])) {
    $result = array();

    foreach ($Array1 as $key => $data) {
        $data['No'] = $key + 1;
        $result[] = $data;
    }

    echo json_encode($result);
}
?>


// Untuk mengakses API di atas, dapat dilakukan melalui HTTP GET request dengan menambahkan parameter pada URL.

// Contoh penggunaan API untuk soal nomor 2, menghitung jumlah huruf dalam NamaPasien:

// javascript
// Copy code
http://localhost/api.php?letter=A
// Contoh penggunaan API untuk soal nomor 3, memunculkan NamaPasien dan TanggalRegistrasi saja:

// javascript
// Copy code
http://localhost/api.php?fields=namapasien,tanggalregistrasi
// Contoh penggunaan API untuk soal nomor 4, menambahkan penomoran pada array:

// javascript
// Copy code
http://localhost/api.php?numbered



