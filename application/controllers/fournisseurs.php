<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fournisseurs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('fournisseurs_model');
    }

    public function add_POST() {
        $data['f_nom'] = $this->input->post('f_nom');
        $data['f_contact'] = $this->input->post('f_contact');
        $data['f_adresse'] = $this->input->post('f_adresse');

        $this->fournisseurs_model->insert($data);
        redirect('produits/add', 'refresh');
    }

    public function edit($id) {
        $data['data'] = $this->fournisseurs_model->getDataById($id);
        $this->load->view('fournisseurs/edit', $data);
    }

    public function edit_POST() {
        $data['f_nom'] = $this->input->post('f_nom');
        $data['f_contact'] = $this->input->post('f_contact');
        $data['f_adresse'] = $this->input->post('f_adresse');

        $this->fournisseurs_model->update($data['id'] = $this->input->post('id'), $data);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/fournisseurs', 'refresh');
    }

    public function delete($id) {
        $data['data'] = $this->fournisseurs_model->delete($id);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/fournisseurs', 'refresh');
    }

}
