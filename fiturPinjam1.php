<?php
session_start();

?>

<div class="modal fade" id="fiturPinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
     <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Pinjam</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action=""method="POST">
                            <div class="text-center">
                            <h4>Peraturan Pinjaman</h4>

                                <p><b>Pinjaman < Rp.20.000.000,00 </b>akan diberlakukan 
                                tenor dalam jangka waktu 3, 7, 14, dan 30 hari
                                dengan bunga 0,5% per hari.<br><br>
                                <b>Pinjaman ≥ Rp. 20.000.000,00 </b>akan diberlakukan 
                                tenor dalam jangka waktu 3, 6, 12 bulan 
                                dengan bunga 10% per bulan.</p>
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Tenor</label>
                                <select class="form-control"name="durasiTenor" id="exampleFormControlSelect1">
                                    <option value="3">3 Hari</option>
                                    <option value="7">7 Hari</option>
                                    <option value="14">14 Hari</option>
                                    <option value="30">30 Hari</option>
                                    <option value="90">3 Bulan</option>
                                    <option value="180">6 Bulan</option>
                                    <option value="365">12 Bulan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nominal Peminjaman:</label>
                                <input type="text" class="form-control"name="nominalPinjaman"id="recipient-name">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary"name = "submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
                </div>
<?php

    include ("a_c_daftarPeminjam.php");
    if(isset($_POST['submit'])){ 
        $nominal = $_POST['nominalPinjaman'];
        $tenor = $_POST['durasiTenor'];
        if ($nominal >= 20000000 && ($tenor == '90' || $tenor == '180' ||$tenor == '365' )){
        $main = new a_c_daftarPeminjam();
        $main->insert();
        header("location:a_index1.php");
        }
        else if ($nominal < 20000000 && ($tenor == '3' || $tenor == '7' ||$tenor == '14' ||$tenor == '30')){
            $main = new a_c_daftarPeminjam();
            $main->insert();
            header("location:a_index1.php");
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Lama Tenor Tidak Sesuai")';
            echo '</script>';
            
        }
        }

?>