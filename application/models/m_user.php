<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	public function register($data, $table){
        $whereduplicate = array(
            'user_email' => $data['user_email'],
        );
        $rows = $this->db->get_where($table, $whereduplicate, 1);
       
        if(empty($rows->result())){
            $res = $this->db->insert($table, $data);
		    return $res;
        }else{
            return $res = 'duplicated';
        }		
    }
    
    public function signin($where, $table){
        $res = $this->db->get_where($table, $where, 1);
        return $res;
	}

}
