<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
     */


    function admin()
    {
        parent::__construct();

        $this->load->library('functions');
        $this->load->model('admin_model', 'admin', true);

    }

	public function index()
    {
        $header['headscript'] = "<script type='text/javascript' src='/public/js/admin.js'></script>";	
        $header['onload'] = "contactInit();";

        $this->load->view('template/homeheader');
        $this->load->view('welcome/homepage');
        $this->load->view('template/footer');
    }

    /**
     * This is a page to display all current officers of the lodge.
     */
    public function officers()
    {
        $this->load->view('template/header');
        $this->load->view('welcome/officers');
        $this->load->view('template/footer');
    }

    /**
     * TODO: short description.
     *
     * @return TODO
     */
    public function aboutus()
    {
        $this->load->view('template/header');
        $this->load->view('welcome/aboutus');
        $this->load->view('template/footer');

    }

    /**
     * TODO: short description.
     *
     * @return TODO
     */
    public function contactus()
    {
        $header['headscript'] = "<script type='text/javascript' src='/public/js/admin.js'></script>";	
		$header['onload'] = "contactInit();";

        $this->load->view('template/header', $header);
        $this->load->view('welcome/contactus');
        $this->load->view('template/footer');
    }

	public function contact($type)
	{
		$body['type'] = $type;
		$this->load->view('admin/contact', $body);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
