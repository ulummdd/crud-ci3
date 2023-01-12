<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("_partials/head.php"); ?>
</head>
<body>
	<?php $this->load->view("_partials/navbar.php"); ?>
	<div class="container-fluid">
  	<div class="row">
  	<main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
      	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        	<h1 class="h2">Edit data mahasiswa</h1>
        	<div class="btn-toolbar mb-2 mb-md-0">
	        </div>
    	</div>
			<form method="post" action="<?= base_url('mahasiswa/proses_edit'); ?>">
			<div class="row" style="margin-top:24px;">
				<div class="col">
					<div class="mb-3">
	  					<label for="id" class="form-label">ID</label>
	  					<input type="text" class="form-control" id="id" name="id" value="<?= $mahasiswa->id; ?>" disabled>
					</div>
					<div class="mb-3">
	  					<label for="nama" class="form-label">Nama</label>
	  					<input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa->nama; ?>" required autocomplete="off">
					</div>
					<div class="mb-3">
	  					<label for="npm" class="form-label">NPM</label>
	  					<input type="number" class="form-control" id="npm" name="npm" value="<?= $mahasiswa->npm; ?>" required autocomplete="off">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="mb-3">
	  					<label for="prodi" class="form-label">Program studi</label>
	  					<input type="text" class="form-control" id="prodi" name="prodi" value="<?= $mahasiswa->prodi; ?>" required autocomplete="off">
					</div>
				</div>
				<div class="col">
					<div class="mb-3">
	  					<label for="fakultas" class="form-label">Fakultas</label>
	  					<input type="text" class="form-control" id="fakultas" name="fakultas" value="<?= $mahasiswa->fakultas; ?>" required autocomplete="off">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="mb-3">
	  					<label for="angkatan" class="form-label">Angkatan</label>
	  					<input type="number" class="form-control" id="angkatan" name="angkatan" value="<?= $mahasiswa->angkatan; ?>" required autocomplete="off">
					</div>
				</div>
				<div class="col">
					<div class="mb-3">
	  					<label for="semester" class="form-label">Semester</label>
	  					<input type="number" class="form-control" id="semester" name="semester" value="<?= $mahasiswa->semester; ?>" required autocomplete="off">
					</div>
				</div>
			</div>
			<div class="row float-end" style="margin-top:10px;">
				<div class="col">
					<a class="btn btn-outline-danger" href="../show" role="button">Batalkan</a>
					<button type="submit" name="ubah" class="btn btn-primary" style="margin-left:10px;">Konfirmasi</button>
				</div>
			</div>
			</form>
		</main>
	</div>
	</div>
	<?php $this->load->view("_partials/js.php"); ?>
</body>
</html>