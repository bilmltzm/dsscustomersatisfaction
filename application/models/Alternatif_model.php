<?php
class Alternatif_model extends CI_model{	
	public function getAllAlternatif()
	{
		$query = $this->db->get('tableprojek');
		return $query->result_array();
	}

	public function tambahDataAlternatif()
	{
		$data=[
			"ID" => $this->input->post('idclient', true),
			"CLIENT" => $this->input->post('namaalt', true),
			"PROJEK" => $this->input->post('pro', true),
			"TANGIBLE" => $this->input->post('tan', true),
			"TANGIBLE1" => $this->input->post('tan1', true),
			"EMPHATY" => $this->input->post('emp', true),
			"EMPHATY1" => $this->input->post('emp1', true),
			"RESPONSIVENESS" => $this->input->post('res', true),
			"RESPONSIVENESS1" => $this->input->post('res1', true),
			"RELIABILITY" => $this->input->post('rel', true),
			"RELIABILITY1" => $this->input->post('rel1', true),
			"ASSURANCE" => $this->input->post('ass', true),
			"ASSURANCE1" => $this->input->post('ass1', true),
			"SARAN" => $this->input->post('sar', true),

		];
		$this->db->insert('tableprojek', $data);
	}

	public function hapusDataAlternatif($ID)
	{
		$this->db->delete('tableprojek', ['ID' => $ID]); 
	}

	public function getAlternatifByID($ID)
	{
		return $this->db->get_where('tableprojek',['ID' => $ID])-> row_array();
	}

		public function editDataAlternatif()
	{
		$data=[
			"ID" => $this->input->post('idclient', true),
			"CLIENT" => $this->input->post('namaalt', true),
			"PROJEK" => $this->input->post('pro', true),
			"TANGIBLE" => $this->input->post('tan', true),
			"TANGIBLE1" => $this->input->post('tan1', true),
			"EMPHATY" => $this->input->post('emp', true),
			"EMPHATY1" => $this->input->post('emp1', true),
			"RESPONSIVENESS" => $this->input->post('res', true),
			"RESPONSIVENESS1" => $this->input->post('res1', true),
			"RELIABILITY" => $this->input->post('rel', true),
			"RELIABILITY1" => $this->input->post('rel1', true),
			"ASSURANCE" => $this->input->post('ass', true),
			"ASSURANCE1" => $this->input->post('ass1', true),
			"SARAN" => $this->input->post('sar', true),];

		$this->db->where('ID', $this->input->post('ID'));
		$this->db->update('tableprojek', $data);
	}
		public function cariDataAlternatif()
		{ 	
			$key = $this->input->post('key', true);
			$this->db->like('CLIENT', $key);
			$this->db->or_like('ID', $key);
			return $this->db->get('tableprojek')->result_array();
		}
	}
?>