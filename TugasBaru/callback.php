<?php

$batas_usia= 17;
$data= [
    ["nama"=>"ayu","usia"=>16],
    ["nama"=>"budi","usia"=>17],
    ["nama"=>"mimi","usia"=>18],
];

array_walk($data, function($calon) use ($batas_usia){
    echo "nama : " .$calon['nama'] .  "\n";
    echo "usia : " .$calon['usia'] .  "\n";
    echo "status : ";
        if($calon['usia'] >= $batas_usia){
            echo "Boleh membuat SIM \n\n";
        } else {
            echo "Tidak Boleh membuat SIM \n\n"; 
        }
});

?>