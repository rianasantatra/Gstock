<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function _example_output($output = null) {
		$this -> load -> view('example.php', (array)$output);
	}

	/*public function offices() {
		$output = $this -> grocery_crud -> render();

		$this -> _example_output($output);
	}*/

	public function index() {
		$this -> _example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
	}

	public function products_management() {
		$crud = new grocery_CRUD();

		$crud -> set_table('produits');
		$crud -> set_subject('Produits');
		$crud -> unset_columns('p_description');
		$crud -> columns('p_code', 'p_nom', 'p_ref', 'p_qte', 'p_pu', 'p_date_achat', 'p_date_instock', 'p_magasin', 'fournisseurs_id');
		$crud -> display_as('p_code', 'Code') -> display_as('p_nom', 'Nom') -> display_as('p_ref', 'Référence') -> display_as('p_description', 'Déscription') -> display_as('p_qte', 'Qte') -> display_as('p_pu', 'Prix unitaire') -> display_as('p_date_achat', 'Date achat') -> display_as('p_date_instock', 'En stock le') -> display_as('p_magasin', 'Emplacement') -> display_as('fournisseurs_id', 'Fournisseurs');
		$crud -> field_type('p_magasin', 'dropdown', array('1' => 'CAME', '2' => 'DSIPN'));
		$crud -> set_relation('fournisseurs_id', 'fournisseurs', 'nom');

		$output = $crud -> render();

		$this -> _example_output($output);
	}

	public function articles_management() {
		$crud = new grocery_CRUD();

		$crud -> set_table('articles');
		$crud -> set_subject('Articles');
		$crud -> unset_columns('art_description');
		$crud -> columns('art_code', 'art_nom', 'art_dispo', 'produits_id', 'clients_id');
		$crud -> display_as('art_code', 'Code') -> display_as('art_nom', 'Nom') -> display_as('art_description', 'Déscription') -> display_as('art_dispo', 'Disponible') -> display_as('produits_id', 'Référence') -> display_as('clients_id', 'Clients');
		$crud -> display_as('produits_id', 'Reference');
		$crud -> set_relation('produits_id', 'produits', 'p_nom');
		$crud -> set_relation('clients_id', 'clients', 'clt_nom');

		$output = $crud -> render();

		$this -> _example_output($output);
	}

	public function clients_management() {
		$crud = new grocery_CRUD();
		$crud -> set_table('clients');
		$crud -> set_subject('clients');
		$crud -> display_as('clt_nom', 'Nom') -> display_as('clt_contact', 'Contact') -> display_as('clt_adresse', 'Adresse') -> display_as('clt_bureau', 'Bureau');
		$output = $crud -> render();

		$this -> _example_output($output);
	}

	public function fournisseurs_management() {
		$crud = new grocery_CRUD();
		$crud -> set_table('fournisseurs');
		$crud -> set_subject('fournisseurs');
		$crud -> display_as('nom', 'Nom') -> display_as('contact', 'Contact') -> display_as('adresse', 'Adresse');
		$output = $crud -> render();

		$this -> _example_output($output);
	}

	public function demandes_management() {
		$crud = new grocery_CRUD();
		$crud -> set_table('demandes');
		$crud -> set_subject('demandes');
		$crud -> display_as('clients_id', 'Clients') -> display_as('motif', 'Demande');
		$crud -> set_relation('clients_id', 'clients', 'clt_nom');
		$output = $crud -> render();

		$this -> _example_output($output);
	}

	public function users() {
		$crud = new grocery_CRUD();

		$crud -> set_table('users');
		$crud -> columns('username', 'password', 'fonction');
		$crud -> field_type('password', 'password');
		$crud -> field_type('fonction', 'dropdown', array('1' => 'admin', '2' => 'viewer', '3' => 'editor'));

		$output = $crud -> render();

		$this -> _example_output($output);
	}

	/*public function offices_management()
	 {
	 try{
	 $crud = new grocery_CRUD();

	 $crud->set_table('offices');
	 $crud->set_subject('Office');
	 $crud->required_fields('city');
	 $crud->columns('city','country','phone','addressLine1','postalCode');

	 $output = $crud->render();

	 $this->_example_output($output);

	 }catch(Exception $e){
	 show_error($e->getMessage().' --- '.$e->getTraceAsString());
	 }
	 }

	 public function employees_management()
	 {
	 $crud = new grocery_CRUD();
	 $crud->set_table('employees');
	 $crud->set_relation('officeCode','offices','city');
	 $crud->display_as('officeCode','Office City');
	 $crud->set_subject('Employee');

	 $crud->required_fields('lastName');

	 $crud->set_field_upload('file_url','assets/uploads/files');

	 $output = $crud->render();

	 $this->_example_output($output);
	 }

	 public function customers_management()
	 {
	 $crud = new grocery_CRUD();

	 $crud->set_table('customers');
	 $crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
	 $crud->display_as('salesRepEmployeeNumber','from Employeer')
	 ->display_as('customerName','Name')
	 ->display_as('contactLastName','Last Name');
	 $crud->set_subject('Customer');
	 $crud->set_relation('salesRepEmployeeNumber','employees','lastName');

	 $output = $crud->render();

	 $this->_example_output($output);
	 }

	 public function orders_management()
	 {
	 $crud = new grocery_CRUD();

	 $crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
	 $crud->display_as('customerNumber','Customer');
	 $crud->set_table('orders');
	 $crud->set_subject('Order');
	 $crud->unset_add();
	 $crud->unset_delete();

	 $output = $crud->render();

	 $this->_example_output($output);
	 }*/

	/*public function valueToEuro($value, $row)
	 {
	 return $value.' &euro;';
	 }

	 public function film_management()
	 {
	 $crud = new grocery_CRUD();

	 $crud->set_table('film');
	 $crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
	 $crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
	 $crud->unset_columns('special_features','description','actors');

	 $crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

	 $output = $crud->render();

	 $this->_example_output($output);
	 }

	 public function film_management_twitter_bootstrap()
	 {
	 try{
	 $crud = new grocery_CRUD();

	 $crud->set_theme('twitter-bootstrap');
	 $crud->set_table('film');
	 $crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
	 $crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
	 $crud->unset_columns('special_features','description','actors');

	 $crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

	 $output = $crud->render();
	 $this->_example_output($output);

	 }catch(Exception $e){
	 show_error($e->getMessage().' --- '.$e->getTraceAsString());
	 }
	 }

	 function multigrids()
	 {
	 $this->config->load('grocery_crud');
	 $this->config->set_item('grocery_crud_dialog_forms',true);
	 $this->config->set_item('grocery_crud_default_per_page',10);

	 $output1 = $this->offices_management2();

	 $output2 = $this->employees_management2();

	 $output3 = $this->customers_management2();

	 $js_files = $output1->js_files + $output2->js_files + $output3->js_files;
	 $css_files = $output1->css_files + $output2->css_files + $output3->css_files;
	 $output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;

	 $this->_example_output((object)array(
	 'js_files' => $js_files,
	 'css_files' => $css_files,
	 'output'	=> $output
	 ));
	 }

	 public function offices_management2()
	 {
	 $crud = new grocery_CRUD();
	 $crud->set_table('offices');
	 $crud->set_subject('Office');

	 $crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

	 $output = $crud->render();

	 if($crud->getState() != 'list') {
	 $this->_example_output($output);
	 } else {
	 return $output;
	 }
	 }

	 public function employees_management2()
	 {
	 $crud = new grocery_CRUD();

	 $crud->set_table('employees');
	 $crud->set_relation('officeCode','offices','city');
	 $crud->display_as('officeCode','Office City');
	 $crud->set_subject('Employee');

	 $crud->required_fields('lastName');

	 $crud->set_field_upload('file_url','assets/uploads/files');

	 $crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

	 $output = $crud->render();

	 if($crud->getState() != 'list') {
	 $this->_example_output($output);
	 } else {
	 return $output;
	 }
	 }

	 public function customers_management2()
	 {
	 $crud = new grocery_CRUD();

	 $crud->set_table('customers');
	 $crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
	 $crud->display_as('salesRepEmployeeNumber','from Employeer')
	 ->display_as('customerName','Name')
	 ->display_as('contactLastName','Last Name');
	 $crud->set_subject('Customer');
	 $crud->set_relation('salesRepEmployeeNumber','employees','lastName');

	 $crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

	 $output = $crud->render();

	 if($crud->getState() != 'list') {
	 $this->_example_output($output);
	 } else {
	 return $output;
	 }
	 }*/

}
