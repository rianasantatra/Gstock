<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Articles extends CI_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('articles_model');
    }

    public function add()
    {
        $data = array();
        $data['produits'] = $this->articles_model->get_produits();
        $this->load->view('articles/add', $data);
    }

    public function add_POST()
    {
        $data['art_code'] = $this->input->post('art_code');
        $data['art_nom'] = $this->input->post('art_nom');
        $data['produits_id'] = $this->input->post('produits_id');

        $this->articles_model->insert($data);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/articles', 'refresh');
    }

    public function edit($id)
    {
        $data = array();
        $data['data'] = $this->articles_model->getDatabyId($id);
        $data['produits'] = $this->articles_model->get_produits();
        $this->load->view('articles/edit', $data);
    }

    public function edit_POST()
    {
        $data['art_code'] = $this->input->post('art_code');
        $data['art_nom'] = $this->input->post('art_nom');
        $data['produits_id'] = $this->input->post('produits_id');

        $this->articles_model->update($data['id'] = $this->input->post('id'), $data);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/articles', 'refresh');
    }

    public function delete($id)
    {
        $data['data'] = $this->articles_model->delete($id);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/articles', 'refresh');
    }

}
