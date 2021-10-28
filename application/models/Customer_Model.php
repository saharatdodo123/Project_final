<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_Model extends CI_Model {

    function login($cus_email, $cus_password)
    {
        $this->db->where('cus_email', $cus_email);
        $this->db->where('cus_password', $cus_password);
        $result = $this->db->get('customer');
        $message = '';
        if ($result->num_rows() > 0) {
            $message = true;
        } else {
            $message = false;
        }
        $data = array(
            "message" => $message, "data" => $result->result()
        );
        return $data;
    }

    function register($data, $data2)
    {
        $this->db->insert('customer', $data);
        $this->db->insert('cus_address', $data2);
    }

    function getprofile($cus_id)
    {
        $this->db->where('cus_id',$cus_id);
        $query = $this->db->get('customer');
        return $query->result();
    }

    function getaddress($cus_id)
    {
        $this->db->where('cus_id',$cus_id);
        $query = $this->db->get('cus_address');
        return $query->result();
    }

    function edit_profile($cus_profile,  $cus_id)
    {
        $this->db->set($cus_profile);
        $this->db->where('cus_id', $cus_id);
        $this->db->UPDATE('customer');
    }

    function edit_address($cus_address, $cus_id)
    {
        $this->db->set($cus_address);
        $this->db->where('cus_id', $cus_id);
        $this->db->UPDATE('cus_address');
    }

    function add_profile($ptg_imageresult)
    {
        $this->db->insert('ptg_imageresult', $ptg_imageresult);
    }
}