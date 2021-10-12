<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->home();
	}
	public function home()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->load->model('Home_Model');
		$check_login = $this->Home_Model->logindata($user, $pass);
		if ($check_login <> '') {
			if ($check_login[0]['user_type'] == 2) {
				$data = array(
					'logged_in'  =>  TRUE,
					'firstname' => $check_login[0]['firstName'],
					'lastname' => $check_login[0]['lastName'],
					'username' => $check_login[0]['email'],
					'usertype' => $check_login[0]['user_type'],
					'userid' => $check_login[0]['id']
				);
				$this->session->set_userdata($data);
				$item['detail'] = $this->Home_Model->getcars();
				$this->load->view('customer_profile.php', $item);
			} else if ($check_login[0]['user_type'] == 1) {
				$data = array(
					'logged_in'  =>  TRUE,
					'firstname' => $check_login[0]['firstName'],
					'lastname' => $check_login[0]['lastName'],
					'username' => $check_login[0]['email'],
					'usertype' => $check_login[0]['user_type'],
					'userid' => $check_login[0]['id']
				);
				$this->session->set_userdata($data);
				$item['detail'] = $this->Home_Model->getcars();
				$this->load->view('agency_profile.php', $item);
			}
		} else {

			$this->session->set_flashdata('registered', 'Please enter correct email / password..!', 300);
            redirect('/');
		}
	}
	public function register1()
	{
		$this->load->view('customer_register');
	}
	public function register2()
	{
		$this->load->view('agency_register');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
}
