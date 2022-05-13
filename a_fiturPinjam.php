<?php
session_start();


?>
<!DOCTYPE html><html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
        <link href="./css/main.css" rel="stylesheet" />
        <title>Fitur Pinjam</title>
    </head>
    <body>
    <form action="" method="POST">
        <div class="v2_2">
        <div class="v89_46">


        </div>
        <div class="v89_47">

        </div>
        <span class="v89_48">
        <?php echo "<style='color:white;' font-size = '30px;'>" . "<h1>" . $_SESSION['id'] . "</h1>"; ?>
    </span>
        <div class="v89_53"></div>
        <div class="v89_54"></div>
        <span class="v89_55">  
        <select name="durasiTenor" placeholder="Tenor">
        <option value="3">3 Hari</option>
        <option value="7">7 Hari</option>
        <option value="14">14 Hari</option>
        <option value="30">30 Hari</option>
        <option value="90">3 Bulan</option>
        <option value="180">6 Bulan</option>
        <option value="365">12 Bulan</option>



        </select>
    </span>
        <div class="v89_56"></div>
        <div class="v89_57"></div>
        <span class="v89_58">
        <input type="text"name="nominalPinjaman"placeholder="Nominal Peminjaman" required></span>
        <div class="v8_64"></div>
        <span class="v8_66">Peraturan Pinjaman</span>

        <div class="v8_75"></div>
        <input type = "submit" name = "submit">
        <span class="v8_76">Submit</span>
        <span class="v89_61">Submit</span>
</input>
        
        <span class="v8_107">PINJAM</span>
        <span class="v18_127">Halo, elangsotya</span>
        <div class="v89_64"></div>
        <span class="v19_214">Pinjaman < Rp.20.000.000,00 akan diberlakukan
tenor dalam jangka waktu 3, 7, 14, dan 30 hari
dengan bunga 0,5% per hari.

Pinjaman ≥ Rp. 20.000.000,00 akan diberlakukan
tenor dalam jangka waktu 3, 6, 12 bulan
dengan bunga 10% per bulan.</span>
<div class="v89_59">

</div>
<div class="v89_66"></div>
</div>


</form>
<a href="a_index.php"><button>Kembali</button></a>
</body>
</html>

<?php
include ("a_c_daftarPeminjam.php");
if(isset($_POST['submit'])){ 
    $nominal = $_POST['nominalPinjaman'];
    $tenor = $_POST['durasiTenor'];
    if ($nominal >= 20000000 && ($tenor == '90' || $tenor == '180' ||$tenor == '365' )){
    $main = new a_c_daftarPeminjam();
    $main->insert();
    header("location:a_index2.php");
    }
    else if ($nominal < 20000000 && ($tenor == '3' || $tenor == '7' ||$tenor == '14' ||$tenor == '30')){
        $main = new a_c_daftarPeminjam();
        $main->insert();
        header("location:a_index2.php");
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Lama Tenor Tidak Sesuai")';
        echo '</script>';
        
    }
    }


// if(isset($_POST['submit'])){ 
//     $nominal = $_POST['nominal'];
//     $insertNominal = new a_c_daftarPeminjam();
//     $insertNominal->insertNominal($_POST['id'], $nominal);
//     if($nominal<20000000){
//         header("Location: a_fiturPinjamanHari.php"); 
//     } else{
//         header("Location: a_fiturPinjamanBulan.php"); 
//     }
// // $main = new a_c_daftarPeminjam();
// // $main->update("nominalBayarCicilan");
// }
?>