<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class OGC_Controller extends CI_Controller {

    protected $ci;

    protected $userInfo;    

    protected $title;  



    public function __construct()
    {
        parent::__construct();    


        $this->userInfo = $this->getSession();
    }


    public function load_view_base($view, $params = null)
    {

        $data = array();
        $data['content'] = $this->load->view($view, $params, true);
        $this->load->view('templates/base',$data, false);

    }

    public function load_view_admin($view, $params = null)
    {

        $data = array();
        $data['content'] = $this->load->view($view, $params, true);
        $this->load->view('templates/admin',$data, false);

    }

     public function load_view_user($view, $params = null)
    {

        $data = array();
        $data['content'] = $this->load->view($view, $params, true);
        $this->load->view('templates/user',$data, false);

    }

    
    public function getSession()
    {
        return $this->session->userdata('user');
    }  

    public function auth()
    {

        if ($this->session->userdata('user') === null) {

            redirect(base_url());
        }



    }

    public function authAdmin()
    {

        if ($this->session->userdata('user')['role'] !== 'admin') {

            redirect(base_url());
        }



    }


}
