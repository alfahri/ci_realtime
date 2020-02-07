<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function list_employee()
    {
        header('Content-Type: application/json');
        $query = $this->db->get('employee');
        if ($query) {
            $response = array(
                "data" => $query->result(),
                "message" => "OK",
            );
        } else {
            $response = array(
                "data" => array(),
                "message" => "Table Empty"
            );
        }

        echo json_encode($response);
    }

    public function add_employee()
    {
        header('Content-Type: application/json');
        $input = file_get_contents("php://input");
        if (!empty($input) && isset($input)) {
            $json = json_decode($input);
            if (!empty($json->employee_name)) {
                $data = array(
                    'name' => $json->employee_name,
                );
                $query = $this->db->insert('employee', $data);
                if ($query) {
                    $response = array(
                        "data" => array(),
                        "message" => "Success Adding new Employee",
                    );
                } else {
                    $response = array(
                        "data" => array(),
                        "message" => "Failed Adding new Employee",
                    );
                }

            } else {
                $response = array(
                    "data" => array(),
                    "message" => "Employee Name Cannot be null",
                );
            }
        } else {
            $response = array(
                "data" => array(),
                "message" => "Body cannot be empty",
            );
        }
        echo json_encode($response);
    }
}
