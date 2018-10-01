<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('Barang_model');
	}

	public function index()
	{
			$data['barangs'] = $this->Barang_model->all();
			$this->load->view('barang/index', $data);
	}

	public function data_barang()
	{
			$data = $this->Barang_model->all();
			echo json_encode($data);
	}
	
	public function create()
	{
			$data['nama'] = $this->input->post('nama');
			$data['berat'] = $this->input->post('berat');
			$insert = $this->Barang_model->create($data);
			echo $insert;
	}

	public function edit($id)
	{
			$data = $this->Barang_model->find($id);
			echo json_encode($data);
	}

	public function update()
	{
			$id = $this->input->post('id');
			$data['nama'] = $this->input->post('nama');
			$data['berat'] = $this->input->post('berat');
			$update = $this->Barang_model->update($data, $id);
			echo $update;
	}

	public function delete($id)
	{
			$delete = $this->Barang_model->delete($id);
			echo $delete;
	}

}
