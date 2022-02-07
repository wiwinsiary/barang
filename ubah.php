<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Latihan</title>
</head>
<?php 
include 'koneksi.php';
$id = $_GET['id_barang'];
$sql = mysqli_query($koneksi,"SELECT * FROM tabel_barang WHERE id_barang = '$id'");
$ambil = mysqli_fetch_array($sql);
?>
<body class="m-2">
	<h2>Manajemen Data Barang</h2>
	<label>
		<font color="blue">Home</font> > Ubah Data
	</label><br>
	<form action="update.php" method="POST" class="m-3">
		<fieldset>
			<input type="hidden" name="id_barang" value="<?= $ambil['id_barang'] ?>">
			<legend>Form Tambah Data</legend>
			<div class="mb-3 row">
				<label for="" class="col-sm-2 col-form-label">Nama Barang</label>
				<div class="col-sm-10">
					<input type="text" value="<?= $ambil['nama_barang'] ?>" name="nama_barang" class="form-control">
				</div>
				<div class=" mb-3 row">
					<label for="" class="col-sm-2 mt-3 col-form-label">Jenis Barang</label>
					<select name="jenis_barang" class="form-select form-select-sm-10 m-3" style="width: 150px;"
						aria-label=".form-select-sm example">
						<option <?= ($ambil['jenis_barang']=='')?"selected":""; ?>>Pilih</option>
						<option <?= ($ambil['jenis_barang']==1)?"selected":""; ?> value="1">Box</option>
						<option <?= ($ambil['jenis_barang']==2)?"selected":""; ?> value="2">Pack</option>
					</select>
				</div>
				<label for="" class="col-sm-2 col-form-label">Kondisi</label>
				<div class="col-sm-10">
					<input value="<?= $ambil['kondisi'] ?>" name="kondisi" type="text" class="form-control">
				</div>
				<div class=" mb-3 row">
					<label for="" class="col-sm-2 mt-3 col-form-label">Tanggal Masuk</label>
					<div class="col-sm-4 mt-2">
						<input value="<?= $ambil['tgl_masuk'] ?>" type="date" class="form-control" name="tgl_masuk">
					</div>
				</div>
				<label for="" class="col-sm-2 col-form-label">Nama Distributor</label>
				<div class="col-sm-10">
					<input value="<?= $ambil['nama_distributor'] ?>" name="nama_distributor" type="text" class="form-control">
				</div>
				<label for="" class="col-sm-2 mt-2 col-form-label">Alamat</label>
				<div class="col-sm-10 mt-2">
					<input value="<?= $ambil['alamat'] ?>" name="alamat" type="text" class="form-control">
				</div>
			</div>
			<div class="gap-2" style="margin-left: 15.7rem;">
				<button type="submit" class="btn btn-success" type="button">Update</button>
				<a class="btn btn-warning" href="formdatabarang.php">Kembali</a>                
			</div>
		</fieldset>
	</form>
	
</body>

</html>
