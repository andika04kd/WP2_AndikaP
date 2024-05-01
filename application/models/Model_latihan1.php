<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_latihan1 extends CI_Model
{
    // Membuat properti untuk menampung nilai
    public $nilai1, $nilai2, $hasil;

    // Konstruktor
    public function __construct() {
        parent::__construct();
    }

    // Method penjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        // Menggunakan properti $this->nilai1 dan $this->nilai2
        $this->nilai1 = $n1; // Mengubah $nilai1 menjadi $n1
        $this->nilai2 = $n2; // Mengubah $nilai2 menjadi $n2
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
