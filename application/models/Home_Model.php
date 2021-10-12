<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_Model extends CI_Model {

    function logindata($user,$pass)
    {
        $this->db->where('email',$user);
        $this->db->where('password',$pass);
        $qry=$this->db->get("users");
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function savecustomer($data)
    {
        $this->db->insert('users',$data);
        return true;
    }
    function getcars()
    {
        $this->db->select('*');
        $this->db->from('cars');
        $val = $this->db->get();
        return $data = $val->result_array();
        // $this->db->select("*");
        // $result = $this->db->get('users');
        // return $result->result_array ();
    }
    function cardetail($id)
    {
        $this->db->select('*');
        $this->db->from('cars');
        $this->db->where('id',$id);
        $val = $this->db->get();
        return $data = $val->row_array();
    }
    function savecardetail($data)
    {
        $this->db->insert('cars',$data);
        return true;
    }
    function updatecardetail($carid, $data)
    {

        $this->db->where('id',$carid);
        $this->db->update('cars',$data);
        return true;
    }
    function rentcar($data)
    {
        $this->db->insert('rent_car',$data);
        return true;
    }
    function getbookedcar()
    {
        $this->db->select('*');
        $this->db->from('rent_car');
        $val = $this->db->get();
        return $data = $val->result_array();
    }
}
