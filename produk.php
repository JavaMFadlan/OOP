<?php
class Mobil{
    var $nama;
    var $merk;
    var $pencipta;

    public function Kecepatan(){
        return "Diatas 100 km/jam";
    }

}

$mobil1 = new Mobil();
$mobil1->nama = "huayra";
$mobil1->merk = "pagani";
$mobil1->pencipta = "tak terdefinisi";
$mobilA = array("nama" => $mobil1->nama,
                "merk" => $mobil1->merk,
                "Pencipta" => $mobil1->pencipta,
                "Kecepatan" => $mobil1->Kecepatan()
                );
var_dump($mobilA);
$mobil2 = new Mobil();
$mobil2->nama = "GT90";
$mobil2->merk = "FORD";
$mobil2->pencipta = "tak diketahui";
$mobilB = array("nama" => $mobil2->nama,"merk" => $mobil2->merk,"Pencipta" => $mobil2->pencipta,"Kecepatan" => $mobil2->Kecepatan());



foreach ($mobilA as $mobil => $value) {
    echo "$mobil = $value <br>";
}
echo "<br><br><br>";
foreach ($mobilB as $mobil => $value) {
    echo "$mobil = $value <br>";
}

?>