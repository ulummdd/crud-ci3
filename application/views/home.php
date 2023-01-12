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
        	<h1 class="h2">Dashboard</h1>
    	</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<p class="title">Ikhya <u>Ulum</u>muddin,</p>
					<p class="sub-title">20081010120</p>
					<p class="prodi">Informatika</p>
				</div>
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<p class="isi">Saya adalah mahasiswa program studi Informatika di UPN "Veteran" Jawa Timur dan sekarang sedang menempuh semester lima. Saya lahir di kota Surabaya pada tanggal 10 November 2001. Pastinya, jenis kelamin saya adalah laki-laki dan kewarganegaraan dari Indonesia.</p>
							<p class="isi">Saya mempunyai mempunyai banyak hobi sampai-sampai bingung apa yang harus ditulis di biodata ini.</p>
							<p class="tugas">Ini adalah tugas dari mata kuliah Pemrograman Framework kelas A</p>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row float-end" style="margin-top:24px;">
				<div class="col">
					<a class="btn btn-outline-primary" href="mahasiswa/show" role="button">Lihat data mahasiswa</a>
				</div>
			</div> -->
		</div>
	</main>
	</div>
	</div>
	<?php $this->load->view("_partials/js.php"); ?>
</body>
</html>