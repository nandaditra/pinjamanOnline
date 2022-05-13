<html>
<head></head>
<body>
<h2> Rincian Pinjaman </h2>
 <table border = "1">
 <tr align="center">
 <td>NIK</td>
 <td>Nominal Pinjam</td>
 <td>Durasi Tenor</td>
 <td colspan="2">Aksi</td>
 </tr>
 <?php
 while($row = $this->model->fetch($data)){
 echo "
 <tr>
 <td>$row[0]</td>
 <td>$row[1]</td>
 <td>$row[2]</td>
 <td><a 
href='a_index.php?e=$row[0]'>Edit</a></td>
 <td><a href='a_index.php?d=$row[0]' 
onClick=\"return confirm('Hapus 
Data?')\"\>Delete</a></td>
 </tr>";
 }
 ?>
 </table>
 <a href='a_index.php?i=add'>Buat Pinjaman</a>
 <a href='a_bayarCicilan.php?i=add'>Bayar Cicilan</a>
 <a class="keluar" href='logout.php'>Logout</a></div>
</body>
</html>