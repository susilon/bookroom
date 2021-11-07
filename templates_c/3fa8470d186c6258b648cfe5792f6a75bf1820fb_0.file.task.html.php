<?php
/* Smarty version 3.1.32, created on 2020-01-20 16:42:33
  from 'D:\ano site\Assigner\Views\Assigntopic\task.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2576097eed44_17234404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fa8470d186c6258b648cfe5792f6a75bf1820fb' => 
    array (
      0 => 'D:\\ano site\\Assigner\\Views\\Assigntopic\\task.html',
      1 => 1576753431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2576097eed44_17234404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_217955e257609732aa1_49176981', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184895e257609740e12_57139289', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_258005e2576097d3885_41612874', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_217955e257609732aa1_49176981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_217955e257609732aa1_49176981',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Basic -->
<meta charset="UTF-8">

<title>Advanced Tables | SHARED ON THEMELOCK.COM</title>
<meta name="keywords" content="HTML5 Admin Template" />
<meta name="description" content="Porto Admin - Responsive HTML5 Template">
<meta name="author" content="okler.net">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- Web Fonts  -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

<!-- Vendor CSS -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.css" />
<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/css/datepicker3.css" /> -->

<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.css" />
<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" /> -->

<!-- Theme CSS -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme.css" />

<!-- Skin CSS -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/skins/default.css" />

<!-- Theme Custom CSS -->
<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme-custom.css"> -->

<!-- Head Libs -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/modernizr/modernizr.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'headcontent'} */
/* {block 'bodycontent'} */
class Block_184895e257609740e12_57139289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_184895e257609740e12_57139289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\anosite\\Assigner\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
 
<!-- <div class="row show-grid">
    <div class="col-md-2">
        <span class="show-grid-block">
            <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/msprodctgry/form">
             <button type="button" id="btn_add" class="mb-xs mt-xs mr-xs btn btn-primary">Add</button> 
            </a>
        </span>
    </div>
    <div class="col-md-10">
    </div>
</div> -->

<div>
    

</div>
 <!-- <div class="col-md-2"><span class="show-grid-block">
<div class="form-group perhitungan" >
                        <label class="col-sm-2 control-label">prj_ctgry_desc : </label>
                        <div class="col-sm-10"><span class="show-grid-block">
                                        <select name="prj_ctgry_cd" id="prj_ctgry_cd" class="form-control populate" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_ctgry_desc'];?>
" required onchange="change_prj_ctgry_cd()">
                                           <option></option>   
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj_ctgry']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['data_msprj']->value['prj_ctgry_cd'] == $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_desc'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                              
                                        </select>
                                        <input type="hidden" class="form-control" id="prj_ctgry_desc" name="prj_ctgry_desc" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_ctgry_desc'];?>
">     
                                        </span>
                        </div>
                    </div>
</div>  -->
 

<!-- </form> -->
<div  align="right">
<!-- <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Info/index" class="on-default c_back_to_Info" >Back to Project Info << </a> -->
<a href="#" class="on-default c_back" >Back to Prev page << </a>
</div>
<!-- <br> -->
<h4>List PIC :</h4>
<section class="panel">
							<!-- <header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Basic</h2>
							</header> -->
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
                                            <!-- <th class="hidden-phone">No</th> -->
                                            <!-- <th class="hidden-phone">Edit</th> -->
											 <!-- <th>id_ms_prj</th>  -->
                                            <!-- <th>ref code</th> -->
                                            <th class="hidden-phone">Action</th>
                                            
                                            <th class="hidden-phone">pic_name</th>
                                            <th>dept_cd</th>
                                            <th>div_cd</th>
                                            <th class="hidden-phone">remark</th>
                                            <th class="hidden-phone">create_by</th>
                                              
                                             <!-- <th class="hidden-phone">Edit</th> 
                                             prj_ctgry_desc -->
										</tr>
									</thead>
									

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_dtpic']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                            <!-- <td class="center hidden-phone">
                                            <a class="btn btn-default c_button_edit" id_btn_edit="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  id="button_edit" >Edit
                                            </a>
                                            
                                            </td>      -->
                                            <!-- <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
</td>  -->
                                            <!-- <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ref_cde'];?>
</td> -->
                                            <!-- <td class="center hidden-phone">
                                            <a class="modal-with-form btn btn-default c_button_assign" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" id_btn_delete="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  info_row="<?php echo $_smarty_tpl->tpl_vars['data']->value['prodctgry_desc'];?>
"  id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" >Task
                                            </a>
                                            </td> -->
                                        <!-- <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Primary</button> -->

                                            <td class="center hidden-phone">
                                            <a class="mb-xs mt-xs mr-xs btn btn-info c_button_assign" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" div_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['div_cd'];?>
" id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" >Add Task
                                            </a>
                                            </td>
                                            
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['div_cd'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['remark'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['create_by'];?>
</td>
                                             
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
										<!--<tr class="gradeA">
											<td>Gecko</td>
											<td>Netscape Browser 8</td>
											<td>Win 98SE+</td>
											<td class="center hidden-phone">1.7</td>
											<td class="center hidden-phone">A</td>
										</tr> -->
									</tbody>
								</table>
							</div>
                        </section>



<!-- <br> -->

<h4>List Task :</h4>
<section class="panel">
							<!-- <header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Basic</h2>
							</header> -->
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default2">
									<thead>
										<tr>
                                            <!-- <th class="hidden-phone">No</th> -->
                                            <!-- <th class="hidden-phone">Edit</th> -->
											 <!-- <th>id_ms_prj</th>  -->
                                            <!-- <th>ref code</th> -->
                                            <!-- <th class="hidden-phone">Add</th> -->
                                            <th class="hidden-phone">Plan Start</th>
                                            <th class="hidden-phone">Plan End</th>
                                            
                                            <th class="hidden-phone">Task</th>
                                            <th>Name - Dept</th>
                                            <th class="hidden-phone">Remark</th>
                                            <th class="hidden-phone">Status</th>
                                            <th class="hidden-phone">Update to Done</th>
                                            <th class="hidden-phone"></th>
                                            
                                              
                                             <!-- <th class="hidden-phone">Edit</th> 
                                             prj_ctgry_desc -->
										</tr>
									</thead>
									

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_dttask']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                            <!-- <td class="center hidden-phone">
                                            <a class="btn btn-default c_button_edit" id_btn_edit="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  id="button_edit" >Edit
                                            </a>
                                            
                                            </td>      -->
                                            <!-- <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
</td>  -->
                                            <!-- <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ref_cde'];?>
</td> -->
                                            <!-- <td class="center hidden-phone">
                                            <a class="modal-with-form btn btn-default c_button_assign" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" id_btn_delete="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  info_row="<?php echo $_smarty_tpl->tpl_vars['data']->value['prodctgry_desc'];?>
"  id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" >Task
                                            </a>
                                            </td> -->

                                            <!-- <td class="center hidden-phone">
                                            <a class="btn btn-default c_button_assign" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
"  id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" >Task
                                            </a>
                                            </td> -->
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['plan_start'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['plan_end'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['remark'];?>
</td>
                                            
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['task_sts_desc'];?>
</td>
                                             <!-- <td class="center hidden-phone">
                                            <a class="btn btn-success c_button_done" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" datatask_id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" >select
                                            </a>
                                            </td>  -->

                                            <td class="hidden-phone"><?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['task_sts_desc'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'Done') {?> Done <?php } else { ?> <a class="btn btn-primary c_button_done" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" datatask_id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" >select
                                            </a> <?php }?></td>
                                            <td class="hidden-phone"><a href="#modalPrimary" class="modal-with-form c_button_remove" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
" task_desc = "<?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" datatask_id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" task_remark = "<?php echo $_smarty_tpl->tpl_vars['data']->value['remark'];?>
" ><i class="fa fa-trash-o"></i> remove
                                            </a></td>
                                            
                                             
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
										<!--<tr class="gradeA">
											<td>Gecko</td>
											<td>Netscape Browser 8</td>
											<td>Win 98SE+</td>
											<td class="center hidden-phone">1.7</td>
											<td class="center hidden-phone">A</td>
										</tr> -->
									</tbody>
								</table>
							</div>
                        </section>

<div  align="right">
<!-- <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Info/index" class="on-default c_back_to_Info" >Back to Project Info << </a> -->
<a href="#" class="on-default c_back" >Back to Prev page << </a>
</div>
<br>

<form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/save_task" style="visibility:hidden;background:cyan">
<div class="row show-grid">
<div class="col-md-3">PIC Name
    <span class="show-grid-block">
        <input type="text" name="pic_name" class="form-control" id="pic_name" required readonly>
        <input type="hidden" name="dept_cd" class="form-control" id="dept_cd">
        <input type="hidden" name="div_cd" class="form-control" id="div_cd">
        <input type="hidden" name="id_ms_prj" class="form-control" id="id_ms_prj">
	</span>
</div>

<div class="col-md-3">Task
    <span class="show-grid-block">
        <input type="text" name="task_desc" class="form-control c_view_pic" id="task_desc" required >
        <input type="hidden" name="task_id" class="form-control" id="task_id">
	</span>
</div>

<div class="col-md-3">Plan Start - End
    <div class="input-daterange input-group" data-plugin-datepicker>
	<span class="input-group-addon">
			<i class="fa fa-calendar"></i>
	</span>
			<input type="text" class="form-control" required name="plan_start" id="plan_start" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
"  >
			<span class="input-group-addon">to</span>
			<input type="text" class="form-control" required name="plan_end" id="plan_end" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" >
 </div>
</div>

<div class="col-md-3">Actual Start - End
    <div class="input-daterange input-group" data-plugin-datepicker>
	<span class="input-group-addon">
			<i class="fa fa-calendar"></i>
	</span>
			<input type="text" class="form-control"  name="actual_start" id="actual_start" >
			<span class="input-group-addon">to</span>
			<input type="text" class="form-control"  name="actual_end" id="actual_end" >
 </div>
</div>
<!-- </form> -->


<div class="col-md-11">Remark
    <span class="show-grid-block">
        <input type="text" name="remark" class="form-control" id="remark" required >
	</span>
</div>

<div class="col-md-1">.
    <span class="show-grid-block">
        <button class="btn btn-primary" id="btnSave" >Save</button>
	</span>
</div>
.





</div>

</form>


<!-- <div id="modalPrimary" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Confirmation</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <h4>Are you sure want to delete "<span id="info_row_modal"></span>" ?</h4>
                     <span id="dialog_idx"class="hidden"></span>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary modal-confirm" id="btnDelete" onclick="delete_prodctgry()">Yes</button>
                    <button class="btn btn-default modal-dismiss">No</button>
                </div>
            </div>
        </footer>
    </section>
</div> -->

<div id="modalPrimary" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Confirmation</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <h4>Are you sure want to remove task "<span id="modal_content"></span>" ?</h4>
                     <span id="modal_datatask_id"class="hidden"></span>
                     <span id="modal_id_ms_prj"class="hidden"></span>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary modal-confirm" id="btnDelete" onclick="delete_pic()">Yes</button>
                    <button class="btn btn-default modal-dismiss">No</button>
                </div>
            </div>
        </footer>
    </section>
</div>




<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'scriptfooter'} */
class Block_258005e2576097d3885_41612874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_258005e2576097d3885_41612874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
    .columnsorter {
        cursor: pointer;
    }
</style>

<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/css/jquery.dataTables.css">


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
    var $codes;

    $(".c_back").click(function()
    {
        // fungsi untuk kembali ke halaman sebelumnya
        parent.history.back();
        return false;
    });


    $(".c_button_remove").click(function()
	{

        $id_ms_prj = $(this).attr("id_ms_prj");
        $pic_name = $(this).attr("pic_name");
        $datatask_id = $(this).attr("datatask_id");
        $task_desc = $(this).attr("task_desc");
        $task_remark = $(this).attr("task_remark");
        // alert($user_dept_cd);

                $("#modal_id_ms_prj").text($id_ms_prj);
                $("#modal_datatask_id").text($datatask_id);
                $("#modal_content").text($pic_name + " - " + $task_desc + " - " + $task_remark);
                

    });


    $(".c_button_assign").click(function()
	{
        document.getElementById("form1").style.visibility = "visible";

        $("#task_id").val("");
        $("#task_desc").val("");
        
        // $id_btn_delete = $(this).attr("id_btn_delete");
        $id_ms_prj = $(this).attr("id_ms_prj");
        $pic_name = $(this).attr("pic_name");
        $dept_cd = $(this).attr("dept_cd");
        $div_cd = $(this).attr("div_cd");
        $("#pic_name").val($pic_name);
        $("#dept_cd").val($dept_cd);
        $("#id_ms_prj").val($id_ms_prj);
        $("#div_cd").val($div_cd);

        pick_pic($dept_cd);

        document.getElementById("btnSave").focus();

        
        // alert($dept_cd);

        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/form/" + $id_ms_prj ;
        // $("#dialog_idx").text($id_btn_delete);
        // $("#info_row_modal").text($info_row);
    });

    // $("#btnSave").click(function () {

    //     document.getElementById("form1").style.visibility = "hidden";
    // });

    // $(".c_button_edit").click(function () {   
    //     $id_btn_edit = $(this).attr("id_btn_edit");
    //     window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/msprodctgry/form/" + $id_btn_edit ;
    // });  

    $(".c_button_done").click(function () {   
        $id_ms_prj = $(this).attr("id_ms_prj");
        $pic_name = $(this).attr("pic_name");
        $dept_cd = $(this).attr("dept_cd");
        $id = $(this).attr("datatask_id");
        // $id_btn_edit = $(this).attr("id_btn_edit");
        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/taskdone/" + $id_ms_prj + "/" + $pic_name + "/" + $id ;
    }); 

    $("#btnDelete").click(function () {   

        
                // $("#modal_pic_name").text($pic_name);
                

        $id_ms_prj = $("#modal_id_ms_prj").text();
        // $pic_name = $(this).attr("pic_name");
        // $dept_cd = $(this).attr("dept_cd");
        $id = $("#modal_datatask_id").text();
        // $id_btn_edit = $(this).attr("id_btn_edit");
        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/delete_task/" + $id_ms_prj + "/" + $id + "/task";
    });    


    function change_prj_ctgry_cd(){

    // $prj_ctgry_cd_single = $("#prj_ctgry_cd").val();
    $("#prj_ctgry_cd_single").val($("#prj_ctgry_cd").val());

    }

    function change_prj_sts_cd(){

    $("#prj_sts_cd_single").val($("#prj_sts_cd").val());

    }

    function change_prj_assgn_sts_cd(){

    $("#prj_assgn_sts_cd_single").val($("#prj_assgn_sts_cd").val());

    }

    $("#btnSubmit").click(function () {
        $prj_ctgry_cd = $("#prj_ctgry_cd").val();
        $prj_sts_cd = $("#prj_sts_cd").val();
        $prj_assgn_sts_cd = $("#prj_assgn_sts_cd").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/index/" + $prj_ctgry_cd + "/" + $prj_sts_cd + "/" + $prj_assgn_sts_cd ;
    });


var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";
var dept_cd = $("#dept_cd").val();

function pick_pic($dept_cd=null) {
	//-------------------Picker Product----------------------
    $('.c_view_pic').bantinganPicker({

      

      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Ajax/getlist_mptask/' + $dept_cd
            // "url" : baseUrl + '/Ajax/getlist_msdept'          
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [               
            { "data" : "task_desc", "title" : "task_desc" }, 
            { "data" : "dept_cd", "title" : "dept_cd" },
            { "data" : "task_id", "title" : "task_id" }
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
        $("#task_id").val(data["task_id"]);
        $("#task_desc").val(data["task_desc"]);
        // $("#div_cd").val(data["div_cd"]);

      }
	});
    
}



$(document).ready()
{
    pick_pic("");
    document.getElementById("form1").style.visibility = "hidden";
};

// $(document).ready(function pick_pic($dept_cd=null) {
// 	//-------------------Picker Product----------------------
//     $('.c_view_pic').bantinganPicker({

      

//       title       : 'Page List',    
//       width       : "600px",  
//       showbutton  : false,          
//       datatableoption : { 
//         "ajax": {

// 			//diambil dari function controller user management
//             "url" : baseUrl + '/Ajax/getlist_mptask/' + dept_cd
//             // "url" : baseUrl + '/Ajax/getlist_msdept'          
//         },
// 		"order": [[ 2, "id" ]],
// 		//pengaturan kolom di picker
//         "columns" : [               
//             { "data" : "task_desc", "title" : "task_desc" }, 
//             { "data" : "dept_cd", "title" : "dept_cd" },
//             { "data" : "task_id", "title" : "task_id" }
// 		],
		
//         columnDefs: [                       
// 		   { targets: [0,1,2], orderable: false },
// 		   //untuk meng hide apabila mode layar xs (kecil)
//            { targets: [1,2], className: "hidden-xs"}
//         ],
//         "bLengthChange": false,
//         "serverSide": true,
//         "processing": true,     
//       },
//       done  : function(event, data) {     

//         // console.log("dfdf");
//         // console.log($title_modal);
//         $("#task_id").val(data["task_id"]);
//         $("#task_desc").val(data["task_desc"]);
//         // $("#emp_name").val(data["emp_name"]);
//         // // $("#prj_sum").val(data["prj_sum "]);
//         // $("#remark").text(data["mi_rmrk"]); 
//         // $("#prod_ctgry_id").val(data["prod_ctgry_id"]);
//         // $("#prod_type_id").val(data["prod_type_id"]);
//         // $("#prodtype_desc").val(data["prodtype_desc"]); 
//         // $("#prod_id").val(data["id"]); 
//         // $("#vendor_name").val(data["vendor_name"]);
//         // $("#vendor_id").val(data["vendor_id"]); 
//         // $("#po_number").val(data["po_number"]); 
//         // $("#item_qty").val(data["item_qty"]);
//         // $("#accepted_qty").val(data["accepted_qty"]);  

//       }
// 	});
    
// });



// function delete_prodctgry()
// {
//     window.prodctgry = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/msprodctgry/delete/" + $id_btn_delete  ;
//     // // $id_abs=$("#id_abs").text();
//     $id = $("#dialog_idx").text();
//     // $jam_keluar = $("#jam_keluar").val();
//     // $remark_update = $("#remark_update").val();
//     // $late = $("#late").val();
//     // $earlier = $("#earlier").val();
//     // $short = $("#short").val();

//     // document.getElementById("status" + $id_abs).setAttribute("jam_masuk", $jam_masuk);
// }

<?php echo '</script'; ?>
>

<!-- Examples -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
> 
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
>


<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>  -->


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.default.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.default2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.row.with.details.mi.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.tabletools.js"><?php echo '</script'; ?>
>



<?php
}
}
/* {/block 'scriptfooter'} */
}
