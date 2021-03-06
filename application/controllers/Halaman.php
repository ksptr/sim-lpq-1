<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	//fungsi _view() nampilin header, halaman, dan footer sekaligus
	public function _view($halaman = NULL) ////nama fungsi pakai underscore di awal supaya fungsi ngga bisa diakses pake URL
	{
		$this->load->view('header');
		$this->load->view('halaman/'.$halaman);
		$this->load->view('footer');
	}

	public function index()
	{
		redirect(site_url());
	}

	public function panduan()
	{
		$this->_view('panduan');
	}

	public function timeline()
	{
		$this->_view('timeline');
	}

	public function kontak()
	{
		$this->_view('kontak');
	}

	public function pengembang()
	{
		$this->_view('pengembang');
	}
}
