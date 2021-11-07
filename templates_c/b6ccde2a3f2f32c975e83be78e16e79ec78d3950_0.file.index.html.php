<?php
/* Smarty version 3.1.32, created on 2021-01-05 22:14:04
  from 'D:\ano site\Assigners\Views\Assigntodept\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ff4823c8150e6_73383464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6ccde2a3f2f32c975e83be78e16e79ec78d3950' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Assigntodept\\index.html',
      1 => 1609859640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff4823c8150e6_73383464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206725ff4823c7d3985_93961963', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209225ff4823c7d9cc1_59631765', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51135ff4823c80bd90_60400914', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_206725ff4823c7d3985_93961963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_206725ff4823c7d3985_93961963',
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
class Block_209225ff4823c7d9cc1_59631765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_209225ff4823c7d9cc1_59631765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
 
<div class="row show-grid">
<div class="col-md-2">Project Category
    <span class="show-grid-block">
                                        <select name="prj_ctgry_cd" id="prj_ctgry_cd" class="form-control populate"  required onchange="change_prj_ctgry_cd()">
                                           <!-- <option></option>   -->
                                            <option value="All">All</option>     
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj_ctgry']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['prj_ctgry_cd_single']->value == $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_desc'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                              
                                        </select>    
	</span>
</div>
 <!-- <div class="col-md-2">
Project Status
    <span class="show-grid-block">
                                        <select name="prj_sts_cd" id="prj_sts_cd" class="form-control populate"  required onchange="change_prj_assgn_sts_cd()">
                                           <option value="All">All</option> 
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj_sts']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['prj_sts_cd_single']->value == $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_desc'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                            
                                        </select>    
																				</span>

    

</div>  -->

<div class="col-md-3">
Assign to Dept Status
    <span class="show-grid-block">
                                        <select name="prj_assgn_sts_cd" id="prj_assgn_sts_cd" class="form-control populate"  required onchange="change_prj_assgn_sts_cd()">
                                           <!-- <option></option>    -->
                                           <option value="All">All</option> 
                                           <!-- <option value="D">Assign</option> 
                                           <option value="U">Unassign</option>  -->
                                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj_assgn_sts']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_assgn_sts_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['prj_assgn_sts_cd_single']->value == $_smarty_tpl->tpl_vars['data']->value['prj_assgn_sts_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_assgn_sts_desc'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
                                             <!-- <option value="DEPT">DEPT</option> 
                                            <option value="DIV">DIV</option> -->
                                            
                                        </select>    
																				</span>

    

</div> 
<div class="col-md-4" >
<span id="font_project_status">Project Status</span> <br>
<span class="show-grid-block">
    <select name="prj_sts_cdx" id="prj_sts_cdx" class="form-control populate" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "includeSelectAllOption": true }' id="ms_example5" required>
        <optgroup label="Status">
            <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

            <!-- <option value="analysis">Analysis</option> -->

            <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj_sts']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['prj_sts_cd_single']->value == $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_desc'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  -->

        </optgroup>
    </select>
</span>
</div>                                                                            
</div>

<!-- <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntodept/index" > -->
<section>
<div class="row show-grid">
<div class="col-md-2">


  <span class="show-grid-block">
     <input type="hidden" name="prj_ctgry_cd_single" id="prj_ctgry_cd_single" value="<?php echo $_smarty_tpl->tpl_vars['prj_ctgry_cd_single']->value;?>
" class="form-control">
  </span>



</div>
 <div class="col-md-2">
  <span class="show-grid-block">
     <input type="hidden" name="prj_sts_cd_single" id="prj_sts_cd_single" value="<?php echo $_smarty_tpl->tpl_vars['prj_sts_cd_single']->value;?>
" class="form-control">
  </span>
</div> 
<div class="col-md-2">
  <span class="show-grid-block">
     <input type="hidden" name="prj_assgn_sts_cd_single" id="prj_assgn_sts_cd_single" value="<?php echo $_smarty_tpl->tpl_vars['prj_assgn_sts_cd_single']->value;?>
" class="form-control">
  </span>
</div>
</div>

<button id="btnSubmit" class="mt-sm mb-sm btn btn-primary">Search</button>
</section>
<!-- </form> -->

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
											 <th>Doc No</th> 
											<!-- <th>ref code</th> -->
                                            <th>Project Title</th>
                                            <th class="hidden-phone">ctgry desc</th>
                                            <!-- <th class="hidden-phone">Assign to Other Dept Status</th> -->
                                            <th class="hidden-phone">Other Dept</th>
                                            <th class="hidden-phone">Project Status</th>
                                            <th class="hidden-phone">create by</th>
                                             <th class="hidden-phone">Assignment / Add</th> 
                                             <!-- <th class="hidden-phone">Add Plan</th>  -->
                                            <!-- <th class="hidden-phone">Edit</th> -->
										</tr>
									</thead>
									

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datami']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                            <!-- <td class="center hidden-phone">
                                            <a class="btn btn-default c_button_edit" id_btn_edit="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  id="button_edit" >Edit
                                            </a>
                                            
                                            </td>      -->
                                            <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_doc_no'];?>
</td> 
                                            <!-- <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ref_cde'];?>
</td> -->
                                            <!-- <td><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_title'];?>
</td> -->
                                            <!-- <?php if (empty($_smarty_tpl->tpl_vars['somevar']->value)) {?> do something <?php }?> -->
                                            <td ><?php if (empty($_smarty_tpl->tpl_vars['data']->value['file_cr_name'])) {?> <?php } else { ?><a class="on-default c_view_cr_file" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" file_cr_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['file_cr_name'];?>
"> <i class="fa fa-file-pdf-o"></i></a> - <?php }?><a href="#" class="on-default c_view_project_info" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_title'];?>
</a></td >
                                            <!-- <td ><a href="#" class="on-default c_view_cr_file" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" file_cr_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['file_cr_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_title'];?>
</a></td > -->
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_desc'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['assign_sts_desc_deptassigner'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_desc'];?>
<a href="#" class="c_button_updt_sts" task_sts_desc="<?php echo $_smarty_tpl->tpl_vars['data']->value['task_sts_desc'];?>
" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" datatask_id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id_dttask'];?>
" ><i class="fa fa-pencil"></i></a></td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['create_by'];?>
</td>


                                              <td class="center hidden-phone">
                                            <a class="modal-with-form btn btn-primary c_button_assign" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" id_btn_delete="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  info_row="<?php echo $_smarty_tpl->tpl_vars['data']->value['prodctgry_desc'];?>
"  id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" data-toggle="tooltip" data-trigger="hover" data-original-title="Assign Department">D
                                            </a>
                                            <a class="modal-with-form btn btn-success c_button_pic" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" id_btn_delete="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  info_row="<?php echo $_smarty_tpl->tpl_vars['data']->value['prodctgry_desc'];?>
"  id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" data-toggle="tooltip" data-trigger="hover" data-original-title="Assign PIC">P
                                            </a>
                                            <a class="btn btn-info c_button_task" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"  id="button_edit" data-toggle="tooltip" data-trigger="hover" data-original-title="Assign Task">T
                                            </a>
                                            <a class="btn btn-warning c_button_task" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"  id="button_add_plan" data-toggle="tooltip" data-trigger="hover" data-original-title="Add Issue">I
                                            </a>
                                            </td> 
                                            <!-- <!-- <td></td> -->
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
</div>




<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'scriptfooter'} */
class Block_51135ff4823c80bd90_60400914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_51135ff4823c80bd90_60400914',
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

    function notif() {
        $title = 'Notification :';
                        $text = 'Please Select Project Status';
                        $type = 'custom';
                        $addclass = 'notification-warning';
                        $icon = 'fa fa-exclamation';
		new PNotify({
			title: $title,
			text: $text,
			type: $type,
			addclass: $addclass,
			icon: $icon
		});
    } 

    $(".c_view_cr_file").click(function()
	{
        // $id_btn_delete = $(this).attr("id_btn_delete");
        $id = $(this).attr("id");
        $file_cr_name = $(this).attr("file_cr_name");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/crprint/" + $id + "/" + $file_cr_name;

    });

    $(".c_view_project_info").click(function()
	{
        // $id_btn_delete = $(this).attr("id_btn_delete");
        // $id = $(this).attr("id");
        $id_ms_prj = $(this).attr("id_ms_prj");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Info/project_info/" + $id_ms_prj ;

    });


    $(".c_button_assign").click(function()
	{
        // $id_btn_delete = $(this).attr("id_btn_delete");
        $id_ms_prj = $(this).attr("id_ms_prj");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntodept/form/" + $id_ms_prj ;
        // $("#dialog_idx").text($id_btn_delete);
        // $("#info_row_modal").text($info_row);
    });

    $(".c_button_updt_sts").click(function()
	{
        // $id_btn_delete = $(this).attr("id_btn_delete");
        $id_ms_prj = $(this).attr("id_ms_prj");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntodept/update_prj_sts/" + $id_ms_prj + "/add_daily_act_form";
        // $("#dialog_idx").text($id_btn_delete);
        // $("#info_row_modal").text($info_row);
    });

    $(".c_button_pic").click(function()
	{
        // $id_btn_delete = $(this).attr("id_btn_delete");
        $id_ms_prj = $(this).attr("id_ms_prj");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/form/" + $id_ms_prj ;
        // $("#dialog_idx").text($id_btn_delete);
        // $("#info_row_modal").text($info_row);
    });

    $(".c_button_task").click(function () {   
        $id_ms_prj = $(this).attr("id_ms_prj");
        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/task/" + $id_ms_prj ;
    });  

    // $("#btnDelete").click(function () {
    //     window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/msprodctgry/delete/" + $id_btn_delete ;
    // });

    $(".c_button_edit").click(function () {   
        $id_btn_edit = $(this).attr("id_btn_edit");
        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/msprodctgry/form/" + $id_btn_edit ;
    });    

    $(".form1").submit(function () {   
        $prj_ctgry_cd = $(this).attr("prj_ctgry_cd");
        alert($prj_ctgry_cd);
        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/msprodctgry/form/" + $id_btn_edit ;
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

        if(!$("#prj_sts_cdx").val()){
            
                notif();
                // $("#font_project_status")
                document.getElementById("font_project_status").style.color = "red";
                

        } else {

        $prj_ctgry_cd = $("#prj_ctgry_cd").val();
        $prj_sts_cd = $("#prj_sts_cdx").val();
        $prj_assgn_sts_cd = $("#prj_assgn_sts_cd").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntodept/index/" + $prj_ctgry_cd + "/" + $prj_sts_cd + "/" + $prj_assgn_sts_cd ;
        }
    });



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

<!-- Vendor -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery/jquery.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/nanoscroller/nanoscroller.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/magnific-popup/magnific-popup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/jquery-placeholder/jquery.placeholder.js"><?php echo '</script'; ?>
> -->

<!-- Specific Page Vendor -->
<!-- <?php echo '<script'; ?>
 src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"><?php echo '</script'; ?>
> 
<!-- <?php echo '<script'; ?>
 src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/fuelux/js/spinner.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/dropzone/dropzone.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-markdown/js/markdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-markdown/js/to-markdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/addon/selection/active-line.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/addon/edit/matchbrackets.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/mode/javascript/javascript.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/mode/xml/xml.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/mode/css/css.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/summernote/summernote.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/ios7-switch/ios7-switch.js"><?php echo '</script'; ?>
> -->

<!-- Theme Base, Components and Settings -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
> -->

<!-- Theme Custom -->
<!-- <?php echo '<script'; ?>
 src="assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
> -->

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

<!-- Theme Initialization Files -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>

<!-- Notif -->
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

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.default.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.row.with.details.mi.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.tabletools.js"><?php echo '</script'; ?>
>

<!-- Examples -->
<!-- <?php echo '<script'; ?>
 src="assets/javascripts/forms/examples.advanced.form.js" /><?php echo '</script'; ?>
> -->




<?php
}
}
/* {/block 'scriptfooter'} */
}
