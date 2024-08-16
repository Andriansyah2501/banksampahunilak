<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabungan_m extends CI_Model {
	public function datatabungan() {
		$query = $this->db->get('tabungan_nasabah');
		return $query->result_array();
	}
	public function datatabunganBykd($id_client) {
		$this->db->where('id_client', $id_client);
		$query = $this->db->get('tabungan_nasabah');
		return $query->result_array();
	}
	public function update($data) {
		$this->db->where('id_client', $data['id_client']);
		$tabungan = array(
			
			'id_client'		=> $data['id_client'],
			'nama'			=> $data['nama'],
			'saldo'			=> $data['saldo'],
		
		);
		$this->db->update('tabungan_nasabah', $tabungan);
	}
	
	public function simpan($data) {
		$tabungan = array(
			'id_client'	=> $data['id_client'],
			'nama'		=> $data['nama'],
			'saldo'		=> $data['saldo'],
			
		);
		$this->db->insert('tabungan_nasabah', $tabungan);
	}
	public function hapus($id_client) {
		$this->db->where('id_client', $id_client);
		$this->db->delete('tabungan_nasabah');
	}
}