<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paoma extends CI_Controller {

	/*
	 * Constructor
	 */
	public function __construct() {
		parent::__construct();
	}

	/*
	 * Render view
	 */
	private function render($view, $data = array()) {
		$this -> load -> view('app/header');
		$this -> load -> view('app/sidenav');
		$this -> load -> view($view, $data);
		$this -> load -> view('app/footer');
	}

	/*
	 * Index
	 */

	public function index() {
		$this -> render('index');
	}

	/*
	 * Login fom
	 */
	public function login() {
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		$check = $this -> paoma_model -> get_user($username, $password);

		if ($check) {
			$this -> session -> set_userdata('logged_in', true);
			redirect('paoma/admin', 'refresh');
		} else {
			$this -> session -> set_userdata('logged_in', false);
			$this -> session -> set_flashdata('msg', 'Identifiant / Mot de passe invalide');
			redirect('paoma/index', 'refresh');
		}
	}
	
	public function admin(){
		$this->render('admin');
	}

	public function logout() {
		$this -> session -> unset_userdata('logged_in');
		$this -> session -> sess_destroy();
		redirect('paoma/index', 'refresh');
	}

	/*
	 * Register form
	 */
	public function new_user() {
		$this -> render('add_user');
	}

	private function add_user_remap() {

		if ($this -> input -> post('ajouter')) {

			$username = $this -> input -> post('username');
			$password = $this -> input -> post('password');
			$fonction = $this -> input -> post('fonction');

			return $result = $this -> paoma_model -> add_user($username, $password, $fonction);
		}
	}

	public function add_user() {
		$this -> add_user_remap();
		redirect('paoma/new_user', 'refresh');
	}

	public function fetch_user() {
		$fetch['data'] = $this -> paoma_model -> fetch_user();
		$this -> render('users', $fetch);
	}

	public function update($id) {
		$data['data'] = $this -> paoma_model -> fetch_user_id($id);
		$this -> render('update_user', $data);
	}

	private function update_user_remap() {
		$id = $this -> input -> post('id');
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		$fonction = $this -> input -> post('fonction');

		return $result = $this -> paoma_model -> update_user($id, $username, $password, $fonction);
	}

	public function update_user() {
		$this -> update_user_remap();
		redirect('paoma/fetch_user', 'refresh');
	}

	public function delete_user_remap($id) {
		return $result = $this -> paoma_model -> delete_user($id);
	}

	public function delete_user($id) {
		$this -> delete_user_remap($id);
		redirect('paoma/fetch_user', 'refresh');
	}

	/*
	 * Products form
	 */

}
