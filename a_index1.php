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
                    <h5><i class="fa-regular fa-circle-user fa-1x"></i><?php echo  " ".$_SESSION['username']." "; ?></h5>
                </a>
            </div>

            <div class="images-logo">
                <img src="PinjamanOnline.png"alt="PinjamanOnline.png"width="25%">
            </div>

            <div>
                <a class="navbar-brand" href="logout.php">
                   <h5><i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</h5>
                </a>
            </div>          
          </nav>

       </div>
    </header> 

    <main>
        <div class="container fr">
            <div class="row justify-content-center">
                <div class="col-4 btn border border-danger bun btn-outline-danger btn-primary" data-toggle="modal" data-target="#fiturPinjam">
                  <i class="fa-solid fa-hand-holding-dollar fa-10x"></i><h3>Pinjam Online</h3>
                </div>
                <div class="col-4 btn border border-danger bun btn-outline-danger btn-primary">
                <a href="totalTagihan1.php"><i class="fa-solid fa-sack-dollar fa-10x"></i><h3>Total Tagihan</h3></a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 btn border border-danger bun btn-outline-danger btn-primary"data-toggle="modal" data-target="#bayarPinjaman">
                    <i class="fa-brands fa-amazon-pay fa-10x"></i><h3>Bayar Pinjaman</h3>
                </div>
                <div class="col-4 btn border border-danger bun btn-outline-danger btn-primary"data-toggle="modal" data-target="#sisaTagihan">
                    <i class="fa-solid fa-file-invoice fa-10x"></i><h3>Sisa Tagihan</h3>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>@copyright2022-Designed by Kelompok 7</p>
    </footer>

    <?php include 'fiturPinjam1.php'?>;

    <?php include 'bayarPinjaman1.php'?>;

    <?php include 'sisaTagihan1.php'?>;


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>