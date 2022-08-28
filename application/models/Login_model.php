<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login_model extends CI_Model {
		
		function logged_id()
		{
			return $this->session->userdata('id_user');
		}
		
        public function login($username, $passwordx)
        {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('username', $username);
            $this->db->where('password', $passwordx);
            return $this->db->get()->row();
        }

        public function get_role($id_user) {
            $this->db->select('b.user_level');
            $this->db->from('user a');
            $this->db->join('user_level b', 'a.id_user_level=b.id_user_level');
            $this->db->where('a.id_user', $id_user);

            return $this->db->get()->row();
        }
    
    }
