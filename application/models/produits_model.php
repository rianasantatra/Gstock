<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Produits_model extends CI_Model
{

    public function __construct(){
        parent::__construct();
    }

    /*
    * populate dropdown
    */
    public function get_magasins(){
      $this->db->select('id');
      $this->db->select('mag_nom');
      $this->db->from('magasins');
      $query = $this->db->get();
      $result = $query->result();

      $mag_id = array('');
      $mag_nom = array('');

      for ($i = 0; $i < count($result); $i++)
      {
          array_push($mag_id, $result[$i]->id);
          array_push($mag_nom, $result[$i]->mag_nom);
      }
      return $get_result = array_combine($mag_id, $mag_nom);
    }

    public function get_fournisseurs(){
      $this->db->select('id');
      $this->db->select('f_nom');
      $this->db->from('fournisseurs');
      $query = $this->db->get();
      $result = $query->result();

      $f_id = array('');
      $f_nom = array('');

      for ($i = 0; $i < count($result); $i++)
      {
          array_push($f_id, $result[$i]->id);
          array_push($f_nom, $result[$i]->f_nom);
      }
      return $get_result = array_combine($f_id, $f_nom);
    }

    /*
    * insertion
    */
    public function insert($data){
      $this->db->insert('produits',$data);
      return $this->db->insert_id();
    }

    /*
    * get data by id
    */

    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('produits')->result();
    }
    /*
    * update
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('produits', $data);
        return true;
    }
    /*
    * delete
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('produits');
        return true;
    }

}
