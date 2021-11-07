<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class AboutModel extends \System\BaseModel
{
	public function getdata($_tablename = null)
	{  		
		$this->selectedDB = "usermanagement";		
		parent::__construct($_tablename);
	}

    public function get_data_menu(){
	
        $data_menu = $this->getall("select usermenu.id , menu from usermenu join useraksesmenu on usermenu.id = useraksesmenu.menu_id where useraksesmenu.role_id = 1 order by useraksesmenu.menu_id asc");



        return $data_menu;

    }

    public function get_data_sub_menu(){
	
        // $data_menu = $this->getall("select * from usersubmenu join usermenu on usersubmenu.menu_id=usermenu.id where usersubmenu.menu_id = 1 and usersubmenu.is_active = 1");
        $data_menu = $this->getall("select usermenu.id , menu from usermenu join useraksesmenu on usermenu.id = useraksesmenu.menu_id where useraksesmenu.role_id = 1 order by useraksesmenu.menu_id asc");
        $jumlah_array = count($data_menu);



        // $data = $this->getall("select dept_cd from msdept");
        // $jumlah_array = count($data);
        // array_push($data[$jumlah_array],$dataw);

        // $dataw=array("$jumlah_array"=>["dept_cd"=>"All"]);

        // $dataw=array("$jumlah_array"=>['Dashboard']);

        // array_push($data_menu[3][id]);

        // $merge = array_merge($data, $dataw); 

        // $data_chart_div = json_encode($data_menu);

        $tes = json_decode('[{"id":"1","menu":"admin"},{"id":"2","menu":"user"}]');

        echo "<pre>";
		// print_r($data_chart_div);
        echo "<br>";
        print_r($tes);
		echo "<pre>";
		die();

        return $data_menu;

    }
}