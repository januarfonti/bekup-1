<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_master', 'master');
	}

	public function index()
	{
		redirect('master/kota');
	}

	public function kota()
	{
		$data['title'] = 'Master Kota';
		$data['list'] = $this->master->get_kota();
		$data['content'] = $this->load->view('master/v_kota',$data,TRUE);
		$this->load->view('v_wrapper',$data);
	}

	public function detail_kota($id)
	{
		$where['id'] = $id;
		$data['title'] = 'Detail Kota';
		$data['list'] = $this->master->detail_kota($where);
		$data['content'] = $this->load->view('master/v_kotadetail',$data,TRUE);
		$this->load->view('v_wrapper',$data);
	}

	public function simpan_kota()
	{
		$this->form_validation->set_rules('nama', 'Nama Kota', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('master/kota');
        }
        else
        {
        	$data['nama'] = $this->input->post('nama');
			$this->master->insert_kota($data);
			redirect('master/kota');
        }
	}

	public function ubah_kota()
	{
		$this->form_validation->set_rules('nama', 'Nama Kota', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('master/kota');
        }
        else
        {
			$where['id'] = $this->input->post('id');
        	$data['nama'] = $this->input->post('nama');
			$this->master->update_kota($where,$data);
			redirect('master/kota');
        }
	}

	public function hapus_kota($id)
	{
		$where['id'] = $id;
		$this->master->delete_kota($where);
		redirect('master/kota');
	}

	public function posisi()
	{
		$data['title'] = 'Master Posisi';
		$data['list'] = $this->master->get_posisi();
		$data['content'] = $this->load->view('master/v_posisi',$data,TRUE);
		$this->load->view('v_wrapper',$data);
	}

	public function detail_posisi($id)
	{
		$where['id_posisi'] = $id;
		$data['title'] = 'Detail Posisi';
		$data['list'] = $this->master->detail_posisi($where);
		$data['content'] = $this->load->view('master/v_posisidetail',$data,TRUE);
		$this->load->view('v_wrapper',$data);
	}

	public function simpan_posisi()
	{
		$this->form_validation->set_rules('nama', 'Nama Posisi', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('master/posisi');
        }
        else
        {
			$last_id = $this->master->get_last_posisi();
			$data['id_posisi'] = $last_id->id_posisi + 1;
        	$data['nama'] = $this->input->post('nama');
			$this->master->insert_posisi($data);
			redirect('master/posisi');
        }
	}

	public function ubah_posisi()
	{
		$this->form_validation->set_rules('nama', 'Nama Posisi', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('master/posisi');
        }
        else
        {
			$where['id_posisi'] = $this->input->post('id');
        	$data['nama'] = $this->input->post('nama');
			$this->master->update_posisi($where,$data);
			redirect('master/posisi');
        }
	}

	public function hapus_posisi($id)
	{
		$where['id_posisi'] = $id;
		$this->master->delete_posisi($where);
		redirect('master/posisi');
	}
}
