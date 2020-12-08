<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}	
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>

<body>
	<br>
	<br>
	<center>
		<h2>Halaman Login User</h2>
		<br />
		<br />
		<form action="login_action.php" method="POST" onSubmit="return validasi()">

			<label>Username:</label>
			<input type="text" name="username" id="username" /><br><br>

			<label>Password:</label>
			<input type="password" name="password" id="password" /><br><br>

			<input type="submit" value="Login" name="submit">

		</form>
	</center>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username != "" && password != "") {
			return true;
		} else {
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>

</html>