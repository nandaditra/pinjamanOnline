<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pinjaman Online</title>
    <link rel="stylesheet" href="stylelist.css">
    <script src="https://kit.fontawesome.com/de7705137f.js" crossorigin="anonymous"></script>
  </head>
  <body>

     <header>
       <div class="container">
        <nav class="navbar navbar-light bg-white">
            <div>
                <a class="navbar-brand" href="#">
                    <h5><i class="fa-regular fa-circle-user fa-1x"></i><?php echo " ".$_SESSION['username']." " ?></h5>
                </a>
            </div>

            <div class="images-logo">
                <img src="PinjamanOnline.png"alt="PinjamanOnline.png"width="25%">
            </div>

            <div>
                   <h5>Total Tagihan</h5>
            </div>          
          </nav>

       </div>
    </header> 

    <main>
        <div class="container fr">
            <div> 
                <?php
                    $durasiTenor = $_SESSION['durasiTenor'];
                    $nominalPinjaman = $_SESSION['nominalPinjaman'];
                    $totalTagihan = null;
                    $saldopokok = $nominalPinjaman;
                    $flower1 = 0.005;
                    $flower2 = 0.1;
                    $besaranbunga1 = $saldopokok*$flower1;
                    $besaranbunga2 = $saldopokok*$flower2;
                    $totalcount = 0;
                    $angsuranpokok = $saldopokok/$durasiTenor;
                   //  if ($_SESSION['Time'] > 0){
                   //      $saldopokok -= ($_SESSION['Time']) * $angsuranpokok;
                   //  }

                       if ($durasiTenor == 3){
                             echo "<p>This is a day tenor</p>";
                             $angsuranpokok = $saldopokok/3;
                             $totalangsuran = $angsuranpokok + $besaranbunga1;
                                for ($i = $_SESSION['Time']+1; $i <= $durasiTenor; $i++){
                                    if ($i ==1){
                                        echo "\n<div class='col border border-danger rounded list-data'>";
                                        echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                        echo "\n<p>Besaran bunga : ". $saldopokok. " x ". $flower1. " = ". $besaranbunga1."</p>";
                                        echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "3". " = ". $angsuranpokok."</p>";
                                        echo "\n<p>Total Angsuran Hari ke-$i : ". $angsuranpokok. " + ". $besaranbunga1. " = ". $totalangsuran."</p>";
                                        echo "\n</div>";
                                        
                                    }
                                    else {
                                        $A = $saldopokok - $angsuranpokok;
                                        $flower = $A*$flower1;
                                        $total = $angsuranpokok + $flower;
                                        $totalcount+=$total;
                                        echo "\n<div class='col border border-danger rounded list-data'>";
                                        echo "\n<h4  class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                        echo "\n<p>Besaran bunga : ". $A. " x ". $flower1. " = ". $flower."</p>";
                                        echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "3". " = ". $angsuranpokok."</p>";
                                        echo "\n<p>Total Angsuran Hari ke-$i : ". $angsuranpokok. " + ". $flower. " = ". $total."</p>";
                                        echo "\n</div>";
                                    } 
                                    
                                    
                               }
                       }
                       else if ($durasiTenor == 7){
                        echo "\n<p>This is a day tenor</p>";
                           $angsuranpokok = $saldopokok/7;
                           $totalangsuran = $angsuranpokok + $besaranbunga1;
                           for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                               if ($i ==1){
                                   $totalcount+=$totalangsuran;
                                   echo "\n<div class='col border border-danger rounded list-data'>";
                                   echo "\n<h4  class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                   echo "\n<p>Besaran bunga : ". $saldopokok. " x ". $flower1. " = ". $besaranbunga1."</p>";
                                   echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "7". " = ". $angsuranpokok."</p>";
                                   echo "\n<p>Total Angsuran Hari ke-$i : ". $angsuranpokok. " + ". $besaranbunga1. " = ". $totalangsuran."</p>";
                                   echo "\n</div>";
                               }
                               else {
                                   $A = $saldopokok - $angsuranpokok;
                                   $flower = $A*$flower1;
                                   $total = $angsuranpokok + $flower;
                                   $totalcount+=$total;
                                   echo "\n<div class='col border border-danger rounded list-data'>";
                                   echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                   echo "\n<p>Besaran bunga : ". $A. " x ". $flower1. " = ". $flower."</p>";
                                   echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "7". " = ". $angsuranpokok."</p>";
                                   echo "\n<p>Total Angsuran Hari ke-$i : ". $angsuranpokok. " + ". $flower. " = ". $total."</p>";
                                   echo "\n</div>";
                                }      
                               
                                   }
                       
                       }
                       elseif ($durasiTenor == 14){
                        echo "\n<p>This is a day tenor</p>";
                           $angsuranpokok = $saldopokok/14;
                           $totalangsuran = $angsuranpokok + $besaranbunga1;
                           for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                               if ($i ==1){
                                   $totalcount+=$totalangsuran;
                                   echo "\n<div class='col border border-danger rounded list-data'>";
                                   echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                   echo "\n<p>Besaran bunga : ". $saldopokok. " x ". $flower1. " = ". $besaranbunga1."</p>";
                                   echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "14". " = ". $angsuranpokok."</p>";
                                   echo "\n<p>Total Angsuran Hari ke-$i : ". $angsuranpokok. " + ". $besaranbunga1. " = ". $totalangsuran."</p>";
                                   echo "\n</div>";
                               }
                               else {
                                 $A = $saldopokok - $angsuranpokok;
                                 $flower = $A*$flower1;
                                 $total = $angsuranpokok + $flower;
                                 $totalcount+=$total; 
                                 echo "\n<div class='col border border-danger rounded list-data'>";
                                 echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                 echo "\n<p>Besaran bunga : ". $A. " x ". $flower1. " = ". $flower."</p>";
                                 echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "14". " = ". $angsuranpokok."</p>";
                                 echo "\n<p>Total Angsuran Hari ke-$i : ". $angsuranpokok. " + ". $flower. " = ". $total."</p>";
                                 echo "\n</div>";  
                              }      
                               
                                   }
                       
                       }
                       elseif ($durasiTenor == 30){
                        echo "\n===========================";
                        echo "\n<p>This is a day tenor</p>";
                           $angsuranpokok = $saldopokok/30;
                           $totalangsuran = $angsuranpokok + $besaranbunga1;
                           for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                               if ($i ==1){
                                   $totalcount+=$totalangsuran;
                                   echo "\n<div class='col border border-danger rounded list-data'>";
                                   echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                   echo "\n<p>Besaran bunga : ". $saldopokok. " x ". $flower1. " = ". $besaranbunga1."</p>";
                                   echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "30". " = ". $angsuranpokok."</p>";
                                   echo "\n<p>Total Angsuran Hari ke-$i : ". $angsuranpokok. " + ". $besaranbunga1. " = ". $totalangsuran."</p>";
                                   echo "\n</div>";

                               }
                               else {
                                 $A = $saldopokok - $angsuranpokok;
                                 $flower = $A*$flower1;
                                 $total = $angsuranpokok + $flower;
                                 $totalcount+=$total;
                                 echo "\n<div class='col border border-danger rounded list-data'>";
                                 echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                 echo "\n<p>Besaran bunga : ". $A. " x ". $flower1. " = ". $flower."</p>";
                                 echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "30". " = ". $angsuranpokok."</p>";
                                 echo "\n<p>Total Angsuran Hari ke-$i : ". $angsuranpokok. " + ". $flower. " = ". $total."</p>";
                                 echo "\n</div>";  
                              }      
                               
                                   }
                       
                       }
                       elseif($durasiTenor == 90){
                        echo "\n<p>This is a month tenor</p>";
                           $angsuranpokok = $saldopokok/3;
                           $totalangsuran = $angsuranpokok + $besaranbunga2;
                           for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                               if ($i ==1){
                                   $totalcount+=$totalangsuran;
                                   echo "\n<div class='col border border-danger rounded list-data'>";
                                   echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                   echo "\n<p>Besaran bunga : ". $saldopokok. " x ". $flower2. " = ". $besaranbunga2."</p>";
                                   echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "3". " = ". $angsuranpokok."</p>";
                                   echo "\n<p>Total Angsuran Bulan ke-$i : ". $angsuranpokok. " + ". $besaranbunga2. " = ". $totalangsuran."</p>";
                                   echo "\n</div>";
                               }
                               else {
                                   $A = $saldopokok - $angsuranpokok;
                                   $flower = $A*$flower2;
                                   $total = $angsuranpokok + $flower;
                                   $totalcount+=$total;
                                   echo "\n<div class='col border border-danger rounded list-data'>";
                                   echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                   echo "\n<p>Besaran bunga : ". $A. " x ". $flower2. " = ". $flower."</p>";
                                   echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "3". " = ". $angsuranpokok."</p>";
                                   echo "\n<p>Total Angsuran Bulan ke-$i : ". $angsuranpokok. " + ". $flower. " = ". $total."</p>";
                                   echo "\n</div>";  
                              }      
                               
                                   }
                       }
                       elseif($durasiTenor == 180){
                        echo "\n===========================";
                        echo "\n<p>This is a month tenor</p>";
                           $angsuranpokok = $saldopokok/6;
                           $totalangsuran = $angsuranpokok + $besaranbunga2;
                           for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                               if ($i ==1){
                                   $totalcount+=$totalangsuran;
                                   echo "\n<div class='col border border-danger rounded list-data'>";
                                   echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                   echo "\n<p>Besaran bunga : ". $saldopokok. " x ". $flower2. " = ". $besaranbunga2."</p>";
                                   echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "6". " = ". $angsuranpokok."</p>";
                                   echo "\n<p>Total Angsuran Bulan ke-$i : ". $angsuranpokok. " + ". $besaranbunga2. " = ". $totalangsuran."</p>";
                                   echo "\n</div>";
                               }
                               else {
                                 $A = $saldopokok - $angsuranpokok;
                                 $flower = $A*$flower2;
                                 $total = $angsuranpokok + $flower;
                                 $totalcount+=$total;
                                 echo "\n<div class='col border border-danger rounded list-data'>";
                                 echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                 echo "\n<p>Besaran bunga : ". $A. " x ". $flower2. " = ". $flower."</p>";
                                 echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "6". " = ". $angsuranpokok."</p>";
                                 echo "\n<p>Total Angsuran Bulan ke-$i : ". $angsuranpokok. " + ". $flower. " = ". $total."</p>";
                                 echo "\n</div>";
                                }      
                               
                                   }
                           
                       }
                       elseif($durasiTenor == 365){
                           $angsuranpokok = $saldopokok/12;
                           $totalangsuran = $angsuranpokok + $besaranbunga2;
                           for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                               if ($i ==1){
                                   $totalcount+=$totalangsuran;
                                   echo "\n<div class='col border border-danger rounded list-data'>";
                                   echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                   echo "\n<p>Besaran bunga : ". $saldopokok. " x ". $flower2. " = ". $besaranbunga2."</p>";
                                   echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "12". " = ". $angsuranpokok."</p>";
                                   echo "\n<p>Total Angsuran Bulan ke-$i : ". $angsuranpokok. " + ". $besaranbunga2. " = ". $totalangsuran."</p>";
                                   echo "\n</div>";
                               }
                               else {
                                 $A = $saldopokok - $angsuranpokok;
                                 $flower = $A*$flower2;
                                 $total = $angsuranpokok + $flower;
                                 $totalcount+=$total;
                                 echo "\n<div class='col border border-danger rounded list-data'>";
                                 echo "\n<h4 class='badge badge-danger'>Angsuran Hari ke- $i</h4>";
                                 echo "\n<p>Besaran bunga : ". $A. " x ". $flower2. " = ". $flower."</p>";
                                 echo "\n<p>Angsuran pokok : ". $saldopokok. " / ". "3". " = ". $angsuranpokok."</p>";
                                 echo "\n<p>Total Angsuran Bulan ke-$i : ". $angsuranpokok. " + ". $flower. " = ". $total."</p>";
                                 echo "\n</div>";
                                }      
                               
                                   }
                           
                       }
                ?>
             </div>
            
            <div>
              <?php 
                    if ($_SESSION['totalTagihan'] > 0){
                        echo '<button type="button" class="btn btn-danger float-sm-right"><a href="a_index1.php">Kembali</a></button>';
                    }
                    else{
                        echo '<button type="button" class="btn btn-danger float-sm-right"><a href="a_index1.php">Kembali</a></button>';
                    }
                ?>
                
            </div>
        </div>
    </main>
 
    <br>
    <footer>
        <p>@copyright2022-Designed by Kelompok 7</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>