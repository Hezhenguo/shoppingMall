<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commodity_category extends CI_Model {
    public function get_category($sousuoVal){
//        $this->db->get_where('t_commodity_category,',array(
//                'category_name'=>$sousuoVal
//        ))->row();


        $this->db->select('category_id');
        $this->db->from('t_commodity_category');
        $this->db->where('category_name',$sousuoVal);
        return $this->db->get()->row();

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */