<?php
	include("koneksi.php");
	
	if(isset($_POST['login'])) {
		session_start();
		
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$pw = mysqli_real_escape_string($db, $_POST['pw']);
		
		$query = mysqli_query($db, "SELECT * FROM `user` WHERE `email` = '$email' AND `pw` = '$pw'");
		
		if(mysqli_num_rows($query) == 1) {
			echo "<script>alert('Login Berhasil!);window.location='home.php'</script>";
			header("location: home.php");
		} else {
			echo "<script>alert('Email dan Password yang dimasukkan salah!')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pianist Login</title>
    <link rel="stylesheet" type="text/css" href="anjay.css">
</head>

<body>
    <div class="container">

        <!--menu-->
        <div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="partiture.php">Partiture</a></li>
                <li><a href="produk.php">Market</a></li>
                <li><a href="abotus.php">About Us</a></li>
                <li><a href="regis.php">Registration</a></li>
                <li><a href="login.php">LogIn</a></li>
            </ul>
        </div>

        <!-- Slider -->
        <div class="slider">
            <img src="banner.jpg" width="980px" height="500px">
        </div>

        <!-- Form -->
        <h3> LOGIN </h3>
        <form role="form" method="post" action="" align="center">
            <div align="center">
            <table align="center">
                <tr>
                    <td><label for="Email" >Email</label></td>
                    <td><input class="form-control" type="text" name="email" placeholder="Email" required ></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input class="form-control" type="password" name="pw" placeholder="Password" required ></td>
                </tr>
                
                <tr>
                    <td><a href="regis.php">Daftar</a></td>
                    <td align="right"><button type="submit" name="login" class="btn btn-primary">LOGIN</button></td>
                </tr>
            </table>
            </div>
        </form>
		
        <!-- Footer -->
        <div id="footer">
            <p>Copyright &copy; 2019</p>
        </div>
    </div>
</body>

</html>