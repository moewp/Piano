<?php
	include("koneksi.php");
	
	if(isset($_POST['register'])) {
		session_start(); 
		
		$namad = mysqli_real_escape_string($db, $_POST['namad']);
		$namab = mysqli_real_escape_string($db, $_POST['namab']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$pw = mysqli_real_escape_string($db, $_POST['pw']);
		$tgl_lahir = mysqli_real_escape_string($db, $_POST['tgl_lahir']);
		$jenkel = mysqli_real_escape_string($db, $_POST['jenkel']);
		
		$query = mysqli_query($db, "INSERT INTO `user`(`namad`, `namab`, `email`, `pw`, `tgl_lahir`, `jenkel`) VALUES ('$namad', '$namab', '$email', '$pw', '$tgl_lahir', '$jenkel')");
		
		if($query) {
			echo "<script>alert('Pendaftaran Berhasil!');window.location='login.php'</script>";
		} else {
			echo "<script>alert('Pendaftaran Gagal!')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="anjay.css">
</head>

<body>
    <div class="container">
    <div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="partiture.php">Partiture</a></li>
                <li><a href="produk.php">Market</a></li>
                <li><a href="abotus.php">About Us</a></li>
                <li><a href="regis.php">Registration</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div><br>

        <!-- Slider -->
        <div class="slider">
            <img src="banner.jpg" width="980px" height="500px">
        </div>

        <!-- Form -->
        <h3>FORM REGISTRASI</h3>
        <form role="form" action="" method="post" class="daftar">
            <table cellspacing="5">
                <tr>
                    <td>Nama Depan</td>
                    <td>:</td>
                    <td><input type="text" name="namad" placeholder="Nama Depan..." required ></td>
                </tr>
                <tr>
                    <td>Nama Belakang</td>
                    <td>:</td>
                    <td><input type="text" name="namab" placeholder="Nama Belakang..." required ></td>
                </tr>
                <tr>
                    <td>Alamat Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" placeholder="Email Anda..." required ></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="pw" placeholder="Password Anda..." required ></td>
                </tr>
                <tr>
                    <td>Tranggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_lahir" required /></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenkel" value="Pria">Pria
                        <input type="radio" name="jenkel" value="Wanita">Wanita
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <p class="syarat"><input type="checkbox" name="" required > Syarat dan Ketentuan yang berlaku <a
                                href="">Pianistpalace.com</a></p>
                    </td>
                </tr>
				<tr>
					<td colspan="3">
						<p>Sudah punya akun? <a href="login.php">login</a></p>
					</td>
				</tr>
                <tr>
                    <td colspan="3">
                        <input id="submit" type="submit" name="register" value="Simpan">
                    </td>
                </tr>
            </table>
        </form>

        <!-- Footer -->
        <div id="footer">
            <p>Copyright &copy; 2019</p>
        </div>
    </div>
</body>

</html>