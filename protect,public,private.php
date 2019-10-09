<?php
// PUBLIC
class Karyawan
{
    public $nama;
    public $tahun_bekerja;
    public $pekerjaan;
    protected $gaji;
    private $gjmanager = 5000000;
    private $gjsekertaris = 2000000;
    private $gjob = 500000;
    public function setdata($nama,$pekerjaan,$tahun_bekerja)
    {
        $this->nama = $nama;
        $this->pekerjaan = $pekerjaan;
        $this->tahun_bekerja = $tahun_bekerja;
    }
    public function getdata()
    {
        if (($this->pekerjaan == "manager") && ($this->tahun_bekerja >=10)) {
            $this->gaji = $this->tahun_bekerja*$this->gjmanager;
        }
        elseif (($this->pekerjaan == "sekertaris") && ($this->tahun_bekerja >=10)) {
            $this->gaji = $this->tahun_bekerja*$this->gjsekertaris;
        }
        elseif (($this->pekerjaan == "ob") && ($this->tahun_bekerja >=10)) {
            $this->gaji = $this->tahun_bekerja*$this->gjob;
        }
        elseif (($this->pekerjaan == "manager") && ($this->tahun_bekerja >=5)) {
            $this->gaji = $this->tahun_bekerja*($this->gjmanager-1000000);
        }
        elseif (($this->pekerjaan == "sekertaris") && ($this->tahun_bekerja >=5)) {
            $this->gaji = $this->tahun_bekerja*($this->gjsekertaris-500000);
        }
        elseif (($this->pekerjaan == "ob") && ($this->tahun_bekerja >=5)) {
            $this->gaji = $this->tahun_bekerja*($this->gjob-100000);
        }
        return $this->gaji;
    }
}
$karyawan = new Karyawan();
$karyawan->setdata("anton","manager",10);

$karyawan2 = new Karyawan();
$karyawan2->setdata("toni","ob",5);

$karyawan3 = new Karyawan();
$karyawan3->setdata("sinta","sekertaris",10);

echo "nama = $karyawan->nama<br>";
echo "pekerjaan = $karyawan->pekerjaan<br>";
echo "tahun bekerja = ".$karyawan->tahun_bekerja."<br>";
echo "gaji = ".number_format($karyawan->getdata(),0,",",".")."<br><br><br>";

echo "nama = $karyawan2->nama<br>";
echo "pekerjaan = $karyawan2->pekerjaan<br>";
echo "tahun bekerja = ".$karyawan2->tahun_bekerja."<br>";
echo "gaji = ".number_format($karyawan2->getdata(),0,",",".")."<br><br><br>";

echo "nama = $karyawan3->nama<br>";
echo "pekerjaan = $karyawan3->pekerjaan<br>";
echo "tahun bekerja = ".$karyawan3->tahun_bekerja."<br>";
echo "gaji = ".number_format($karyawan3->getdata(),0,",",".")."<br><br><br>";
// echo "nama murid = $anto->nama <br>";
// echo "jawaban murid = ".$anto->jawaban()."<br>";
// echo "nilai murid = ".$anto->Hasil_nilai()."<br>";

?>