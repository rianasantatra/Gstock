<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Applications extends CI_Controller
{

    protected function render($view, $data = array())
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidenav');
        $this->load->view($view, $data);
        $this->load->view('layout/footer');
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->render('applications/index');
    }

    public function produits()
    {
        $config = array();
        $config["base_url"] = site_url('applications/produits');
        $config["total_rows"] = $this->applications_model->count_produits();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['title'] = "Produits en stock";
        $data['links'] = $this->pagination->create_links();
        $data['produits'] = $this->applications_model->all_produits($config["per_page"], $page);
        $this->render('applications/produits', $data);
    }

    public function articles()
    {
        $data['title'] = "Articles disponibles";
        $data['articles'] = $this->applications_model->all_articles();
        $this->render('applications/articles', $data);
    }

    public function fournisseurs()
    {
        $data['title'] = "Fournisseurs des produits";
        $data['fournisseurs'] = $this->applications_model->all_fournisseurs();
        $this->render('applications/fournisseurs', $data);
    }

    public function magasins()
    {
        $data['title'] = "Emplacements des produits/articles";
        $data['magasins'] = $this->applications_model->all_magasins();
        $this->render('applications/magasins', $data);
    }

    public function demandes()
    {
        $data['title'] = "Demandes d'articles";
        $data['demandes'] = $this->applications_model->all_demandes();
        $this->render('applications/demandes', $data);
    }

    public function clients()
    {
        $data['title'] = "Clients";
        $data['clients'] = $this->applications_model->all_clients();
        $this->render('applications/clients', $data);
    }

    public function users()
    {
        $data['title'] = "Utilisateurs";
        $data['users'] = $this->users_model->all_users();
        $this->render('users/list', $data);
    }

}
