<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
		$this -> load -> view('index');
	}

	/*
	 * Login fom
	 */
	public function login() {
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		$check = $this -> paoma_model -> check_user($username, $password);

		if ($check) {
			$this -> session -> set_userdata('logged_in', true);
			redirect('paoma/admin', 'refresh');
		} else {
			$this -> session -> set_userdata('logged_in', false);
			$this -> session -> set_flashdata('msg', 'Identifiant / Mot de passe invalide');
			redirect('paoma/index', 'refresh');
		}
	}

	public function admin() {
		$this -> render('admin');
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
	public function new_produit() {
		$this -> render('add_produit');
	}

	public function add_produit_remap() {
		if ($this -> input -> post('ajouter')) {

			$nom = $this -> input -> post('nom');
			$ref = $this -> input -> post('ref');
			$description = $this -> input -> post('description');
			$qte = $this -> input -> post('qte');
			$type = $this -> input -> post('type');
			$date_achat = $this -> input -> post('date_achat');
			$zone = $this -> input -> post('zone');

			return $result = $this -> paoma_model -> add_produits($nom, $ref, $description, $qte, $type, $date_achat, $zone);
		}
	}

	public function add_produit() {
		$this -> add_produit_remap();
		redirect('paoma/new_produit', 'refresh');
	}

	public function fetch_produit() {
		$config = array();
		$config["base_url"] = site_url('paoma/fetch_produit');
		$config["total_rows"] = $this -> paoma_model -> count_produits();
		$config["per_page"] = 7;
		$config["uri_segment"] = 3;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
		
		$fetch['data'] = $this -> paoma_model -> fetch_produits($config["per_page"], $page);
		$fetch["links"] = $this -> pagination -> create_links();
		$this -> render('produits', $fetch);
	}

}
