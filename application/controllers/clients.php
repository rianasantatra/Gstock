<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Clients extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('clients_model');
    }

    public function add_POST()
    {
        $data['clt_nom'] = $this->input->post('clt_nom');
        $data['clt_contact'] = $this->input->post('clt_contact');
        $data['clt_adresse'] = $this->input->post('clt_adresse');
        $data['clt_bureau'] = $this->input->post('clt_bureau');

        $this->clients_model->insert($data);
        redirect('apllication/clients', 'refresh');
    }

    public function edit($id)
    {
        $data['data'] = $this->clients_model->getDataById($id);
        $this->load->view('clients/edit', $data);
    }

    public function edit_POST()
    {
        $data['clt_nom'] = $this->input->post('clt_nom');
        $data['clt_contact'] = $this->input->post('clt_contact');
        $data['clt_adresse'] = $this->input->post('clt_adresse');
        $data['clt_bureau'] = $this->input->post('clt_bureau');

        $this->clients_model->update($data['id'] = $this->input->post('id'), $data);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/clients', 'refresh');
    }

    public function delete($id)
    {
        $data['data'] = $this->clients_model->delete($id);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/clients', 'refresh');
    }

}
