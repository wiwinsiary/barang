<?php 
include 'koneksi.php';
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis_barang'];
$kondisi = $_POST['kondisi'];
$nama_distributor = $_POST['nama_distributor'];
$alamat = $_POST['alamat'];
$tgl_masuk = $_POST['tgl_masuk'];
$uploadFile = $_FILES['gambar']['name'];
move_uploaded_file($_FILES['gambar']['tmp_name'], "upload/".$uploadFile);
$cek = mysqli_query($koneksi,"INSERT INTO tabel_barang VALUES ('','$nama_barang','$jenis','$kondisi','$tgl_masuk','$nama_distributor','$alamat','$uploadFile')");
if($cek){
	echo "<script>
			alert('Data berhasil disimpan');
			window.location.href='formdatabarang.php';
		</script>";
}else{
	echo "<script>alert('Gagal')</script>";
}
?>