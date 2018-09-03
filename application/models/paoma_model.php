<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paoma_model extends CI_Model {

	protected $users = 'users';

	public function get_user($username, $password) {
		return $this -> db -> select('*') -> from($this -> users) -> where('username', $username) -> where('password', $password) -> limit(1) -> get() -> result();
	}

	public function fetch_user() {
		return $this -> db -> select('*') -> from($this -> users) -> get() -> result();
	}

	public function fetch_user_id($id) {
		return $this -> db -> select('*') -> from($this -> users) -> where('id', $id) -> get() -> result();
	}

	public function update_user($id, $username, $password, $fonction) {
		$data = array('username' => $username, 'password' => $password, 'fonction' => $fonction);
		$this -> db -> where('id', $id);
		$this -> db -> update($this -> users, $data);
	}

	public function delete_user($id) {
		$this -> db -> where('id', $id);
		$this -> db -> delete($this -> users);
	}

}
