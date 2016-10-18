<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_kota()
  {
      return $this->db->get('kota')->result();
  }

  public function insert_kota($data)
  {
      $this->db->insert('kota',$data);
  }

  public function detail_kota($where)
  {
      return $this->db->get_where('kota',$where)->row();
  }

  public function update_kota($where,$data)
  {
      $this->db->where($where);
      $this->db->update('kota',$data);
  }

  public function delete_kota($where)
  {
      $this->db->where($where);
      $this->db->delete('kota');
  }

  public function get_posisi()
  {
      return $this->db->get('posisi')->result();
  }

  public function get_last_posisi()
  {
      $this->db->select('id_posisi');
      $this->db->order_by('id_posisi','DESC');
      return $this->db->get('posisi')->row();
  }

  public function insert_posisi($data)
  {
      $this->db->insert('posisi',$data);
  }

  public function detail_posisi($where)
  {
      return $this->db->get_where('posisi',$where)->row();
  }

  public function update_posisi($where,$data)
  {
      $this->db->where($where);
      $this->db->update('posisi',$data);
  }

  public function delete_posisi($where)
  {
      $this->db->where($where);
      $this->db->delete('posisi');
  }


}
