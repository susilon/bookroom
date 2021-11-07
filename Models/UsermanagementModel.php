<?php

namespace Models;

/*
Objek Model dari tabel Mastersupplier 
alter table msmi auto_increment = 3
echo "<pre>";
print_r($modul_name);
echo "<pre>";
die();
*/

class UsermanagementModel extends \System\BaseModel
{
	// public function __construct()
	// {

		
	// }



	public function cek_user_and_menu(){


		if(AUTH_WINDOWS_INTEGRATED==true)
		{
			$str = $_SERVER['HTTP_X_ORIGINAL_URL'];
			$modul_name = (explode("/",$str));
			// $main_modul_name = $modul_name['1'];

			$modul_name = $modul_name['1'].'/'.$modul_name['2'];

			//cek apakah menu yang dibuka terdaftar pada tabel msmodul
			//apabila tidak terdaftar maka menu dapat dibuka
			//apabila terdaftar maka cek lagi apakah user login punya hak akses pada menu tersebut ?

			if (FAKE_LOGIN_MODE==true){

				$userlogin = $_SESSION['data_user_login']['NTUserName'];
			} else {
				$userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
			}
			
			// $userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
			$data_user_login = $this->getrow("select du.emp_name,du.NTUserName, du.id, du.group_cd, du.div_cd, du.dept_cd, um.group_name,um.group_id from usermodul um join dtuser du on um.ntusername=du.NTUserName where du.NTUserName=?",[$userlogin]);

			$_SESSION['data_user_login'] = $data_user_login;
			// $this->viewBag->data_user = $_SESSION['data_user_login'];
			$NTUserName=$_SESSION['data_user_login']['NTUserName'];

			

			$msmodul= $this->getrow("SELECT * FROM msmodul WHERE modul_location = ?",[$modul_name]);

			$cek_modul = $this->getrow("select um.ntusername,um.group_id,um.group_name,mp.modul_id,mm.main_modul_id,mm.modul_name,mm.modul_location,um.role,du.password,mm.modul_name from usermodul um join dtuser du on um.ntusername=du.NTUserName join dtmappmodul mp on um.group_id=mp.group_id join msmodul mm on mm.id=mp.modul_id where um.ntusername = ? and mm.modul_location = ? ",[$NTUserName,$modul_name]);

			if (isset($msmodul)){

				//cek modul : apakah modul yang dibuka masuk dalam hak akes User
	        	// $datamodel = new \Models\UsermanagementModel();	
				// $cek_modul = $datamodel->cek_modul($NTUserName,$modul_name);
				

					if(!isset($cek_modul)){
						$akses_status = 'not_authorized';
					} else {
						$akses_status = 'authorize';
					}

			} else {
				$akses_status = 'authorize';
			}

			$data_menu = $this->generate_menu($data_user_login['group_id']);

			$data_user['akses_status'] = $akses_status;
			$data_user['modul_id'] = $msmodul['id'];
			$data_user['data_main_modul_id'] = $cek_modul['main_modul_id'];
			$data_user['data_menu'] = $data_menu;

			
		} else {

			$str = $_SERVER['REDIRECT_URL'];
			$modul_name = (explode("/",$str));
			$modul_name = $modul_name['2'].'/'.$modul_name['3'];

			//cek apakah ada di msmodul
			$msmodul= $this->getrow("SELECT * FROM msmodul WHERE modul_location = ?",[$modul_name]);
			// die("testtt");
			if (!isset($_SESSION['data_user_login']))
	        {

				$akses_status = 'not_login_yet';
				// return $this->RedirectToAction("","admin/login");
				$data_user['akses_status'] = $akses_status;
				$data_user['modul_id'] = $msmodul['id'];
				$data_user['data_main_modul_id'] = "";
				$data_user['data_menu'] = "";

	        } else {

				$data_user_login = $_SESSION['data_user_login'];
				if (FAKE_LOGIN_MODE==true){

					$userlogin = $_SESSION['data_user_login']['NTUserName'];
				} else {
					$userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
				}
				// $userlogin=$_SESSION['data_user_login']['NTUserName'];

				//cek apakah modul terdaftar pada mapping modul assigned by User
				$cek_modul = $this->getrow("select um.ntusername,um.group_id,um.group_name,mp.modul_id,mm.main_modul_id,mm.modul_name,mm.modul_location,um.role,du.password,mm.modul_name from usermodul um join dtuser du on um.ntusername=du.NTUserName join dtmappmodul mp on um.group_id=mp.group_id join msmodul mm on mm.id=mp.modul_id where um.ntusername = ? and mm.modul_location = ? ",[$userlogin,$modul_name]);

				if (isset($msmodul)){

					//cek modul : apakah modul yang dibuka masuk dalam hak akes User
					// $datamodel = new \Models\UsermanagementModel();	
					// $cek_modul = $datamodel->cek_modul($NTUserName,$modul_name);
					
	
						if(!isset($cek_modul)){
							$akses_status = 'not_authorized';
						} else {
							$akses_status = 'authorize';
						}
	
				} else {
					$akses_status = 'authorize';
				}

				$data_menu = $this->generate_menu($data_user_login['group_id']);

				$data_user['akses_status'] = $akses_status;
				$data_user['modul_id'] = $msmodul['id'];
				$data_user['data_main_modul_id'] = $cek_modul['main_modul_id'];
				$data_user['data_menu'] = $data_menu;
				


	        }

		}

		// if (isset($_SESSION['data_user_login'])){
		// 	$data_menu = "";
		// } else {
		// 	$data_menu = $this->generate_menu($data_user_login['group_id']);
		// }

			// echo "<pre>";
			// print_r($data_user);
			// echo "<pre>";
			// die();

		// $data_user['modul_id'] = $msmodul['id'];
		// $data_user['data_main_modul_id'] = $cek_modul['main_modul_id'];
		// $data_user['data_menu'] = $data_menu;
		// $data_user['akses_status'] = $akses_status;

		return $data_user;


	}
	

	// public function unmapp_msmodul($main_modul_id){  

	// 	echo "<pre>";
	// 		print_r($main_modul_id);
	// 		echo "<pre>";
	// 		die();
		
	// 	$this->execsql("update msmodul set main_modul_id = '999' where main_modul_id=?",[$main_modul_id]);
	// 	$this->execsql("UPDATE msmodul SET main_modul_id='999' where main_modul_id='$main_modul_id'");



	// }
	

	public function set_msmodul_to_999($main_modul_id){  
    
		// $all_msmainmodul = $this->getall("SELECT * from msmainmodul");
		$this->execsql("update msmodul set main_modul_id = '999' where main_modul_id=?",[$main_modul_id]);
		
			// echo "<pre>";
			// print_r($id);
			// echo "<pre>";
			// die();

    }
	

	public function all_msmainmodul(){  
    
        $all_msmainmodul = $this->getall("SELECT * from msmainmodul");

        return $all_msmainmodul;

    }

	public function cek_modul($ntusername=null,$modul_name=null){    
    
        $cek_modul = $this->getrow("select um.ntusername,um.group_id,um.group_name,mp.modul_id,mm.main_modul_id,mm.modul_name,mm.modul_location,um.role,du.password,mm.modul_name from usermodul um join dtuser du on um.ntusername=du.NTUserName join dtmappmodul mp on um.group_id=mp.group_id join msmodul mm on mm.id=mp.modul_id where um.ntusername = ? and mm.modul_location = ? ",[$ntusername,$modul_name]);

        return $cek_modul;

    }

	// public function get_user_login($nt_user_name=null){

	// 	$data_user_login = $this->getrow("select du.emp_name,du.NTUserName, du.id, du.group_cd, du.div_cd, du.dept_cd, um.group_name,um.group_id from usermodul um join dtuser du on um.ntusername=du.NTUserName where du.NTUserName=?",[$nt_user_name]);

	// 	return $data_user_login;

	// }


	public function generate_menu($group_id=null){
		
		$data = $this->getall("select distinct main.id as main_modul_id,main.main_modul_name,main.seq_no from dtmappmodul map join msmodul mtx on map.modul_id=mtx.id join msmainmodul main on main.id=mtx.main_modul_id where map.group_id='$group_id' order by main.seq_no");

        foreach ($data as $key => $value) {
            $main_modul_id=$value['main_modul_id'];
            $detail = $this->getall("select map.group_id,map.group_name,map.modul_id,mm.modul_name,mm.modul_location,mm.main_modul_id from dtmappmodul map join msmodul mm on map.modul_id= mm.id where map.group_id = ? and main_modul_id = ?",[$group_id,$main_modul_id]);
            $data[$key]["detail"]=$detail;
		}

        return $data;

    }
    
    public function list_msmodul_all()
	{					

		$list_msmodul_all = $this->getall("SELECT mm.*,main.main_modul_name FROM msmodul mm left join msmainmodul main on mm.main_modul_id=main.id");

        return  $list_msmodul_all;
	}

	public function list_msmainmodul_all()
	{					

		$list_msmainmodul_all = $this->getall("SELECT * FROM msmainmodul order by seq_no");

        return  $list_msmainmodul_all;
	}

	public function get_modul_by_id($id=null)
	{					

		$list_msmodul_all = $this->getrow("select * from msmodul where id=?",[$id]);

        return  $list_msmodul_all;
	}

	public function get_main_modul_by_id($id=null)
	{					

		$list_msmain_modul_all = $this->getrow("select * from msmainmodul where id=?",[$id]);

        return  $list_msmain_modul_all;
	}

	public function delete_dtmappmodul($modul_id=null)
	{					

		// $list_msmodul_all = $this->getrow("select * from msmodul where id=?",[$id]);
		$this->execsql("delete from dtmappmodul where modul_id=?",[$modul_id]);

	}


	public function list_dtgroupmodul_all()
	{					

		$list_dtgroupmodul_all = $this->getall("select * from dtgroupmodul");

        return  $list_dtgroupmodul_all;
	}

	public function get_groupmodul_by_id($id=null)
	{					

		$list_dtgroupmodul_all = $this->getrow("select * from dtgroupmodul where id=?",[$id]);

        return  $list_dtgroupmodul_all;
	}

	public function list_dtmappmodul_header()
	{					

		$list_dtmappmodul_header = $this->getall("select id, group_name from dtgroupmodul");

        return  $list_dtmappmodul_header;
	}

	public function list_dtmappmodul_detail($group_id=null)
	{					

		$list_dtmappmodul_detail = $this->getall("select mp.id,mp.modul_id,mm.modul_name, mm.modul_location from dtmappmodul mp join msmodul mm on mp.modul_id=mm.id where mp.group_id = '$group_id'");

        return  $list_dtmappmodul_detail;
	}


	public function list_usermodul_all($id=null)
	{					

		if(isset($id)){
			$list_usermodul_all = $this->getrow("select * from usermodul where id='$id'");
		} else {
			$list_usermodul_all = $this->getall("select * from usermodul");
		}


        return  $list_usermodul_all;
	}

	public function GetPicker_msmodul($keyword,$group_id=null)
    {    

        $sql = "select * from msmodul";
        $countsql = "select count(*) as total from msmodul";

        if (isset($keyword))
        {                                   
            $strSearch = str_replace("'", "''", $keyword);
            $strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";             
            if ($group_id!=0){
            $sql .= " where id not in (select modul_id from dtmappmodul where group_id = '$group_id')  and modul_name like ? ";
            $countsql .= " where id not in (select modul_id from dtmappmodul where group_id = '$group_id')  and modul_name like ? ";
            } elseif ($group_id==0)  {
            $sql .= " where id = '$group_id'  and modul_name like ? ";
            $countsql .= " where id = '$group_id'  and modul_name like ? ";    
            }

            // print_r($group_id);
            
            $parameter[] = $strSearch;
            // $parameter[] = $strSearch;
            // $parameter[] = $strSearch;
        }

        if (isset($_GET["start"])) {
            $start = $_GET["start"];
            $length = $_GET["length"];
            $limit = "limit ".$start.",".$length;            
            $sql .= $limit;
        }                

        $total = $this->getRow($countsql,$parameter);

        // datatables format response
        $returnData = array();
        $returnData["recordsTotal"] = isset($total["total"])?$total["total"]:0;
        $returnData["recordsFiltered"] = isset($total["total"])?$total["total"]:0;        

        if (isset($keyword))
        {            
            $returnData["data"] = $this->getAll($sql,$parameter);        
        } else {            
            $returnData["data"] = $this->getAll($sql);     
        }

        return $returnData;
	}
	
	public function save_data_sign_in($employee_id,$emp_name,$ntusername,$group_cd, $div_cd,$dept_cd,$nickname, $password, $create_dt,$updt_dt,$create_by,$updt_by){
	
        $this->execsql("INSERT INTO dtuser (employee_id,emp_name,NTUserName,group_cd, div_cd,dept_cd,NickName, password, create_dt,updt_dt,create_by,updt_by) VALUES ('123','$emp_name','$ntusername','EKS', 'EKS','EKS','$nickname', '$password', '$create_dt','$updt_dt','$create_by','$updt_by')");
		$this->execsql("INSERT INTO usermodul (NTUserName,group_id, group_name,create_dt,create_by, updt_dt,updt_by) VALUES ('$ntusername','9','user','$create_dt', '$create_by','$updt_dt','$updt_by')");

    }

    public function get_user_login($nt_user_name=null){
    
            // $data_user_login = $this->getrow("select * from dtuser where ntusername = '$nt_user_name'");

            $data_user_login = $this->getrow("select du.emp_name,du.NTUserName, du.id, du.group_cd, du.div_cd, du.dept_cd, um.group_name,um.group_id from usermodul um join dtuser du on um.ntusername=du.NTUserName where du.NTUserName=?",[$nt_user_name]);

            return $data_user_login;

    }

    public function proses_login($ntusername,$password){
	
        // $data_user = $this->getrow("select * from dtuser where NTUserName=?",[$ntusername]);

        $data_user = $this->getrow("select du.emp_name,du.NTUserName, du.id, du.group_cd, du.div_cd, du.dept_cd, um.group_name,um.group_id, du.password from usermodul um join dtuser du on um.ntusername=du.NTUserName where du.NTUserName=?",[$ntusername]);
        // $data_user_login = $this->getrow("select du.emp_name,du.NTUserName, du.id, du.group_cd, du.div_cd, du.dept_cd, um.group_name,um.group_id from usermodul um join dtuser du on um.ntusername=du.NTUserName where du.NTUserName=?",[$userlogin]);

        $pass = $data_user['password'];

        // echo "<pre>";
		// 	print_r($data_user);
		// 	echo "<pre>";
		// 	die();


        if(isset($data_user)){

        	if(password_verify($password, $pass)){

				$_SESSION['data_user_login'] = $data_user;

				$data_user_login = 'true';

        	} else {

        		$data_user_login = 'false';

        	}

        } else {

        	$data_user_login = 'notfound';

		}

        return $data_user_login;

    }


    // public function cek_modul($ntusername=null,$modul_name=null){

        
    
    //     $cek_modul = $this->getrow("select um.ntusername,um.group_id,um.group_name,mp.modul_id,mm.main_modul_id,mm.modul_name,mm.modul_location,um.role,du.password,mm.modul_name from usermodul um join dtuser du on um.ntusername=du.NTUserName join dtmappmodul mp on um.group_id=mp.group_id join msmodul mm on mm.id=mp.modul_id where um.ntusername = ? and mm.modul_location = ? ",[$ntusername,$modul_name]);
    //     // $pass = $data_user['password'];

    //     // echo "<pre>";
	// 	// 	print_r($cek_modul);
	// 	// 	echo "<pre>";
	// 	// 	die();


    //     return $cek_modul;

	// }
	
	

	

}