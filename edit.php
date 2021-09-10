<?php
	include("koneksi.php");
	
	$id = $_GET['id'];
	$query = mysqli_query($db, "SELECT * FROM `produk` WHERE `id` = '$id'");
	$row = mysqli_fetch_array($query);
	
	if(isset($_POST['submit'])) {
		$nama = $_POST['Nama'];
		$deskripsi = $_POST['Deskripsi'];
		$harga = $_POST['Harga'];
		$gambar = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		
		$query = mysqli_query($db, "UPDATE `produk` SET `Nama`='$nama', `Deskripsi`='$deskripsi', `Harga`='$harga', `gambar`='$gambar' WHERE `id` = '$id'");
		
		if($query) {
			echo "<script>alert('Data berhasil diubah!');window.location='produk.php'</script>";
		} else {
			echo "<script>alert('Data gagal dimasukkan!')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Partiture</title>
    <link rel="stylesheet" type="text/css" href="partiture.css">
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
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
		
    <div class="content">
        <br>
        <a href="produk.php">BACK</a>
        <br>
        <h1 align="center">Edit Form</h1>
        <form role="form" action="" method="post" enctype="multipart/form-data" align="center">
            <div class="form-group">
                <p><label for="Nama">Nama Barang</label></p>
                <input type="text" name="Nama" value="<?php echo $row['Nama']; ?>" required>
            </div><br>

            <div class="form-group">
                <p><label for="Deskripsi">Deskripsi</label></p>
                <input type="text" name="Deskripsi" value="<?php echo $row['Deskripsi']; ?>" required>
            </div><br>

            <div class="form-group">
                <p><label for="Harga">Harga</label></p>
                <input type="number" name="Harga" value="<?php echo $row['Harga']; ?>" required>
            </div><br>

            <div class="form-group">
                <p><label for="gambar">Foto</label></p>
                <input type="file" name="image" id="image" required />
            </div></br>

            <button id="submit" type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
         <br>
         <div id="footer" onmouseover="warnarandom4()" onmouseout="normalbg()">
            <p>Copyright &copy; 2019</p>
        </div>
</body>
</html>