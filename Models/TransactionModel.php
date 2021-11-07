<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class TransactionModel extends \System\BaseModel
{

    public function get_prjpicdept($id_ms_prj=null){

        
	
            $data_prjpicdept = $this->getall("select * from prjpicdept where id_ms_prj = '$id_ms_prj'");

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $data_prjpicdept;

    }

    public function get_dtpic($id_ms_prj=null){

        
            $data_dtpic = $this->getall("select * from dtpic where id_ms_prj = '$id_ms_prj'");

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $data_dtpic;

    }

    public function get_project_assign_to_me($ntusername=null){

        
        $data_project_assign_to_me = $this->getall("select mp.id, dp.id_ms_prj,mp.prj_doc_no, mp.prj_title, mp.prj_ctgry_desc, mp.prj_sts_desc, mp.file_cr_name from dtpic dp join msprj mp on dp.id_ms_prj=mp.id_ms_prj where dp.pic_name = ? and (DATEDIFF(now(),dp.create_dt)) <= 7",[$ntusername]);

        // echo "<pre>";
        // print_r($data_project_assign_to_me);
        // echo "<pre>";
        // die();

        return $data_project_assign_to_me;

}


    public function get_dttask($id_ms_prj=null){

        
	
            $data_dttask = $this->getall("select * from dttask where id_ms_prj = '$id_ms_prj' order by plan_start");

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $data_dttask;

    }

    public function get_dtprojectlog($id_ms_prj=null){

        
	
            $data_dtprojectlog = $this->getall("select * from dtprojectlog where id_ms_prj = '$id_ms_prj' order by id desc");

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $data_dtprojectlog;

    }

    public function get_dttask_by_id($id=null){

        
	
            $data_dttask = $this->getrow("select * from dttask where id = '$id'");

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $data_dttask;

    }

    public function get_dttask_by_id_ms_prj($id_ms_prj=null){

        
	
            $data_dttask = $this->getall("select * from dttask where id_ms_prj = '$id_ms_prj' order by plan_start");

            // echo "<pre>";
			// print_r($data_dttask);
			// echo "<pre>";
			// die();

            return $data_dttask;

    }

    public function get_dtdeptassigner($id_ms_prj=null){

            $data_dtdeptassigner = $this->getall("select * from dtdeptassigner where id_ms_prj = '$id_ms_prj'");

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $data_dtdeptassigner;

    }

    public function get_dtpicassigner($id_ms_prj=null){

            $data_dtdeptassigner = $this->getall("select * from dtpicassigner where id_ms_prj = '$id_ms_prj'");

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $data_dtdeptassigner;

    }

    // public function get_dtpic($id_ms_prj=null){

    //         $data_dtpic = $this->getall("select * from dtpic where id_ms_prj = '$id_ms_prj'");

    //         // echo "<pre>";
	// 		// print_r($data_user_login);
	// 		// echo "<pre>";
	// 		// die();

    //         return $data_dtpic;

    // }

    public function get_dttask_by_pic2($pic_name=null,$task_sts=null,$plan_start_from=null,$plan_start_to=null){

        if ($task_sts=='Outstanding'){

            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.pic_name = '$pic_name' and tk.task_sts_cd not in ('DN') order by tk.actual_end");

        } elseif ($task_sts=='Done') {
            // die($plan_start_from);
            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.pic_name = '$pic_name' and tk.task_sts_cd = 'DN' and tk.actual_end between CAST('$plan_start_from' AS DATE) AND CAST('$plan_start_to' AS DATE) order by tk.actual_end");
        } else {
            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.pic_name = '$pic_name' and tk.actual_end between CAST('$plan_start_from' AS DATE) AND CAST('$plan_start_to' AS DATE) order by tk.actual_end");
        }

            

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $dttask_by_pic;

    }
    

    public function get_dttask_by_pic($pic_name=null,$task_sts=null,$plan_start_from=null,$plan_start_to=null){

        if ($task_sts=='Outstanding'){

            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.pic_name = '$pic_name' and tk.task_sts_cd not in ('DN','DR') order by tk.plan_start");

        } elseif ($task_sts=='Done') {
            // die($plan_start_from);
            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.pic_name = '$pic_name' and tk.task_sts_cd = 'DN' and tk.plan_start between CAST('$plan_start_from' AS DATE) AND CAST('$plan_start_to' AS DATE) order by tk.plan_start");
        } elseif ($task_sts=='Drop') {
            // die($plan_start_from);
            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.pic_name = '$pic_name' and tk.task_sts_cd = 'DR' and tk.plan_start between CAST('$plan_start_from' AS DATE) AND CAST('$plan_start_to' AS DATE) order by tk.plan_start");
        } else {
            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.pic_name = '$pic_name' and tk.plan_start between CAST('$plan_start_from' AS DATE) AND CAST('$plan_start_to' AS DATE) order by tk.plan_start");
        }

            

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $dttask_by_pic;

    }

    public function get_outstanding_task_per_dept($dept_cd=null){

            $outstanding_task_per_dept = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.dept_cd = '$dept_cd' and tk.task_sts_cd not in ('DN') order by tk.plan_start");

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $outstanding_task_per_dept;
    }

    public function get_dttask_by_dept($dept_cd=null,$task_sts=null,$plan_start_from=null,$plan_start_to=null){

        if ($task_sts=='Outstanding'){

            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.dept_cd = '$dept_cd' and tk.task_sts_cd not in ('DN') order by tk.plan_start");

        } elseif ($task_sts=='Done') {
            // die($plan_start_from);
            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.dept_cd = '$dept_cd' and tk.task_sts_cd = 'DN' and tk.plan_start between CAST('$plan_start_from' AS DATE) AND CAST('$plan_start_to' AS DATE) order by tk.plan_start");
        } else {
            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.dept_cd = '$dept_cd' and tk.plan_start between CAST('$plan_start_from' AS DATE) AND CAST('$plan_start_to' AS DATE) order by tk.plan_start");
        }

            

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $dttask_by_pic;

    }

    public function get_dttask_by_div($div_cd=null,$task_sts=null,$plan_start_from=null,$plan_start_to=null){

        if ($task_sts=='Outstanding'){

            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.div_cd = '$div_cd' and tk.task_sts_cd not in ('DN') order by tk.plan_start");

        } elseif ($task_sts=='Done') {
            // die($plan_start_from);
            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.div_cd = '$div_cd' and tk.task_sts_cd = 'DN' and tk.plan_start between CAST('$plan_start_from' AS DATE) AND CAST('$plan_start_to' AS DATE) order by tk.plan_start");
        } else {
            $dttask_by_pic = $this->getall("select tk.id as id_dttask,tk.* ,mp.* from dttask tk join msprj mp on tk.id_ms_prj=mp.id_ms_prj where tk.div_cd = '$div_cd' and tk.plan_start between CAST('$plan_start_from' AS DATE) AND CAST('$plan_start_to' AS DATE) order by tk.plan_start");
        }

            

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $dttask_by_pic;

    }

    // $datamodely->insert_project_log($id_ms_prj,$div_cd,$dept_cd,$task_id,$task_desc,$date_start,$date_end,$create_by,$create_dt);

    public function insert_project_log($id_ms_prj=null,$div_cd=null,$dept_cd=null,$task_id=null,$task_desc=null,$remark=null,$date_start=null,$date_end=null,$create_by=null,$create_dt=null,$controller_loc=null,$method=null){

            $this->execsql("INSERT INTO dtprojectlog (id_ms_prj,div_cd, dept_cd,task_id, task_desc, remark, date_start, date_end, create_by, create_dt, controller_loc, method) VALUES ('$id_ms_prj', '$div_cd','$dept_cd','$task_id', '$task_desc', '$remark', '$date_start', '$date_end', '$create_by', '$create_dt','$controller_loc','$method')");

            // echo "<pre>";
			// print_r($div_cd);
			// echo "<pre>";
            // die();
            
            // 1 	Asign to Dept
            // 21 	Update Status Project NS
            // 22	Update Status Project OP
            // 23	Update Status Project IP
            // 24	Update Status Project DN
            // 25	Update Status Project PN
            // 26	Update Status Project DR
            // 2	Edit Date Task Plan
            // 3 	Update status task
            // 4	Asign to PIC
            // 5	Remove PIC
            // 6	Input Project
            // 7	Asign to PIC project
            // 8	Update status task

            // return $data_dtdeptassigner;

    }

}