<?php 

class RPL{
    public $nama;
    public $alamat;
    public $jk;
    public $agama;
    public $iq;

    public function spesies(){
        return "mamalia";
    }
    public function terbuat(){
        return "tanah";
    }
}
$siswa1 = new RPL();
$siswa1->nama = "nam";
$siswa1->alamat = "rumah";
$siswa1->jk = "laki";
$siswa1->agama = "islam";
$siswa1->iq = "100";

$siswa2 = new RPL();
$siswa2->nama = "mana";
$siswa2->alamat = "bumi";
$siswa2->jk = "perempuan";
$siswa2->agama = "kristen";
$siswa2->iq = "120";

$siswa3 = new RPL();
$siswa3->nama = "aan";
$siswa3->alamat = "planet bumi";
$siswa3->jk = "tdk terdefinisi";
$siswa3->agama = "hindu";
$siswa3->iq = "140";


    echo "nama: $siswa1->nama <br>";
    echo "alamat : $siswa1->alamat <br>";
    echo "jenis kelamin : $siswa1->jk <br>";
    echo "agama : $siswa1->agama <br>";
    echo "siswa : $siswa1->iq <br>";
    echo "spesies ".$siswa1->spesies()."<br>";
    echo "terbuat ".$siswa1->terbuat()."<br>";   

    echo "<br><br><br>";
    echo "nama: $siswa2->nama <br>";
    echo "alamat : $siswa2->alamat <br>";
    echo "jenis kelamin : $siswa2->jk <br>";
    echo "agama : $siswa2->agama <br>";
    echo "siswa : $siswa2->iq <br>";
    echo "spesies ".$siswa2->spesies()."<br>";
    echo "terbuat ".$siswa2->terbuat()."<br>"; 

    echo "<br><br><br>";
    echo "nama: $siswa3->nama <br>";
    echo "alamat : $siswa3->alamat <br>";
    echo "jenis kelamin : $siswa3->jk <br>";
    echo "agama : $siswa3->agama <br>";
    echo "siswa : $siswa3->iq <br>";
    echo "spesies ".$siswa3->spesies()."<br>";
    echo "terbuat ".$siswa3->terbuat()."<br>"; 


?>