<?php
/**
    @class HomeControlelr
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class AssignerController extends \System\BaseController
{
    public function index($author=null)
	{
		// echo "<pre>";
		// 	print_r($_SERVER);
		// 	echo "<pre>";
		// 	die();
        

		$tahun=date('Y');
		$userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
		$datamodel = new \Models\MasterModel();		 
		$data_user_login = $datamodel->get_user_login($userlogin);
        // session_unset( $_SESSION['employee_id']);

        // echo "<pre>";
		// 	print_r($data_user_login);
		// 	echo "<pre>";
		// 	die();

    // [id] => 940909807
    // [employee_id] => 940909807
    // [emp_name] => ANTONIUS NOVRIS
    // [NTUserName] => ANTONIUS.NOVRIS
    // [group_cd] => IT
    // [div_cd] => SPL
    // [dept_cd] => SRA
    // [is_dept_assigner] => yes
    // [is_first_assigner] => yes
    // [NickName] => Anton 

    $author_message = 'Welcome to Assigner Toolkite';

    if($author=='no')
    {
        $author_message = 'Sory, You dont have Authorized';
    }

        $_SESSION['data_user_login'] = $data_user_login;
        // $employee_id = $_SESSION['data_user_login']['employee_id'];
        // $emp_name = $_SESSION['data_user_login']['emp_name'];
        // $NTUserName = $_SESSION['data_user_login']['NTUserName'];
        // $group_cd = $_SESSION['data_user_login']['group_cd'];
        // $div_cd = $_SESSION['data_user_login']['div_cd'];
        // $is_dept_assigner = $_SESSION['data_user_login']['is_dept_assigner'];
        // $is_first_assigner = $_SESSION['data_user_login']['is_first_assigner'];

        $this->viewBag->author_message = $author_message;

		$this->viewBag->nama_user = $userlogin;
		$this->viewBag->data_user = $_SESSION['data_user_login'];

        
		return $this->View();
	}  

    public function fake_login($author_message=null)
	{
		// echo "<pre>";
		// 	print_r($_SERVER);
		// 	echo "<pre>";
		// 	die();

		// $tahun=date('Y');
		// $userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
		// $datamodel = new \Models\MasterModel();		 
        // $data_user_login = $datamodel->get_user_login($userlogin);
        
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

        $this->viewBag->author_message = $author_message;

		// $this->viewBag->nama_user = $userlogin;
		$this->viewBag->data_user = $_SESSION['data_user_login'];

        $this->viewBag->nama_halaman = 'Please Login'; 

        return $this->View();
    }

    public function save_fake_login($userlogin=null)
	{
		

        $userlogin = $_POST['NTUserName'];

        // echo "<pre>";
		// 	print_r($userlogin);
		// 	echo "<pre>";
		// 	die();

		// $tahun=date('Y');
		// $userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
		$datamodel = new \Models\AdminModel();		 
		$data_user_login = $datamodel->get_user_login($userlogin);

        

    // echo "<pre>";
	// 		print_r($_SESSION['data_user_login']);
	// 		echo "<pre>";
	// 		die();

        $_SESSION['data_user_login'] = $data_user_login;
        // $employee_id = $_SESSION['data_user_login']['employee_id'];
        // $emp_name = $_SESSION['data_user_login']['emp_name'];
        $NTUserName = $_SESSION['data_user_login']['NTUserName'];
        // $group_cd = $_SESSION['data_user_login']['group_cd'];
        // $div_cd = $_SESSION['data_user_login']['div_cd'];
        // $is_dept_assigner = $_SESSION['data_user_login']['is_dept_assigner'];
        // $is_first_assigner = $_SESSION['data_user_login']['is_first_assigner'];

        $author_message = 'User heve been change to : ' + $NTUserName;


        // echo "<pre>";
		// 	print_r($_SESSION['data_user_login']);
		// 	echo "<pre>";
		// 	die();

        

        return $this->RedirectToAction("fake_login","Assigner","$author_message");
    }

     
}