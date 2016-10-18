<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_pegawai()
  {
      $this->db->select('id_pegawai,pegawai.nama,no_telp,kota.nama as kota,kelamin.nama as jk,posisi.nama as posisi,status');
      $this->db->from('pegawai');
      $this->db->join('kota', 'pegawai.kota = kota.id', 'inner');
      $this->db->join('posisi', 'pegawai.id_posisi = posisi.id_posisi', 'inner');
      $this->db->join('kelamin', 'pegawai.kelamin = kelamin.id', 'inner');
      $this->db->order_by('pegawai.nama','ASC');
      return $this->db->get()->result();
  }

  public function get_kota()
  {
      $this->db->order_by('nama','ASC');
      return $this->db->get('kota')->result();
  }

  public function get_kelamin()
  {
      $this->db->order_by('nama','ASC');
      return $this->db->get('kelamin')->result();
  }

  public function get_posisi()
  {
      $this->db->order_by('nama','ASC');
      return $this->db->get('posisi')->result();
  }

  public function save($data)
  {
      $this->db->insert('pegawai',$data);
  }

  public function get_by_id($where)
  {
      return $this->db->get_where('pegawai',$where)->row();
  }

  public function update($where,$data)
  {
      $this->db->where($where);
      $this->db->update('pegawai',$data);
  }

  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('pegawai');
  }


}
