<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Applications_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function all_produits($limit, $start)
    {

        return $this->db->select('produits.id,p_code,p_nom,p_description,p_qte,p_pu,p_date_achat,p_date_instock,mag_nom,f_nom')
            ->from('produits')
            ->join('magasins', 'magasins.id = produits.magasins_id', 'LEFT')
            ->join('fournisseurs', 'fournisseurs.id = produits.fournisseurs_id', 'LEFT')
            ->limit($limit, $start)
            ->get()
            ->result();
    }

    public function count_produits()
    {
        return $this->db->count_all('produits');
    }

    public function all_articles()
    {
        return $this->db->select('*')
            ->from('articles')
            ->get()
            ->result();
    }

    public function all_fournisseurs()
    {
        return $this->db->select('*')
            ->from('fournisseurs')
            ->get()
            ->result();
    }

    public function all_magasins()
    {
        return $this->db->select('*')
            ->from('magasins')
            ->get()
            ->result();
    }

    public function all_demandes()
    {
        return $this->db->select('*')
            ->from('demandes')
            ->get()
            ->result();
    }

    public function all_clients()
    {
        return $this->db->select('*')
            ->from('clients')
            ->get()
            ->result();
    }

}
