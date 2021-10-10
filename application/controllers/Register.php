<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

   

    public function customer()
    {
        $data['firstName'] = $this->input->post('first_name');
        $data['lastName'] = $this->input->post('last_name');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
		$data['user_type'] = '2';
		$val = $this->input->post('confirm_password');


        if($val != $data['password']){

            $this->session->set_flashdata('registered', 'Confirm password is not matched', 300);
            redirect('/index.php/welcome/register1');
        }else{

            $this->Home_Model->savecustomer($data);
            $this->session->set_flashdata('registered', 'Your Registration is Successfull', 300);
            redirect('/');
        }

    }


    public function agency()
    {
        $data['firstName'] = $this->input->post('first_name');
        $data['lastName'] = $this->input->post('last_name');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
		$data['user_type'] = '1';
		$val = $this->input->post('confirm_password');


        if($val != $data['password']){

            $this->session->set_flashdata('registered', 'Confirm password is not matched', 300);
            redirect('/index.php/welcome/register2');
        }else{

            $this->Home_Model->savecustomer($data);
            $this->session->set_flashdata('registered', 'Your Registration is Successfull', 300);
            redirect('/');
        }
    }
}
?>