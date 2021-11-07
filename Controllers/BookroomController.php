<?php
/**
    @class HomeControlelr
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class BookroomController extends \System\BaseController
{
     public function listbookroom($id_room=null,$tahun=null,$bulan=null,$tanggal=null)	
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

		$this->viewBag->pageTitle="Book";
		$this->viewBag->nama_halaman = 'Book Room';

		

		
		$use_date_js = $bulan."/".$tanggal."/".$tahun;
		// $use_date = $tahun."/".$bulan."/".$tanggal;

		if(empty($tahun) || empty($bulan) || empty($tanggal)){
			$id_room = 1;
			$use_date=date('Y/m/d');

			// date('Y-m-d')
			// Die('tes');
		} else {
			$use_date = $tahun."/".$bulan."/".$tanggal;
		}

		// $time_diff = (strtotime('12:00:00') - strtotime('11:30:00'))/60;

		

		// echo "<pre>";
		// 	print_r($time_diff);
		// 	echo "<pre>";
		// 	// print_r($book_date);
		// 	// echo "<pre>";
		// 	die();


		$dept = $_SESSION['data_user_login']['dept_cd'];
		
		$datamodel = new \Models\BookroomModel();
		$list_bookroom = $datamodel->get_list_bookroom_per_date($id_room,$use_date);
		$this->viewBag->list_bookroom = $list_bookroom;

		$list_room = $datamodel->get_list_room();
		$this->viewBag->list_room = $list_room;

		$this->viewBag->use_date = $use_date;
		$this->viewBag->use_date_js = $use_date_js;
		$this->viewBag->id_room = $id_room;

		$datamodel->test_print();
		// echo "<pre>";
		// 	print_r($cek[0]['id_bookroom']);
		// 	echo "<pre>";
		// 	print_r($cek);
		// 	echo "<pre>";
		// 	die();


        return $this->View();   
	} 

	public function bookroomlog($log_even=null,$month0=null,$date0=null,$year0=null,$month1=null,$date1=null,$year1=null){

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
		

		// $tahun=date('Y');
		// $userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
		// $this->viewBag->nama_user = $userlogin;
		// $this->viewBag->data_user = $_SESSION['data_user_login'];

		$this->viewBag->pageTitle="Log";
		$this->viewBag->nama_halaman = 'Log Book Room';

		

		$date_start = $year0.'/'.$month0.'/'.$date0;
		$date_end = $year1.'/'.$month1.'/'.$date1;


		$datamodel = new \Models\BookroomModel();
		$list_log = $datamodel->get_list_log($date_start,$date_end,$log_even);
		$this->viewBag->list_log = $list_log;

		$date_start_view = $month0.'/'.$date0.'/'.$year0;
		$date_end_view = $month1.'/'.$date1.'/'.$year1;

		$this->viewBag->log_even = $log_even;
		$this->viewBag->date_start_view = $date_start_view;
		$this->viewBag->date_end_view = $date_end_view;



		return $this->View();  
	}
	
	public function list_edit_bookroom($id_bookroom=null,$id_room=null,$tahun=null,$bulan=null,$tanggal=null)	
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
		

		// $tahun=date('Y');
		// $userlogin = strtoupper(str_replace("OM\\","", $_SERVER['LOGON_USER']));
		// $this->viewBag->nama_user = $userlogin;
		// $this->viewBag->data_user = $_SESSION['data_user_login'];

		$this->viewBag->pageTitle="Book";
		$this->viewBag->nama_halaman = 'Book Room (Mode : Edit)';

		

		
		$use_date_js = $bulan."/".$tanggal."/".$tahun;
		// $use_date = $tahun."/".$bulan."/".$tanggal;

		if(empty($tahun) || empty($bulan) || empty($tanggal)){
			$id_room = 1;
			$use_date=date('Y/m/d');

			// date('Y-m-d')
			// Die('tes');
		} else {
			$use_date = $tahun."/".$bulan."/".$tanggal;
		}

		// $time_diff = (strtotime('12:00:00') - strtotime('11:30:00'))/60;


		// echo "<pre>";
		// 	print_r($time_diff);
		// 	echo "<pre>";
		// 	// print_r($book_date);
		// 	// echo "<pre>";
		// 	die();


		$dept = $_SESSION['data_user_login']['dept_cd'];
		
		$datamodel = new \Models\BookroomModel();
		$list_bookroom = $datamodel->get_list_bookroom_per_date($id_room,$use_date);
		$this->viewBag->list_bookroom = $list_bookroom;

		$data_before = $datamodel->get_row_data_before($id_bookroom);
		$this->viewBag->data_before = $data_before;

		$list_room = $datamodel->get_list_room();
		$this->viewBag->list_room = $list_room;

		$this->viewBag->use_date = $use_date;
		$this->viewBag->use_date_js = $use_date_js;
		$this->viewBag->id_room = $id_room;
		$this->viewBag->id_bookroom = $id_bookroom;

		// echo "<pre>";
		// 	print_r($list_bookroom);
		// 	echo "<pre>";
		// 	// print_r($book_date);
		// 	// echo "<pre>";
		// 	die();


        return $this->View();   
	}

	public function delete_bookroom($id_bookroom=null,$id_room=null,$tahun=null,$bulan=null,$tanggal=null,$user_name=null)
	{

		// $id_bookroom = $_POST['id_bookroom']; 

		$NTUserName=$_SESSION['data_user_login']['NTUserName'];

		$datamodel = new \Models\BookroomModel();

		$data_bookroom = $datamodel->get_row_data_before($id_bookroom);

		// $subject = $data_bookroom['subject'];
		$subject = $data_bookroom['subject'];
		$use_date = $data_bookroom['use_date'];
		$book_dt = $data_bookroom['book_dt'];
		$use_time_start = $data_bookroom['use_time_start'];
		$use_time_end = $data_bookroom['use_time_end'];
		$book_by = $data_bookroom['book_by'];
		$update_dt = $data_bookroom['update_dt'];
		$remark = $data_bookroom['remark'];
		$logeven = 'delete';

		$log = 'id bookroom : '.$id_bookroom.'|subject :'.$subject.'|use date : '.$use_date.'|book date : '.$book_dt.'|'.$use_time_start.'-'.$use_time_end.'|book by : '.$book_by.'|update date : '.$update_dt.'|'.'Remark :'.$remark;

		$datamodel->insert_log($log,$logeven,$NTUserName);

		$datamodel->delete_bookroom($id_bookroom);



		


		// $this->viewBag->list_bookroom = $status;

		return $this->RedirectToAction("listbookroom"."/".$id_room."/".$tahun."/".$bulan."/".$tanggal,"bookroom");

	}  


	
	public function simpan_bookroom_ajax()
	{
		// $book_dt = $_POST['book_dt'];
		// $use_time_start = $_POST['use_time_start'];

		// $_POST['book_dt'] = date('Y-m-d');
		
		//Book Subject : Meeting abcd, Room : IntanP, TIme : 09:00 - 10:00 user date : 2021 Okt 21

		$NTUserName=$_SESSION['data_user_login']['NTUserName'];
		// $NTUserName='antonius.novris';

		$subject = $_POST['subject'];

		if(empty($subject)){
			$message = 'Mohon isi Subject';
			$status = 'mandatory';
		} else {

		$id_room = $_POST['id_room'];
		// $status = $_POST['status'];
		$remark = $_POST['remark'];
		$book_by = $_POST['book_by'];
		$book_dt = date('Y-m-d');
		$use_time_start = $_POST['use_time_start'];
		$use_time_end = $_POST['use_time_end'];
		$id_time_start = $_POST['id_time_start'];
		$id_time_end = $_POST['id_time_end'];
		$use_date = $_POST['use_date'];

		$datamodel = new \Models\BookroomModel();

		$booker_name = $datamodel->cek_schedule($use_time_start,$use_time_end,$use_date,$id_room);

			if(!isset($booker_name)){

			$result = $datamodel->save_book_room($subject,$id_room,$remark,$book_by,$book_dt,$use_time_start,$use_time_end,$id_time_start,$id_time_end,$use_date);
			
			$status = $result['status'];
			$id_bookroom = $result['id_bookroom'];
			// $message = 'test';

				if($status=='saved'){
					$message = 'Data Tersimpan';

					$data_bookroom = $datamodel->get_row_data_before($id_bookroom);

					$subject = $data_bookroom['subjects'];
					$use_date = $data_bookroom['use_date'];
					$book_dt = $data_bookroom['book_dt'];
					$use_time_start = $data_bookroom['use_time_start'];
					$use_time_end = $data_bookroom['use_time_end'];
					$book_by = $data_bookroom['book_by'];
					$update_dt = $data_bookroom['update_dt'];
					$logeven = 'book';
					$remark = $data_bookroom['remark'];

					$log = 'id bookroom : '.$id_bookroom.'|subject :'.$subject.'|use date : '.$use_date.'|book date : '.$book_dt.'|'.$use_time_start.'-'.$use_time_end.'|book by : '.$book_by.'|update date : '.$update_dt.'|'.'Remark :'.$remark;

					$datamodel->insert_log($log,$logeven,$NTUserName);



				} elseif($status=='not saved') {
					$message = 'Data tidak tersimpan';
				}

			} else {
				$message = 'Time range you chose already booked by '.$booker_name;
				$status = 'rejected';
			}

		}


		// $status = 'not saved';
		// $message = 'dfgdfgdfgdgfdfg';

		$data = ["status"=>$status,"message"=>$message];
	
		return $this->Json($data);
	}

	public function simpan_edit_bookroom_ajax()
	{
		// $book_dt = $_POST['book_dt'];
		// $use_time_start = $_POST['use_time_start'];

		// $_POST['book_dt'] = date('Y-m-d');
		
		//Book Subject : Meeting abcd, Room : IntanP, TIme : 09:00 - 10:00 user date : 2021 Okt 21

		$NTUserName=$_SESSION['data_user_login']['NTUserName'];

		$subject = $_POST['subject'];
		$id_bookroom_before = $_POST['id_bookroom_before'];

		if(empty($subject)){
			$message = 'Mohon isi Subject';
			$status = 'mandatory';
		} else {

		$id_room = $_POST['id_room'];
		// $status = $_POST['status'];
		$remark = $_POST['remark'];
		$book_by = $_POST['book_by'];
		$book_dt = date('Y-m-d');
		$use_time_start = $_POST['use_time_start'];
		$use_time_end = $_POST['use_time_end'];
		$id_time_start = $_POST['id_time_start'];
		$id_time_end = $_POST['id_time_end'];
		$use_date = $_POST['use_date'];

		$datamodel = new \Models\BookroomModel();

		$booker_name = $datamodel->cek_schedule($use_time_start,$use_time_end,$use_date,$id_room,$id_bookroom_before);

			if(!isset($booker_name)){

				$status_delete = $datamodel->delete_book_room($id_bookroom_before);

					if ($status_delete=='success'){


							$result = $datamodel->save_book_room($subject,$id_room,$remark,$book_by,$book_dt,$use_time_start,$use_time_end,$id_time_start,$id_time_end,$use_date);
							$status = $result['status'];
							$id_bookroom = $result['id_bookroom'];
								if($status=='saved'){
									$message = 'Data Tersimpan';

									$data_bookroom = $datamodel->get_row_data_before($id_bookroom);

									$subject = $data_bookroom['subject'];
									$use_date = $data_bookroom['use_date'];
									$book_dt = $data_bookroom['book_dt'];
									$use_time_start = $data_bookroom['use_time_start'];
									$use_time_end = $data_bookroom['use_time_end'];
									$book_by = $data_bookroom['book_by'];
									$update_dt = $data_bookroom['update_dt'];
									$logeven = 'edit';
									$remark = $data_bookroom['remark'];
									// $remark = 'idbookroom before :'.$id_bookroom_before.' | Remark after : '.$remark_after;

									$log = 'id bookroom : '.$id_bookroom.'|subject :'.$subject.'|use date : '.$use_date.'|book date : '.$book_dt.'|'.$use_time_start.'-'.$use_time_end.'|book by : '.$book_by.'|update date : '.$update_dt.'|'.'Remark :'.$remark.' | id Book room before : '.$id_bookroom_before;

									$datamodel->insert_log($log,$logeven,$NTUserName);

								} elseif($status=='not saved') {
									$message = 'Data tidak tersimpan';
								}

							} else {
								$message = 'Data tidak berhasil di Update/Edit';
								$status = 'edit failed';
							}


			} else {
				$message = 'Time range you chose already booked by '.$booker_name;
				$status = 'rejected';
			}

		}


		$data = ["status"=>$status,"message"=>$message];
	
		return $this->Json($data);
	}



}