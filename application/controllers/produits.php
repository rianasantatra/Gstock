<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Produits extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('produits_model');
    }
    public function add()
    {
        $this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
        $this->ckeditor->config['toolbar'] = array(
            array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList'),
        );
        $this->ckeditor->config['language'] = 'fr';
        $this->ckeditor->config['width'] = '530px';
        $this->ckeditor->config['height'] = '200px';

        $data = array();
        $data['magasins'] = $this->produits_model->get_magasins();
        $data['fournisseurs'] = $this->produits_model->get_fournisseurs();
        $this->load->view('produits/add', $data);
    }
    public function add_POST()
    {
        $data['p_code'] = $this->input->post('p_code');
        $data['p_nom'] = $this->input->post('p_nom');
        $data['p_description'] = $this->input->post('p_description');
        $data['p_qte'] = $this->input->post('p_qte');
        $data['p_pu'] = $this->input->post('p_pu');
        $data['p_date_achat'] = $this->input->post('p_date_achat');
        $data['p_date_instock'] = $this->input->post('p_date_instock');
        $data['magasins_id'] = $this->input->post('magasins_id');
        $data['fournisseurs_id'] = $this->input->post('fournisseurs_id');

        $this->produits_model->insert($data);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/produits', 'refresh');
    }
    public function edit($id)
    {

        $this->ckeditor->basePath = base_url() . 'assets/ckeditor/';
        $this->ckeditor->config['toolbar'] = array(
            array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList'),
        );
        $this->ckeditor->config['language'] = 'fr';
        $this->ckeditor->config['width'] = '530px';
        $this->ckeditor->config['height'] = '200px';

        $data['data'] = $this->produits_model->getDataById($id);
        $data['magasins'] = $this->produits_model->get_magasins();
        $data['fournisseurs'] = $this->produits_model->get_fournisseurs();
        $this->load->view('produits/edit', $data);
    }
    public function edit_POST()
    {

        $data['p_code'] = $this->input->post('p_code');
        $data['p_nom'] = $this->input->post('p_nom');
        $data['p_description'] = $this->input->post('p_description');
        $data['p_qte'] = $this->input->post('p_qte');
        $data['p_pu'] = $this->input->post('p_pu');
        $data['p_date_achat'] = $this->input->post('p_date_achat');
        $data['p_date_instock'] = $this->input->post('p_date_instock');
        $data['magasins_id'] = $this->input->post('magasins_id');
        $data['fournisseurs_id'] = $this->input->post('fournisseurs_id');

        $this->produits_model->update($data['id'] = $this->input->post('id'), $data);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/produits', 'refresh');
    }

    public function delete($id)
    {
        $data['data'] = $this->produits_model->delete($id);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/produits', 'refresh');
    }
}
