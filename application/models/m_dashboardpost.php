<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_dashboardpost extends CI_Model {

    public function countall(){
        $data['posts'] = $this->db->count_all('posts');
        $data['users'] = $this->db->count_all('users');
        $data['comments'] = $this->db->count_all('comments');
        return $data;
    }
	public function addpost($data, $table){
        $res = $this->db->insert($table, $data);
        return $res;
    }

    public function allpost(){
        $sql = $this->db->query('select * from posts');
		return $sql;
    }
    
}
