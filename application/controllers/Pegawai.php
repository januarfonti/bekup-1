<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai', 'pegawai');
	}

	public function index()
	{
		$data['title'] = 'List Pegawai';
		$data['list'] = $this->pegawai->get_pegawai();
		$data['content'] = $this->load->view('pegawai/v_list',$data,TRUE);
		$this->load->view('v_wrapper',$data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Pegawai';
		$data['kota'] = $this->pegawai->get_kota();
		$data['kelamin'] = $this->pegawai->get_kelamin();
		$data['posisi'] = $this->pegawai->get_posisi();
		$data['content'] = $this->load->view('pegawai/v_tambah',$data,TRUE);
		$this->load->view('v_wrapper',$data);
	}

	public function simpan()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('no_telp', 'Nama', 'required|numeric');
		$this->form_validation->set_rules('kota', 'Nama', 'required');
		$this->form_validation->set_rules('kelamin', 'Nama', 'required');
		$this->form_validation->set_rules('posisi', 'Nama', 'required');
		$this->form_validation->set_rules('status', 'Nama', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('pegawai/tambah');
        }
        else
        {
			$data['id_pegawai'] = random_string('md5');
			$data['nama'] = $this->input->post('nama');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['kota'] = $this->input->post('kota');
			$data['kelamin'] = $this->input->post('kelamin');
			$data['id_posisi'] = $this->input->post('posisi');
			$data['status'] = $this->input->post('status');
			$this->pegawai->save($data);
			redirect('pegawai');
        }
	}

	public function detail($id)
	{
		$where['id_pegawai'] = $id;
		$data['title'] = 'Detail Pegawai';
		$data['kota'] = $this->pegawai->get_kota();
		$data['kelamin'] = $this->pegawai->get_kelamin();
		$data['posisi'] = $this->pegawai->get_posisi();
		$data['list'] = $this->pegawai->get_by_id($where);
		$data['content'] = $this->load->view('pegawai/v_detail',$data,TRUE);
		$this->load->view('v_wrapper',$data);
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('no_telp', 'Nama', 'required|numeric');
		$this->form_validation->set_rules('kota', 'Nama', 'required');
		$this->form_validation->set_rules('kelamin', 'Nama', 'required');
		$this->form_validation->set_rules('posisi', 'Nama', 'required');
		$this->form_validation->set_rules('status', 'Nama', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	redirect('pegawai');
        }
        else
        {
			$where['id_pegawai'] = $this->input->post('id');
			$data['nama'] = $this->input->post('nama');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['kota'] = $this->input->post('kota');
			$data['kelamin'] = $this->input->post('kelamin');
			$data['id_posisi'] = $this->input->post('posisi');
			$data['status'] = $this->input->post('status');
			$this->pegawai->update($where,$data);
			redirect('pegawai');
        }
	}

	public function hapus($id)
	{
		$where['id_pegawai'] = $id;
		$this->pegawai->delete($where);
		redirect('pegawai');
	}

}
