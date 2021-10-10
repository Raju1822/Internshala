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

	public function addcar()
	{
		
		$this->load->view('add_car.php');
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

}
?>