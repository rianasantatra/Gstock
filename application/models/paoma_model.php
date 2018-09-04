<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paoma_model extends CI_Model {

	protected $users = 'users';
	protected $produits  = 'produits';

	/*
	 * query users
	 */

	public function check_user($username, $password) {
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

	/*
	 * query produits
	 */
	public function add_produits($nom, $ref, $description, $qte, $type, $date_achat, $zone) {
		$data = array('nom' => $nom, 'ref' => $ref, 'description' => $description, 'qte' => $qte, 'type' => $type, 'date_achat' => $date_achat, 'zone' => $zone);
		$this -> db -> set($data);
		$this -> db -> insert($this -> produits);
	}
	
	public function count_produits() {
		return $this -> db -> count_all($this -> produits);
	}

	public function fetch_produits($limit, $start) {
		$this -> db -> limit($limit, $start);
		$q = $this -> db -> get($this -> produits);
		if ($q -> num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}

}
