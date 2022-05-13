<?php
$x = 120000000;
 
echo "The loan is: $x\n";
$choose;
$number;
if ($x < 20000000) {
   echo "Tenor yang terpilih adalah hari\n";
    
   echo "Pilih tenor hari:\n
         1. 3 hari\n
         2. 7 hari\n
         3. 14 hari\n
         4. 30 hari\n";

   $end;
   $day = (int)readline("Pilih tenor : ");
    
   switch($day) {
   case 1:
      $end = 3;
      break;
   case 2:
      $end = 7;
      break;
   case 3:
      $end = 14;
      break;
   case 4:
      $end = 30;
      break;
   default:
      echo "Pilihanmu tidak benar";
   }
   echo "Pilihanmu tenor mu adalah $end hari";
   $number = $end;
   $choose = "$end hari";
} else {
   echo "Tenor yang terpilih adalah bulan\n";
    
   echo "Pilih tenor hari:\n
         1. 3 bulan\n
         2. 6 bulan\n
         3. 12 bulan\n";

   $end;
   $month = (int)readline("Pilih tenor : ");
    
   switch($month) {
   case 1:
      $end = 3;
      break;
   case 2:
      $end = 6;
      break;
   case 3:
      $end = 12;
      break;
   default:
      echo "Pilihanmu tidak benar";
   }
   echo "Pilihanmu tenor mu adalah $end bulan";
   $number = $end;
   $choose = "$end Bulan";
}

echo "\nPilihan tenor $choose";

  //mencari string
if (preg_match("/bulan/i",$choose)){
   $flower = 0.10;
   $angsuran_pokok = $x/$number;
   echo "\n===========================";
   echo "\nThis is a month tenor";
     //looping

     $saldo_pokok=$x;
     $besaran_bunga = $x*$flower;
     $total_angsuran = $angsuran_pokok + $besaran_bunga;
     $totalCount=0;
   for ($i=1;$i<=$number;$i++) {
      if ($i == 1 ) {
         echo "\n";
         echo "\nAngsuran bulan ke- $i";
         echo "\nBesaran bunga : ", $x, " x ", $flower, " = ", $besaran_bunga;
         echo "\nAngsuran pokok : ", $x, " / ", $number, " = ", $angsuran_pokok;
         echo "\nTotal Angsuran Bulan ke-$i : ", $angsuran_pokok, " + ", $besaran_bunga, " = ", $total_angsuran;
         $totalCount+=$total_angsuran;
         echo "\n";
      } elseif($i == 2){
         echo "\n";
         echo "\nAngsuran bulan ke- $i";
         echo "\nSaldo Pokok (SP) : ", $x, "-", $angsuran_pokok, "=", $saldo_pokok=$x-$angsuran_pokok;
         echo "\nBesaran bunga : ", $saldo_pokok, " x ", $flower, " = ", $besaran_bunga=$saldo_pokok*$flower;
         echo "\nTotal Angsuran Bulan ke-$i : ", $angsuran_pokok, " + ", $besaran_bunga, " = ", $total_angsuran=$angsuran_pokok+$besaran_bunga;
         $totalCount+=$total_angsuran;
         echo "\n";
      }else {
         echo "\n";
         echo "\nAngsuran bulan ke- $i";
         echo "\nSaldo Pokok (SP) : ", $saldo_pokok, "-", $angsuran_pokok, "=", $saldo_pokok=$saldo_pokok-$angsuran_pokok;
         echo "\nBesaran bunga : ", $saldo_pokok, " x ", $flower, " = ", $besaran_bunga=$saldo_pokok*$flower;
         echo "\nTotal Angsuran Bulan ke-$i : ", $angsuran_pokok, " + ", $besaran_bunga, " = ", $total_angsuran=$angsuran_pokok+$besaran_bunga;
         $totalCount+=$total_angsuran;
         echo "\n";
      }
      }
      echo "\nTotal yang harus dibayar adalah ", $totalCount;
} else if (preg_match("/hari/i", $choose)){
   $flower = 0.005;
   $angsuran_pokok = $x/$number;
   echo "\n";
     //looping
     $saldo_pokok=$x;
     $besaran_bunga = $x*$flower;
     $total_angsuran = $angsuran_pokok + $besaran_bunga;
   for ($i=1;$i<=$number;$i++) {
      if ($i == 1 ) {
         echo "\n";
         echo "\nAngsuran hari ke- $i";
         echo "\nBesaran bunga : ", $x, " x ", $flower, " = ", $besaran_bunga;
         echo "\nAngsuran pokok : ", $x, " / ", $number, " = ", $angsuran_pokok;
         echo "\nTotal Angsuran Hari ke-$i : ", $angsuran_pokok, " + ", $besaran_bunga, " = ", $total_angsuran;
         echo "\n";
      } elseif($i == 2){
         echo "\n";
         echo "\nAngsuran hari ke- $i";
         echo "\nSaldo Pokok (SP) : ", $x, " - ", $angsuran_pokok, " = ", $saldo_pokok=$x-$angsuran_pokok;
         echo "\nBesaran bunga : ", $saldo_pokok, " x ", $flower, " = ", $besaran_bunga=$saldo_pokok*$flower;
         echo "\nTotal Angsuran Bulan ke-$i : ", $angsuran_pokok, " + ", $besaran_bunga, " = ", $total_angsuran=$angsuran_pokok+$besaran_bunga;
         echo "\n";
      }else {
         echo "\n";
         echo "\nAngsuran hari ke- $i";
         echo "\nSaldo Pokok (SP) : ", $saldo_pokok, " - ", $angsuran_pokok, " = ", $saldo_pokok=$saldo_pokok-$angsuran_pokok;
         echo "\nBesaran bunga : ", $saldo_pokok, " x ", $flower, " = ", $besaran_bunga=$saldo_pokok*$flower;
         echo "\nTotal Angsuran hari ke-$i : ", $angsuran_pokok, " + ", $besaran_bunga, " = ", $total_angsuran=$angsuran_pokok+$besaran_bunga;
         echo "\n";
      }
      }
}
?>