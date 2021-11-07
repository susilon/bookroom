<?php
/* Smarty version 3.1.32, created on 2019-10-14 10:29:26
  from 'C:\xampp\htdocs\Assigner\Views\Assigntopic\taskdone.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5da3eb96762f84_03564301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f2cf2cb184da0e8a802a0f83235c6c628e9589' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Assigntopic\\taskdone.html',
      1 => 1571023762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da3eb96762f84_03564301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160685da3eb9670c0e4_90331557', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86215da3eb96755aa8_90506081', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_160685da3eb9670c0e4_90331557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_160685da3eb9670c0e4_90331557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Assigner\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
/Assigntopic/update_task_done"> 
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
                        <label class="col-sm-3 control-label">Actual Date : </label>
                        <div class="col-sm-9">
                        <div class="input-daterange input-group" data-plugin-datepicker>
	                        <span class="input-group-addon">
			                <i class="fa fa-calendar"></i>
	                        </span>
			                <input type="text" class="form-control" required name="actual_start" id="actual_start" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
"  >
			                <span class="input-group-addon">to</span>
			                <input type="text" class="form-control" required name="actual_end" id="actual_end" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
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
class Block_86215da3eb96755aa8_90506081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_86215da3eb96755aa8_90506081',
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
