<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class MasterModel extends \System\BaseModel
{

    public function get_user_login($nt_user_name=null){

        
	
            $data_user_login = $this->getrow("select * from dtuser where NTUserName = '$nt_user_name'");

            // echo "<pre>";
			// print_r($data_user_login);
			// echo "<pre>";
			// die();

            return $data_user_login;

    }

    public function cek_login(){


        if (!isset($_SESSION['data_user_login']))
        {
            return $this->RedirectToAction("","assigner/fake_login");
        } else {
            $data_user = $_SESSION['data_user_login'];
            return $data_user;
        }

    }

    public function list_msdept()
    {                   

        $list_msdept = $this->getall("select * from msdept");


        return  $list_msdept;
    }

    public function list_mptask_by_dept_cd($dept_cd=null)
    {                   


        $list_mptask_by_dept_cd = $this->getall("select * from mptask where dept_cd = '$dept_cd'");


        return  $list_mptask_by_dept_cd;
    }

    //Di pake <<<<<<====================================================>
	public function get_available_ms_number($special_code,$years)
	{					

		// $array_bulan = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
  //   	$bulan = $array_bulan[date('n')];

		// $available_ms_numb = $this->getcell("select availablenumb from msnumber where code=? and years=?",[$code,$years]);

        


		$available_ms_numb = $this->getcell("select availablenumb from msnumber where special_code=? and years=?",[$special_code,$years]);

        

		if(isset($available_ms_numb)) 
		{
			$available_ms_numb = $available_ms_numb;

		}		else {

			$this->execsql("UPDATE msnumber SET availablenumb='1',years='$years' where special_code=?",[$special_code]);

			$available_ms_numb = '1';
		}
		
		// die("sdfsdf"):

		$mi_len = strlen($available_ms_numb);
		if ($mi_len == 1) 
		{
    	$mi_number = "00".$available_ms_numb;
		} 
		elseif ($mi_len == 2) 
		{
		$mi_number = "0".$available_ms_numb;		
		}
		elseif ($mi_len == 3) 
		{
		$mi_number = $available_ms_numb;		
		}

        // echo "<pre>";
		// 	print_r($mi_number);
		// 	echo "<pre>";
		// 	die();

		return $mi_number;		
	}

    //Dipake <<<<<<<<<<<==========================================================
	public function update_available_number($special_code=null,$years=null)
	{					

		$seq_numb = $this->getcell("select availablenumb from msnumber where special_code=? and years=?",[$special_code,$years]);
        
		$new_seq_numb_b = $seq_numb + 1;

        // echo "<pre>";
		// 	print_r($years);
		// 	echo "<pre>";
		// 	die();

		$this->execsql("UPDATE msnumber SET availablenumb='$new_seq_numb_b' where special_code=? and years=?",[$special_code,$years]);

	}

    public function update_sts_msprj($prj_assgn_sts_cd=null,$id_ms_prj=null){

        // echo "<pre>";
		// print_r($prj_assgn_sts_cd);
        // echo "<br>";
        // print_r($id_ms_prj);
		// echo "<pre>";
		// die();


        if ($prj_assgn_sts_cd=='D')
        {
            $this->execsql("UPDATE msprj SET prj_assgn_sts_cd='$prj_assgn_sts_cd', prj_assgn_sts_desc='Assign to Dept' where id_ms_prj=?",[$id_ms_prj]);
        } elseif ($prj_assgn_sts_cd=='P')
        {
            $this->execsql("UPDATE msprj SET prj_assgn_sts_cd='$prj_assgn_sts_cd', prj_assgn_sts_desc='Assign to PIC' where id_ms_prj=?",[$id_ms_prj]);
        } elseif ($prj_assgn_sts_cd=='M')
        {
            $this->execsql("UPDATE msprj SET prj_assgn_sts_cd='$prj_assgn_sts_cd', prj_assgn_sts_desc='Assign to PMO' where id_ms_prj=?",[$id_ms_prj]);
        }
        
        return $para_value;

    }

    public function update_project_satus($id_ms_prj=null,$prj_sts_desc=null,$prj_sts_cd=null,$time_start=null,$time_end=null){

        // echo "<pre>";
		// print_r($id_ms_prj);
        // echo "<br>";
        // print_r($prj_sts_desc);
		// echo "<pre>";
		// die();
        if (isset($time_start) || isset($time_end)) {
            // die('isset');
            $this->execsql("UPDATE msprj SET prj_sts_cd='$prj_sts_cd', prj_sts_desc='$prj_sts_desc',time_start='$time_start', time_end='$time_end' where id_ms_prj=?",[$id_ms_prj]);
        } else {
            // die('not set');
            $this->execsql("UPDATE msprj SET prj_sts_cd='$prj_sts_cd', prj_sts_desc='$prj_sts_desc' where id_ms_prj=?",[$id_ms_prj]);
        }
        


        
        // return $para_value;

    }

    public function update_sts_dtdeptassigner($prj_assgn_sts_cd=null,$id_ms_prj=null){

        // echo "<pre>";
		// print_r($prj_assgn_sts_cd);
        // echo "<br>";
        // print_r($id_ms_prj);
		// echo "<pre>";
		// die();

        $this->execsql("UPDATE dtdeptassigner SET assign_sts_cd_deptassigner='$prj_assgn_sts_cd', assign_sts_desc_deptassigner='Assigned' where id_ms_prj=?",[$id_ms_prj]);


        
        return $para_value;

    }

    public function update_sts_dtpicassigner($prj_assgn_sts_cd=null,$id_ms_prj=null){

        // echo "<pre>";
		// print_r($prj_assgn_sts_cd);
        // echo "<br>";
        // print_r($id_ms_prj);
		// echo "<pre>";
		// die();

        $this->execsql("UPDATE dtpicassigner SET assign_sts_cd_picassigner='D', assign_sts_desc_picassigner='Assigned' where id_ms_prj=?",[$id_ms_prj]);


        
        return $para_value;

    }

    public function get_tbl_para_kode_msnumber_prj($para_code=null){

        

        $para_value = $this->getcell("select para_value from mspara where para_code=?",[$para_code]);

        // echo "<pre>";
		// // print_r($data_chart_div);
        // echo "<br>";
        // print_r($para_code);
		// echo "<pre>";
		// die();

        return $para_value;

    }

    public function get_tbl_msprj_all(){

        $data_msprj = $this->getall("select * from msprj");

        return $data_msprj;

    }

    public function get_tbl_msprj_by_id($id=null){

        $data_msprj = $this->getrow("select * from msprj where id=?",[$id]);

        return $data_msprj;

    }

    



    public function cek_kelengkapan_msprj($id=null){

        $data_msprj = $this->getrow("select * from msprj where id=? and (group_system_desc ='' or system_name = '' or company_name ='')",[$id]);
        // $data_msprj = $this->getrow("select * from msprj where id=? and (group_system_desc is null or system_name is null or company_name is null)",[$id]);

        return $data_msprj;

    }


    public function get_data_prj_dashboard(){

        $data_msprj = $this->getall("SELECT  prj_ctgry_desc,prj_ctgry_cd,
    SUM( prj_sts_cd = 'NS' ) AS 'NS',
    SUM( prj_sts_cd = 'UR' ) AS 'UR',
    SUM( prj_sts_cd = 'DV' ) AS 'DV',
    SUM( prj_sts_cd = 'QC' ) AS 'QC',
    SUM( prj_sts_cd = 'UT' ) AS 'UT',
    SUM( prj_sts_cd = 'ST' ) AS 'ST',
    SUM( prj_sts_cd = 'RL' ) AS 'RL',
    SUM( prj_sts_cd = 'PI' ) AS 'PI',
    SUM( prj_sts_cd = 'DN' ) AS 'DN',
    SUM( prj_sts_cd = 'PN' ) AS 'PN',
    SUM( prj_sts_cd = 'DR' ) AS 'DR',
    COUNT(prj_sts_cd) AS 'Total'
FROM msprj
GROUP BY prj_ctgry_desc,prj_ctgry_cd");

        return $data_msprj;

    }

    public function get_data_task_dashboard(){

        $data_task = $this->getall("SELECT  dept_cd,
    SUM( task_sts_cd = 'NS' ) AS 'NS',
    SUM( task_sts_cd = 'OP' ) AS 'OP',
    SUM( task_sts_cd = 'IP' ) AS 'IP',
    SUM( task_sts_cd = 'DN' ) AS 'DN',
    SUM( task_sts_cd = 'PN' ) AS 'PN',
    SUM( task_sts_cd = 'DR' ) AS 'DR',
    COUNT( task_sts_cd  ) AS 'Total'
FROM dttask
GROUP BY dept_cd");

        return $data_task;

    }

    public function get_data_mytask_reminder($pic_name=null){

        $data_task = $this->getall("select dt.id as id_dttask, DATEDIFF(dt.plan_end, now()) AS due, dt.*, mp.* from dttask dt join msprj mp on dt.id_ms_prj=mp.id_ms_prj where pic_name = '$pic_name' and task_sts_cd not in ('DN','PN','DR') and (DATEDIFF(dt.plan_end,now())) <= 7");

        return $data_task;

    }

    public function get_tbl_msprj_by_id_ms_prj($id_ms_prj=null){

        $data_msprj = $this->getrow("select * from msprj where id_ms_prj=?",[$id_ms_prj]);

        return $data_msprj;

    }

    public function get_msprj($prj_ctgry_cd=null,$prj_sts=null,$prj_title=null){


        // echo "<pre>";
		// print_r($prj_sts_single);
        // echo "<br>";
        // print_r($prj_ctgry_cd_single);
		// echo "<pre>";
		// die();

        if ($prj_ctgry_cd=='All' && $prj_sts!='All'  ){
            

            $data_msprj = $this->getall("select * from msprj where prj_sts_cd = '$prj_sts' and (prj_title like '%$prj_title%' or prj_doc_no like '%$prj_title%')");
            // die('1');

        } elseif ( $prj_ctgry_cd!='All' && $prj_sts=='All') {
            
            $data_msprj = $this->getall("select * from msprj where prj_ctgry_cd = '$prj_ctgry_cd' and (prj_title like '%$prj_title%' or prj_doc_no like '%$prj_title%') ");
            // die('2');

        } elseif ($prj_ctgry_cd!='All' && $prj_sts!='All' ) {
            
            $data_msprj = $this->getall("select * from msprj where prj_ctgry_cd = '$prj_ctgry_cd' and prj_sts_cd = '$prj_sts' and (prj_title like '%$prj_title%' or prj_doc_no like '%$prj_title%')");
            // die('3');

        } elseif ($prj_ctgry_cd=='All' && $prj_sts=='All' ) {
            
            $data_msprj = $this->getall("select * from msprj where prj_title like '%$prj_title%' or prj_doc_no like '%$prj_title%'");
            // die('4');

        } else {
            
            $data_msprj = $this->getall("select * from msprj where prj_title like '%$prj_title%' or prj_doc_no like '%$prj_title%'");
            // die('4');
        } 


        // $data_msprj = $this->getall("select * from msprj ");

        return $data_msprj;

    }

    public function get_task($prj_ctgry_cd=null,$prj_sts=null,$prj_title=null){


        // echo "<pre>";
        // print_r($prj_sts_single);
        // echo "<br>";
        // print_r($prj_ctgry_cd_single);
        // echo "<pre>";
        // die();

        if ($prj_ctgry_cd=='All' && $prj_sts!='All'  ){
            

            $data_msprj = $this->getall("select dt.*, mp.prj_title,mp.file_cr_name from dttask dt join msprj mp on dt.id_ms_prj=mp.id_ms_prj where dt.task_sts_cd = '$prj_sts' and dt.task_desc like '%$prj_title%'");
            // die('1');

        } elseif ( $prj_ctgry_cd!='All' && $prj_sts=='All') {
            
            $data_msprj = $this->getall("select dt.*, mp.prj_title,mp.file_cr_name from dttask dt join msprj mp on dt.id_ms_prj=mp.id_ms_prj where dt.dept_cd = '$prj_ctgry_cd' and dt.task_desc like '%$prj_title%'");
            // die('2');

        } elseif ($prj_ctgry_cd!='All' && $prj_sts!='All' ) {
            
            $data_msprj = $this->getall("select dt.*, mp.prj_title,mp.file_cr_name from dttask dt join msprj mp on dt.id_ms_prj=mp.id_ms_prj where dt.dept_cd = '$prj_ctgry_cd' and dt.task_sts_cd = '$prj_sts' and task_desc like '%$prj_title%'");
            // die('3');

        } elseif ($prj_ctgry_cd=='All' && $prj_sts=='All' ) {
            
            $data_msprj = $this->getall("select dt.*, mp.prj_title,mp.file_cr_name from dttask dt join msprj mp on dt.id_ms_prj=mp.id_ms_prj where dt.task_desc like '%$prj_title%' ");
            // die('4');

        } else {
            
            $data_msprj = $this->getall("select dt.*, mp.prj_title,mp.file_cr_name from dttask dt join msprj mp on dt.id_ms_prj=mp.id_ms_prj where dt.task_desc like '%$prj_title%' ");
            // die('4');
        } 


        // $data_msprj = $this->getall("select * from msprj ");

        return $data_msprj;

    }


    public function get_tbl_msscore(){

        $data_score = $this->getall("select * from msscore");

        return $data_score;

    }

    public function get_tbl_msprjsts(){

        $data_prj_sts = $this->getall("select * from msprjsts");

        return $data_prj_sts;

    }

    public function get_tbl_mstask(){

        $data_task_sts = $this->getall("select * from mstask");

        return $data_task_sts;

    }

    public function get_mstask_by_id($id=null){

        $data_mstask = $this->getrow("select * from mstask where id = '$id'");

        return $data_mstask;

    }

    public function get_tbl_msprjassgnsts(){

        $data_prj_assgn_sts = $this->getall("select * from msprjassgnsts where is_active = 'yes'");

        return $data_prj_assgn_sts;

    }

    public function get_tbl_dtfirstassignctgry($dept=null){

        $data_prj_ctgry = $this->getall("select * from dtfirstassignctgry where first_assign_dept = '$dept'");

        return $data_prj_ctgry;

    }

    public function get_tbl_msprjcategory($dept=null){

        $data_msprjcategory = $this->getall("select * from msprjcategory where is_active = 'yes'");

        return $data_msprjcategory;

    }

    public function get_tbl_msprjcategory_by_id($id=null){

        $data_msprjcategory = $this->getrow("select * from msprjcategory where id = '$id'");

        return $data_msprjcategory;

    }

    public function get_tbl_dtfirstassignerdept($dept=null){

        $data_dtfirstassignerdept = $this->getall("select * from dtfirstassignerdept");

        // echo "<pre>";
        // print_r($data_dtfirstassignerdept);
        // // echo "<br>";
        // // print_r($prj_ctgry_cd_single);
        // echo "<pre>";
        // die();

        return $data_dtfirstassignerdept;

    }

    public function get_tbl_dtfirstassignerdept_by_id($id=null){

        $data_dtfirstassignerdept = $this->getrow("select * from dtfirstassignerdept where id = '$id'");

        return $data_dtfirstassignerdept;

    }

    public function list_dtmappassigner_header(){

        $data = $this->getall("select id,dept_cd from dtfirstassignerdept");

        return $data;

    }

    public function list_dtmappassigner_detail($dept_cd=null){

        $data = $this->getall("select * from dtfirstassignctgry where first_assign_dept=? ",[$dept_cd]);

        return $data;

    }

    public function get_unassign_prj_per_dept(){

        $list_dept_cd = $this->getall("select distinct dept_cd from (select ppd.dept_cd,
 (SELECT IF((select count(*) from dtpic where dept_cd = ppd.dept_cd and id_ms_prj = ms.id_ms_prj) = 0 , 'Unassign', 'Assigned')) as sts_assign_pic
 from dtpicassigner ppd join msprj ms on ppd.id_ms_prj = ms.id_ms_prj) as t where sts_assign_pic = 'Unassign'");

        return $list_dept_cd;

    }

    public function get_unassign_prj(){

        $prj_ctgry_cd = $this->getall("select distinct prj_ctgry_cd from (select ms.prj_doc_no ,ms.prj_title, ppd.assign_to_dept ,ms.id_ms_prj, ms.prj_ctgry_cd, ms.prj_ctgry_desc,ms.prj_sts_cd,ms.prj_sts_desc, ms.create_by, 
        (SELECT IF((select count(*) from dtdeptassigner where dept_cd = ppd.assign_to_dept and id_ms_prj = ms.id_ms_prj) = 0 , 'Unassign', 'Assigned')) as sts_assign_pic 
        from prjpicdept ppd join msprj ms on ppd.id_ms_prj = ms.id_ms_prj ) as t where sts_assign_pic = 'Unassign'");

        return $prj_ctgry_cd;

    }
	

	public function GetPickerData_data_cr_msmi($keyword,$special_code,$year)
    {    	
        // $sql = "select * from dtpo";
		// $countsql = "select count(*) as total  from dtpo";
        $sql = "select * from msmi";
		$countsql = "select count(*) as total from msmi";
		
        if (isset($keyword))
        {                        			
            $strSearch = str_replace("'", "''", $keyword);
			$strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";   			
            $sql .= " where special_code = '$special_code' and years = '$year' and ( mi_numb like ? or mi_title like ? or mi_ref like ? )";
			$countsql .= " where special_code = '$special_code' and years = '$year' and ( mi_numb like ? or mi_title like ? or mi_ref like ? )";
			
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
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

    public function GetPicker_msdept($keyword)
    {    	
        // $sql = "select * from dtpo";
		// $countsql = "select count(*) as total  from dtpo";
        $sql = "select * from msdept";
		$countsql = "select count(*) as total from msdept";
		
        if (isset($keyword))
        {                        			
            $strSearch = str_replace("'", "''", $keyword);
			$strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";   			
            $sql .= " where dept_cd like ? or descr like ? or div_cd like ? ";
			$countsql .= " where dept_cd like ? or descr like ? or div_cd like ? ";
			
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
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

    public function GetPicker_dtuser($keyword)
    {    
        $dept_cd = $_SESSION['data_user_login']['dept_cd'];
        // $dept_cd = 'SRA';
        // $sql = "select * from dtpo";
		// $countsql = "select count(*) as total  from dtuser";
        $sql = "select * from dtuser";
		$countsql = "select count(*) as total from dtuser";
		
        if (isset($keyword))
        {                        			
            $strSearch = str_replace("'", "''", $keyword);
			$strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";   			
            $sql .= " where dept_cd = '$dept_cd' and (employee_id like ? or emp_name like ? or NTUserName like ?) ";
			$countsql .= " where dept_cd = '$dept_cd' and (employee_id like ? or emp_name like ? or NTUserName like ?) ";
			
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
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

    public function GetPicker_mptask($keyword,$dept_cd=null)
    {    
        // $dept_cd = $_SESSION['data_user_login']['dept_cd'];
        // $sql = "select * from dtpo";
		// $countsql = "select count(*) as total  from dtuser";
        $sql = "select * from mptask";
		$countsql = "select count(*) as total from mptask";
		
        if (isset($keyword))
        {                        			
            $strSearch = str_replace("'", "''", $keyword);
			$strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";   			
            $sql .= " where dept_cd like '$dept_cd' and (task_id like ? or task_desc like ? or dept_cd like ?) ";
			$countsql .= " where dept_cd like '$dept_cd' and (task_id like ? or task_desc like ? or dept_cd like ?) ";
			
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
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


    public function GetPicker_msprjsts($keyword,$prj_sts_cd=null)
    {    
        // $dept_cd = $_SESSION['data_user_login']['dept_cd'];
        // $sql = "select * from msprjsts";
		// $countsql = "select count(*) as total  from dtuser";
        $sql = "select * from msprjsts";
		$countsql = "select count(*) as total from msprjsts";
		
        if (isset($keyword))
        {                        			
            $strSearch = str_replace("'", "''", $keyword);
			$strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";   			
   //          $sql .= " where prj_sts_cd not in ('$dept_cd') and (id like ? or prj_sts_cd like ? or prj_sts_desc like ?) ";
			// $countsql .= " where prj_sts_cd not in ('$dept_cd') and (id like ? or prj_sts_cd like ? or prj_sts_desc like ?) ";
            $sql .= " where id like ? or prj_sts_cd like ? or prj_sts_desc like ? ";
            $countsql .= " where id like ? or prj_sts_cd like ? or prj_sts_desc like ? ";
			
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
			$parameter[] = $strSearch;
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

    public function GetPicker_msprjcategory($keyword,$dept_cd=null)
    {    

        $sql = "select * from msprjcategory";
        $countsql = "select count(*) as total from msprjcategory";

        if (isset($keyword))
        {                                   
            $strSearch = str_replace("'", "''", $keyword);
            $strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";             
            if ($dept_cd!='0'){
            $sql .= " where id not in (select id_msprjcategory from dtfirstassignctgry where first_assign_dept = '$dept_cd') and prj_ctgry_desc like ?";
            $countsql .= " where id not in (select id_msprjcategory from dtfirstassignctgry where first_assign_dept = '$dept_cd') and prj_ctgry_desc like ?";
            } elseif ($dept_cd=='0')  {
            $sql .= " where id = '$dept_cd' and prj_ctgry_desc like ?";
            $countsql .= " where id = '$dept_cd'  and prj_ctgry_desc like ?";    
            }

            // print_r($dept_cd);
            // die();
            
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


    public function GetPicker_mstask_for_map($keyword,$dept_cd=null)
    {    
        // $dept_cd = $_SESSION['data_user_login']['dept_cd'];
        // $sql = "select * from msprjsts";
        // $countsql = "select count(*) as total  from dtuser";
        // $sql = "select * from msmodul";
        // $countsql = "select count(*) as total from msmodul";

        // select * from msmodul where id not in( select modul_id from dtmappmodul where group_id = '2')

        $sql = "select * from mstask";
        $countsql = "select count(*) as total from mstask";
        
        if (isset($keyword))
        {                                   
            $strSearch = str_replace("'", "''", $keyword);
            $strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";             
   //          $sql .= " where prj_sts_cd not in ('$dept_cd') and (id like ? or prj_sts_cd like ? or prj_sts_desc like ?) ";
            // $countsql .= " where prj_sts_cd not in ('$dept_cd') and (id like ? or prj_sts_cd like ? or prj_sts_desc like ?) ";
            $sql .= " where id not in (select task_id from mptask where dept_cd = '$dept_cd')  and task_desc like ? ";
            $countsql .= " where id not in (select task_id from mptask where dept_cd = '$dept_cd')  and task_desc like ? ";
            
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

    public function GetPicker_dtuser_all($keyword)
    {    
        // $dept_cd = $_SESSION['data_user_login']['dept_cd'];
        // $sql = "select * from msprjsts";
        // $countsql = "select count(*) as total  from dtuser";
        // $sql = "select * from msmodul";
        // $countsql = "select count(*) as total from msmodul";

        // select * from msmodul where id not in( select modul_id from dtmappmodul where group_id = '2')

        $sql = "select * from dtuser";
        $countsql = "select count(*) as total from dtuser";
        
        if (isset($keyword))
        {                                   
            $strSearch = str_replace("'", "''", $keyword);
            $strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";             
   //          $sql .= " where prj_sts_cd not in ('$dept_cd') and (id like ? or prj_sts_cd like ? or prj_sts_desc like ?) ";
            // $countsql .= " where prj_sts_cd not in ('$dept_cd') and (id like ? or prj_sts_cd like ? or prj_sts_desc like ?) ";
            $sql .= " where NTUserName like ? or div_cd like ? or dept_cd like ?";
            $countsql .= " where NTUserName like ? or div_cd like ? or dept_cd like ?";
            
            $parameter[] = $strSearch;
            $parameter[] = $strSearch;
            $parameter[] = $strSearch;
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

    public function GetPicker_groupmodul_all($keyword)
    {    
        // $dept_cd = $_SESSION['data_user_login']['dept_cd'];
        // $sql = "select * from msprjsts";
        // $countsql = "select count(*) as total  from dtuser";
        // $sql = "select * from msmodul";
        // $countsql = "select count(*) as total from msmodul";

        // select * from msmodul where id not in( select modul_id from dtmappmodul where group_id = '2')

        $sql = "select * from dtgroupmodul";
        $countsql = "select count(*) as total from dtgroupmodul";
        
        if (isset($keyword))
        {                                   
            $strSearch = str_replace("'", "''", $keyword);
            $strSearch = "%".str_replace(" ", "%", strtolower($strSearch))."%";             
   //          $sql .= " where prj_sts_cd not in ('$dept_cd') and (id like ? or prj_sts_cd like ? or prj_sts_desc like ?) ";
            // $countsql .= " where prj_sts_cd not in ('$dept_cd') and (id like ? or prj_sts_cd like ? or prj_sts_desc like ?) ";
            $sql .= " where group_name like ? or id like ? ";
            $countsql .= " where group_name like ? or id like ? ";
            
            $parameter[] = $strSearch;
            $parameter[] = $strSearch;
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


}