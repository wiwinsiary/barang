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

<body class="m-2">
	<h2>Manajemen Data Barang</h2>
	<label>
		<font color="blue">Home</font> > Tambah Data
	</label><br>
	<form action="simpan.php" method="POST" class="m-3" enctype="multipart/form-data">
		<fieldset>
			<legend>Form Tambah Data</legend>
			<div class="mb-3 row">
				<label for="" class="col-sm-2 col-form-label">Nama Barang</label>
				<div class="col-sm-10">
					<input type="text" name="nama_barang" class="form-control">
				</div>
				<div class=" mb-3 row">
					<label for="" class="col-sm-2 mt-3 col-form-label">Jenis Barang</label>
					<select name="jenis_barang" class="form-select form-select-sm-10 m-3" style="width: 150px;"
						aria-label=".form-select-sm example">
						<option selected>Pilih</option>
						<option value="1">Box</option>
						<option value="2">Pack</option>
					</select>
				</div>
				<label for="" class="col-sm-2 col-form-label">Kondisi</label>
				<div class="col-sm-10">
					<input name="kondisi" type="text" class="form-control">
				</div>
				<div class=" mb-3 row">
					<label for="" class="col-sm-2 mt-3 col-form-label">Tanggal Masuk</label>
					<div class="col-sm-4 mt-2">
						<input type="date" class="form-control" name="tgl_masuk">
					</div>
				</div>
				<label for="" class="col-sm-2 col-form-label">Nama Distributor</label>
				<div class="col-sm-10">
					<input name="nama_distributor" type="text" class="form-control">
				</div>
				<label for="" class="col-sm-2 mt-2 col-form-label">Alamat</label>
				<div class="col-sm-10 mt-2">
					<input name="alamat" type="text" class="form-control">
				</div>
				<label for="" class="col-sm-2 mt-2 col-form-label">Gambar</label>
				<div class="col-sm-10 mt-2">
					<input name="gambar" type="file" accept=".jpg,.jpeg,.png" class="form-control">
				</div>
			</div>
			<div class="gap-2" style="margin-left: 15.7rem;">
				<button type="submit" class="btn btn-success" type="button">Simpan</button>
				<button type="reset" class="btn btn-warning" type="button">Reset</button>                
			</div>
		</fieldset>
	</form>
	<div>        
		<button class="btn btn-primary" type="button"> -- MENU UTAMA </button> </div>
	<table class="table table-bordered mt-2">
		<thead>
			<th style="width: 40px; text-align: center;">No</th>
			<th style="text-align: center;">Nama Barang</th>
			<th style="text-align: center;">Jenis Barang</th>
			<th style="text-align: center;">Tanggal Masuk</th>
			<th style="text-align: center;">Kondisi</th>
			<th style="text-align: center;">DIstributor</th>
			<th style="text-align: center;">Alamat</th>
			<th width="20%" style="text-align: center;">Gambar</th>
			<th style="width: 150px; text-align: center;">Aksi</th>
		</thead>
		<tbody>
			<?php 
			$no=1;
			include "koneksi.php";
			$sql = mysqli_query($koneksi,"SELECT * FROM tabel_barang");
			while($data = mysqli_fetch_array($sql)){
				echo "
				<tr>
					<td>$no</td>
					<td>$data[nama_barang]</td>
					<td>$data[jenis_barang]</td>
					<td>$data[tgl_masuk]</td>
					<td>$data[kondisi]</td>
					<td>$data[nama_distributor]</td>
					<td>$data[alamat]</td>
					<td>
						<a href='upload/$data[gambar]' target='_BLANK'>
							<img src='upload/$data[gambar]' width='100%'>
						</a>
					</td>
					<td>
						<a href=\"ubah.php?id_barang=$data[id_barang]\" class=\"btn btn-success\">Edit</a>
						<a onclick=\"return confirm('Anda yakin ingin menghapus data ini?')\" href=\"hapus.php?id=$data[id_barang]\" class=\"btn btn-danger\">Hapus</a>
					</td>
				</tr>";
				$no++;
			} 
			?>           
		</tbody>
	</table>
</body>

</html>
