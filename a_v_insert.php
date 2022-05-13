<html>
<head>
<title>MVC</title>
</head>
<body>
<form action="" method="POST">
<table>
<tr align="center">
<td>NIK </td>
<td><input type="text" 
name="nik" size="45" /></td>
</tr>
<tr align="center">
<td>Nominal Pinjaman </td>
<td><input type="text" 
name="nominalPinjaman" size="45"/></td>
</tr>
<tr align="center">
<td>Durasi Tenor </td>
<td><input type="text" 
name="durasiTenor" size="45"/></td>
</tr>
<tr align="center">
<td><input type="submit" 
name="submit"/></td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){ 
$main = new a_c_daftarPeminjam();
$main->insert();
}
?>
