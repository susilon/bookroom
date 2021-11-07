<?php
/* Smarty version 3.1.32, created on 2020-01-20 16:51:44
  from 'D:\ano site\Assigner\Views\Task\form_update_task.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e257830a622c7_68348924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f93b91c6dfc853af9c6eca5abad5d1aa74b73c92' => 
    array (
      0 => 'D:\\ano site\\Assigner\\Views\\Task\\form_update_task.html',
      1 => 1571026687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e257830a622c7_68348924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162505e2578309ef465_82053573', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_249685e257830a59f81_93734715', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_162505e2578309ef465_82053573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_162505e2578309ef465_82053573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\anosite\\Assigner\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
												<i class="fa fa-star"></i> <?php echo $_smarty_tpl->tpl_vars['title_accordeon1']->value;?>

											</a>
										</h4>
									</div>
									<div id="collapse2One" class="accordion-body collapse in">
										<div class="panel-body">
                                            
                                            <div class="col-md-6">
        <!-- form diarahkan ke action save dengan metode POST -->
         <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/update_task"> 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <!-- <h2 class="panel-title">Update Task Done <Textfile></Textfile></h2>                     -->
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Plan Date : </label>
                        <div class="col-sm-9">
                        <div class="input-daterange input-group" data-plugin-datepicker>
	                        <span class="input-group-addon">
			                <i class="fa fa-calendar"></i>
	                        </span>
			                <input type="text" class="form-control" required name="plan_start" id="plan_start" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" readonly value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['plan_start'];?>
" >
			                <span class="input-group-addon">to</span>
			                <input type="text" class="form-control" required name="plan_end" id="plan_end" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" readonly value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['plan_end'];?>
" >
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Status : </label>
                        <div class="col-sm-9">

                            <span class="show-grid-block">
                                        <select name="task_sts_cd" id="task_sts_cd" class="form-control populate"  required onchange="change_task_sts()">
                                            <option></option>   
                                            <!-- <option ></option>  
                                            <option value="Outstanding">Outstanding</option>  
                                            <option value="Done">Done</option> 
                                            <option value="All">All</option>     -->
                                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_sts_task']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <!-- <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->sts_cd;?>
" <?php if ($_smarty_tpl->tpl_vars['task_sts_single']->value == $_smarty_tpl->tpl_vars['data']->value->data_sts_task) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value->data_sts_task;?>
</option> -->
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sts_cd'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['data_sts_task'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                               
                                        </select>    
                            </span>
                        <input type="hidden" class="form-control" id="task_sts_desc" name="task_sts_desc"  >

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Actual Date : </label>
                        <div class="col-sm-9">
                        <div class="input-daterange input-group" data-plugin-datepicker>
	                        <span class="input-group-addon" id="span_from" style="visibility: hidden;">
			                <i class="fa fa-calendar"></i> From
	                        </span>
			                <input type="text" style="visibility: hidden;" class="form-control fromdt" required id="actual_start" name="actual_start" id="actual_start" value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['actual_start'];?>
" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
"  >
			                <span class="input-group-addon" style="visibility: hidden;" id="span_to">to</span>
			                <input type="text" class="form-control" style="visibility: hidden;" required id="actual_end" name="actual_end" id="actual_end" value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['actual_end'];?>
" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" >
                        </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-sm-3 control-label">Dept Code : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="dept_cd" placeholder=".Select Project" class="form-control" id="dept_cd" required > 
                            </span>
                        </div>
                    </div> -->

                    <!-- <div class="form-group">
                        <label class="col-sm-2 control-label">Dept  : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" id="descr" name="descr"  >
                            </span>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Remark : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <textarea name = "remark_done"  class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                                <input type="hidden" class="form-control" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['id'];?>
">
                                <input type="hidden" class="form-control" name="id_ms_prj" value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['id_ms_prj'];?>
">
                                <input type="hidden" class="form-control" name="controller" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" >
                            </span>
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

<div class="col-md-6">
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
                                                <td ><span class="label label-success">Task Info</span></td > 
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
                                                <td>Task : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['task_desc'];?>
</td> 
                                            </tr>
                                            
                                            <tr class="gradeA">
                                                <td>Plan : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['plan_start'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data_task']->value['plan_end'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Actual : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['actual_start'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data_task']->value['actual_end'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Status Task : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['task_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Dept : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['dept_cd'];?>
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
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Two">
												<i class="fa fa-cogs"></i> Info Project : <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_doc_no'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>

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
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Three">
												<i class="fa fa-cloud"></i> Lorem ipsum dolor
											</a>
										</h4>
									</div>
									<div id="collapse2Three" class="accordion-body collapse">
										<div class="panel-body">
											Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
										</div>
									</div>
								</div>
							</div>

                    
<div class="row">
    
    <div class="col-md-6">
							
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
class Block_249685e257830a59f81_93734715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_249685e257830a59f81_93734715',
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

$(document).ready(function() {

    // document.getElementById("span_from").style.visibility = "hidden";
    // document.getElementById("actual_start").style.visibility = "hidden";
    // document.getElementById("span_to").style.visibility = "hidden";
    // document.getElementById("actual_end").style.visibility = "hidden";

	//-------------------Picker Product----------------------
    $('.c_view_pic').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Ajax/getlist_dtuser'   
            // "url" : baseUrl + '/Ajax/getlist_msdept'          
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [               
            { "data" : "employee_id", "title" : "employee_id" }, 
            { "data" : "emp_name", "title" : "emp_name" },
            { "data" : "NTUserName", "title" : "NTUserName" },
            { "data" : "div_cd", "title" : "div_cd" },
            { "data" : "dept_cd", "title" : "dept_cd" }
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

        // console.log("dfdf");
        // console.log($title_modal);
        $("#dept_cd").val(data["dept_cd"]);
        $("#NTUserName").val(data["NTUserName"]);
        $("#emp_name").val(data["emp_name"]);
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

function change_task_sts(){

    // $prj_ctgry_cd_single = $("#prj_ctgry_cd").val();
    $("#task_sts_desc").val();

    $task_sts_cd = $("#task_sts_cd").val();

    // alert($task_sts_cd);

    if ($task_sts_cd=='IP'){
        $("#task_sts_desc").val("In Progress");

        document.getElementById("span_from").style.visibility = "visible";
        document.getElementById("actual_start").style.visibility = "visible";
        document.getElementById("span_to").style.visibility = "hidden";
        document.getElementById("actual_end").style.visibility = "hidden";
        $("#actual_start").attr("required","required");
        $("#actual_end").removeAttr("required");
         
    } else if($task_sts_cd=='DN') {
        $("#task_sts_desc").val("Done");
        document.getElementById("span_from").style.visibility = "visible";
        document.getElementById("actual_start").style.visibility = "visible";
        
        document.getElementById("span_to").style.visibility = "visible";
        document.getElementById("actual_end").style.visibility = "visible";
        $("#actual_start").attr("required","required");
        $("#actual_end").attr("required","required");
        // $("#actual_start").attr("readonly","readonly");
    } else {
        document.getElementById("span_from").style.visibility = "hidden";
        document.getElementById("actual_start").style.visibility = "hidden";
        document.getElementById("span_to").style.visibility = "hidden";
        document.getElementById("actual_end").style.visibility = "hidden";
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

function f_test()
{
    alert("rtdrt");
}

    $("#btnCancel").click(function()
    {
        // fungsi untuk kembali ke halaman sebelumnya
        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/task_pic/";
            parent.history.back();
            // return false;
    });
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
