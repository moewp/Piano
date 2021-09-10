<?php
    include("koneksi.php");

    $id = $_GET['id'];

    echo $id;

    $query = mysqli_query($db, "DELETE FROM produk WHERE id = '$id'") or die($db);
	
    if($query) {
		echo "<script>alert('Data Berhasil dihapus!');window.location='produk.php'</script>";
    }
?>
