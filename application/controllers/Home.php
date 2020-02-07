<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mslider');
        $this->load->model('Musers');
        $this->load->model('Mhewan');
    }

    public function index()
    {
        $data['title'] = 'Home';
        // $data['sliderAtas'] = $this->Mslider->get_all();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
    public function posts($id)
    {
        $data['title'] = 'PS STORE';
        $data['data_detail'] = $this->Mhewan->get_id($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/lelang', $data);
        $this->load->view('templates/footer');
    }
    public function lelang2()
    {
        $data['title'] = 'lelang2';
        $this->load->view('templates/header', $data);
        $this->load->view('home/lelang2', $data);
        $this->load->view('templates/footer');
    }
    public function list()
    {
        $data['title'] = 'PS STORE';
        $data['data_hewan'] = $this->Mhewan->get_all();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/lelang3', $data);
        $this->load->view('templates/footer');
    }
    public function create_new()
    {
      if($this->session->userdata('username') != "")
      {
        $data['title'] = 'Create new data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/lelang4', $data);
        $this->load->view('templates/footer');
      }
      else
      {
        redirect(base_url());
      }
    }

    public function login()
    {
      $response   = array(
        'status' => 500,
        'msg'   => 'error',
        'data' => [],
      );
      if($this->input->post('username') != '')
      {
        $users = $this->Musers->login($this->input->post('username'), $this->input->post('password'));

        if($users['status'] == true)
        {
          $this->session->set_userdata('username', $this->input->post('username'));

          $response   = array(
              'status' => 200,
              'msg'   => 'ok',
              'data' => [],
          );
        }
      }

      echo json_encode($response);
    }

    public function logout()
    {
      $this->session->unset_userdata('username');

      $response   = array(
                'status' => 200,
                'msg'   => 'ok',
                'data' => [],
            );

      echo json_encode($response);
    }

    public function add_hewan()
    {
        $this->Mhewan->insert($this->input->post());

        $response   = array(
                'status' => 200,
                'msg'   => 'ok',
                'data' => [],
            );

        echo json_encode($response);

        // return $this->response('', 200);
    }

    public function up($id)
    {
      $this->Mhewan->insertUp($id);

      $response   = array(
                'status' => 200,
                'msg'   => 'ok',
                'data' => [],
            );

      echo json_encode($response);
    }

    public function upload()
    {
      $config['upload_path']          = '<?php echo base_url() ?>assets/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 100;
      $config['max_width']            = 1024;
      $config['max_height']           = 768;
   
      $this->load->library('upload', $config);

      echo '<pre>';
      print_r($this->upload->do_upload('berkas'));
      exit;
   
      if ( ! $this->upload->do_upload('berkas')){
        $error = array('error' => $this->upload->display_errors());

        // $this->load->view('v_upload', $error);
        $response   = array(
                'status' => 500,
                'msg'   => 'error',
                'data' => $error,
            );
      }else{
        $data = array('upload_data' => $this->upload->data());

        $response   = array(
                'status' => 200,
                'msg'   => 'ok',
                'data' => [],
            );
        // $this->load->view('v_upload_sukses', $data);
      }

      echo json_encode($response);
    }
}
