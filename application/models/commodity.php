<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commodity extends CI_Model {

	public function get_all(){
		$this->db->limit(12);
		return $this->db->get('t_commodity')->result();
	}

	public function get_new_commodity(){
		$this->db->limit(12);
		$this->db->order_by('post_date','desc');
		return $this->db->get('t_commodity')->result();
	}
	public function get_appliance($categoryId){
		return  $this->db->get_where('t_commodity',array(
			'category_id'=>$categoryId
		))->result();
	}
	public function get_cooker($categoryId){
		$this->db->order_by('price','desc');
		return $this->db->get_where('t_commodity',array(
			'category_id'=>$categoryId
		))->result();
	}
	public function get_phone($categoryId){
		$this->db->order_by('price','desc');
		return $this->db->get_where('t_commodity',array(
			'category_id'=>$categoryId
		))->result();
	}
	public function get_computer($categoryId){
//		$this->db->order_by('price','desc');
		return $this->db->get_where('t_commodity',array(
				'category_id'=>$categoryId
		))->result();
	}
	public function get_computer2($categoryId){
		$this->db->order_by('price','desc');
		return $this->db->get_where('t_commodity',array(
				'category_id'=>$categoryId
		))->result();
	}
	public function get_computer3($categoryId){
		$this->db->order_by('post_date','desc');
		return $this->db->get_where('t_commodity',array(
				'category_id'=>$categoryId
		))->result();
	}
	public function get_computer4($categoryId){
		$this->db->order_by('click','desc');
		return $this->db->get_where('t_commodity',array(
				'category_id'=>$categoryId
		))->result();
	}
	public function get_information($commodityId){
		return $this->db->get_where('t_commodity',array(
			'commodity_id'=>$commodityId
		))->row();//返回一条记录就可以，不用返回一个数组（result）；
	}
	public function get_commodityId($categoryId){
		return $this->db->get_where('t_commodity',array(
			'category_id'=>$categoryId
		))->result();
	}
	public function get_commoditySousuo($sousuoVal){
		return $this->db->get_where('t_commodity',array(
			'title'=>$sousuoVal
		))->result();
	}

	public function commodity_shanchu($commodityId){
		$this->db->delete('t_commodity',array(
				'commodity_id'=>$commodityId
		));
		return $this->db->affected_rows();
	}
	public function save_commodity($title,$price,$postData,$imgs){
		 $this->db->insert('t_commodity',array(
				'title'=>$title,
				'price'=>$price,
				'post_date'=>$postData,
				'img'=>$imgs
		));
		return $this->db->affected_rows();

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */