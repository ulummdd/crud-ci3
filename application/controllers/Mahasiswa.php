<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('A_mahasiswa', 'model');
		$this->table='mahasiswa';
		if(!$this->session->userdata('username')){
    		redirect('');
		}
	}

	public function home(){
		$this->load->view('home');
	}

	public function add(){
		$this->load->view('mahasiswa_add');
	}

	public function save(){
		if(isset($_POST['tambah'])){
			$nama = $this->input->post('nama');
			$npm = $this->input->post('npm');
			$prodi = $this->input->post('prodi');
			$fakultas = $this->input->post('fakultas');
			$angkatan = $this->input->post('angkatan');
			$semester = $this->input->post('semester');

			if($nama and $npm and $prodi and $fakultas and $angkatan and $semester){
				$data = ['nama'=>$nama, 'npm'=>$npm, 'prodi'=>$prodi, 'fakultas'=>$fakultas, 'angkatan'=>$angkatan, 'semester'=>$semester];
				$this->model->insert_data($this->table, $data);
			}
			redirect('ikhya_ulummuddin/120/lihat_data');
		}
	}

	public function show(){
		$data['mahasiswas'] = $this->model->get_all_data($this->table);
		$this->load->view('mahasiswa_read', $data);
	}

	public function edit($id){
		$data['mahasiswa'] = $this->model->get_data($this->table, ['id'=>$id])->row();
		$this->load->view('mahasiswa_edit', $data);
	}

	public function halo(){
		if(isset($_POST['ubah'])){
			$nama = $this->input->post('nama');
			$npm = $this->input->post('npm');
			$prodi = $this->input->post('prodi');
			$fakultas = $this->input->post('fakultas');
			$angkatan = $this->input->post('angkatan');
			$semester = $this->input->post('semester');
			$id = $this->input->post('id');
	
			if($nama and $npm and $prodi and $fakultas and $angkatan and $semester){
				$dataa = ['nama'=>$nama, 'npm'=>$npm, 'prodi'=>$prodi, 'fakultas'=>$fakultas, 'angkatan'=>$angkatan, 'semester'=>$semester];
				$this->model->update_data($this->table, $dataa, ['id'=>$id]);
			}
			redirect('mahasiswa/show');
		}
	}

	public function delete($id){
		$delete=$this->model->delete_data($this->table, ['id'=>$id]);
		if($delete){
			redirect('mahasiswa/show');
		}
	}
}
?>