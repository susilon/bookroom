<?php
/**
    @class HomeControlelr
    @extends BaseController
    @description Default Controller
*/
namespace Controllers;

class AjaxController extends \System\BaseController
{
	// public function index()
	// {
	// 	// $keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
	// 	// $datamodel = new \Models\AjaxModel();
	// 	// $data_sqlserver = $datamodel->Get_data_sqlserver('tr_emp_Employee');
	// 	// $this->viewBag->data_sqlserver = $data_sqlserver;

	// 	echo "<pre>";
	// 		// print_r($data_sqlserver);
	// 		// echo "<pre>";
	// 		print_r("sdfgsdfg");
	// 		echo "<pre>";
	// 		die();

	// 	return $this->View();
	// }

   public function getlist_msdept()
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\MasterModel();
		$data = $datamodel->GetPicker_msdept($keyword);

		return $this->Json($data);
	}

	public function getlist_dtuser()
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\MasterModel();
		$data = $datamodel->GetPicker_dtuser($keyword);

		return $this->Json($data);
	}


	public function getlist_mptask($dept_cd=null)
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\MasterModel();
		$data = $datamodel->GetPicker_mptask($keyword,$dept_cd);

		return $this->Json($data);
	}

	public function getlist_msprjsts($prj_sts_cd=null)
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\MasterModel();
		$data = $datamodel->GetPicker_msprjsts($keyword,$prj_sts_cd);

		return $this->Json($data);
	}

	public function getlist_msmodul($group_id=null)
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\MasterModel();
		$data = $datamodel->GetPicker_msmodul($keyword,$group_id);

		return $this->Json($data);
	}

	public function getlist_msprjcategory($dept_cd=null)
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\MasterModel();
		$data = $datamodel->GetPicker_msprjcategory($keyword,$dept_cd);

		return $this->Json($data);
	}

	public function getlist_mstask_for_map($dept_cd=null)
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\MasterModel();
		$data = $datamodel->GetPicker_mstask_for_map($keyword,$dept_cd);

		return $this->Json($data);
	}

	public function getlist_dtuser_all()
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\MasterModel();
		$data = $datamodel->GetPicker_dtuser_all($keyword);

		return $this->Json($data);
	}

	public function getlist_group_modul($special_code=null)
	{
		$keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		$datamodel = new \Models\MasterModel();
		$data = $datamodel->GetPicker_groupmodul_all($keyword);

		return $this->Json($data);
	}

	public function cifapiv1($secretkey=null)
	{
		// $keyword = isset($_GET["search"]["value"])?$_GET["search"]["value"]:null;
		// $datamodel = new \Models\MasterModel();
		// $data = $datamodel->GetPicker_msprjsts($keyword,$prj_sts_cd);

		$nama = $_POST['nama'];
		$idktp = $_POST['idktp'];
		$nohp = $_POST['nohp'];

		$feedback = [
						"status"=> "Success Assigner",
						"answer"=> "Ya / Tidak Assigner"
						];

		// $feedback = json_decode($feedbacks);

		$data = ["status"=>"Success","answer"=>"Ya Bisa euuyy","feedback"=>$feedback, "nama"=>$nama, "idktp"=>$idktp,"nohp"=>$nohp];

		// $data = $this->JsonResponse($data,"success","dfsdfsdf");

		

		return $this->Json($data);
	}


	public function cif()
	{

		// $nama = $_POST['nama'];
		// $idktp = $_POST['idktp'];
		// $nohp = $_POST['nohp'];


		$feedback = [
						"status"=> "Success Assigner CIF",
						"answer"=> "Ya / Tidak Assigner CIF"
						];

		// $feedback = json_decode($feedbacks);

		$data = ["coba"=>"success","answer"=>"Ya Bisa euuyy","feedback"=>$feedback];


	// 	protected function JsonResponse($status, $message, $data, $option=null)
	// {
	// 	header('Content-Type: application/json');

	// 	$dataJson = new \StdClass();
 //        $dataJson->status = $status;
 //        $dataJson->message = $message;
 //        $dataJson->data = $data;

	// 	echo json_encode($dataJson, $option);
	// }

		

		return $this->JsonResponse("success","message",$feedback);
	}

     
}