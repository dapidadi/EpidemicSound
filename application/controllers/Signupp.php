 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Signupp extends CI_Controller {
     
     function __construct(){
        parent::__construct();      
        $this->load->model('m_akun');
        $this->load->helper('url');
 
    }

    public function index(){
    $this->load->view('signup');
  }
 
    public function register()
  {
    $this->load->model('m_akun');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $email = $this->input->post('email');
    $table = 'users';

    $data_insert = array (
      'username' => $username,
      'password' => $password,
      'email' => $email
    );

    $register = $this->m_akun->regis($table, $data_insert);

    if ($register) {
      redirect('login');
    }
  }


    // public function editpass($username){
    //     $table = 'users';
    //     $password = $this->input->post('password');
    //     $password = $this->input->post('newpass');

    //     $data_update = array (
    //         'password' => $password
    //     );


    //     redirect('login');
    // }


/*
    public function update($id_user) {
        $data = array (
            'password' => $this->input->post('password')
        );

        $this->m_akun->update($data,$id_user);

        redirect('login');
    }*/

    function edit($id_user){
        $where = array('id_user' => $id_user);
        $data['users'] = $this->m_akun->edit_data($where,'users')->result();
        $this->load->view('myaccount',$data);
    }

    function update(){
        $id_user = $this->input->post('id_user');
        $password = $this->input->post('password');

        $data = array(
            'password' => $password
        );

        $where = array(
            'id_user' => $id_user
        );

        $this->m_akun->update_data($where,$data,'users');
        redirect('welcome/home');

    }



 };