<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Magasins extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('magasins_model');
    }

    public function add()
    {
        $data['mag_nom'] = $this->input->post('mag_nom');
        $data['mag_contact'] = $this->input->post('mag_contact');
        $data['mag_adresse'] = $this->input->post('mag_adresse');

        $this->magasins_model->insert($data);
        redirect('applications/magasins', 'refresh');
    }

    public function add_POST()
    {
        $data['mag_nom'] = $this->input->post('mag_nom');
        $data['mag_contact'] = $this->input->post('mag_contact');
        $data['mag_adresse'] = $this->input->post('mag_adresse');

        $this->magasins_model->insert($data);
        redirect('produits/add', 'refresh');
    }

    public function edit($id)
    {
        $data['data'] = $this->magasins_model->getDataById($id);
        $this->load->view('magasins/edit', $data);
    }

    public function edit_POST()
    {
        $data['mag_nom'] = $this->input->post('mag_nom');
        $data['mag_contact'] = $this->input->post('mag_contact');
        $data['mag_adresse'] = $this->input->post('mag_adresse');

        $this->magasins_model->update($data['id'] = $this->input->post('id'), $data);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/magasins', 'refresh');
    }

    public function delete($id)
    {
        $data['data'] = $this->magasins_model->delete($id);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/magasins', 'refresh');
    }
}
