
<?php
class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('templates/header');
         $this->load->view('templates/nav');

        $this->load->view('templates/footer');

    }
}
