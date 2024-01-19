<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class satuan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('satuan_model');
	}

	public function index() {
        //$this->load->view('master/barang');
    }

	public function getSatuan(){
        $data = $this->satuan_model->GetAllData();
		$result['rows'] = $data;
		$result['msg'] = ($data) ? 'success' : 'error';
        header('Content-Type: application/json');
        echo json_encode($result);
		
		//NOTE:
		//#Return: 
		//	{
		//   	"data":[{"SatCode":"PACK","SatDesc":"PACK"},{"SatCode":"PCS","SatDesc":"PIECES"}],
		//		"message":"success"}
		//	}

		//#penyederhanaan IF-ELSE:
		// $nilai = 9;
		// echo $nilai > 8 ? 'Sangat Baik' : 'Baik'; // Sangat Baik

    }
}
