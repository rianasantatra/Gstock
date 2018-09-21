<?php defined('BASEPATH') or exit('No direct script access allowed');

class Paoma_model extends CI_Model {

    /**
     * define table
     */
    protected $users = 'users';
    protected $clients = 'clients';
    protected $produits = 'produits';
    protected $articles = 'articles';
    protected $magasins = 'magasins';
    protected $demandes = 'demandes';
    protected $fournisseurs = 'fournisseurs';

    /**
     * query user login
     */
    public function check_user($username, $password) {
        return $this->db->select('*')
                        ->from($this->users)
                        ->where('username', $username)
                        ->where('password', $password)
                        ->limit(1)
                        ->get()
                        ->result();
    }

    /**
     * fetch user query
     */
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

    /***
     * update user query
     */
    public function update_user($id, $username, $password, $fonction) {
        $data = array(
            'username' => $username, 
            'password' => $password, 
            'fonction' => $fonction
        );
        $this->db->where('id', $id);
        $this->db->update($this->users, $data);
    }

    /**
     * delete user query
     */
    public function delete_user($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->users);
    }

    /**
     * query produit add
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

    /**
     * query produit count
     */
    public function count_produits() {
        return $this->db->count_all($this->produits);
    }

    /**
     * query produit fetch
     */
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

    /**
     * query produit get
     */
    public function get_produit(){
        return $this->db->select('id,p_nom')
                        ->from($this->produits)
                        ->order_by('id')
                        ->get()
                        ->result();
    }

    /**
     * query article add
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

    /**
     * query article count
    */
    public function count_articles() {
        return $this->db->count_all($this->articles);
    }

    /**
     * query article fetch
    */
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

    public function fetch_articles_by_clientsID($clients_id) {
        return $this->select('*') ->from($this->articles) ->where('clients_id', $clients_id) ->get() ->result();
    }

    /**
     * query fournisseur add
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

    /**
     * query fournisseur fetch
    */
    public function fetch_fournisseur() {
        return $this->db->select('*')
                        ->from($this
                        ->fournisseurs)
                        ->get()
                        ->result();
    }

    /**
     * query fournisseur get
    */
    public function get_fournisseur() {
        return $this->db->select('id,nom')
                        ->from($this->fournisseurs)
                        ->order_by('id')
                        ->get()
                        ->result();
    }

    /**
     * query magasin add
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

    /**
     * query magasin fetch
    */
    public function fetch_magasin() {
        return $this->db->select('*')
                        ->from($this->magasins)
                        ->get()
                        ->result();
    }

    /**
     * query magasin get
    */
    public function get_magasin() {
        return $this->db->select('id,nom')
                        ->from($this->magasins)
                        ->order_by('id')
                        ->get()
                        ->result();
    }

    /**
     * query client add
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

    /**
     * query client get
     */
    public function get_client(){
        return $this->db->select('id,clt_nom')
                        ->from($this->clients)
                        ->order_by('id')
                        ->get()
                        ->result();
    }

    /**
     * query client fetch
     */
    public function fetch_client() {
        return $this->db->select('*')
                        ->from($this->clients)
                        ->get()
                        ->result();
    }

    /**
     * query demande add
     */
    public function add_demande($client, $motif){
        $data = array(
            'clients_id' => $client, 
            'motif' => $motif
        );
        $this->db->set($data);
        $this->db->insert($this->demandes);
    }

    /**
     * query demande fetch
     */
    public function fetch_demande() {
        return $this->db->select('*')
                        ->from($this->demandes)
                        ->get()
                        ->result();
    }
}
/**
 * end of Model paoma_model.php
 */