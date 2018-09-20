<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paoma extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    private function render($view, $data = array()) {
        $this->load->view('app/header');
        $this->load->view('app/sidenav');
        $this->load->view($view, $data);
        $this->load->view('app/footer');
    }

    public function index() {
        $this->load->view('index');
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $check = $this->paoma_model->check_user($username, $password);

        if ($check) {
            $this->session->set_userdata('logged_in', true);
            redirect('paoma/admin', 'refresh');
        } else {
            $this->session->set_userdata('logged_in', false);
            $this->session->set_flashdata('msg', 'Identifiant / Mot de passe invalide');
            redirect('paoma/index', 'refresh');
        }
    }

    public function admin() {
        $this->render('admin');
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('paoma/index', 'refresh');
    }

    public function new_user() {
        $this->render('add_user');
    }

    private function add_user_remap() {
        if ($this->input->post('ajouter')) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $fonction = $this->input->post('fonction');

            return $this->paoma_model->add_user($username, $password, $fonction);
        }
    }

    public function add_user() {
        $this->add_user_remap();
        redirect('paoma/new_user', 'refresh');
    }

    public function fetch_user() {
        $data['data'] = $this->paoma_model->fetch_user();
        $this->render('users', $data);
    }

    public function update($id, $data) {
        $data['data'] = $this->paoma_model->fetch_user_id($id);
        $this->render('update_user', $data);
    }

    private function update_user_remap() {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $fonction = $this->input->post('fonction');

        return $this->paoma_model->update_user($id, $username, $password, $fonction);
    }

    public function update_user() {
        $this->update_user_remap();
        redirect('paoma/fetch_user', 'refresh');
    }

    public function delete_user_remap($id) {
        return $this->paoma_model->delete_user($id);
    }

    public function delete_user($id) {
        $this->delete_user_remap($id);
        redirect('paoma/fetch_user', 'refresh');
    }

    public function new_produit() {
        $data = array();
        $data['fournisseurs'] = $this->paoma_model->get_fournisseur();
        $data['magasin'] = $this->paoma_model->get_magasin();
        $this->render('add_produit', $data);
    }

    public function add_produit_remap() {

        if ($this->input->post('ajouter')) {

            $code = $this->input->post('p_code');
            $nom = $this->input->post('p_nom');
            $ref = $this->input->post('p_ref');
            $description = $this->input->post('p_description');
            $qte = $this->input->post('p_qte');
            $pu = $this->input->post('p_pu');
            $date_achat = $this->input->post('p_date_achat');
            $date_instock = $this->input->post('p_date_instock');
            $magasin = $this->input->post('magasins_id');
            $fournisseur = $this->input->post('fournisseurs_id');

            return $this->paoma_model->add_produits($code, $nom, $ref, $description, $qte, $pu, $date_achat, $date_instock, $magasin, $fournisseur);
        }
    }

    public function add_produit() {
        $this->add_produit_remap();
        redirect('paoma/new_produit', 'refresh');
    }

    public function fetch_produit() {
        $config = array();
        $config["base_url"] = site_url('paoma/fetch_produit');
        $config["total_rows"] = $this->paoma_model->count_produits();
        $config["per_page"] = 7;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['data'] = $this->paoma_model->fetch_produits($config["per_page"], $page);
        $data['links'] = $this->pagination->create_links();
        $this->render('produits', $data);
    }

    public function new_article(){
        $data['produits'] = $this->paoma_model->get_produit();
        $data['clients'] = $this->paoma_model->get_client();
        $this->render('add_article',$data);
    }

    public function add_article_remap() {

        if ($this->input->post('ajouter')) {

            $code = $this->input->post('art_code');
            $nom = $this->input->post('art-_nom');
            $description = $this->input->post('art_description');
            $reference = $this->input->post('produits_id');
            $client = $this->input->post('clients_id');

            return $this->paoma_model->add_articles($code,$nom,$description,$reference,$client);
        }
    }

    public function add_article() {
        $this->add_article_remap();
        redirect('paoma/new_article', 'refresh');
    }

    public function fetch_article() {
        $config = array();
        $config["base_url"] = site_url('paoma/fetch_produit');
        $config["total_rows"] = $this->paoma_model->count_articles();
        $config["per_page"] = 7;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['data'] = $this->paoma_model->fetch_articles($config["per_page"], $page);
        $data['links'] = $this->pagination->create_links();
        $this->render('produits', $data);
    }

    public function new_fournisseur() {
        $this->render('add_fournisseur');
    }
    
    private function add_fournisseur_remap() {
        if ($this->input->post('ajouter')) {

            $nom = $this->input->post('nom');
            $contact = $this->input->post('contact');
            $adresse = $this->input->post('adresse');

            return $this->paoma_model->add_fournisseur($nom, $contact, $adresse);
        }
    }

    public function add_fournisseur() {
        $this->add_fournisseur_remap();
        redirect('paoma/new_fournisseur', 'refresh');
    }

    public function fetch_fournisseur() {
        $data['data'] = $this->paoma_model->fetch_fournisseur();
        $this->render('fournisseurs', $data);
    }

    public function new_magasin() {
        $this->render('add_magasin');
    }
    
    private function add_magasin_remap() {
        if ($this->input->post('ajouter')) {

            $nom = $this->input->post('nom');
            $contact = $this->input->post('contact');
            $adresse = $this->input->post('adresse');

            return $this->paoma_model->add_magasin($nom, $contact, $adresse);
        }
    }

    public function add_magasin() {
        $this->add_magasin_remap();
        redirect('paoma/new_magasin', 'refresh');
    }

    public function fetch_magasin() {
        $data['data'] = $this->paoma_model->fetch_magasin();
        $this->render('magasins', $data);
    }

    public function new_client(){
        $this->render('add_client');
    }

    private function add_client_remap() {
        if ($this->input->post('ajouter')) {

            $nom = $this->input->post('clt_nom');
            $contact = $this->input->post('clt_contact');
            $adresse = $this->input->post('clt_adresse');
            $bureau = $this->input->post('clt_bureau');

            return $this->paoma_model->add_client($nom, $contact, $adresse, $bureau);
        }
    }

    public function add_client() {
        $this->add_client_remap();
        redirect('paoma/new_client', 'refresh');
    }

}
