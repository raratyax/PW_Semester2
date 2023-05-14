<?php
class BMI {
    // property
    public $nama;
    public $umur;
    public $jenis_kelamin;
    public $berat_badan;
    public $tinggi_badan;
    public $hasil_bmi;
    public $keterangan;

    // method
    function __construct($nama, $umur, $jenis_kelamin, $berat_badan, $tinggi_badan) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->berat_badan = $berat_badan;
        $this->tinggi_badan = $tinggi_badan;
    }

    function hitung_bmi() {
        $this->hasil_bmi = $this->berat_badan / ($this->tinggi_badan * $this->tinggi_badan/10000);
        return $this->hasil_bmi;
    }

    function keterangan() {
        if ($this->hasil_bmi < 18.5) {
            $this->keterangan = "Kekurangan berat badan";
        } elseif ($this->hasil_bmi >= 18.5 && $this->hasil_bmi <= 24.9) {
            $this->keterangan = "Normal (ideal)";
        } elseif ($this->hasil_bmi >= 25 && $this->hasil_bmi <= 29.9) {
            $this->keterangan = "Kelebihan berat badan";
        } else {
            $this->keterangan = "Kegemukan (Obesitas)";
        }
        return $this->keterangan;
    }

    function tampil_bmi() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Umur: " . $this->umur . "<br>";
        echo "Jenis Kelamin: " . $this->jenis_kelamin . "<br>";
        echo "Berat Badan: " . $this->berat_badan . "<br>";
        echo "Tinggi Badan: " . $this->tinggi_badan . "<br>";
        echo "Hasil BMI: " . $this->hasil_bmi . "<br>";
        echo "Keterangan: " . $this->keterangan . "<br>";
    }
}