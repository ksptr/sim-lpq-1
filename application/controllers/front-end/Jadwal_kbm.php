<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_kbm extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('front-end/header');
		$this->load->view('front-end/jadwal_kbm');
		$this->load->view('front-end/footer');
	}
}
