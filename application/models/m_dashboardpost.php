<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_dashboardpost extends CI_Model {

    public function countall(){
        $data['posts'] = $this->db->count_all('posts');
        $data['users'] = $this->db->count_all('users');
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

    public function alluser(){
        $sql = $this->db->query('select user_id, user_name, user_email, user_type, user_created from users');
		return $sql;
    }

    public function allpostapproved(){
        $where = array(
            'post_approved' => true,
        );
        $res =  $this->db->get_where('posts', $where);
		return $res->result();
    }

    public function singlepostdetail($where, $table){
        $res =  $this->db->get_where($table, $where);
		return $res->result();
    }

    public function getpost($where, $table){
        $res =  $this->db->get_where($table, $where)->result();
		return $res;
    }

    public function deletepost($where, $table){
        $this->db->where($where);
		$res = $this->db->delete($table);
		return $res;
    }

    public function updatepost($where, $data, $table){
        $this->db->where($where);
		$res = $this->db->update($table, $data);
		return $res;
    }
    
}
