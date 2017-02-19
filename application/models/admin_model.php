<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_admin($username,$password){
       return $this->db->get_where('t_admin',array(
            'admin_name'=>$username,
            'admin_password'=>$password
        ))->row();
    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */