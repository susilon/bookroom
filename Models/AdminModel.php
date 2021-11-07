<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class AdminModel extends \System\BaseModel
{


    public function save_data_sign_in($employee_id,$emp_name,$ntusername,$group_cd, $div_cd,$dept_cd,$nickname, $password, $create_dt,$updt_dt,$create_by,$updt_by){
	
        $this->execsql("INSERT INTO dtuser (employee_id,emp_name,NTUserName,group_cd, div_cd,dept_cd,NickName, password, create_dt,updt_dt,create_by,updt_by) VALUES ('$employee_id','$emp_name','$ntusername','$group_cd', '$div_cd','$dept_cd','$nickname', '$password', '$create_dt','$updt_dt','$create_by','$updt_by')");

    }

    public function get_user_login($nt_user_name=null){
    
            // $data_user_login = $this->getrow("select * from dtuser where ntusername = '$nt_user_name'");
            

            $data_user_login = $this->getrow("select du.emp_name,du.NTUserName, du.id, du.group_cd, du.div_cd, du.dept_cd, um.group_name,um.group_id from usermodul um join dtuser du on um.ntusername=du.NTUserName where um.ntusername
            ='$nt_user_name'");
            // echo "<pre>";
			// // print_r($data_user_login);
            // echo "<pre>";
            // print_r($data_user_login);
			// echo "<pre>";
			// die();
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


    public function cek_modul($ntusername=null,$modul_name=null){

        
    
        $cek_modul = $this->getrow("select um.ntusername,um.group_id,um.group_name,mp.modul_id,mm.main_modul_id,mm.modul_name,mm.modul_location,um.role,du.password,mm.modul_name from usermodul um join dtuser du on um.ntusername=du.NTUserName join dtmappmodul mp on um.group_id=mp.group_id join msmodul mm on mm.id=mp.modul_id where um.ntusername = ? and mm.modul_location = ? ",[$ntusername,$modul_name]);
        // $pass = $data_user['password'];

        // echo "<pre>";
		// 	print_r($cek_modul);
		// 	echo "<pre>";
		// 	die();


        return $cek_modul;

    }
    




}




