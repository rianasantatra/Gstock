<?php defined('BASEPATH') or exit('No direct script access allowed');

class Paoma_model extends CI_Model {

    protected $users = 'users';
    protected $clients = 'clients';
    protected $produits = 'produits';
    protected $articles = 'articles';
    protected $magasins = 'magasins';
    protected $demandes = 'demandes';
    protected $fournisseurs = 'fournisseurs';

    public function check_user($username, $password) {
        return $this->db->select('*')
                        ->from($this->users)
                        ->where('username', $username)
                        ->where('password', $password)
                        ->limit(1)
                        ->get()
                        ->result();
    }

    public function fetch_user() {
        return $this->db->select('*')
                        ->from($this->users)
                        ->get()
                        ->result();
    }

    public function fetch_user_id($id) {
        return $this->db->select('*')
                        ->from($this->users)
                        ->where('id', $id)
                        ->get()
                        ->result();
    }

    public function update_user($id, $username, $password, $fonction) {
        $data = array(
            'username' => $username, 
            'password' => $password, 
            'fonction' => $fonction
        );
        $this->db->where('id', $id);
        $this->db->update($this->users, $data);
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->users);
    }

    /*
    produit
    */
    public function add_produits($code, $nom, $ref, $description, $qte, $pu, $date_achat, $date_instock, $magasin, $fournisseur) {
        $data = array(
            'p_code' => $code, 
            'p_nom' => $nom, 
            'p_ref' => $ref, 
            'p_description' => $description, 
            'p_qte' => $qte, 
            'p_pu' => $pu, 
            'p_date_achat' => $date_achat, 
            'p_date_instock' => $date_instock, 
            'magasins_id' => $magasin, 
            'fournisseurs_id' => $fournisseur);
        $this->db->set($data);
        $this->db->insert($this->produits);
    }

    public function count_produits() {
        return $this->db->count_all($this->produits);
    }

    public function fetch_produits($limit, $start) {
        $this->db->limit($limit, $start);
        $q = $this->db->get($this->produits);
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function get_produit(){
        return $this->db->select('id,p_nom')
                        ->from($this->produits)
                        ->order_by('id')
                        ->get()
                        ->result();
    }

    /*
    article
    */
    public function add_articles($code, $nom, $description,$reference, $client) {
        $data = array(
            'art_code' => $code, 
            'art_nom' => $nom,  
            'art_description' => $description, 
            'produits_id' => $reference, 
            'clients_id' => $client
        );
        $this->db->set($data);
        $this->db->insert($this->articles);
    }

    public function count_articles() {
        return $this->db->count_all($this->articles);
    }

    public function fetch_articles($limit, $start) {
        $this->db->limit($limit, $start);
        $q = $this->db->get($this->articles);
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    /*
    fournisseur
    */
    public function add_fournisseur($nom, $contact, $adresse) {
        $data = array(
            'nom' => $nom, 
            'contact' => $contact, 
            'adresse' => $adresse
        );
        $this->db->set($data);
        $this->db->insert($this->fournisseurs);
    }
    
    public function fetch_fournisseur() {
        return $this->db->select('*')
                        ->from($this
                        ->fournisseurs)
                        ->get()
                        ->result();
    }

    public function get_fournisseur() {
        return $this->db->select('id,nom')
                        ->from($this->fournisseurs)
                        ->order_by('id')
                        ->get()
                        ->result();
    }

    /*
    magasin
    */
    public function add_magasin($nom, $contact, $adresse) {
        $data = array(
            'nom' => $nom, 
            'contact' => $contact, 
            'adresse' => $adresse
        );
        $this->db->set($data);
        $this->db->insert($this->magasins);
    }
    
    public function fetch_magasin() {
        return $this->db->select('*')
                        ->from($this->magasins)
                        ->get()
                        ->result();
    }

    public function get_magasin() {
        return $this->db->select('id,nom')
                        ->from($this->magasins)
                        ->order_by('id')
                        ->get()
                        ->result();
    }

    /*
    client
    */
    public function add_client($nom, $contact, $adresse, $bureau){
        $data = array(
            'clt_nom' => $nom, 
            'clt_contact' => $contact, 
            'clt_adresse' => $adresse, 
            'clt_bureau' => $bureau
        );
        $this->db->set($data);
        $this->db->insert($this->clients);
    }

    public function get_client(){
        return $this->db->select('id,clt_nom')
                        ->from($this->clients)
                        ->order_by('id')
                        ->get()
                        ->result();
    }

    public function fetch_client() {
        return $this->db->select('*')
                        ->from($this->clients)
                        ->get()
                        ->result();
    }

    public function add_demande($client, $motif){
        $data = array(
            'clients_id' => $client, 
            'motif' => $motif
        );
        $this->db->set($data);
        $this->db->insert($this->demandes);
    }

    public function fetch_demande() {
        return $this->db->select('*')
                        ->from($this->demandes)
                        ->get()
                        ->result();
    }
}