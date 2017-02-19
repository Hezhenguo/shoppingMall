<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
  public function get_user($username,$password){
//    return $this->db->get('t_user')->result();
      $this->db->select('t_user.*');
      $this->db->from('t_user');
      $this->db->where('t_user.user_name',$username);
      $this->db->where('t_user.password',$password);
      return $this->db->get()->row();
  }
    public function save_user($username,$password,$sex){
        $this->db->insert('t_user',array(
            'user_name' => $username,
            'password' => $password,
            'sex' => $sex
        ));
        return $this->db->affected_rows();//返回上面的代影响的行数；
    }
    public function get_by_username($username)
    {
//        return $this->db->get_where("t_user", array(
//            "user_name" => $username
//        ))->row();
        $this->db->select('t_user.*');
        $this->db->from('t_user');
        $this->db->where('t_user.user_name',$username);
        return $this->db->get()->row();
    }
    public function get_all(){
      return  $this->db->get_where('t_user')->result();
    }

    public function get_delete($userId){
         $this->db->delete('t_user',array(
            'user_id'=>$userId
        ));
        return $this->db->affected_rows();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */