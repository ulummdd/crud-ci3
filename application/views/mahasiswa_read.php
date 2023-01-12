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
        	<h1 class="h2">Lihat data</h1>
        	<div class="btn-toolbar mb-2 mb-md-0">
	          <div class="btn-group me-2">
	            <a href="<?php echo site_url('ikhya_ulummuddin/120/lihat_data'); ?>" class="btn btn-sm btn-outline-secondary">Tambah data</a>
	          </div>
	        </div>
    	</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<table class="table table-hover tabel-data">
					<thead>
						<tr>
							<th style="text-align:right;">No.</th>
							<th style="text-align:right;padding-left:80px;">NPM</th>
							<th style="text-align:center;">Nama</th>
							<th style="text-align:center;">Program Studi</th>
							<th style="text-align:center;">Fakultas</th>
							<th style="text-align:right;">Angkatan</th>
							<th style="text-align:right;">Semester</th>
							<th style="text-align:center;border-right:none;" colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody class="table-group-divider">
						<?php
							foreach($mahasiswas->result() as $i=>$data){
						?>
						<tr>
							<th style="text-align:right;padding:20px;"><?= ++$i; ?></td>
							<td style="text-align:right;padding:20px 8px 20px 20px;"><?= $data->npm; ?></td>
							<td style="text-align:center;padding:20px;"><?= $data->nama; ?></td>
							<td style="text-align:center;padding:20px;"><?= $data->prodi; ?></td>
							<td style="text-align:center;padding:20px;"><?= $data->fakultas; ?></td>
							<td style="text-align:right;padding:20px 8px 20px 20px;"><?= $data->angkatan; ?></td>
							<td style="text-align:right;padding:20px 8px 20px 20px;"><?= $data->semester; ?></td>
							<td style="text-align:center;padding:13px;">
								<a class="btn btn-outline-primary" style="margin-right:4px;" href="<?= base_url('ikhya_ulummuddin/120/edit_data/'.$data->id); ?>">Edit</a>
								<a class="btn btn-outline-danger" style="margin-left:4px;" href="<?= base_url('ikhya_ulummuddin/120/hapus_data/'.$data->id); ?>">Hapus</a>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>
	</div>
	</div>
	<?php $this->load->view("_partials/js.php"); ?>
</body>
</html>