<?php

$array1 = array(
    array("NamaPasien"=>"Andi", "TanggalRegistrasi"=>"2022-02-15", "KodeRuangan"=>"A001", "NamaDokter"=>"Dr. Dian", "JumlahPasienRuangan"=>3, "JumlahPasienDokter"=>1),
    array("NamaPasien"=>"Budi", "TanggalRegistrasi"=>"2022-02-16", "KodeRuangan"=>"A002", "NamaDokter"=>"Dr. Dian", "JumlahPasienRuangan"=>2, "JumlahPasienDokter"=>1),
    array("NamaPasien"=>"Citra", "TanggalRegistrasi"=>"2022-02-16", "KodeRuangan"=>"B001", "NamaDokter"=>"Dr. Budi", "JumlahPasienRuangan"=>1, "JumlahPasienDokter"=>1),
    array("NamaPasien"=>"Dedi", "TanggalRegistrasi"=>"2022-02-17", "KodeRuangan"=>"B002", "NamaDokter"=>"Dr. Budi", "JumlahPasienRuangan"=>2, "JumlahPasienDokter"=>1),
    array("NamaPasien"=>"Eka", "TanggalRegistrasi"=>"2022-02-17", "KodeRuangan"=>"C001", "NamaDokter"=>"Dr. Cici", "JumlahPasienRuangan"=>1, "JumlahPasienDokter"=>1),
);

function countLetter($array, $letter) {
    $count = 0;
    foreach ($array as $data) {
        $count += substr_count($data['NamaPasien'], $letter);
    }
    return $count;
}

// Contoh penggunaan
echo countLetter($array1, 'A'); // Output: 1
echo countLetter($array1, 'D'); // Output: 2
