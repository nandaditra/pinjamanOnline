<?php
include_once("a_c_daftarPeminjam.php");
session_start();
?>
        <div class="modal fade" id="bayarPinjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bayar Pinjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nominal</label>
                        <select class="form-control"name="nominal" id="exampleFormControlSelect1">
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
                                            $angsuranpokok = $saldopokok/3;
                                            $totalangsuran = $angsuranpokok + $besaranbunga1;
                                            for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                                                if ($i ==1){
                                                    $totalcount+=$totalangsuran;
                                                    echo ' <option value='. $totalcount .'>'. $i .'</option>';   
                                                    
                                                }
                                                else {
                                                    $saldopokok -= $angsuranpokok;
                                                    $flower = $saldopokok*$flower1;
                                                    $total = $angsuranpokok + $flower;
                                                    $totalcount+=$total;
                                                    echo ' <option value='. $total .'>'. $i .'</option>';
                                                } 
                                                
                                                
                                                    }
                                        }
                                        elseif ($durasiTenor == 7){
                                            $angsuranpokok = $saldopokok/7;
                                            $totalangsuran = $angsuranpokok + $besaranbunga1;
                                            for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                                                if ($i ==1){
                                                    $totalcount+=$totalangsuran;
                                                    echo ' <option value='. $totalcount .'>'. $i .'</option>';
                                                }
                                                else {
                                                    $saldopokok -= $angsuranpokok;
                                                    $flower = $saldopokok*$flower1;
                                                    $total = $angsuranpokok + $flower;
                                                    $totalcount+=$total;
                                                    echo ' <option value='. $total .'>'. $i .'</option>';
                                                }      
                                                
                                                    }
                                        
                                        }
                                        elseif ($durasiTenor == 14){
                                            $angsuranpokok = $saldopokok/14;
                                            $totalangsuran = $angsuranpokok + $besaranbunga1;
                                            for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                                                if ($i ==1){
                                                    $totalcount+=$totalangsuran;
                                                    echo ' <option value='. $totalcount .'>'. $i .'</option>';
                                                }
                                                else {
                                                    $saldopokok -= $angsuranpokok;
                                                    $flower = $saldopokok*$flower1;
                                                    $total = $angsuranpokok + $flower;
                                                    $totalcount+=$total;
                                                    echo ' <option value='. $total .'>'. $i .'</option>';
                                                }      
                                                
                                                    }
                                        
                                        }
                                        elseif ($durasiTenor == 30){
                                            $angsuranpokok = $saldopokok/30;
                                            $totalangsuran = $angsuranpokok + $besaranbunga1;
                                            for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                                                if ($i ==1){
                                                    $totalcount+=$totalangsuran;
                                                    echo ' <option value='. $totalcount .'>'. $i .'</option>';
                                                    
                                                }
                                                else {
                                                    $saldopokok -= $angsuranpokok;
                                                    $flower = $saldopokok*$flower1;
                                                    $total = $angsuranpokok + $flower;
                                                    $totalcount+=$total;
                                                    echo ' <option value='. $total .'>'. $i .'</option>';
                                                }      
                                                
                                                    }
                                        
                                        }
                                        elseif($durasiTenor == 90){
                                            $angsuranpokok = $saldopokok/3;
                                            $totalangsuran = $angsuranpokok + $besaranbunga2;
                                            // for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                                                for ($i = 1; $i <= $durasiTenor; $i++){
                                                if ($i ==1){
                                                    $totalcount+=$totalangsuran;
                                                    echo ' <option value='. $totalcount .'>'. $i .'</option>';
                                                }
                                                else {
                                                    $saldopokok -= $angsuranpokok;
                                                    $flower = $saldopokok*$flower2;
                                                    $total = $angsuranpokok + $flower;
                                                    $totalcount+=$total;
                                                    echo ' <option value='. $total .'>'. $i .'</option>';
                                                }      
                                                
                                                    }
                                        }
                                        elseif($durasiTenor == 180){
                                            $angsuranpokok = $saldopokok/6;
                                            $totalangsuran = $angsuranpokok + $besaranbunga2;
                                            for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                                                if ($i ==1){
                                                    $totalcount+=$totalangsuran;
                                                    echo ' <option value='. $totalcount .'>'. $i .'</option>';
                                                }
                                                else {
                                                    $saldopokok -= $angsuranpokok;
                                                    $flower = $saldopokok*$flower2;
                                                    $total = $angsuranpokok + $flower;
                                                    $totalcount+=$total;
                                                    echo ' <option value='. $total .'>'. $i .'</option>';
                                                }      
                                                
                                                    }
                                            
                                        }
                                        elseif($durasiTenor == 365){
                                            $angsuranpokok = $saldopokok/12;
                                            $totalangsuran = $angsuranpokok + $besaranbunga2;
                                            for ($i = $_SESSION['Time'] +1; $i <= $durasiTenor; $i++){
                                                if ($i ==1){
                                                    $totalcount+=$totalangsuran;
                                                    echo ' <option value='. $totalcount .'>'. $i .'</option>';
                                                }
                                                else {
                                                    $saldopokok -= $angsuranpokok;
                                                    $flower = $saldopokok*$flower2;
                                                    $total = $angsuranpokok + $flower;
                                                    $totalcount+=$total;
                                                    echo ' <option value='. $total .'>'. $i .'</option></select>';
                                                }      
                                                
                                                    }
                                            
                                        }
                                    
                                      ?>
                         
                                      </select>
                    </div>
                    
                    <div class="modal-footer">
                      <?php
                          if ($_SESSION['totalTagihan'] > 0){
                              echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>';
                          }
                            else{
                              echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>';
                          }
                      ?>
                    
                        <button type="submit"  name = "submit"class="btn btn-primary">Bayar</button>
                   </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>

<?php
if(isset($_POST['submit'])){ 
$main = new a_c_daftarPeminjam();
$Nominal = $_POST['nominal'];
$main->update($Nominal);
}
?>
