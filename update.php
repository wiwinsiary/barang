<?php 
include 'koneksi.php';
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis_barang'];
$kondisi = $_POST['kondisi'];
$nama_distributor = $_POST['nama_distributor'];
$alamat = $_POST['alamat'];
$tgl_masuk = $_POST['tgl_masuk'];

$cek = mysqli_query($koneksi,"UPDATE tabel_barang SET 
	nama_barang = '$nama_barang',
	jenis_barang = '$jenis',
	kondisi = '$kondisi',
	nama_distributor = '$nama_distributor',
	alamat = '$alamat',
	tgl_masuk = '$tgl_masuk'
	WHERE id_barang = '$id_barang'");

if($cek){
	echo "<script>
			alert('Data berhasil diubah');
			window.location.href='formdatabarang.php';
		</script>";
}else{
	echo "<script>alert('Gagal')</script>";
}
?>