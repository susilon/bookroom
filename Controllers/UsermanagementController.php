<?php
/**
    @class HomeControlelr
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class UsermanagementController extends \System\BaseController
{

	// public function __construct()
	// {

	// }

	public function getlist_msmodul($group_id=null)
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\UsermanagementModel();
		$data = $datamodel->GetPicker_msmodul($keyword,$group_id);

		return $this->Json($data);
	}

    public function listmodul($author=null)
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

        $datamodel = new \Models\UsermanagementModel();		 
        $list_msmodul_all = $datamodel->list_msmodul_all();
        $this->viewBag->list_msmodul_all=$list_msmodul_all;
        
        $this->viewBag->pageTitle="Edit";
		$this->viewBag->nama_halaman = 'Master Modul';

		// echo "<pre>";
		// 	print_r($data_user);
		// 	echo "<pre>";
		// 	die();

		return $this->View();
	}  

    public function form_modul($id=null)
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

		$this->viewBag->nama_halaman = 'Master Modul';

		$all_msmainmodul = $datamodel->all_msmainmodul();
		$this->viewBag->all_msmainmodel = $all_msmainmodul;

		if(isset($id))
		{
			$datamodel = new \Models\UsermanagementModel();		 
			$data_modul = $datamodel->get_modul_by_id($id);
			$this->viewBag->data_modul=$data_modul;
			$this->viewBag->pageTitle="Editing";
		} else {
			$this->viewBag->data_modul['id']="";
			$this->viewBag->data_modul['modul_name']="";
			$this->viewBag->data_modul['modul_location']="";
			$this->viewBag->data_modul['main_modul_id']="";
			$this->viewBag->data_modul['add_to_menu']="";
			$this->viewBag->pageTitle="Add";
			
		}

		// echo "<pre>";
		// 	print_r($all_msmainmodul);
		// 	echo "<pre>";
		// 	die();
		
		return $this->View();
    }

    public function save_modul()
	{
		// echo "<pre>";
		// 	print_r($_POST);
		// 	echo "<pre>";
		// 	die();

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
		
		$datamodel2 = new \System\BaseModel("msmodul");
		$newdata2 = $datamodel2->updateorcreatemodel();
		$datamodel2->save($newdata2);

        $userlogin = $_POST['NTUserName'];

        return $this->RedirectToAction("listmodul","Usermanagement");
    }

    public function delete_modul($id=null)
	{
		// echo "<pre>";
		// 	print_r($id);
		// 	echo "<pre>";
		// 	die();

		$datamodel2 = new \System\BaseModel("msmodul");
		$newdata = $datamodel2->load($id);
		$datamodel2->trash($newdata);

		//delete modul pada table dtmappmodul
		$datamodel = new \Models\UsermanagementModel();	
		$datamodel->delete_dtmappmodul($id);
		// return $this->RedirectToAction("index");

        return $this->RedirectToAction("listmodul","Usermanagement");
	}
	
	public function list_main_modul($author=null)
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

        $datamodel = new \Models\UsermanagementModel();		 
        $list_msmainmodul_all = $datamodel->list_msmainmodul_all();
        $this->viewBag->list_msmainmodul_all=$list_msmainmodul_all;
        
        $this->viewBag->pageTitle="Edit";
		$this->viewBag->nama_halaman = 'Master Main Modul';

		return $this->View();
	} 

	public function form_main_modul(string $id=null)
	{
		// echo "<pre>";
		// 	echo ($id);
		// 	echo "<pre>";
		// 	die();

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

		$this->viewBag->nama_halaman = 'Master Modul';

		$all_msmainmodul = $datamodel->all_msmainmodul();
		$this->viewBag->all_msmainmodel = $all_msmainmodul;

		if(isset($id))
		{
			$datamodel = new \Models\UsermanagementModel();		 
			$data_main_modul = $datamodel->get_main_modul_by_id($id);
			$this->viewBag->data_main_modul=$data_main_modul;
			$this->viewBag->pageTitle="Editing";
		} else {
			$this->viewBag->data_main_modul['id']="";
			$this->viewBag->data_main_modul['modul_name']="";
			$this->viewBag->pageTitle="Add";
		}

		
		
		return $this->View();
	}
	
	public function delete_main_modul($id)
	{

		$datamodel2 = new \System\BaseModel("msmainmodul");
		$newdata = $datamodel2->load($id);
		$datamodel2->trash($newdata);

		$datamodel = new \Models\UsermanagementModel();	
		$datamodel->set_msmodul_to_999($id);

        return $this->RedirectToAction("list_main_modul","Usermanagement");
	}

	public function save_main_modul()
	{
		// echo "<pre>";
		// 	print_r($_POST);
		// 	echo "<pre>";
		// 	die();

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
		
		$datamodel2 = new \System\BaseModel("msmainmodul");
		$newdata2 = $datamodel2->updateorcreatemodel();
		$datamodel2->save($newdata2);

        $userlogin = $_POST['NTUserName'];

        return $this->RedirectToAction("list_main_modul","Usermanagement");
    }


    public function listgroupmodul($author=null)
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

        $datamodel = new \Models\UsermanagementModel();		 
        $list_dtgroupmodul_all = $datamodel->list_dtgroupmodul_all();
        $this->viewBag->list_dtgroupmodul_all=$list_dtgroupmodul_all;
        
        $this->viewBag->pageTitle="Add";
		$this->viewBag->nama_halaman = 'Master Modul';

		return $this->View();
	}  

    public function form_groupmodul($id=null)
	{

		if(isset($id))
		{
			$datamodel = new \Models\UsermanagementModel();		 
			$data_groupmodul = $datamodel->get_groupmodul_by_id($id);
			$this->viewBag->data_groupmodul=$data_groupmodul;
			$this->viewBag->pageTitle="Editing";
		} else {
			$this->viewBag->data_groupmodul['id']="";
			$this->viewBag->data_groupmodul['group_name']="";
			$this->viewBag->pageTitle="Add";
		}
		

		// echo "<pre>";
		// 	print_r($data_groupmodul);
		// 	echo "<pre>";
		// 	die();
        
		$this->viewBag->nama_halaman = 'Master Group Modul';
        
        $userlogin = $_SESSION['data_user_login']['NTUserName'];

        // $this->viewBag->author_message = $author_message;

		$this->viewBag->nama_user = $userlogin;
		$this->viewBag->data_user = $_SESSION['data_user_login'];

        return $this->View();
    }

    public function save_groupmodul()
	{
		// echo "<pre>";
		// 	print_r($_POST);
		// 	echo "<pre>";
		// 	die();

		$datamodel2 = new \System\BaseModel("dtgroupmodul");
		$newdata2 = $datamodel2->updateorcreatemodel();
		$datamodel2->save($newdata2);

        return $this->RedirectToAction("listgroupmodul","Usermanagement");
    }


    public function delete_groupmodul($id)
	{
		// echo "<pre>";
		// 	print_r($_POST);
		// 	echo "<pre>";
		// 	die();

		$datamodel2 = new \System\BaseModel("dtgroupmodul");
		$newdata = $datamodel2->load($id);
		$datamodel2->trash($newdata);
		// return $this->RedirectToAction("index");

        return $this->RedirectToAction("listgroupmodul","Usermanagement");
    }


    public function listdtmappmodul($group_id=null,$group_name=null)
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

        $datamodel = new \Models\UsermanagementModel();		 
        $list_dtmappmodul_header = $datamodel->list_dtmappmodul_header();
        $this->viewBag->list_dtmappmodul_header=$list_dtmappmodul_header;

        $list_dtmappmodul_detail = $datamodel->list_dtmappmodul_detail($group_id);
        $this->viewBag->list_dtmappmodul_detail=$list_dtmappmodul_detail;

        
        // $this->viewBag->tombol=$tombol;

        $this->viewBag->group_id=$group_id;

        $this->viewBag->group_name=$group_name;
        
        $this->viewBag->pageTitle="Add Modul to Group Here";
		$this->viewBag->nama_halaman = 'Mapping Modul';


        
		return $this->View();
	}

	public function save_mapp_modul()
	{
		// echo "<pre>";
		// 	print_r($_POST);
		// 	echo "<pre>";
		// 	die();

		$datamodel2 = new \System\BaseModel("dtmappmodul");
		$newdata2 = $datamodel2->updateorcreatemodel();
		$datamodel2->save($newdata2);

		$group_id = $_POST['group_id'];
		$group_name = $_POST['group_name'];

        return $this->RedirectToAction("listdtmappmodul","Usermanagement",$group_id."/".$group_name);
    }

    public function delete_mapp($id=null,$group_id=null,$group_name=null)
	{
		// echo "<pre>";
		// 	print_r($_POST);
		// 	echo "<pre>";
		// 	die();

		$datamodel2 = new \System\BaseModel("dtmappmodul");
		$newdata = $datamodel2->load($id);
		$datamodel2->trash($newdata);

        return $this->RedirectToAction("listdtmappmodul","Usermanagement",$group_id."/".$group_name);
    }


    public function usermodul($id=null,$task_id=null,$dept_cd=null,$div_cd=null)
	{
		// echo "<pre>";
		// 	print_r($_SERVER);
		// 	echo "<pre>";
		// 	die();

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
        
		if(isset($id))
		{
			$datamodel = new \Models\UsermanagementModel();		 
        	$list_usermodul_all = $datamodel->list_usermodul_all($id);
        	$this->viewBag->data_usermodul=$list_usermodul_all;
			$this->viewBag->pageTitle="Editing";
		} else {
			$this->viewBag->data_usermodul['id']="";
			$this->viewBag->data_usermodul['ntusername']="";
			$this->viewBag->data_usermodul['group_id']="";
			$this->viewBag->data_usermodul['group_name']="";
			$this->viewBag->pageTitle="";
		}

        $datamodel = new \Models\UsermanagementModel();		 
        $list_usermodul_all = $datamodel->list_usermodul_all();
        $this->viewBag->list_usermodul_all=$list_usermodul_all;

		$this->viewBag->nama_halaman = 'User Modul';

		return $this->View();
	}

	public function delete_usermodul($id)
	{
		// echo "<pre>";
		// 	print_r($_POST);
		// 	echo "<pre>";
		// 	die();

		$datamodel2 = new \System\BaseModel("usermodul");
		$newdata = $datamodel2->load($id);
		$datamodel2->trash($newdata);
		// return $this->RedirectToAction("index");

        return $this->RedirectToAction("usermodul","Usermanagement");
    }

    public function save_usermodul()
	{
		//$tahun=date('Y');

		if(isset($_POST['id'])) {
		$_POST['create_dt'] = date('Y-d-m');
		$_POST['create_by'] = $_SESSION['data_user_login']['NTUserName'];
		$_POST['updt_dt'] = date('Y-d-m');
		$_POST['updt_by'] = $_SESSION['data_user_login']['NTUserName'];
		} else {
		$_POST['updt_dt'] = date('Y-d-m');
		$_POST['updt_by'] = $_SESSION['data_user_login']['NTUserName'];
		}

		$datamodel2 = new \System\BaseModel("usermodul");
		$newdata2 = $datamodel2->updateorcreatemodel();
		$datamodel2->save($newdata2);

        return $this->RedirectToAction("usermodul","Usermanagement");
	}
	

	// public function generate_menu($years=null,$id_msnumber=null)
	// {

	// 	$datamodel = new \Models\UsermanagementModel();

	// 	$data = $datamodel->generate_menu($id_msnumber);
		
 	// 	$this->viewBag->data = $data;
 	// 	$this->viewBag->tanggal = date('m/d/Y, H:m:s');
	// 	$this->viewBag->nt_user_name =$_SESSION['data_user_login']['NTUserName'];

	// 	return $this->PDFView();

	// }

	public function no_authorize()
	{

		$datamodel = new \Models\UsermanagementModel();	
		$data_user = $datamodel->cek_user_and_menu();

		$this->viewBag->modul_id = $data_user['modul_id'];
		$this->viewBag->main_modul_id = $data_user['data_main_modul_id'];
		$this->viewBag->data_menu = $data_user['data_menu'];

		$this->viewBag->nama_user = $_SESSION['data_user_login']['NTUserName'];
		$this->viewBag->data_user = $_SESSION['data_user_login'];

		// $this->viewBag->data_user = $_SESSION['data_user_login'];

		$this->viewBag->nama_halaman = 'Warning'; 

		
		return $this->View();
	}

	public function sign_in()
	{

		$this->viewBag->data_user = $_SESSION['data_user_login'];

		$this->viewBag->nama_halaman = 'Sign In'; 
		
		return $this->View();
	}

	public function change_password($notifikasi=null)
	{

		// if(!isset($_SESSION['data_user_login'])){

		// 	$_SESSION['data_user_login'] = null;

		// 	$this->viewBag->data_user = null;

		// }

		$_SESSION['data_user_login'] = null;

		$this->viewBag->data_user = null;

		$this->viewBag->data_user = $_SESSION['data_user_login'];

		if ($notifikasi=="wrong")
		{
			$this->viewBag->nama_form = 'Wrong Password';
			$this->viewBag->notifikasi = 'Please Insert correct Password';
		} else {
			$this->viewBag->nama_form = 'Please Login';
			$this->viewBag->notifikasi = '';
		}

		$this->viewBag->nama_halaman = 'Change Password';
		// $this->viewBag->notifikasi = '';

		return $this->View();
	}

	public function login($notifikasi=null)
	{

		// if(!isset($_SESSION['data_user_login'])){

		// 	$_SESSION['data_user_login'] = null;

		// 	$this->viewBag->data_user = null;

		// }

		$_SESSION['data_user_login'] = null;

		$this->viewBag->data_user = null;

		$this->viewBag->data_user = $_SESSION['data_user_login'];

		if ($notifikasi=="wrong")
		{
			$this->viewBag->nama_form = 'Wrong Password';
			$this->viewBag->notifikasi = 'Please Insert correct Password';
		} else {
			$this->viewBag->nama_form = 'Please Login';
			$this->viewBag->notifikasi = '';
		}

		$this->viewBag->nama_halaman = 'Login';
		// $this->viewBag->notifikasi = '';

		return $this->View();
	}

	public function proses_login()
	{

		// $this->viewBag->data_user = $_SESSION['data_user_login'];

		// $this->viewBag->nama_halaman = 'Sign In'; 

		$password = $_POST['password'];
		$ntusername = $_POST['ntusername'];

		$datamodel = new \Models\UsermanagementModel();		 
		$data_user_login = $datamodel->proses_login($ntusername,$password);

		// $userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
		// 	$datamodel = new \Models\AdminModel();
		// 	$data_user_login = $datamodel->get_user_login($userlogin);

		// echo "<pre>";
		// 	print_r($data_user_login);
		// 	echo "<pre>";
		// 	die();

		if ($data_user_login=="true"){

			return $this->RedirectToAction("welcome","About","");

		} else if ($data_user_login=="false"){

			return $this->RedirectToAction("login","Usermanagement","wrong");

		} else {

			return $this->RedirectToAction("no_authorize","Usermanagement","");

		}

		// return $this->View();
	}

	public function save_sign_in()
	{

		// $this->viewBag->data_user = $_SESSION['data_user_login'];

		// $this->viewBag->nama_halaman = 'Sign In'; 

		// if (isset($_POST['sign_in'])){
			// echo "<pre>";
			// print_r($_POST);
			// echo "<pre>";
			// die();
		// }

		$active_user = $_SESSION['data_user_login']['NTUserName'];

		if(isset($active_user)){

			$user= $active_user;

		} else {
			$user = $_POST['ntusername'];

		}

		// unset($_POST['sign_in']);
		unset($_POST['re_password']);

		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		// $_POST['password'] = $pass;

		// unset($_POST['password']);

   //      echo "<pre>";
			// print_r($_POST);
			// echo "<pre>";
			// die();

		// employee_id,emp_name,NTUserName,group_cd, div_cd,dev_cd,NickName, password, create_dt,updt_dt,create_by,updt_by

  //       $datamodel2 = new \System\BaseModel("dtuser");
		// $newdata2 = $datamodel2->updateorcreatemodel();
		// $datamodel2->save($newdata2);

		$employee_id = '123';
		$emp_name = $_POST['emp_name'];
		$ntusername = $_POST['ntusername'];
		$group_cd = 'EKS';
		$div_cd = 'EKS';
		$dept_cd = 'EKS';
		$nickname = $_POST['nickname'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$create_dt = date('Y-m-d');
		$updt_dt = date('Y-m-d');
		$create_by = $user;
		$updt_by = $user;

		// echo "<pre>";
		// 	print_r($create_by);
		// 	echo "<pre>";
		// 	die();


		$datamodel = new \Models\UsermanagementModel();		 
		$datamodel->save_data_sign_in($employee_id,$emp_name,$ntusername,$group_cd, $div_cd,$dept_cd,$nickname, $password, $create_dt,$updt_dt,$create_by,$updt_by);


		

		return $this->RedirectToAction("login","Usermanagement","");
	}


     
}