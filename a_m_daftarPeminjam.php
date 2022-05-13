<?php
require "a_koneksiMVC.php";
// include "a_c_daftarPeminjam.php";
class a_m_daftarPeminjam {
private $id; 
private $nominalPinjaman;
private $durasiTenor;
private $connect;

function __construct(){
$this->connect = new a_koneksiMVC();
} 
function execute($query){
return mysqli_query($this->connect->getConnection(),$query);
} 
function selectAll(){
$query = "SELECT * FROM user";
return $this->execute($query);
} 

function checker(){
    $id = $_SESSION['id'];
    $query = "SELECT totalTagihan FROM user WHERE id = $id";
    $result = $this->execute($query);
    return mysqli_fetch_assoc($result);
    }



function selectPrk($id){
$query = "SELECT * FROM user WHERE 
id='$id'";
return $this->execute($query);
} 
function updatePrk($id, $nominalBayarCicilan){
 $query = "UPDATE user SET totalTagihan=totalTagihan-$nominalBayarCicilan, Time = Time + 1 WHERE id = '$id'";
//  $query = "UPDATE daftarpeminjam SET nik='$nik', 
// durasiTenor='$durasiTenor' WHERE nominalPinjaman='$nominalPinjaman'";
 return $this->execute($query);
 }
function deletePrk($id){
$query = "DELETE FROM user WHERE 
id='$id'";
return $this->execute($query);
}
 
function insertPrk($id, $nominalPinjaman, $durasiTenor, $totalTagihan){
$query = "UPDATE user SET nominalPinjaman=$nominalPinjaman, durasiTenor = $durasiTenor, totalTagihan =$totalTagihan, Time= 0 WHERE id = $id";
return $this->execute($query);
} 

function insertNo($id, $nominalPinjaman){
    $query = "INSERT INTO user VALUES ('$id', 
    '$nominalPinjaman')";
    return $this->execute($query);
} 
function fetch($var){
return mysqli_fetch_array($var);
} 
function __destruct(){
}
}
?>
