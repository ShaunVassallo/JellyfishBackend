<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 // magic method to load the parent class
    function __construct()
    {
	   // without this, we won't  be able to...
	   // this->build our pages.
	   parent::__construct();
    }

	 function index()
    {
 	  $this->user();
    }

	 public function user()
 	{
        $data = array(
			'links'		=> $this->add_user_links()
		);
 		$this->build('user/user', $data);
 	}

    public function add()
	{
		//this command loads a view from the views folder
		$this->build('user/add');
	}

	public function edit(){

		//this command loads a view from the views folder
		$this->build('user/edit');
	}
}
