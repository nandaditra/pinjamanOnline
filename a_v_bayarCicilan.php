<html>
<head>
<title>MVC</title>
</head>
<body>
<form action="a_c_daftarPeminjam.php" method="POST">
<table border ="1">

<tr align="center">
<td>Nominal Bayar Cicilan</td>
<td><input type="text" 
name="nominalBayarCicilan" value="" 
size="45"/></td>
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
$main->update("nominalBayarCicilan");
}
?>