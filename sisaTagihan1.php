<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");

}     
?>
       <div class="modal fade" id="sisaTagihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Sisa Tagihan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nominal Saat ini</label>
                                <h1><?php echo "Rp. ".$_SESSION['totalTagihan'] ?></h1>
                            </div>
                        </form>
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
                       
                        
                    </div>
                    </div>
                </div>
          </div>

