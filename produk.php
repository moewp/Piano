<?php
	include('koneksi.php');

	if(isset($_GET['search'])) {
		$value_to_search = $_GET['value_to_search'];
		$query = mysqli_query($db, "SELECT * FROM `produk` WHERE Nama LIKE '%".$value_to_search."%' OR Deskripsi LIKE '%".$value_to_search."%' OR Harga LIKE '%".$value_to_search."%' OR gambar LIKE '%".$value_to_search."%'");
	} else {
		$query = mysqli_query($db, "SELECT * FROM `produk`");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Produk</title>
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
        </div><br>

		<a href="add.php"><button>Add New Product</button></a><br/><br/> 

		<form action="" method="get">  
			<input type="text" name="value_to_search" placeholder="Masukkan Pencarian"> 
			<input type="submit" name="search" value="SEARCH">
		</form><br>

	<table width='100%' border=1>
		<tr>
			<th>Nama Barang</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th colspan=2>Action</th>
		</tr>
		<?php 
			while($row = mysqli_fetch_array($query)) {
				echo "<tr>";
				echo "<td style='width: 150px; text-align: center;'>".$row['Nama']."</td>";
				echo "<td width: 200px; >".$row['Deskripsi']."</td>";
				echo "<td style='width: 150px; text-align: center;'>".$row['Harga']."</td>";
				echo '<td align="center"><img src="data:image.jpeg;base64,'.base64_encode($row['gambar']).'" width="100px" height="100px" align="center"></td>';
				echo "<td align='center'><a href=edit.php?id=".$row['id'].">Edit</a></td>";
				echo "<td align='center'><a href=delete.php?id=".$row['id'].">Delete</a></td>";
				echo "</tr>";
			}
		?>
</table>

		 <br>
         <div id="footer">
            <p>Copyright &copy; 2019</p>
        </div>
</body>
</html>