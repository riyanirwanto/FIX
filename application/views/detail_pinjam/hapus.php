<?php
	
	include 'onek.php';

	if (isset($_GET['id_detail_pinjam'])) {
		
		$id = $_GET['id_detail_pinjam'];
		$id2 = $_GET['id_pinjam'];
		
		$sukses=mysqli_query($dbcon,"DELETE FROM tb_detail_pinjam WHERE id_detail_pinjam = $id");
		if ($sukses) {

			$sqlll ="SELECT * FROM tb_pinjam where id_anggota='$id2'";
        	$sqlconnn = mysqli_query($dbcon, $sqlll);
        	while ($data= mysqli_fetch_array($sqlconnn)) {

			$update=$data['total_buku']-1;
			$sql = "UPDATE tb_pinjam SET total_buku=$update where id_anggota='$id2' ";
			$query = mysqli_query($dbcon,$sql);

			echo "<script>confirm('berhasil menghapus');
			window.location.href='reload';
			</script>";
	}
		}else{
		echo "<h1>Gagal Hapus</h1>";
	}
}

?>