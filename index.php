<?php 

include 'config.php';
include 'a_m_daftarPeminjam.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: a_index1.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$modelcheck = new a_m_daftarPeminjam();
	$sql = "SELECT * FROM user WHERE email='$email' AND Password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['id'] = $row['id'];
		$totaltagihan = $modelcheck->checker();
		if ($totaltagihan['totalTagihan'] > 0){
			$_SESSION['totalTagihan'] = $totaltagihan['totalTagihan'];
			$_SESSION['durasiTenor'] = $row['durasiTenor'];
			$_SESSION['nominalPinjaman'] = $row['nominalPinjaman'];
			$_SESSION['Time'] = $row['Time'];
			header("Location: a_index1.php");
		}
		else{
			$_SESSION['totalTagihan'] = 0;
			$_SESSION['durasiTenor'] = $row['durasiTenor'];
			$_SESSION['nominalPinjaman'] = $row['nominalPinjaman'];
			$_SESSION['Time'] = $row['Time'];
		header("Location: a_index1.php");
		}
	} else {
		echo "<script>alert('Wrong Email/Password')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

	<title>Login</title>
</head>
<body class="images">
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
			<button name="submit" class="btn">Login</button></a>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
		</form>
	</div>
</body>
</html>