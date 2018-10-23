<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Articles_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_produits(){
        $this->db->select('id');
        $this->db->select('p_nom');
        $this->db->from('produits');
        $query = $this->db->get();
        $result = $query->result();
  
        $produits_id = array('');
        $produits_nom = array('');
  
        for ($i = 0; $i < count($result); $i++)
        {
            array_push($produits_id, $result[$i]->id);
            array_push($produits_nom, $result[$i]->p_nom);
        }
        return $get_result = array_combine($produits_id,$produits_nom);
    }

    public function insert($data){
        $this->db->insert('articles',$data);
        return $this->db->insert_id();
    }
    
    public function getDataById($id){
        $this->db->where('id',$id);
        return $this->db->get('articles')->result();
    }
    
    public function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('articles',$data);
        return true;
    }
    
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('articles');
        return true;
    }
    
}