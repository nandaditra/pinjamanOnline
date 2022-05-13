<?php
include_once("a_m_daftarPeminjam.php");
class a_c_daftarPeminjam {
public $model;

function __construct(){
$this->model = new a_m_daftarPeminjam(); 
}

function index(){
$data = $this->model->selectAll(); 
include "a_v_daftarPeminjam.php"; 
}

function viewEdit($nomor){
$data = $this->model->selectPrk($nomor); 
$row = $this->model->fetch($data); 
include "a_v_edit.php"; 
}

function viewInsert(){
include "a_v_insert.php"; 
}

function update($nominalBayarCicilan){
$id = $_SESSION['id'];

$this->model->updatePrk($id, $nominalBayarCicilan);
$_SESSION['totalTagihan']-=$nominalBayarCicilan;
$_SESSION['Time'] += 1;
if($_SESSION['totalTagihan']>0){
header("location:a_index2.php");
}
else{
    header("location:a_index.php");
}  
}


function delete($nomor){
$delete = $this->model->deletePrk($nomor);
header("location:a_index2.php");
}



function insert(){
$id = $_SESSION['id'];
$nominalPinjaman = $_POST['nominalPinjaman'];
$durasiTenor = $_POST['durasiTenor'];
$totalTagihan = null;
$saldopokok = $nominalPinjaman;
$flower1 = 0.005;
$flower2 = 0.1;
$besaranbunga1 = $saldopokok*$flower1;
$besaranbunga2 = $saldopokok*$flower2;
$totalcount = 0;

if ($durasiTenor == 3){
    $angsuranpokok = $saldopokok/3;
    $totalangsuran = $angsuranpokok + $besaranbunga1;
    for ($i = 1; $i <= $durasiTenor; $i++){
        if ($i ==1){
            $totalcount+=$totalangsuran;
        }
        else {
            $saldopokok -= $angsuranpokok;
            $flower = $saldopokok*$flower1;
            $total = $angsuranpokok + $flower;
            $totalcount+=$total;
        }      
        
            }
}
elseif ($durasiTenor == 7){
    $angsuranpokok = $saldopokok/7;
    $totalangsuran = $angsuranpokok + $besaranbunga1;
    for ($i = 1; $i <= $durasiTenor; $i++){
        if ($i ==1){
            $totalcount+=$totalangsuran;
        }
        else {
            $saldopokok -= $angsuranpokok;
            $flower = $saldopokok*$flower1;
            $total = $angsuranpokok + $flower;
            $totalcount+=$total;
        }      
        
            }

}
elseif ($durasiTenor == 14){
    $angsuranpokok = $saldopokok/14;
    $totalangsuran = $angsuranpokok + $besaranbunga1;
    for ($i = 1; $i <= $durasiTenor; $i++){
        if ($i ==1){
            $totalcount+=$totalangsuran;
        }
        else {
            $saldopokok -= $angsuranpokok;
            $flower = $saldopokok*$flower1;
            $total = $angsuranpokok + $flower;
            $totalcount+=$total;
        }      
        
            }

}
elseif ($durasiTenor == 30){
    $angsuranpokok = $saldopokok/30;
    $totalangsuran = $angsuranpokok + $besaranbunga1;
    for ($i = 1; $i <= $durasiTenor; $i++){
        if ($i ==1){
            $totalcount+=$totalangsuran;
        }
        else {
            $saldopokok -= $angsuranpokok;
            $flower = $saldopokok*$flower1;
            $total = $angsuranpokok + $flower;
            $totalcount+=$total;
        }      
        
            }

}
elseif($durasiTenor == 90){
    $angsuranpokok = $saldopokok/3;
    $totalangsuran = $angsuranpokok + $besaranbunga2;
    for ($i = 1; $i <= $durasiTenor; $i++){
        if ($i ==1){
            $totalcount+=$totalangsuran;
        }
        else {
            $saldopokok -= $angsuranpokok;
            $flower = $saldopokok*$flower2;
            $total = $angsuranpokok + $flower;
            $totalcount+=$total;
        }      
        
            }
}
elseif($durasiTenor == 180){
    $angsuranpokok = $saldopokok/6;
    $totalangsuran = $angsuranpokok + $besaranbunga2;
    for ($i = 1; $i <= $durasiTenor; $i++){
        if ($i ==1){
            $totalcount+=$totalangsuran;
        }
        else {
            $saldopokok -= $angsuranpokok;
            $flower = $saldopokok*$flower2;
            $total = $angsuranpokok + $flower;
            $totalcount+=$total;
        }      
        
            }
    
}
elseif($durasiTenor == 365){
    $angsuranpokok = $saldopokok/12;
    $totalangsuran = $angsuranpokok + $besaranbunga2;
    for ($i = 1; $i <= $durasiTenor; $i++){
        if ($i ==1){
            $totalcount+=$totalangsuran;
        }
        else {
            $saldopokok -= $angsuranpokok;
            $flower = $saldopokok*$flower2;
            $total = $angsuranpokok + $flower;
            $totalcount+=$total;
        }      
        
            }
    
}

$totalTagihan =$totalcount;
$insert = $this->model->insertPrk($id, $nominalPinjaman, $durasiTenor, $totalTagihan);
$_SESSION['durasiTenor'] = $durasiTenor;
$_SESSION['totalTagihan'] = $totalTagihan;
$_SESSION['nominalPinjaman'] = $nominalPinjaman;
$_SESSION['Time'] = 0;
if($_SESSION['totalTagihan']>0){
header("location:a_index2.php");
}
else{
    header("location:a_index.php");
}  



}

function insertNominal(){
    $id = $_POST['id'];
    $nominalPinjaman = $_POST['nominalPinjaman'];
    $insert = $this->model->insertNo($id, $nominalPinjaman);
    }

function __destruct(){
}

}
?>