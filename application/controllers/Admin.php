<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $ip = $_SERVER['HTTP_HOST'];;

        $arrayData = array(
            "ip" => $ip,
        );
        $this->load->view('admin', $arrayData);
    }
}
