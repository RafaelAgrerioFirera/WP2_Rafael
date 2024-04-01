<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo"Selamat Datang.. selamat belajar Web Programming";
        //this->load->view('view-Latihan1);
    }


    public function penjumlahan($n1, $n2)
    {
    $this->load->model('Model_Latihan1');
    $hasil = $this->Model_Latihan1->jumlah($n1, $n2);
    echo "Hasil Penjumlahan dari". $n1 ." + " . $n2 . " = " .$hasil;

    }
}