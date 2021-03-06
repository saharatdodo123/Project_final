<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session', 'database');
		$this->load->model('Customer_Model', 'CTM');
		$this->load->model('Photographer_Model', 'PTM');
		$this->load->model('Contract_Model', 'CM');
		$this->load->model('Payment_Model', 'PMM');
	}

	public function index()
	{
		$this->load->view('header2');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function home_cus()
	{
		$this->load->view('header_cus');
		$this->load->view('home_cus');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header2');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function logging_in()
	{
		if ($this->input->post('login')) {
			$cus_email = $this->input->post('cus_email');
			$cus_password = $this->input->post('cus_password');
			$check = $this->CTM->login($cus_email, $cus_password);
			if ($check['message'] == true) {
				$array = json_decode(json_encode($check['data']), true);
				$this->session->set_userdata($array[0]);
				//$data['query'] = $this->ffc->showuser_admin();
				echo "<script language='JavaScript'>";
				echo "alert('ล็อกอินสำเสร็จ')";
				echo "</script>";
				$this->load->view('header_cus');
				$this->load->view('home_cus');
				$this->load->view('footer');
			} else {
				echo "<script language='JavaScript'>";
				echo "alert('กรุณาใส่รหัสอีกครั้ง')";
				echo "</script>";
				$this->load->view('header2');
				$this->load->view('login');
				$this->load->view('footer');
				//$this->session->set_flashdata('msg_error', 'รหัสผ่านไม่ถูกต้องกรุณาตรวจสอบอีกครั้งค่ะ !');
				//redirect('Welcome/index');
			}
		}
	}

	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function register_add()
	{
		$data = array(
			'cus_firstname' => $this->input->post("cus_firstname"),
			'cus_lastname' => $this->input->post("cus_lastname"),
			'cus_sex' => $this->input->post("cus_sex"),
			'cus_email' => $this->input->post("cus_email"),
			'cus_password' => $this->input->post("cus_password"),
			'cus_phone' => $this->input->post("cus_phone")
		);
		$data2 = array(
			'cus_house_number' => $this->input->post("cus_house_number"),
			'cus_canton' => $this->input->post("cus_canton"),
			'cus_district' => $this->input->post("cus_district"),
			'cus_province' => $this->input->post("cus_province"),
			'cus_postal_code' => $this->input->post("cus_postal_code"),
		);
		$this->CTM->register($data, $data2);
		echo "<script language='JavaScript'>";
		echo "alert('ลงทะเบียนสำเสร็จ')";
		echo "</script>";
		$this->load->view('header2');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function edit_profile_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CTM->getprofile($cus_id);
		$data['query2'] = $this->CTM->getaddress($cus_id);
		$this->load->view('header_cus2');
		$this->load->view('edit_profile_cus', $data);
		$this->load->view('footer');
	}

	public function editing_profile()
	{
		$cus_id = $this->input->post("cus_id");
		$cus_profile = array(
			'cus_firstname' => $this->input->post("cus_firstname"),
			'cus_lastname' => $this->input->post("cus_lastname"),
			'cus_sex' => $this->input->post("cus_sex"),
			'cus_email' => $this->input->post("cus_email"),
			'cus_password' => $this->input->post("cus_password"),
			'cus_phone' => $this->input->post("cus_phone"),
			'cus_fbprofile' => $this->input->post("cus_fbprofile")
		);
		$cus_address = array(
			'cus_house_number' => $this->input->post("cus_house_number"),
			'cus_canton' => $this->input->post("cus_canton"),
			'cus_district' => $this->input->post("cus_district"),
			'cus_province' => $this->input->post("cus_province"),
			'cus_postal_code' => $this->input->post("cus_postal_code")
		);
		$this->CTM->edit_profile($cus_profile, $cus_id);
		$this->CTM->edit_address($cus_address, $cus_id);
		echo "<script language='JavaScript'>";
		echo "alert('แก้ไขสำเสร็จ')";
		echo "</script>";
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CTM->getprofile($cus_id);
		$data['query2'] = $this->CTM->getaddress($cus_id);
		$this->load->view('header_cus2');
		$this->load->view('edit_profile_cus', $data);
		$this->load->view('footer');
	}

	public function givecreditmark_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract($cus_id);
		$this->load->view('header_cus');
		$this->load->view('givecreditmark_cus', $data);
		$this->load->view('footer2');
	}

	public function Rating_cus()
	{
		$ptg_score = array(
			'name' => $this->input->post("name"),
			'lastname' => $this->input->post("lastname"),
			'ptg_id' => $this->input->post("ptg_id"),
			'comment' => $this->input->post("comment"),
			'score' => $this->input->post("score"),
		);
		$cm_id = $this->input->post("cm_id");
		$status_score = $this->input->post("status_score");

		$this->CTM->add_score($ptg_score);
		$this->CM->edit_contractstatus($cm_id, $status_score);
		echo "<script language='JavaScript'>";
		echo "alert('ให้คะแนนสำเร็จ')";
		echo "</script>";
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract($cus_id);
		$this->load->view('header_cus');
		$this->load->view('givecreditmark_cus', $data);
		$this->load->view('footer2');
	}

	public function check_history_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract($cus_id);
		$this->load->view('header_cus');
		$this->load->view('check_history_cus', $data);
		$this->load->view('footer2');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		echo "<script language='JavaScript'>";
		echo "alert('ออกจากระบบ')";
		echo "</script>";
		$this->load->view('header2');
		$this->load->view('home');
		$this->load->view('footer');
	}
}
