<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("_partials/head.php"); ?>
</head>
<body>
	<?php $this->load->view("_partials/navbar.php"); ?>
	<div class="container-fluid">
  	<div class="row">
  	<?php $this->load->view("_partials/sidebar.php"); ?>
  	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        	<h1 class="h2">Tambah data</h1>
        	<div class="btn-toolbar mb-2 mb-md-0">
	          <div class="btn-group me-2">
	            <a href="<?php echo site_url('ikhya_ulummuddin/120/lihat_data'); ?>" class="btn btn-sm btn-outline-secondary">Lihat data</a>
	          </div>
	        </div>
    	</div>
		<div class="container">
			<form method="post" action="<?= base_url('mahasiswa/save'); ?>">
			<div class="row" style="margin-top:24px;">
				<div class="col">
					<div class="mb-3">
	  					<label for="nama" class="form-label">Nama</label>
	  					<input type="text" class="form-control" id="nama" name="nama" required autocomplete="off">
					</div>
					<div class="mb-3">
	  					<label for="npm" class="form-label">NPM</label>
	  					<input type="number" class="form-control" id="npm" name="npm" required autocomplete="off">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="mb-3">
	  					<label for="prodi" class="form-label">Program studi</label>
	  					<input type="text" class="form-control" id="prodi" name="prodi" required autocomplete="off">
					</div>
				</div>
				<div class="col">
					<div class="mb-3">
	  					<label for="fakultas" class="form-label">Fakultas</label>
	  					<input type="text" class="form-control" id="fakultas" name="fakultas" required autocomplete="off">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="mb-3">
	  					<label for="angkatan" class="form-label">Angkatan</label>
	  					<input type="number" class="form-control" id="angkatan" name="angkatan" required autocomplete="off">
					</div>
				</div>
				<div class="col">
					<div class="mb-3">
	  					<label for="semester" class="form-label">Semester</label>
	  					<input type="number" class="form-control" id="semester" name="semester" required autocomplete="off">
					</div>
				</div>
			</div>
			<div class="row float-end" style="margin-top:10px;">
				<div class="col">
					<button type="submit" class="btn btn-primary" name="tambah" style="margin-left:10px;">Tambah</button>
				</div>
			</div>
			</form>
		</div>
		</main>
	</div>
	</div>
	<?php $this->load->view("_partials/js.php"); ?>
</body>
</html>