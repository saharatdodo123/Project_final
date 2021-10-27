<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
		$this->load->model('Customer_Model', 'CTM');
		$this->load->model('Photographer_Model', 'PTM');
		$this->load->model('Contract_Model', 'CM');
		$this->load->model('Payment_Model', 'PMM');
		$this->load->model('Admin_Model', 'AMM');
    }

    public function home_admin()
	{
		$admin_id = $this->session->userdata['admin_id'];
		$data['query'] = $this->AMM->showadmin($admin_id);
		$this->load->view('header_admin');
        $this->load->view('home_admin', $data);
        $this->load->view('footer_admin');
	}

	public function login_admin()
	{
		$this->load->view('header2');
		$this->load->view('login_admin');
		$this->load->view('footer');
	}

    public function register_admin()
	{
		$this->load->view('header_admin');
		$this->load->view('register_admin');
		$this->load->view('footer_admin');
	}

	public function register_admin_add()
	{
		$data = array(
			'name' => $this->input->post("text-name"),
			'lastname' => $this->input->post("text-lastname"),
			'email' => $this->input->post("text-email"),
			'password' => $this->input->post("text-password"),
            'sex' => $this->input->post("text-sex"),
			'phone' => $this->input->post("text-phone"),
			'address' => $this->input->post("text-ad"),
			'rank' => $this->input->post("text-rank")
		);
		$this->AMM->register_admin($data);
		echo "<script language='JavaScript'>";
        echo "alert('ลงทะเบียนสำเสร็จ')";
        echo "</script>";
		$admin_id = $this->session->userdata['admin_id'];
		$data['query'] = $this->AMM->showadmin($admin_id);
		$this->load->view('header_admin');
		$this->load->view('home_admin', $data);
		$this->load->view('footer_admin');

	}

	public function logging_admin()
    {
        if ($this->input->post('login')) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $check = $this->AMM->login_admin($email, $password);
            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                //$data['query'] = $this->ffc->showuser_admin();
				$admin_id = $this->session->userdata['admin_id'];
				$data['query'] = $this->AMM->showadmin($admin_id);
				echo "<script language='JavaScript'>";
                echo "alert('ล็อกอินสำเสร็จ')";
                echo "</script>";
                $this->load->view('header_admin');
                $this->load->view('home_admin', $data);
                $this->load->view('footer_admin');
            } else {
                    echo "<script language='JavaScript'>";
                    echo "alert('กรุณาใส่รหัสอีกครั้ง')";
                    echo "</script>";
					$this->load->view('header2');
					$this->load->view('login_admin');
					$this->load->view('footer');
                //$this->session->set_flashdata('msg_error', 'รหัสผ่านไม่ถูกต้องกรุณาตรวจสอบอีกครั้งค่ะ !');
                //redirect('Welcome/index');
            }
        }
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