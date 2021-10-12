<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cars extends CI_Controller {
    public function index()
	{
		$this->cardetail();
	}
	public function cardetail()
	{
		if($this->session->userdata('logged_in'))
		{
			if($this->session->userdata('usertype')==2)
			{
				$item['detail'] = $this->Home_Model->getcars();
			    $this->load->view('customer_profile.php', $item);
			}
			if($this->session->userdata('usertype')==1)
			{
				$item['detail'] = $this->Home_Model->getcars();
			    $this->load->view('agency_profile.php', $item);
			}
		}else{
			$item['detail'] = $this->Home_Model->getcars();
		    $this->load->view('available_cars', $item);
		}
	}
	public function checklogin()
	{
		if(!$this->session->userdata('logged_in'))
		{
			$this->session->set_flashdata('registered', 'Please Login...!', 300);
            redirect('/');
		}
	}
	public function addcar()
	{
		if($this->session->userdata('logged_in'))
		 {
			$this->load->view('add_car.php');
		 }
		else{
            redirect('/');
		}
	}
	public function Newcar()
	{
		$data['vehicle_model'] = $this->input->post('carModel');
        $data['vehicle_number'] = $this->input->post('carNumber');
        $data['seating_cap'] = $this->input->post('seat');
        $data['rent_pd'] = $this->input->post('rent');
		$this->Home_Model->savecardetail($data);
		$this->session->set_flashdata('registered', 'New car added successfully', 300);
		redirect('index.php/cars/');
	}
	public function editcar($id)
	{
		if($this->session->userdata('logged_in'))
		{
			$item['detail'] = $this->Home_Model->cardetail($id);
			$this->load->view('edit_detail.php', $item);
		}
		else{
			redirect('/');
		}
	}
	public function updatecar()
	{
		$carid = $this->input->post('carid');
		$data['vehicle_model'] = $this->input->post('carModel');
        $data['vehicle_number'] = $this->input->post('carNumber');
        $data['seating_cap'] = $this->input->post('seat');
        $data['rent_pd'] = $this->input->post('rent');
		$this->Home_Model->updatecardetail($carid, $data);
		$this->session->set_flashdata('registered', 'Car detail updated successfully', 300);
		redirect('index.php/cars/');
	}
	public function rent()
	{
		$data['id'] = $this->input->post('carid');
		$data['vehicle_model'] = $this->input->post('model');
        $data['vehicle_number'] = $this->input->post('num');
        $data['seating_cap'] = $this->input->post('seat');
        $data['rent_pd'] = $this->input->post('rentpd');
		$data['day'] = $this->input->post('day');
		$data['start_date'] = date('Y-m-d');
		$this->Home_Model->rentcar($data);
		$this->session->set_flashdata('registered', 'Car rent successfully', 300);
		redirect('index.php/cars/');
	}
	public function bookedcar()
	{
		if($this->session->userdata('logged_in')){
			$item['detail'] = $this->Home_Model->getbookedcar();
	   		 $this->load->view('booked_car.php', $item);
		}
		else{
			redirect('/');
		}
	}
}
