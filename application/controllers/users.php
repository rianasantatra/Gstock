<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function index()
    {
        $this->load->view('index');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

        if ($this->form_validation->run() !== true) {

            $check = $this->users_model->get_user($username, $password);

            if (count($check) > 0) {
                $session = array(
                    'login' => true,
                    'username' => $check[0]->username,
                    'userID' => $check[0]->id,
                );
                $this->session->set_userdata($session);
                redirect('applications/index', 'refresh');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Identifiant invalide ou Erreur mot de passe </div>');
                redirect('users/index', 'refresh');
            }
        } else {
            redirect('users/index', 'refresh');
        }
    }

    public function logout()
    {
        $data = array(
            'login' => '',
            'username' => '',
            'userID' => '',
        );
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('users/index');
    }

    public function add()
    {
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['function'] = $this->input->post('function');

        $this->users_model->insert($data);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/users', 'refresh');

    }

    public function edit($id)
    {
        $data['data'] = $this->users_model->get_user_by_id($id);
        $this->load->view('users/edit', $data);
    }

    public function edits()
    {
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['function'] = $this->input->post('function');

        $this->users_model->update($data['id'] = $this->input->post('id'), $data);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/users', 'refresh');
    }

    public function delete($id)
    {
        $data['data'] = $this->users_model->delete($id);
        $this->session->set_flashdata('success', 'Action reussie');
        redirect('applications/users', 'refresh');
    }

}
