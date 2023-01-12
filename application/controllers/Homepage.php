<?php
class Homepage extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('A_mahasiswa', 'model');
		$this->table='user';
	}

	public function index(){
		$this->load->view('login');
	}

	public function process(){
		if(isset($_POST['login'])){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($username and $password){
				$data = ['username' => $username, 'password' => $password];
				$user_account = $this->model->get_data($this->table, $data)->row();

				if($user_account){
					$session_data = ['username' => $user_account->username, 'nama' => $user_account->nama];
					$this->session->set_userdata($session_data);
					redirect('ikhya_ulummuddin/120/home');
				}else{
					$this->session->set_flashdata('error', 'Username atau kata sandi tidak cocok');
					redirect('');
				}
			}else{
				$this->session->set_flashdata('error', 'Semua data harus diisi');
				redirect('');
			}
		}
	}
}
?>