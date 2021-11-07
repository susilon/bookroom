<?php
/**
Authorization Module
Copyright Bantingan Framework 2015
Use with your own risk
*/
namespace Authorization;

class Authorization
{
    /**

    default username : guest
    default company : 000

    **/
	private $user = null;
	private $group = null;
	private $usergroup = null;
	private $page = null;
	private $grouppage = null;
    private $role = null;
    private $login = null;
    private $loginurl = null;    
    private $errorurl = null;   
    private $baseurl = null; 
    private $isUserAdmin = null;
    private $mdataModel = null;    

	public function __construct($controller=null,$action=null)
    {        
        if (!AUTH_MEMBERSHIP_DISABLED)
        {
            require_once(dirname(__FILE__).'../../phploginloader.php');

            if (!isset($_POST["compcode"]))
            {
                $_POST["compcode"] = "000";
            }

            $this->login = new \Login();   
            $this->loginurl = LOGIN_URL;   
            $this->errorurl = ERROR_404_URL;            
            $this->baseurl = BASE_URL;

            if (isset($_GET["logout"]))
            {            
                unset($_SESSION["target_url"]);            
                header("Location: ".BASE_URL."/".LOGOUT_URL);
                throw new \Exception("save exit", 200);  
            }

            $this->start($controllerName, $actionName);
        }        
    }

    // lazy load datamodel
    private function dataModel() {
        if (!isset($this->mdataModel)) {
            $this->mdataModel = new \Models\UsermanagementModel();            
        }
        return $this->mdataModel;
    }

    public function start($controller, $action)
    {
        $isUserAdmin = null;
        if (isset($_SESSION['user_name'])) {
            $isUserAdmin = $this->isUserAdmin($_SESSION['user_name']);    
        }        
        
        // check if page is required authorization, if exists then required else not required
        $this->getPage($controller, $action);

        // if required, check if user is logged in,  
        // if admin then skip             
        $_SESSION["page_role"] = null;       
        if (isset($this->page["id"]) && $isUserAdmin != "1" && !AUTH_MEMBERSHIP_DISABLED) {
            // page need authorization            
            // if login then check role else redirect to login page             
            if ($this->login->isUserLoggedIn() == true) {                
                // user is logged in

                // is page need group
                if ($this->page["groupadmin_id"] != null)
                {
                    $pagerole = $this->checkUserAccess($_SESSION['user_name'],$controller, $action);

                    if (!isset($pagerole["role"])) {
                        // user doesn't have authorized
                        $_SESSION['error_source'] = $controller;
                        $_SESSION['error_messages'] = AUTH_NOT_AUTHORIZED;                        
                        header("Location: ".BASE_URL."/".$this->errorurl); 
                        throw new \Exception("save exit", 200);                         
                    } else {
                        $this->role = $pagerole["role"];
                        $_SESSION["page_role"] = $this->role;
                    }
                } 
            } else {
                // user is not logged in
                // show login page
                if (!isset($_GET["logout"]))
                {
                    $_SESSION['target_url'] = $_SERVER["REQUEST_URI"];                
                }                
                header("Location: ".BASE_URL."/".$this->loginurl);    
                throw new \Exception("save exit", 200);              
            }
        } else {            
            // page no need auth
            $this->role = null;
        }
    }

    public function loginErrors()
    {        
        return $this->login->errors;
    }

    public function clearLoginErrors()
    {        
        $this->login->errors = null;
    }

    public function loginReturnMessage()
    {        
        return $this->login->messages;
    }

    public function passwordResetLinkIsValid()
    {        
        return $this->login->passwordResetLinkIsValid();
    }

    public function isUserLoggedIn()
    {
        if (!$this->login) return false;
        return $this->login->isUserLoggedIn();
    }

    public function compCode()
    {
        if ($this->isUserLoggedIn() == true) {       
            return $_SESSION['comp_code'];
        } else {
            return "";
        }
    }

    public function compName()
    {
        if ($this->isUserLoggedIn() == true) {       
            return $_SESSION['comp_name'];
        } else {
            return "";
        }
    }

    public function userName()
    {
        if ($this->isUserLoggedIn() == true) {       
            return $_SESSION['user_name'];
        } else {
            return "Guest";
        }
    }

    public function userNameMessage()
    {
        if ($this->isUserLoggedIn() == true) {       
            //return "<a href='$this->baseurl/home/userprofile'>".ucfirst($_SESSION['user_name'])."</a>";
            return $_SESSION['user_name'];
        } else {
            return "Guest";
        }
    }

    public function loginMessage()
    {
        if ($this->isUserLoggedIn() == true) {       
            return "<a href='$this->baseurl/home/logout/?logout'>".WORDING_LOGOUT."</a>";
        } else {
            return "<a href='$this->loginurl'>".WORDING_LOGIN."</a>";
        }
    }
/*
    public function userLogin()
    {
        if ($this->isUserLoggedIn() != true) { 
            // if login failed then show errors            
            $errMsg = "";
            foreach ($this->login->errors as $value) {
                $errMsg = "$errMsg $value";   
                $_SESSION['error_messages'] = $errMsg;             
            }
            
            header("Location: ".BASE_URL."/".$this->errorurl);
            die();    
        } else {
            // checking company code                  
            //$companyInfo = $this->getCompanyInfo($_SESSION["user_name"]);   
            // filter user role
            if ($_SESSION["user_role"] != "10")
            {
                if ($_SESSION["comp_code"] == "000")
                {
                    $labmodel = new \Models\LabsModel();
                    $userlabs = $labmodel->UserLabsByName($_SESSION["user_name"]);
                    $_SESSION["comp_code"] = "test";//$userlabs[0]["comp_code"];
                }
            }

            if ($companyInfo["compcode"] != "")
            {                                
                $_SESSION["comp_code"] = $companyInfo["compcode"];            
                $_SESSION["comp_name"] = $companyInfo["compname"];                                
            } else {
                $_SESSION["comp_code"] = "";            
                $_SESSION["comp_name"] = "Admin";
            }               
        }
    }
    */
/*
    public function getCompanyInfo($username)
    {
        $sql = "select u.user_name, u.compcode, c.compname from users u left join company c on u.compcode=c.compcode where u.user_name = '$username' ";
        $companyinfo = $this->dataModel()->getrow($sql);        
        return $companyinfo;        
    }
*/
    public function getRole()
    {        
        return $this->role;
    }    

    public function setUser()
    {        
        // load the registration class        
        return new \PHPLogin\classes\Registration();
    }

    public function setNewPassword($profiledata, $oldpassword=null, $captcha=null)
    {                
        if (isset($profiledata->id))
        {
            $userprofile = $this->dataModel()->load($profiledata->id, 'users');                        
        } elseif (isset($profiledata->user_name)) {
            $userprofile = $this->dataModel()->find("users", "user_name=? and compcode=''",[$profiledata->user_name] );
        } else {
            $this->login->errors[] = "Please provide user name";
            return $this->login;
        }

        if (isset($oldpassword))
        {
            if (! password_verify($oldpassword, $userprofile->user_password_hash)) {
                // increment the failed login counter for that user                
                $this->login->errors[] = MESSAGE_PASSWORD_WRONG;                    
            } else {
                $this->login->editUserPassword($profiledata->comp_code,$oldpassword, $profiledata->user_password, $profiledata->user_password_confirm, $captcha);
            }

            return $this->login;
        }
        
        // if old password not provided
        $user_name = $userprofile->user_name;

        $user_password_reset_hash = sha1(uniqid(mt_rand(), true));

        $userprofile->user_password_reset_hash = $user_password_reset_hash ;        
        $userprofile->updateby = isset($_SESSION["user_name"])?$_SESSION["user_name"]:"guest";        
        $userprofile->updatedt = date("Y/m/d h:i:s");
        $this->dataModel()->save($userprofile);

        // load the login class
        //require_once(dirname(__FILE__).'/../phplogin/classes/Login.php');        
        //$userlogin = new \Login();

        if (isset($user_name)) {            
            $this->login->editNewPassword($profiledata->comp_code, $user_name, $user_password_reset_hash, $profiledata->user_password, $profiledata->user_password_confirm);    
        } 

        return $this->login;
    }

    public function getListUser()
    {               
        return $this->dataModel()->getAll('select * from users');        
    } 

    public function getPage($controller, $action)
    {         
        $sql = "select pa.*, gpa.groupadmin_id from pageadmin pa left join grouppageadmin gpa on pa.id=gpa.pageadmin_id where controller=? and action=?";

        //$pagesdata = $this->dataModel()->find('pageadmin','controller=? and action=?', array($controller,$action));
        $pagesdata = $this->dataModel()->getrow($sql, [$controller,$action]);         
        if (!isset($pagesdata["id"]))
        {
            // check if any wildcard action
            //$pagesdata = $this->dataModel()->find('pageadmin','controller=? and action=\'*\'', array($controller));        
            $sql = "select pa.*, gpa.groupadmin_id from pageadmin pa left join grouppageadmin gpa on pa.id=gpa.pageadmin_id where controller=? and action='*'";
            $pagesdata = $this->dataModel()->getrow($sql, [$controller]);
        }

        $this->page = $pagesdata;                        
        return $this->page;
    }

    public function isUserAdmin($username)
    {
        $sql = "select 1 as isadmin from users where user_role in ('10','20') and user_name=?";
        $isadmin = $this->dataModel()->getrow($sql,[$username]);
        /*
        $isadmin = $this->dataModel()->getrow( "select 1 as isadmin from usergroupadmin inner join groupadmin on usergroupadmin.groupadmin_id=groupadmin.id inner join users on usergroupadmin.users_id=users.id and users.compcode='000' where users.user_name = '$username' and groupadmin_id in (2,3) ");
        */
        return $isadmin;
        //return R::findAll('usergroup',' userid = ?', array( $userid ));                   
    }

    public function checkUserAccess($username, $controller, $action)
    {        
        $sql = "select pageadmin_id, role from grouppageadmin inner join pageadmin on grouppageadmin.pageadmin_id=pageadmin.id inner join usergroupadmin on usergroupadmin.groupadmin_id=grouppageadmin.groupadmin_id inner join users on users.id=usergroupadmin.users_id where user_name=? and pageadmin.controller=? and pageadmin.action=?";
     
        $pagegroupdata = $this->dataModel()->getrow($sql, [$username, strtolower($controller), strtolower($action)]);

        //if (count($pagegroupdata) == 0)
        if ($pagegroupdata == null)
        {
            // check if any wildcard action
            $sql = "select pageadmin_id, role from grouppageadmin gpa inner join pageadmin pa on gpa.pageadmin_id=pa.id inner join groupadmin ga on ga.id=gpa.groupadmin_id inner join users u on u.user_role=ga.group_code where user_name=? and pa.controller=? and pa.action='*'";
            $pagegroupdata = $this->dataModel()->getrow($sql, [$username, $controller]);
        }
        return $pagegroupdata;
    }

    public function getUserByName($username)
    {       
        $this->user = $this->dataModel()->find("users"," user_name=?", array($username));        
        return $this->user;
    }

    public function currentUser()
    {               
        $currentuser = new \StdClass();

        if ($this->isUserLoggedIn() == true) {          
            $currentuser->signature = session_id();
            $currentuser->user_id = $_SESSION['user_id'];
            $currentuser->user_nik = $_SESSION['user_nik'];
            $currentuser->user_name = $_SESSION['user_name'];
            $currentuser->user_fullname = $_SESSION['user_fullname'];
            $currentuser->user_email = $_SESSION['user_email'];
            $currentuser->comp_code = $_SESSION['comp_code'];            
            $currentuser->page_role = $_SESSION['page_role'];                  
            $currentuser->user_is_logged_in = $this->isUserLoggedIn();
        }

        return $currentuser;
    }

    public function RequestResetPassword($username)
    {        
        //$datamodel = new \System\BaseModel("users");
        // generate timestamp (to see when exactly the user (or an attacker) requested the password reset mail)
        // btw this is an integer ;)
        $temporary_timestamp = time();
        // generate random hash for email password reset verification (40 char string)
        $user_password_reset_hash = sha1(uniqid(mt_rand(), true));                
        $resetuser = $this->dataModel()->find("users","user_name=?",[$username]);

        // if this user exists
        if (isset($resetuser->id)) {
            // database query:                        
            $resetuser->user_password_reset_hash = $user_password_reset_hash;                        
            $resetuser->user_password_reset_timestamp = $temporary_timestamp;                        
            $query_update = $this->dataModel()->save($resetuser);

            // check if exactly one row was successfully changed:
            if ($query_update) {
                // send a mail to the user, containing a link with that token hash string
                $this->login->sendPasswordResetMail($resetuser->compcode, $resetuser->user_name, $resetuser->user_email, $user_password_reset_hash);
                return true;
            } else {
                $this->login->errors[] = MESSAGE_DATABASE_ERROR;
            }
        } else {
            $this->login->errors[] = MESSAGE_USER_DOES_NOT_EXIST;
        }
    
        // return false (this method only returns true when the database entry has been set successfully)
        return false;
    }    
}
?>