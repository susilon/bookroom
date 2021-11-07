<?php
/* Smarty version 3.1.32, created on 2021-01-05 23:48:20
  from 'D:\ano site\Assigners\Views\Dailyactivity\update_prj_sts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ff49854c607e6_86785358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd78b775b4b0eb606269bc18b3a9c32752d248163' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Dailyactivity\\update_prj_sts.html',
      1 => 1609865190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff49854c607e6_86785358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98495ff49854c2bee5_09427645', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29005ff49854c59a96_26869924', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_98495ff49854c2bee5_09427645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_98495ff49854c2bee5_09427645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\anosite\\Assigners\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
            
<!-- template diambil dari porto forms-layouts.html Horizontal Form -->
<style>
div.scrollt {
        width: 100px;
    height: 100px;
    overflow: scroll;
}

span.vrdna {
    /* Huruf */
    font-family:verdana;
    /* counter-increment: my-sec-counter;
    content: counter(my-sec-counter) ". "; */
}
</style>

<div class="panel-group" id="accordion2">
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2One">
												<i class="fa fa-star"></i> Form Change Status
											</a>
										</h4>
									</div>
									<div id="collapse2One" class="accordion-body collapse in">
										<div class="panel-body">
                                            
                                            <div class="row">
    <div class="col-md-5">


                    
    </div>
</div>
                    
<div class="row">
    <div class="col-md-7">
        <!-- form diarahkan ke action save dengan metode POST -->
         <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dailyactivity/update_project_sts/"> 
        <!-- <form id="form1" > -->
            <section class="panel">
                 <header class="panel-heading">
                    <h2 class="panel-title"> <Textfile></Textfile></h2>                    
                </header> 
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Current Status : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_sts_desc'];?>
" name="prj_sts_desc_throw" class="form-control" id="prj_sts_desc_throw" readonly >
                                 <!-- <input type="hidden" class="form-control" name="prj_sts_cd_throw" id="prj_sts_cd_throw" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_sts_cd'];?>
"> -->
                                 <input type="hidden" class="form-control" name="id_ms_prj" id="id_ms_prj" value="<?php echo $_smarty_tpl->tpl_vars['id_ms_prj']->value;?>
">
                                 <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['id'];?>
">  
                            </span>
                        </div>
                    </div>

                    <div class="form-group has-success">
                        <label class="col-sm-3 control-label">Change to  : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" class="c_view_dept form-control" placeholder="Please Select Status" id="prj_sts_desc" name="prj_sts_desc" required >
                                <input type="hidden" class="form-control" name="prj_sts_cd" id="prj_sts_cd">
                                <input type="hidden" class="form-control" name="controller" id="controller" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
">
                            </span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-3 control-label">Time Project : </label>
                        <div class="col-sm-9">
                        <!-- <div id="datepickerz" class="input-daterange input-group" data-plugin-datepicker > -->
                             <div id="datepickerz" class="input-daterange input-group" data-plugin-datepicker style='visibility:hidden'> 
	                        <span class="input-group-addon">
			                <i class="fa fa-calendar"></i>
                            </span>
                            <span class="input-group-addon">Sart</span>
			                <input type="text" class="form-control"  name="time_start" id="time_start" onchange="time_start_change()" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" >
			                <span class="input-group-addon">End</span>
			                <input type="text" class="form-control"  name="time_end" id="time_end"onchange="time_end_change()" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" >
                        </div>
                        </div>
                    </div> 

                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary" id="btnAdd">Save</button>            
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <button type="reset" class="btn btn-default" id="btnCancel">Cancel</button>
                </footer>
            </section>
        </form>
    </div>
    <div class="col-md-5">
							<section class="panel">
								<!-- <header class="panel-heading panel-heading-transparent">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Projects Stats</h2>
								</header> -->
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
													<!-- <th>#</th> -->
													<th colspan="3">Dept Already Assigned :  </th>
													<!-- <th>Status</th>
													<th>Progress</th> -->
												</tr>
											</thead>
											<!-- <tbody>
												<tr>
													<td>1</td>
													<td>Porto - Responsive HTML5 Template</td>
													<td><span class="label label-success">Success</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																100%
															</div>
														</div>
													</td>
												</tr>
												
                                            </tbody> -->
                                            
                                            <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prjpicdept']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                                <td class="center hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td> 
                                                <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['create_dt'];?>
</td> 
                                                 <!-- <td class="center hidden-phone">
                                                     <a href="#" class="on-default c_button_remove"><span class="label label-success">Remove</span></a>
                                    
                                                </td>  -->
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
									        </tbody>
										</table>
									</div>
								</div>
							</section>
						</div>
</div>


										</div>
									</div>
								</div>
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Two">
												<i class="fa fa-cogs"></i> Task
											</a>
										</h4>
									</div>
									<div id="collapse2Two" class="accordion-body collapse">
										<div class="panel-body">
                                            
                                            <section class="panel">

								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
                                                    <td>Task</td>
                                                    <td>Dept/PIC Name</td> 
                                                    <!-- <td>Create_by</td>  -->
                                                    
                                                    <td>Status Task</td>
                                                    <td>Plan Start - End</td> 
                                                    <td>Actual Start - End</td> 
                                                    <!-- <td>Create dt</td>  -->
												</tr>
											</thead>
                                            
                                            <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_task_by_id_ms_prj']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
</td> 
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
</td> 
                                                <!-- <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['create_by'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td>  -->
                                                
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['task_sts_desc'];?>
</td>
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['plan_start'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['plan_end'];?>
</td>
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['actual_start'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['actual_end'];?>
</td>
                                                <!-- <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['create_dt'];?>
</td> -->
                                                 <!-- <td class="center hidden-phone">
                                                     <a href="#" class="on-default c_button_remove"><span class="label label-success">Remove</span></a>
                                                
                                                </td>  -->
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
									        </tbody>
										</table>
									</div>
								</div>
							</section>

										</div>
									</div>
								</div>
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Three">
												<i class="fa fa-cloud"></i> Project Log
											</a>
										</h4>
									</div>
									<div id="collapse2Three" class="accordion-body collapse">
										<div class="panel-body">
                                            
                                            
                                            <section class="panel">

								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
                                                    <td>Project Log</td> 
                                                    <!-- <td>Create_by</td>  -->
                                                    <td>Remark</td>
                                                    <td>Date Start - End</td> 
                                                    <!-- <td>Create dt</td>  -->
												</tr>
											</thead>
                                            
                                            <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_dtprojectlog']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
</td> 
                                                <!-- <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['create_by'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td>  -->
                                                <td >create by : <?php echo $_smarty_tpl->tpl_vars['data']->value['create_by'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
, <?php echo $_smarty_tpl->tpl_vars['data']->value['create_dt'];?>
<br><?php echo $_smarty_tpl->tpl_vars['data']->value['remark'];?>
</td> 
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['date_start'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['date_end'];?>
</td>
                                                <!-- <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['create_dt'];?>
</td> -->
                                                 <!-- <td class="center hidden-phone">
                                                     <a href="#" class="on-default c_button_remove"><span class="label label-success">Remove</span></a>
                                                
                                                </td>  -->
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
									        </tbody>
										</table>
									</div>
								</div>
							</section>


										</div>
									</div>
                                </div>
                                
                                <div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3Three">
												<i class="fa fa-cloud"></i> Info Project : <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_doc_no'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>

											</a>
										</h4>
									</div>
									<div id="collapse3Three" class="accordion-body collapse">
										<div class="panel-body">


                                            <section class="panel">
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
                                                    <!-- <th colspan="3">Info Project :  </th> -->
												</tr>
											</thead>
                                            
                                            <tbody>

                                            <tr class="gradeA">
                                                <td ><a href="#" class="on-default c_view_cr_file" id="<?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['id'];?>
" file_cr_name="<?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['file_cr_name'];?>
"><span class="label label-success">View CR File</span></a></td > 
                                            </tr> 
                                            <!-- <tr class="gradeA">
                                                <td >Doc No :</td> 
                                            </tr> 
                                            <tr class="gradeA">
                                                <td >>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_doc_no'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td >Title</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td >>> <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>
</td> 
                                            </tr> -->
                                            <tr class="gradeA">
                                                <td>Project Category :</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_ctgry_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Assign Status :</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_assgn_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Project Status : </td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Score : </td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['score_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Project Summary : </td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_sum'];?>
</td> 
                                            </tr>
                                           
									        </tbody>
										</table>
									</div>
								</div>
							</section>


                                    </div>
									</div>
                                </div>


							</div>







                   
<style>
			.show-grid-block {
				background-color: #EEE;
				border: 1px solid #FFF;
				display: block;
				line-height: 40px;
				min-height: 40px;
				text-align: center;
			}

			html.dark .show-grid-block {
				background-color: #282d36;
				border-color: #282d36;
			}
		</style>

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_29005ff49854c59a96_26869924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_29005ff49854c59a96_26869924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
  .columnsorter { cursor: pointer; }
</style>
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
> -->

<?php echo '<script'; ?>
 type="text/javascript">

var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";

function notif($title,$text,$type,$addclass,$icon) {
		new PNotify({
			title: $title,
			text: $text,
			type: $type,
			addclass: $addclass,
			icon: $icon
		});
    }


$(document).ready(function() {
	//-------------------Picker Product----------------------
    $('.c_view_dept').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Ajax/getlist_msprjsts'            
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [               
            { "data" : "id", "title" : "id" }, 
            { "data" : "prj_sts_cd", "title" : "prj_sts_cd" },
            { "data" : "prj_sts_desc", "title" : "prj_sts_desc" }
		],
		
        columnDefs: [                       
		   { targets: [0,1,2], orderable: false },
		   //untuk meng hide apabila mode layar xs (kecil)
           { targets: [1,2], className: "hidden-xs"}
        ],
        "bLengthChange": false,
        "serverSide": true,
        "processing": true,     
      },
      done  : function(event, data) {    

            $prj_sts_desc = $("#prj_sts_desc_throw").val();
           
          if ($prj_sts_desc==data["prj_sts_desc"]){
                $title = 'Warning :',
                $text = 'Sory, You cannot choose Current Status ' + '(' + $prj_sts_desc + ')',
                $type = 'custom',
                $addclass = 'notification-warning',
                $icon = 'fa fa-twitter'
                notif($title,$text,$type,$addclass,$icon);
                
          } else {
                $("#prj_sts_desc").val(data["prj_sts_desc"]);
                $("#prj_sts_cd").val(data["prj_sts_cd"]);
          }

          $task_prj = $("#prj_sts_desc").val();

        if ($task_prj=='Done'){

        document.getElementById("datepickerz").style.visibility = "visible";
        $("#time_start").attr("required","required");
        $("#time_end").attr("required","required");
        // document.getElementById("inputid").required = true;
         
    } else {
        document.getElementById("datepickerz").style.visibility = "hidden";
        $("#time_start").removeAttr("required");
        $("#time_end").removeAttr("required");
        $("#time_start").val("");
        $("#time_end").val("");
    }
        
        // $("#descr").val(data["descr"]);
        // // $("#prj_sum").val(data["prj_sum "]);
        // $("#remark").text(data["mi_rmrk"]); 
        // $("#prod_ctgry_id").val(data["prod_ctgry_id"]);
        // $("#prod_type_id").val(data["prod_type_id"]);
        // $("#prodtype_desc").val(data["prodtype_desc"]); 
        // $("#prod_id").val(data["id"]); 
        // $("#vendor_name").val(data["vendor_name"]);
        // $("#vendor_id").val(data["vendor_id"]); 
        // $("#po_number").val(data["po_number"]); 
        // $("#item_qty").val(data["item_qty"]);
        // $("#accepted_qty").val(data["accepted_qty"]);  

      }
	});
    
});



// function change_task_sts(){

//     // $prj_ctgry_cd_single = $("#prj_ctgry_cd").val();
//     $("#task_sts_single").val($("#task_sts").val());

//     $task_sts = $("#task_sts").val();

//     if ($task_sts=='Outstanding' || $task_sts=='' ){

//         document.getElementById("datepickerz").style.visibility = "hidden";
         
//     } else {
//         document.getElementById("datepickerz").style.visibility = "visible";
//     }

//     }


//     $(document).ready(function() {

//         $task_sts = $("#task_sts").val();

//         if ($task_sts=='Outstanding' || $task_sts==''){

//         document.getElementById("datepickerz").style.visibility = "hidden";
         
//     } else {
//         document.getElementById("datepickerz").style.visibility = "visible";
//     }

// });

function change_prj_ctgry_cd(){

var t = document.getElementById("prj_ctgry_cd");
$selectedText = t.options[t.selectedIndex].text;
$("#prj_ctgry_desc").val($selectedText);

}



function change_prj_sts_cd(){

var t = document.getElementById("prj_sts_cd");
$selectedText = t.options[t.selectedIndex].text;
$("#prj_sts_desc").val($selectedText);

}

function time_start_change(){

if ($("#time_end").val())
    if($("#time_start").val() > $("#time_end").val()){
        $("#time_end").val('');
        $("#time_start").val('');
        $title = 'Warning :',
                $text = 'End Date Cannot be earlier than Start Date, please Reset. For Next, System will set Start Date same as End Date automaticly if Start Date same as End Date',
                $type = 'custom',
                $addclass = 'notification-warning',
                $icon = 'fa fa-twitter'
                notif($title,$text,$type,$addclass,$icon);
    }
}

function time_end_change(){

if ($("#time_start").val())
    if($("#time_start").val() > $("#time_end").val()){
        $("#time_end").val('');
        $("#time_start").val('');
        $title = 'Warning :',
                $text = 'End Date Cannot be earlier than Start Date, please Reset. For Next, System will set Start Date same as End Date automaticly if Start Date same as End Date',
                $type = 'custom',
                $addclass = 'notification-warning',
                $icon = 'fa fa-twitter'
                notif($title,$text,$type,$addclass,$icon);
    }
}

$(".c_view_cr_file").click(function()
	{
        // $id_btn_delete = $(this).attr("id_btn_delete");
        $id = $(this).attr("id");
        $file_cr_name = $(this).attr("file_cr_name");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/crprint/" + $id + "/" + $file_cr_name;

    });

function f_test()
{
    alert("rtdrt");
}

    $("#btnCancel").click(function()
    {
        // fungsi untuk kembali ke halaman sebelumnya
        parent.history.back();
        return false;
    });
<?php echo '</script'; ?>
>

 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>    


          <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.css" />  
         

           <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.js"><?php echo '</script'; ?>
>   

             <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
> 


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
> 

<?php
}
}
/* {/block 'bodyfooter'} */
}
