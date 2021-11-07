<?php

namespace Models;

/*
Objek Model dari tabel users
*/

class BookroomModel extends \System\BaseModel
{
	// public function getdata($_tablename = null)
	// {  		
	// 	$this->selectedDB = "usermanagement";		
	// 	parent::__construct($_tablename);
	// }

    public function get_list_bookroom_per_date($id_room=null,$book_date=null){
	
        $list_bookroom = $this->getall("select CASE WHEN cast(concat(concat('$book_date',' '),tm.time_book) as datetime) < now()   THEN 'disable' ELSE ''
    END as cek_waktu, tm.id as id_time_book,tm.time_book, group_concat(br.subjects separator ' <br> ') as subjects, group_concat(br.book_by separator ' <br> ') as book_by 
        , CAST(group_concat(br.id_bookroom) as nchar) as id_bookroom, count(br.id_bookroom) as qty, group_concat(br.use_time_start) as use_time_start, group_concat(br.use_time_end) as use_time_end from  mstime tm left join 
        (select d.time_book,d.subjects, d.book_by, CAST(d.id_bookroom as nchar) as id_bookroom, h.use_time_start, h.use_time_end from dtbookroomdetail d join dtbookroom h on d.id_bookroom=h.id_bookroom  where d.use_date ='$book_date'and d.id_room=$id_room ) br 
        on br.time_book=tm.time_book where tm.is_active = 'Y' group by tm.time_book order by tm.time_book");



        return $list_bookroom;

    }

    public function cek_schedule_old($use_time_start=null,$use_time_end=null,$use_date=null,$id_room=null){
	
        $book_by = $this->getcell("select group_concat(book_by) book_by from (select id_room, use_date,book_by, SUBTIME(use_time_start, '-1') as use_time_start,SUBTIME(use_time_end, '1') as use_time_end from dtbookroom) a 
        where use_date = '$use_date' and id_room = $id_room and
        ((use_time_start > '$use_time_start' and use_time_start < '$use_time_end') or (use_time_end > '$use_time_start' and use_time_end < '$use_time_end'))
        group by use_date");

        return $book_by;

    }

    public function delete_book_room($id_bookroom_before=null){
	
        $this->execsql("DELETE FROM dtbookroom where id_bookroom =?",[$id_bookroom_before]);
        $this->execsql("DELETE FROM dtbookroomdetail where id_bookroom =?",[$id_bookroom_before]);

        $dtbookroom = $this->getcell("SELECT id_bookroom from dtbookroom where id_bookroom =?",[$id_bookroom_before]);
        $dtbookroomdetail = $this->getcell("SELECT id_bookroom from dtbookroomdetail where id_bookroom =?",[$id_bookroom_before]);

        if( !isset($dtbookroom) && !isset($dtbookroomdetail) ){
            $status = 'success';
        } else {
            $status = 'failed';
        }



        return $status;

    }

    public function cek_schedule($use_time_start=null,$use_time_end=null,$use_date=null,$id_room=null,$id_bookroom_before=null){
	
        $book_by = $this->getcell("select group_concat(book_by) book_by from (select distinct book_by from dtbookroomdetail 
        where use_date = '$use_date' and id_room = $id_room and time_book between SUBTIME('$use_time_start', '-1') and SUBTIME('$use_time_end', '1')
        and id_bookroom <> '$id_bookroom_before' group by id_bookroom) as a");


        $time_diff = (strtotime($use_time_end) - strtotime($use_time_start))/60;
        // $time_diff = (strtotime('12:00:00') - strtotime('11:30:00'))/60;

        if (!isset($book_by) && $time_diff==30){


            $cek = $this->getall("SELECT group_concat(id_bookroom) as id_bookroom,time_book,
            SUM( time_book = '$use_time_start' ) AS 'start',
            SUM( time_book = '$use_time_end' ) AS 'end',
            COUNT(time_book) AS 'Total'
        FROM dtbookroomdetail where time_book in ('$use_time_start','$use_time_end') and use_date = '$use_date' and id_room = $id_room and id_bookroom <> '$id_bookroom_before'
        GROUP BY time_book");

        // $ceka =count($cek[1]['id_bookroom']);
        // $ceka =count($cek);

        if(count($cek)==1){

            // if($cek[0]['time_book']=='08:30'){
            //     $start = $cek[0];
            //     } else {
            //     $end = $cek[0];
            //     }

            $book_by = $book_by;

        } else if(count($cek)==2) {
            $start = $cek[0];
            $end = $cek[1];

            if (   ($cek[0]['start']==1 && $cek[1]['end']==1) && ($cek[0]['id_bookroom']!=$cek[1]['id_bookroom'])  ){
                $book_by = $book_by;
            } else {
                $book_by = 'anoher user';
            }

        } else {
            $book_by = $book_by;
        }

        }

        
        return $book_by;

    }

    public function save_book_room($subjects,$id_room,$remark,$book_by,$book_dt,$use_time_start,$use_time_end,$id_time_start,$id_time_end,$use_date){

        $data_book_time = $this->getall("select time_book from mstime where time_book between '$use_time_start' and '$use_time_end'");

        $id_bookroom = $this->getcell("SELECT UUID_SHORT() AS UUID_no");

        $this->EXECSQL("INSERT INTO dtbookroom (id_bookroom,subjects,id_room,remark,book_by,book_dt,use_time_start, use_time_end,use_date) 
        VALUES ('$id_bookroom','$subjects',$id_room,'$remark','$book_by','$book_dt','$use_time_start', '$use_time_end','$use_date')");

        foreach($data_book_time as $a) {

            foreach ($a as $x => $time_book){
            
            $this->execsql("INSERT INTO dtbookroomdetail (id_bookroom,id_room,time_book,subjects,use_date,book_by, book_dt) 
            VALUES ('$id_bookroom',$id_room,'$time_book','$subjects','$use_date','$book_by', '$book_dt')");
            }
        }

        $cek_data = $this->getrow("select br.id_bookroom from dtbookroom br join dtbookroomdetail brd on br.id_bookroom=brd.id_bookroom where br.id_bookroom = '$id_bookroom'");

        if (isset($cek_data)){
            $status = 'saved';
        } else {
            $status = 'not saved';
        }


        $result['status'] = $status;
        $result['id_bookroom'] = $id_bookroom;



        return $result;

    }

    public function delete_bookroom($id_bookroom){
	
        // $list_room = $this->getall("select * from msroom");

        // $this->execsql("");
        $this->execsql("delete from dtbookroom where id_bookroom =?",[$id_bookroom]);
        $this->execsql("delete from dtbookroomdetail where id_bookroom =?",[$id_bookroom]);
        // $dtbookroom = $this->getall("select * from dtbookroom where id_bookroom = ?",[$id_bookroom]);
        // $dtbookroomdetail = $this->getcell("select id_bookroom from dtbookroomdetail where id_bookroom = ?",[$id_bookroom]);

        // if(isset($dtbookroomdetail)){
        //     $status = 'failed';
        // } else {
        //     $status = 'success';
        // }

        // return $status; 

    }

    public function insert_log($log=null,$even=null,$user_name=null){
	
        $this->execsql("INSERT INTO dtbookroomlog (log,even,user_name) 
        VALUES ('$log','$even','$user_name')");

    }

    public function get_list_log($start=null,$end=null,$even=null){
	
        // $list_log = $this->getall("select * from dtbookroomlog where logdate between '$start' and'$end' and even = '$even'");

        if($even=='All'){
            $list_log = $this->getall("select * from dtbookroomlog where logdate >= '$start' and logdate <= DATE_ADD('$end', INTERVAL 1 DAY)");
        } else {
            $list_log = $this->getall("select * from dtbookroomlog where logdate >= '$start' and logdate <= DATE_ADD('$end', INTERVAL 1 DAY) and even = '$even'");
        }

        return $list_log; 

    }


    public function test_print(){

        $mulai = '12:30:00';
        $akhir = '11:00:00';
	
        $cek = $this->getall("SELECT group_concat(id_bookroom) as id_bookroom,time_book,
            SUM( time_book = '$mulai' ) AS 'start',
            SUM( time_book = '$akhir' ) AS 'end',
            COUNT(time_book) AS 'Total'
        FROM dtbookroomdetail where time_book in ('$mulai','$akhir') and use_date = '2021-11-3' and id_room = 1
        GROUP BY time_book");

        // $ceka =count($cek[1]['id_bookroom']);
        // $ceka =count($cek);

        if(count($cek)==1){

            // if($cek[0]['time_book']=='08:30'){
            //     $start = $cek[0];
            //     } else {
            //     $end = $cek[0];
            //     }

            $book_by = 'kosong';

        } else if(count($cek)==2) {
            $start = $cek[0];
            $end = $cek[1];

            if (   ($cek[0]['start']==1 && $cek[1]['end']==1) && ($cek[0]['id_bookroom']!=$cek[1]['id_bookroom'])  ){
                $book_by = 'kosong';
            } else {
                $book_by = 'anoher user';
            }

        } else {
            $book_by = 'kosong';
        }


    

        

        

        // if(isset($ceka)){
        //     echo 'isset';
        // } else if (!isset($ceka)){
        //     echo '!isset';
        // }

        // echo "<pre>";
		// 	print_r($book_by);
		// 	echo "<pre>";
		// 	die();

        // return $cek;

    }

    public function get_data_bookroom(){
	
        $list_room = $this->getrow("select * from msroom");

        return $list_room;

    }


    public function get_list_room(){
	
        $list_room = $this->getall("select * from msroom");

        return $list_room;

    }

    public function get_row_data_before($id_bookroom=null){
	
        $data_before = $this->getrow("select db.*,mr.room_name from dtbookroom db join msroom mr on db.id_room=mr.id where id_bookroom =?",[$id_bookroom]);

        return $data_before;

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