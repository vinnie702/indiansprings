<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $this->load->view('template/header');
        $this->load->view('admin/admin');
        $this->load->view('template/footer');
    }

    public function home()
    {
        $this->load->view('template/adminhomeheader');
        $this->load->view('welcome/homepage');
        $this->load->view('template/footer');
    }


    /**
     * This is a page to display all current officers of the lodge.
     */
    public function officers()
    {
        $this->load->view('template/adminheader');
        $this->load->view('admin/officers');
        $this->load->view('template/footer');
    }

    /**
     * TODO: short description.
     *
     * @return TODO
     */
    public function aboutus()
    {
        $this->load->view('template/adminheader');
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

        $this->load->view('template/adminheader', $header);
        $this->load->view('welcome/contactus');
        $this->load->view('template/footer');
    }

    /**
     * TODO: short description.
     *
     * @return TODO
     */
    public function addmember()
    {
        $header['headscript'] = "<script type='text/javascript' src='/min/?f=/public/js/admin.js{$this->config->item('min_debug')}&amp;{$this->config->item('min_version')}'></script>\n";

        $header['onload'] = "admin.addmemberIndex();";

        try
        {
            $body['states'] = $this->functions->getStates();
        }
        catch(Exception $e)
        {
            $this->functions->sendStackTrace($e);
        }

        $this->load->view('template/adminheader', $header);
        $this->load->view('admin/newmember', $body);
        $this->load->view('template/footer');
    }

    public function saveNewUser()
    {
        if ($_POST)
        {
            try
            {
                $userid = $this->admin->addNewUser($_POST);
            }
            catch(Exception $e)
            {
                $this->functions->sendStackTrace($e);
                header("Location: /admin/addmember?site-error=" . urlencode("There was a database error adding the user"));
                exit;
            }
        }

        header("Location: /admin?site-success=" . urlencode("New user has been created!"));
        exit;
    }
}
