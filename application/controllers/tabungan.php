<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabungan extends CI_Controller {
	public function data() {
		$username = $_SESSION['username'];
		$data = array(
			'datatabungan' => $this->Tabungan_m->datatabungan(),
			'datauser' => $this->Dashboard_m->datauser($username),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('tabungan/data', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	} 
	
	public function edit($id_client) {
		$username = $_SESSION['username'];
		$data = array(
			'datatabungan' => $this->Tabungan_m->datatabunganBykd($id_client),
			'datauser' => $this->Dashboard_m->datauser($username),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('tabungan/edit', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	}
	
	public function tambah() {
		$username = $_SESSION['username'];
		$data = array(
			'datauser' => $this->Dashboard_m->datauser($username),
		);
		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('tabungan/tambah', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/foot');
	}
	public function update() {
		$data = array(
			'id_client'	=> $this->input->post('id_client'),
			'nama'		=> $this->input->post('nama'),
			'saldo'		=> $this->input->post('saldo'),
			
		);
		$update = $this->Tabungan_m->update($data);
		if($update = true) {
			echo "
				<script>
					alert('Data Berhasil Diperbarui');
					window.location.href = '".base_url('index.php/tabungan/data/')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Memperbarui Data');
					window.location.href = '".base_url('index.php/tabungan/edit/').$id_client."';
				</script>
			";
		}
	}
	public function simpan() {
		$data = array(
			'id_client'	=> $this->input->post('id_client'),
			'nama'		=> $this->input->post('nama'),
			'saldo'		=> $this->input->post('saldo'),
			
		);
		$simpan = $this->Tabungan_m->simpan($data);
		if($simpan = true) {
			echo "
				<script>
					alert('Data Berhasil Ditambahkan');
					window.location.href = '".base_url('index.php/tabungan/data/tambah')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menambahkan Data');
					window.location.href = '".base_url('index.php/tabungan/data/tambah')."';
				</script>
			";
		}
	}
	public function hapus($id_client) {
		$hapus = $this->Tabungan_m->hapus($id_client);
		if($hapus = true) {
			echo "
				<script>
					alert('Data Berhasil Dihapus');
					window.location.href = '".base_url('index.php/tabungan/data')."';
				</script>
			";
		}
		else {
			echo "
				<script>
					alert('Tidak Dapat Menghapus Data');
					window.location.href = '".base_url('index.php/tabungan/data')."';
				</script>
			";
		}
	}
}