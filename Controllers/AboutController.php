<?php

namespace Controllers;

class AboutController extends \System\BaseController
{
	public function welcome()
	{

		$datamodel = new \Models\UsermanagementModel();	
		$data_user = $datamodel->cek_user_and_menu();

		$this->viewBag->modul_id = $data_user['modul_id'];
		$this->viewBag->main_modul_id = $data_user['data_main_modul_id'];
		$this->viewBag->data_menu = $data_user['data_menu'];

		if ($data_user['akses_status']=='not_login_yet') {
			return $this->RedirectToAction("","Usermanagement/login");
			} else {

				$this->viewBag->nama_user = $_SESSION['data_user_login']['NTUserName'];
				$this->viewBag->data_user = $_SESSION['data_user_login'];

				if ($data_user['akses_status']=='not_authorized') {
					return $this->RedirectToAction("","Usermanagement/no_authorize");
				}
			}

 
		// $this->viewBag->buka_bookroom = "nav-expanded";
		

		// $tahun=date('Y');
		// $userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
		// $this->viewBag->nama_user = $userlogin;
		// $this->viewBag->data_user = $_SESSION['data_user_login'];

		// $this->viewBag->pageTitle="Book";
		$this->viewBag->nama_halaman = 'Welcome Page';


	

		return $this->View();
	}

	public function index() { 

		$datamodel = new \Models\UsermanagementModel();	
		$data_user = $datamodel->cek_user_and_menu();

		$this->viewBag->modul_id = $data_user['modul_id'];
		$this->viewBag->main_modul_id = $data_user['data_main_modul_id'];
		$this->viewBag->data_menu = $data_user['data_menu'];

		if ($data_user['akses_status']=='not_login_yet') {
			return $this->RedirectToAction("","Usermanagement/login");
			} else {

				$this->viewBag->nama_user = $_SESSION['data_user_login']['NTUserName'];
				$this->viewBag->data_user = $_SESSION['data_user_login'];

				if ($data_user['akses_status']=='not_authorized') {
					return $this->RedirectToAction("","Usermanagement/no_authorize");
				}
			}

		$this->viewBag->nama_halaman = 'About';

		return $this->View();
	 }
	   
	 public function delete_file_cache() { 
		$this->output->delete_cache('cachecontroller'); 
	 } 

}