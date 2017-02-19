<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('commodity');
		$commoditys = $this->commodity->get_all();
		$this->load->view('index',array(
					'commoditys'=>$commoditys
		));

	}
	public function passport_login(){
		$this->load->view('login');
//		$loginm=$this->input->get('loginm');
//
//
//			$username=$this->input->post('username');
//			$password=$this->input->post('password');
//			$submit=$this->input->post('submit');
//
//
//			$this->load->model('user_model');
//			$user=$this->user_model->get_user($username,$password);
//
//			if($user){
//
//				echo  "<script>alert('登录成功')</script>";
//				$this->load->view('login_sucess',array(
//						'uname'=>$username
//				));
////			echo "<meta http-equiv='Refresh' content='0;URL=other_login'>";
////			重定向跳转页面；
//			}else{
//				echo "登录失败";
//				$this->load->view('login');
//			}
	}
	public function passport_signup(){
		$this->load->view('signup');

	}
	public function validation_user(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		if($username == 'admin'){
			$this->load->model('admin_model');
			$user=$this->admin_model->get_admin($username,$password);
			if($user){
				echo"<script>alert('管理员登录');</script>";
				$this->load->model('user_model');
				$users=$this->user_model->get_all();

				$this->load->view('admin',array(
					'admin_name'=>$username,
						'users'=>$users
				));
			}else{
				echo"登录失败";
			$this->load->view('login');
			}
		}else{
			$this->load->model('user_model');
			$user=$this->user_model->get_user($username,$password);
			if($user){
				echo"<script>alert('登陆成功')</script>";
				$this->load->model('commodity');
				$commoditys=$this->commodity->get_all();
				$this->load->view('login_sucess',array(
					'uname'=>$username,
					'commoditys'=>$commoditys
				));
			}else{
				echo"登录失败";
				$this->load->view('login');
			}

		}

	}
	public function check_username(){
		$username = $this -> input -> get ("username");
		$this->load->model("user_model");
		$row = $this ->user_model -> get_by_username($username);
		if($row){
			echo "success";
		}else{
			echo "fail";
		}
	}
	public function user_signup(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$sex=$this->input->post('sex');

		$this->load->model('user_model');
		$rows = $this->user_model->save_user($username,$password,$sex);
		if($rows){
			$user=$this->user_model->get_user($username,$password);
			if($user){
				echo"<script>alert('注册成功')</script>";
				$this->load->model('commodity');
				$commoditys=$this->commodity->get_all();
				$this->load->view('login_sucess',array(
						'uname'=>$username,
						'commoditys'=>$commoditys
				));
			}else{
				echo"登录失败";
				$this->load->view('login');
			}
		}else{
			echo 'fail';
		}

	}

	public function new_commodity(){
		$this->load->model('commodity');
		$newCommoditys=$this->commodity->get_new_commodity();
		$this->load->view('new_commodity',array(
					'newCommoditys'=>$newCommoditys
		));
	}

	public function appliance(){
		$categoryId=$this->input->get('category_id');
		$this->load->model('commodity');
		$appliances=$this->commodity->get_appliance($categoryId);
		$this->load->view('appliance',array(
			'appliances'=> $appliances
		));
	}

	public function cooker(){
		$categoryId=$this->input->get('category_id');
		$this->load->model('commodity');
		$cookers=$this->commodity->get_cooker($categoryId);
		$this->load->view('cooker',array(
			'cookers'=>$cookers
		));
	}
	public  function phone(){
		$categoryId=$this->input->get('category_id');
		$this->load->model('commodity');
		$phones=$this->commodity->get_phone($categoryId);
		$this->load->view('phone',array(
			'phones'=>$phones
		));
	}
	public function computer(){
		$categoryId=$this->input->get('category_id');
		$this->load->model('commodity');
		$computers=$this->commodity->get_computer($categoryId);
		$this->load->view('computer',array(
			'computers'=>$computers
		));

	}
	public function get_computer(){
		$cateId=$this->input->get('cateId');//ajax传过来的自定义属性data-id
		$categoryId=$this->input->get('categoryId');
		$this->load->model('commodity');

		if($cateId==1){
			$computers=$this->commodity->get_computer($categoryId);
			echo json_encode($computers);
		}elseif($cateId==2){
			$computers=$this->commodity->get_computer2($categoryId);
			echo json_encode($computers);
		}elseif($cateId==3){
			$computers=$this->commodity->get_computer3($categoryId);
			echo json_encode($computers);
		}elseif($cateId==4){
			$computers=$this->commodity->get_computer4($categoryId);
			echo json_encode($computers);
		}
	}

	public function sucess_index(){
		$username=$this->input->get('username');
		$this->load->model('commodity');
		$commoditys = $this->commodity->get_all();

		$this->load->view('sucess_index',array(
				'commoditys'=>$commoditys,
				'uname'=>$username
		));

	}

	public  function sucess_new_commodity(){
		$username=$this->input->get('username');
		$this->load->model('commodity');
		$newCommoditys=$this->commodity->get_new_commodity();
		$this->load->view('sucess_new_commodity',array(
				'newCommoditys'=>$newCommoditys,
				'uname'=>$username
		));
	}
	public function sucess_appliance(){
		$username=$this->input->get('username');
		$categoryId=$this->input->get('category_id');
		$this->load->model('commodity');
		$appliances=$this->commodity->get_appliance($categoryId);
		$this->load->view('sucess_appliance',array(
				'appliances'=> $appliances,
				'uname'=>$username
		));
	}
	public function sucess_cooker(){
		$username=$this->input->get('username');
		$categoryId=$this->input->get('category_id');
		$this->load->model('commodity');
		$cookers=$this->commodity->get_cooker($categoryId);
		$this->load->view('sucess_cooker',array(
				'cookers'=>$cookers,
				'uname'=>$username
		));
	}
	public function sucess_phone(){
		$username=$this->input->get('username');
		$categoryId=$this->input->get('category_id');
		$this->load->model('commodity');
		$phones=$this->commodity->get_phone($categoryId);
		$this->load->view('sucess_phone',array(
				'phones'=>$phones,
				'uname'=>$username
		));
	}
	public function sucess_computer(){
		$username=$this->input->get('username');
		$categoryId=$this->input->get('category_id');
		$this->load->model('commodity');
		$computers=$this->commodity->get_computer($categoryId);
		$this->load->view('sucess_computer',array(
				'computers'=>$computers,
				'uname'=>$username
		));
	}

	public function shopping(){
		$username=$this->input->get('username');
		$commodityId=$this->input->get('commodityId');
		$this->load->model('commodity');
		$information=$this->commodity->get_information($commodityId);
		$this->load->view('shopping',array(
				'uname'=>$username,
				'informations'=>$information
		));
	}

	public function shopping_car(){
		$username=$this->input->get('username');
		$commodityId=$this->input->get('commodityId');
		$this->load->model('commodity');
		$information=$this->commodity->get_information($commodityId);
		$this->load->view('shopping_car',array(
				'informations'=>$information
				));
	}

	public function sousuo(){
		$sousuoVal = $this->input->get('sousuoVal');

		$arr=array('家电','厨卫','phone','电脑');//把数据库里的地段放在数组里
		$isin=in_array($sousuoVal,$arr);//判断$sousuoVal在不自在数组$arr中；

		if($isin){
			$this->load->model('commodity_category');
			$categorys=$this->commodity_category->get_category($sousuoVal);
			$categoryId=$categorys->category_id;
			$this->load->model('commodity');
			$commoditys=$this->commodity->get_commodityId($categoryId);
			echo(json_encode($commoditys));
		}else{
			$this->load->model('commodity');
			$commoditys=$this->commodity->get_commoditySousuo($sousuoVal);
			if($commoditys){
				echo (json_encode($commoditys));
			}else{
				echo 'false';
				}
			}
	}

	public function admin(){
		$this->load->model('user_model');
		$users=$this->user_model->get_all();

		$this->load->view('admin',array(
				'users'=>$users
		));
	}

	public function admin_shanchu(){
		$userId=$this->input->get('userId');
		$this->load->model('user_model');
		$rest = $this->user_model->get_delete($userId);
		if($rest){
			$this->load->model('user_model');
			$users=$this->user_model->get_all();

			$this->load->view('admin',array(
					'users'=>$users
			));
		}else{
			echo '<script>alert("删除失败！");</script>';
		}
	}
	public function admin_commodity(){
		$this->load->model('commodity');
		$commoditys=$this->commodity->get_all();
		$this->load->view('admin_commodity',array(
			'commoditys'=>$commoditys
		));
	}
	public function commodity_shanchu(){
		$commodityId=$this->input->get('commodityId');
		$this->load->model('commodity');
		$affect = $this->commodity->commodity_shanchu($commodityId);
		if($affect){
			$this->load->model('commodity');
			$commoditys=$this->commodity->get_all();
			$this->load->view('admin_commodity',array(
					'commoditys'=>$commoditys
			));
		}else{
			echo '<script>alert("删除失败！！！");</script>';
		}

	}
	public function admin_add(){
		$username=$this->input->get('username');
		$password=$this->input->get('password');
		$sex=$this->input->get('sex');
		$this->load->model('user_model');
		$rest=$this->user_model->save_user($username,$password,$sex);
		if($rest){
			echo '<script>alert("添加成功！");</script>';
			$this->load->model('user_model');
			$users=$this->user_model->get_all();
			$this->load->view('admin',array(
					'users'=>$users
			));
		}else{
			echo '<script>alert("添加失败！");</script>';
		}
	}
	public function add_commodity(){
		$title=$this->input->get('title');
		$price=$this->input->get('price');
		$postData=$this->input->get('post-data');
		$imgs=$this->input->get('imgs');
		$this->load->model('commodity');
		$ros=$this->commodity->save_commodity($title,$price,$postData,$imgs);
		if($ros){
			echo '<script>alert("添加成功！");</script>';
			$this->load->model('commodity');
			$commoditys=$this->commodity->get_all();
			$this->load->view('admin_commodity',array(
					'commoditys'=>$commoditys
			));
		}else{
			echo '<script>alert("添加失败！");</script>';
		}
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */