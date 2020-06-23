<?php
class Alternatif extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Alternatif_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data ['judul'] = 'Customer Satisfaction System';
		$data ['alternatif'] = $this->Alternatif_model->getAllAlternatif();
		
		if($this->input->post('key')){
			$data['alternatif'] = $this->Alternatif_model->cariDataAlternatif();
		}
		$this->load->view('templates/header',$data);
		$this->load->view('alternatif/index', $data);
		$this->load->view('templates/footer');
	}
	public function tambahalternatif()
	{
		$data['judul'] = 'Form Tambah Data Alternatif';		
		$this->form_validation->set_rules('namaalt','NAMA','required');
	if ($this->form_validation->run() == FALSE) {
		$this->load->view('templates/header');
		$this->load->view('alternatif/tambahalternatif', $data);
		$this->load->view('templates/footer');
	} else {
		$this->Alternatif_model->tambahDataAlternatif();
		$this->session->set_flashdata('flash','Berhasil');
		redirect('alternatif');	
	}
}
	public function hapusdata($ID)
	{
		$this->Alternatif_model->hapusDataAlternatif($ID);
		$this->session->set_flashdata('flash','dihapus');
		redirect('alternatif');
	}

	public function editdata($ID)
	{
		$data['judul'] = 'Form Edit Data Alternatif';
		$data['alternatif'] = $this->Alternatif_model->getAlternatifByID($ID);
		
		$this->form_validation->set_rules('namaalt','NAMA','required');

		if ($this->form_validation->run() == FALSE) {
		$this->load->view('templates/header', $data);
		$this->load->view('alternatif/editdata', $data);
		$this->load->view('templates/footer');
	} else {
		$this->Alternatif_model->editDataAlternatif();
		$this->session->set_flashdata('flash','Diedit');
		redirect('alternatif');	
	}
}
	public function hitungbro()
	{
		$data['judul'] = 'Perhitungan';
		$data['hasil'] = $this->Hitung();
		$this->load->view('templates/header', $data);
		$this->load->view('alternatif/hitung', $data);
		$this->load->view('templates/footer');

	}

	public function Hitung(){
		$data['judul'] = 'Form Hitung';
        $kriteria = ['TANGIBLE', 'EMPHATY', 'RESPONSIVENESS', 'RELIABILITY','ASSURANCE'];
		$bobot= [20,10,25,30,15];
		$jumlahBobot = array_sum($bobot);
		$prioritas = [];
		$hasilS = [];
		$hasilV = [];
		$jumlahS = 0;
		$count = count($kriteria);
		$dataClient = $this->Alternatif_model->getAllAlternatif(); 

		//tahap 1
		for ($i=0; $i < $count; $i++) { 
			$prioritas[$i] = $bobot[$i]/$jumlahBobot;
			$hasilAkhir[$i]['bobotbro'] = $prioritas[$i];
		}

		//tahap 2
		for ($k=0; $k < count($dataClient) ; $k++) { 
			$hasilS[$k] = pow($dataClient[$k]['TANGIBLE'], $prioritas[0]) * 
						  pow($dataClient[$k]['EMPHATY'],$prioritas[1])* 
						  pow($dataClient[$k]['RESPONSIVENESS'],$prioritas[2])* 
						  pow($dataClient[$k]['RELIABILITY'],$prioritas[3]) * 
						  pow($dataClient[$k]['ASSURANCE'], $prioritas[4]);
			$hasilAkhir[$k]['hasilS'] = $hasilS[$k];
			}
			$jumlahS = array_sum($hasilS);
		
		//tahap 3
		for ($m=0; $m < count($dataClient) ; $m++){
			$hasilV[$m] = $hasilS[$m] / $jumlahS;
			$hasilAkhir[$m]['vektorV'] = $hasilV[$m]; //nyimpen hasil Vektor Vi
			$hasilAkhir[$m]['CLIENT'] = $dataClient[$m]['CLIENT']; //nyimpen data nama client
			$hasilAkhir[$m]['PROJEK'] = $dataClient[$m]['PROJEK']; //nyimpen data nama projek
			$hasilAkhir[$m]['TANGIBLE1'] = $dataClient[$m]['TANGIBLE1']; //nyimpen Komentar Client Tangible
			$hasilAkhir[$m]['EMPHATY1'] = $dataClient[$m]['EMPHATY1']; //nyimpen data nama client
			$hasilAkhir[$m]['RESPONSIVENESS1'] = $dataClient[$m]['RESPONSIVENESS1']; //nyimpen data nama client
			$hasilAkhir[$m]['RELIABILITY1'] = $dataClient[$m]['RELIABILITY1']; //nyimpen data nama client
			$hasilAkhir[$m]['ASSURANCE1'] = $dataClient[$m]['ASSURANCE1']; //nyimpen data nama client
			$hasilAkhir[$m]['SARAN'] = $dataClient[$m]['SARAN']; //nyimpen data nama client			
		}
		return $hasilAkhir; //return nilai di tahap 3	
	}	
}		 