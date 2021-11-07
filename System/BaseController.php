<?php
/**
	Name : Base Controller
	Description :
	executing function within controller class
	generate view to return to requester	
*/
/*
* BantinganPHP v.1.2.5
* Fast Prototyping Framework
* Copyright Piapiastudio 2016-2018
* Piapiastudio.web.id
* Use with your own risk
*/
namespace System;

class BaseController
{	
	public $controllerName;
	public $actionName;
	public $parameterArray;
	public $viewBag;
	public $viewHtml;
	public $baseUrl;
	public $siteTitle;
	public $isGET=null;
	public $isPOST=null;
	public $config;
	public $errorInJSONFormat=false;

	private $contents;
	private $paperSize;
	private $pageOrientation;	
/*
	public $username;	
	public $compcode;	
	public $userrole;	
*/
	public $currentuser;

	public function __construct($controllerName=null, $actionName=null, $parameterArray=null)
	{			
		$this->controllerName = isset($controllerName)?$controllerName:BANTINGAN_CONTROLLER_NAME;
		$this->actionName = isset($actionName)?$actionName:BANTINGAN_ACTION_NAME;

		if (isset($parameterArray))
		{
			$this->parameterArray = $parameterArray;
		} else {
			$this->parameterArray = BANTINGAN_PARAMETER;
		}				

		if ($this->viewBag == null)
		{
			$this->viewBag = new \stdClass();		
		}		

		$this->auth = new \Authorization\Authorization($this->controllerName, $this->actionName);
	    
	    $this->currentuser = $this->auth->currentuser();

		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$this->isGET = true;			
		} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$this->isPOST = true;			
		}			

	 	// checking $protocol in HTTP or HTTPS 
	 	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') { 
	 		// this is HTTPS 
	 		$protocol = "https"; 
	 	} else { 
		 	// this is HTTP 
		 	$protocol = "http"; 
		}

		$showError = SHOW_ERROR == "1" ? true : false;
		$this->baseUrl = $protocol.'://'.$_SERVER['HTTP_HOST'].BASE_URL;
		$this->siteTitle = SITE_TITLE;
		//call_user_func gives a fatal error, which we cannot catch. 
		//test if action exists		
		if (!method_exists($this, $this->actionName)) {			
			throw new \Exception($showError?'Method does not exists : '.$this->actionName:'Path Not Found', $showError?400:404);			
		} else {				
			$findmethod = new \ReflectionMethod($this, $this->actionName);			
			if ($findmethod->getNumberOfRequiredParameters() > sizeof($this->parameterArray)) {
				throw new \Exception($showError?'Arguments not valid.':'Path Not Found', $showError?400:404);
			}
		}			

		try	{
			$classFunction = array($this,$this->actionName);			
			$method = 	$this->actionName;	

			switch(sizeof($this->parameterArray))  {
			// optimize for better performance if parameter are 5 or less			    
			    case 0: $this->$method();
			    break;
			    case 1: $this->$method($this->parameterArray[0]);
			    break;
			    case 2: $this->$method($this->parameterArray[0], $this->parameterArray[1]);
			    break;
			    case 3: $this->$method($this->parameterArray[0], $this->parameterArray[1], $this->parameterArray[2]);
			    break;
			    case 4: $this->$method($this->parameterArray[0], $this->parameterArray[1], $this->parameterArray[2], $this->parameterArray[3]);
			    break;
			    case 5: $this->$method($this->parameterArray[0], $this->parameterArray[1], $this->parameterArray[2], $this->parameterArray[3], $this->parameterArray[4]);
			    break;
			    default:call_user_func_array($classFunction, $this->parameterArray);
			    break;
			}
		}
		catch(\Exception $exc)	{
			// error because other than call_user_func		
			switch($exc->getCode())  {	
				case 30: $friendlyMessage = "Error On Method";
			    break;
				case 404: $friendlyMessage = "Page Not Found";
			    break;
				case 50: $friendlyMessage = "Error On Database Access";
			    break;
				default:$friendlyMessage ="Details are disabled";
			    break;
			}		
			
			// send error messages
			if ($this->errorInJSONFormat)
			{
				header("HTTP/1.0 ".$exc->getCode()." ".$exc->getMessage());
				return $this->JsonResponse("1",SHOW_ERROR?$exc->getMessage():$friendlyMessage,null);
			} else {				
				throw new \Exception(SHOW_ERROR?$exc->getMessage():$friendlyMessage, $exc->getCode());			
			}
		}	
	}			

	// loading data from database
	// deprecated
    protected function LoadDataModel($modelName = null)
    {    	
    	if (isset($modelName)) {    		
    		$modelClassName = "Models\\".ucfirst($modelName).'Model';
    		$modelPath = str_replace('\\', '/', $modelClassName);

    		if(!file_exists($modelPath.".php")) { 
    			// if no model class file, then use base model
    			$modelClassName = "\System\BaseModel";
    		}        	
    	} else {
    		$modelClassName = "\System\BaseModel";
    	}    	

    	return new $modelClassName($modelName);
    }	

	// preparing page with smarty
	public function SmartyPage($viewPathArg = null)
	{		
		$controllerName = "home";
		$methodName = "error.html";
		$smartyPage = new BaseSmarty();		

		// user authorization
		if 	(isset($this->currentuser->user_name)) {
			$smartyPage->isAdmin =  $this->auth->isUserAdmin($this->currentuser->user_name);
		} else {
			$smartyPage->isAdmin = false;
		}		
		
		/*
		$smartyPage->userEmail = $this->auth->isUserLoggedIn()?$_SESSION["user_email"]:"";
		$smartyPage->userName = $this->username;
		$smartyPage->userRole = $this->userrole;				
		$smartyPage->isLoggedIn = $this->auth->isUserLoggedIn();
		$smartyPage->compName = isset($_SESSION["comp_name"])?$_SESSION["comp_name"]:"";
		$smartyPage->compCode = isset($_SESSION["comp_code"])?$_SESSION["comp_code"]:""; 
		*/

		// set template default value
		$smartyPage->baseUrl = $this->baseUrl;
		$smartyPage->baseController = $this->controllerName;		
		$smartyPage->viewBag = $this->viewBag;
		$smartyPage->siteTitle = $this->siteTitle;		

		// user info
		$smartyPage->currentuser = $this->currentuser;

		$current_view_path = ucfirst($this->controllerName) . "/";

		if (!$viewPathArg) {
			// then sets the view according to the caller function, not the url controller path
			$this->viewHtml = $this->actionName. ".html";	;
			//Detertime the full path to the view file
			$viewPath=$current_view_path . $this->viewHtml;
		} else {
			// sets view by arguments
			$viewPath=$viewPathArg;				
		}	

		$smartyPage->CreateSmartyPage($viewPath);
		// get papersize and pageorientation from template
		$this->paperSize = $smartyPage->paperSize;
		$this->pageOrientation = $smartyPage->pageOrientation;

		return $smartyPage->contents;		
	}

	// render html
	protected function View($viewPathArg = null)
	{		
		echo $this->SmartyPage($viewPathArg);		
	}

	// render html
	protected function RawView($viewPathArg = null)
	{		
		echo $this->SmartyPage($viewPathArg);		
	}	

	protected function JsonResponse($status, $message, $data, $option=null)
	{
		header('Content-Type: application/json');

		$dataJson = new \StdClass();
        $dataJson->status = $status;
        $dataJson->message = $message;
        $dataJson->data = $data;

		echo json_encode($dataJson, $option);
	}

	// return as  json
	protected function Json($data, $option=null)
	{
		header('Content-Type: application/json');
		echo json_encode($data, $option);
	}

	protected function JsonGz($data, $option=null)
	{		
        ob_start('ob_gzhandler');
        header('Content-Type: text/plain');
        header('Content-Encoding: gzip');
        echo gzencode(json_encode($data, $option));
	}

	protected function JsonGzFile($filename, $data, $option=null)
	{		
        $gzfile = dirname(__FILE__)."/../".DOWNLOAD_PATH.$filename;	

        // use old file if exists
		//if (!file_exists($gzfile))
		//{			
			$dataForm = json_encode($data);				
			$fp = gzopen ($gzfile, 'w4');		
			gzwrite ($fp, $dataForm);		
			gzclose($fp);
		//}

		$attachment_location = $gzfile;
        if (file_exists($attachment_location)) {

            header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
            header("Cache-Control: public"); // needed for i.e.
            header("Content-Type: application/x-gzip");
            header("Content-Transfer-Encoding: Binary");
            header("Content-Length:".filesize($attachment_location));
            header("Content-Disposition: attachment; filename=".$filename);
            readfile($attachment_location);
            throw new \Exception("save exit", 200);          
        } else {            
            throw new \Exception("Error: Cannot create file.", 501);  
        }
	}

	// dompdf renderer
	protected function PDFView($viewPathArg = null)
	{
		$html = $this->SmartyPage($viewPathArg);				
		require_once __DIR__ .'/../'.LIB_PATH.'/dompdf/autoload.inc.php';
		// instantiate and use the dompdf class
		$dompdf = new \Dompdf\Dompdf();
		$dompdf->set_option('isPhpEnabled', true);

        $dompdf->load_html($html);
        $dompdf->set_paper($this->paperSize, $this->pageOrientation);
        $dompdf->output(['isRemoteEnabled' => true]);
        $dompdf->render();
        $dompdf->stream($this->actionName.".pdf", array("Attachment" => false));	                
	}


	protected function PDFfrom($html)
	{
		require_once __DIR__ .'/../'.LIB_PATH.'/dompdf/autoload.inc.php';
		// instantiate and use the dompdf class
		$dompdf = new \Dompdf\Dompdf();
        $dompdf->load_html($html);
        $dompdf->set_paper($this->paperSize, $this->pageOrientation);
        $dompdf->render();

        $dompdf->stream($this->actionName.".pdf", array("Attachment" => false));	
	}

	// return as word doc
	protected function DocView($viewPathArg = null)
	{
		header("Content-type: application/msword");
		header("Content-Disposition: attachment;Filename=".strtolower($this->actionName).".docx");	
		$this->View($viewPathArg);
	}
	
	// return as excel xls
	// protected function XlsView($viewPathArg = null)
	// {		
	// 	header("Content-type: application/msexcel");
	// 	header("Content-Disposition: attachment;Filename=".strtolower($this->actionName).".xls");	
	// 	$this->View($viewPathArg);
	// }

	protected function XlsView($viewPathArg = null)
	{		
		header("Content-type: application/msexcel");
		header("Content-Disposition: attachment;Filename=".strtolower($this->fileName).".xls");
		$fileName = $this->fileName?$this->fileName: $this->actionName;
	
		$this->View($viewPathArg);
	}

	// redirect to other action
	protected function RedirectToAction($actionName, $controllerName=null, $objectParameter=null)
	{
		$newUrl =  $this->baseUrl."/".$this->controllerName."/".$actionName;
		if (isset($controllerName)) {				
			// override controller name if exists in parameter
			$newUrl =  $this->baseUrl."/".$controllerName."/".$actionName;
			if (isset($objectParameter)) {
				$newUrl =  $this->baseUrl."/".$controllerName."/".$actionName."/".$objectParameter;
			}
		}			
		header("Location: ".$newUrl);
		throw new \Exception("save exit", 200);  		
	}

	protected function RedirectToURL($url)
	{
		header("Location: ".$url);
		throw new \Exception("save exit", 200);  
	}
}
?>