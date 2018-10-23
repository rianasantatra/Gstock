<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Magasins_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*
     * insertion
     */

    public function insert($data) {
        $this->db->insert('magasins', $data);
        return $this->db->insert_id();
    }

    /*
     * get data by id
     */

    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('magasins')->result();
    }

    /*
     * update
     */

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('magasins', $data);
        return true;
    }

    /*
     * delete
     */

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('magasins');
        return true;
    }

}
