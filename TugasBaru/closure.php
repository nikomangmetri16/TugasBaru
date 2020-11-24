<?php

$nama_depan = "Putu";
$nama_belakang = "Ayu";
function belajar ($namaLengkap) {
    echo $namaLengkap . " Jangan Lupa Belajar";
}
$namaLengkap = function () use ($nama_depan, $nama_belakang) {
    return $nama_depan . " " . $nama_belakang;
};

belajar($namaLengkap());

?>