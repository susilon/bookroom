<?php
/* Smarty version 3.1.32, created on 2020-01-20 14:32:03
  from 'D:\ano site\Assigner\Views\Info\project_info.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e255773556a96_10777552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd941009a72bf0b10b2dad5a9419c80277871b9af' => 
    array (
      0 => 'D:\\ano site\\Assigner\\Views\\Info\\project_info.html',
      1 => 1579505272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e255773556a96_10777552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201125e25577352cfc4_03440768', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_327065e255773550982_88653473', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_201125e25577352cfc4_03440768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_201125e25577352cfc4_03440768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
<div  align="right">
<!-- <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Info/index" class="on-default c_back_to_Info" >Back to Project Info << </a> -->
<a href="#" class="on-default c_back" >Back to Prev page << </a>
</div>
<br>
<div class="panel-group" id="accordion2">
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2One">
												<i class="fa fa-star"></i> Sum Info : <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>

											</a>
										</h4>
									</div>
									<div id="collapse2One" class="accordion-body collapse in">
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
                                           
                                            <tr class="gradeA">
                                                <th>Project Category :</th> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_ctgry_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <th>Assign Status :</th> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_assgn_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <th>Project Status : </th> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <th>Score : </th> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['score_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <th>Project Summary : </th> 
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
                                                    <th>Task</th>
                                                    <th>Dept/PIC Name</th> 
                                                    <!-- <td>Create_by</td>  -->
                                                    
                                                    <th>Status Task</th>
                                                    <th>Plan Start - End</th> 
                                                    <th>Actual Start - End</th> 
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
                                                    <th>Project Log</th> 
                                                    <!-- <td>Create_by</td>  -->
                                                    <th>Remark</th>
                                                    <th>Date Start - End</th> 
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
												<i class="fa fa-cloud"></i> Dept/PIC Assigned Related Project
											</a>
										</h4>
									</div>
									<div id="collapse3Three" class="accordion-body collapse">
										<div class="panel-body">

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
                                                <i>Dept Assigned : </i>
												<tr>
												
                                                    <th >Dept  </th>
                                                    <th >Create Date </th>
                                                    <th > </th>

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
                                                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td> 
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['create_dt'];?>
</td> 
                                                 <td class="center hidden-phone">
                                                    
                                                </td> 
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
									        </tbody>
										</table>
									</div>
								</div>
                            </section>
                            
                            <hr>

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
                                            <i>PIC Assigned : </i>
											<thead>
												<tr>
												
                                                    <th>PIC Name </th>
                                                    <th>Dept </th>
                                                    <th>Create Date</th>

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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_dtpic']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
</td> 
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td>
                                                <td ><?php echo $_smarty_tpl->tpl_vars['data']->value['create_dt'];?>
</td> 
                                                 <td class="center hidden-phone">
                                                    
                                                </td> 
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
class Block_327065e255773550982_88653473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_327065e255773550982_88653473',
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

        // console.log("dfdf");
        // console.log($title_modal);
        
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

function change_score(){

var t = document.getElementById("score");
$selectedText = t.options[t.selectedIndex].text;
$("#score_desc").val($selectedText);

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

    $(".c_back").click(function()
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
