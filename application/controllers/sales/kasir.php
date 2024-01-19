<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kasir extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_kasir');
		$this->load->model('barang_model');
	}

	public function index() {
        $this->load->view('sales/v_kasir');
    }

	// public function fetchData()	{
	// 	$data = $this->barang_model->GetAllData();
	// 	if (is_array($data) || is_object($data)){
	// 		foreach ($data as $key => $value) {
	// 			$button = "";
	// 			$button = "<button class='btn btn-success fa fa-pencil editBtn' data-id='".$value['ID']."' data-toggle='tooltip' title='Edit Details'></button> ";
	// 			$button .= "<button class='btn btn-danger fa fa-trash deleteBtn' data-id='".$value['ID']."' data-toggle='tooltip' title='Edit Details'></button> ";
	// 			$result['data'][$key] = array(
	// 				$value['ID'], 
	// 				$value['BrgCode'], 
	// 				$value['BrgName'],
	// 				$value['HargaJual'],
	// 				$value['Satuan'],
	// 				$button
	// 			);
	// 		}
	// 	}else{
	// 		$result['data']	= [];
	// 	}
	// 	$result['msg'] = ($data) ? 'success' : 'error';
	// 	header('Content-Type: application/json');
	// 	echo json_encode($result);
	// }        

	// public function getBarangByID(){
    //     $id = $this->input->post('ID');
    //     $data = $this->barang_model->getByID($id);
    //     header('Content-Type: application/json');
    //     echo json_encode($data);
    // }

	// function insert(){
	// 	$data = array(
	// 		// $this->input->post('BrgCode') => BrgCode: Name View
	// 		// idx: BrgCode => sesuaikan kolom DB
	// 		'BrgCode'=>$this->input->post('BrgCode'),
	// 		'BrgName'=>$this->input->post('BrgName'),
	// 		'HargaBeli'=> str_replace(",", "", $this->input->post('HargaBeli')),
	// 		'HargaJual'=>str_replace(",", "", $this->input->post('HargaJual')),
	// 		'Satuan'=>$this->input->post('Satuan'),
	// 		'Status'=>$this->input->post('Status'),
	// 		'Gambar'=>$this->input->post('Gambar')
	// 	);
	// 	// var_dump($data);

	// 	if (!empty($_FILES['Gambar']['name'])) {
    //         $config['upload_path']   = './uploads/barang/';
    //         $config['allowed_types'] = 'gif|jpg|png|jpeg';
    //         $config['max_size']      = 2 * 1024;
    //         $config['file_name']     = 'BRG-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
    //         $this->load->library('upload', $config);

    //         if ($this->upload->do_upload('Gambar')) {
    //             $data['Gambar']= $this->upload->data('file_name');
	// 			$insert = $this->barang_model->insert($data);
	// 			if ($insert == true){
	// 				$data['msg'] = 'success';
	// 			} else {
	// 				$data['msg'] = 'Error: Proses insert!';
	// 			}
	// 			header('Content-Type: application/json');
	// 			echo json_encode($data);
    //         } else {
    //             $data['Gambar']= '';
    //             $data['msg'] = 'Error: Proses upload!';
    //         }
    //     } else {
    //         $data['Gambar']= 'default.png';
	// 		$insert = $this->barang_model->insert($data);
	// 		if ($insert == true){
	// 			$data['msg'] = 'success';
	// 		} else {
	// 			$data['msg'] = 'Error: Proses upload!';
	// 		}
	// 		header('Content-Type: application/json');
	// 		echo json_encode($data);
    //     }
	// }

	// public function update(){
	// 	//$data = $this->input->post();
	// 	$data = array(
	// 		// $this->input->post('BrgCode') => BrgCode: Name View
	// 		// idx: BrgCode => sesuaikan kolom DB
	// 		'BrgCode'=>$this->input->post('BrgCode'),
	// 		'BrgName'=>$this->input->post('BrgName'),
	// 		'HargaBeli'=> str_replace(",", "", $this->input->post('HargaBeli')),
	// 		'HargaJual'=>str_replace(",", "", $this->input->post('HargaJual')),
	// 		'Satuan'=>$this->input->post('Satuan'),
	// 		'Status'=>$this->input->post('Status')
	// 	);

	// 	if (!empty($_FILES['Gambar']['name'])) {
    //         $config['upload_path']   = './uploads/barang/';
    //         $config['allowed_types'] = 'gif|jpg|png|jpeg';
    //         $config['max_size']      = 2 * 1024;
    //         $config['file_name']     = 'Product-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
    //         $this->load->library('upload', $config);

    //         if ($this->upload->do_upload('Gambar')) {
    //             $data['Gambar'] =  $this->upload->data('file_name');
				
	// 			$update = $this->barang_model->update($data, $this->input->post('ID'));
	// 			if ($update == true){
	// 				$data['msg'] = 'success';
	// 			} else {
	// 				$data['msg'] = 'Error: Update barang!';
	// 			}

	// 			if ($this->input->post('gambar_lama') != 'default.png') {
    //                 unlink('./uploads/barang/' . $this->input->post('gambar_lama'));
    //             }
				
	// 			header('Content-Type: application/json');
	// 			echo json_encode($data);
    //         } else {
    //             $data['msg'] = "'Terjadi kesalahan saat mengupload foto, ulangi kembali'";
	// 			$data['gambar'] = "";
    //         }
    //     } else {
    //         // $data['Gambar'] = "default.png";	
	// 		$update = $this->barang_model->update($data, $this->input->post('ID'));
	// 		if ($update == true){
	// 			$data['msg'] = 'success';
	// 		} else {
	// 			$data['msg'] = 'error';
	// 		}

	// 		header('Content-Type: application/json');
	// 		echo json_encode($data);
    //     }
    // }

	// function deleteByID(){
	// 	$id = $this->input->post('ID');
    //     $data = $this->barang_model->getByID($id);
	// 	$delete = $this->barang_model->deleteByID($data);
	// 	if ($delete == true){
	// 		if  ($data['Gambar'] != 'default.png') {
	// 			unlink('./uploads/barang/' . $data['Gambar']);
	// 		}			
	// 		$data['msg'] = 'success';
	// 	} else {
	// 		$data['msg'] = 'error';
	// 	}
	// 	header('Content-Type: application/json');
	// 	echo json_encode($data);
	// }	

}
