<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	public function register($data, $table){
		$res = $this->db->insert($table, $data);
		return $res;
    }
    
    public function signin($where, $table){
        $res = $this->db->get_where($table, $where, 1);
        return $res;
	}

}
