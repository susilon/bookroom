<?php
/* Smarty version 3.1.32, created on 2021-11-04 12:53:03
  from 'D:\ano site\UI-skeletonhahuyy\Views\Bookroom\listbookroom.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_6183753f358387_16830508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0adf16ffc9239fc52906144c79fb99af47022226' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Bookroom\\listbookroom.html',
      1 => 1635830241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6183753f358387_16830508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187606183753f313c55_68562226', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68946183753f31ba37_52220538', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_224726183753f34a658_77818923', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_187606183753f313c55_68562226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_187606183753f313c55_68562226',
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
class Block_68946183753f31ba37_52220538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_68946183753f31ba37_52220538',
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

 
<div class="row show-grid">
 

<div class="col-md-2">


    

</div> 
</div>



  <!-- </form>   -->

<div class="form-group">
    <label class="col-md-2 control-label">Room Name</label>
    <div class="col-md-3">
        <span class="show-grid-block">
            <select name="room_name" id="room_name" class="form-control populate"  required >
                <!-- <!-- <option></option>    -->
                <!-- <option ></option>  
                <option value="Outstanding">Outstanding</option>  
                <option value="Done">Done</option> 
                <option value="All">All</option>     -->
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_room']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
            <!-- <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['room_name'];?>
</option> -->
            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_room']->value == $_smarty_tpl->tpl_vars['data']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['room_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                               
            </select>    
</span>
</div>
</div>

<!-- <div class="form-group">
    <label class="col-md-2 control-label">Book Date</label>
    <div class="col-md-3">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            <input id = "pick_date_edit1" name = "pick_date_edit" type="text" data-plugin-datepicker class="form-control" required>
        </div>
    </div>
</div> -->


<div class="form-group">
    <label class="col-md-2 control-label">Tanggal</label>
    <div class="col-md-2">
        <div id="tanggal_book" onclick="refresh_list_room()" value="10-10-2021" data-plugin-datepicker data-plugin-skin="primary" >
             
    </div>
    <input type="hidden" class="form-control" id="use_date" value="<?php echo $_smarty_tpl->tpl_vars['use_date']->value;?>
" >
    <input type="hidden" class="form-control" id="use_date_js" value="<?php echo $_smarty_tpl->tpl_vars['use_date_js']->value;?>
" >
</div>
</div>

<section class="panel">
							<!-- <header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Basic</h2>
							</header> -->
							<div class="panel-body">
								<table class="table table-hover mb-none">
									<thead>
										<tr>

                                            <th class="hidden-phone">Time</th>
                                            <th class="hidden-phone">Subject</th>
                                            <th class="hidden-phone">Book by</th>
                                            <th class="hidden-phone"></th>
										</tr>
                                    </thead>
                                    
									
                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_bookroom']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                            <td class="hidden-phone">
                                                <a class="open_form_book modal-with-form btn btn-primary" href="#modalForm" time_book="<?php echo $_smarty_tpl->tpl_vars['data']->value['time_book'];?>
" id_time_book="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_time_book'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['cek_waktu'] == 'disable') {?>disabled<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['time_book'];?>
</a>
                                                <!-- <button type="button" class="btn btn-success" name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit"><?php echo $_smarty_tpl->tpl_vars['data']->value['time_book'];?>
</button> -->
                                            </td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['subject'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['book_by'];?>
</td>
                                            <td class="actions-hover actions-fade">
                                                <a class="open_view_delete modal-with-form btn btn-primary" href="#modalPrimary" id_bookroom="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_bookroom'];?>
" subject="<?php echo $_smarty_tpl->tpl_vars['data']->value['subject'];?>
" use_time_start="<?php echo $_smarty_tpl->tpl_vars['data']->value['use_time_start'];?>
" use_time_end="<?php echo $_smarty_tpl->tpl_vars['data']->value['use_time_end'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['book_by'] == null) {?>disabled<?php }?>><i class="fa fa-pencil"> / <i class="fa fa-trash-o"></i></i></a>
                                                <!-- <a class="open_view_delete modal-with-form btn btn-primary" href="#modalPrimary" id_bookroom="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_bookroom'];?>
" subject="<?php echo $_smarty_tpl->tpl_vars['data']->value['subject'];?>
" use_time_start="<?php echo $_smarty_tpl->tpl_vars['data']->value['use_time_start'];?>
" use_time_end="<?php echo $_smarty_tpl->tpl_vars['data']->value['use_time_end'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['book_by'] == null) {?>disabled<?php }?>><i class="fa fa-trash-o"></i></a> -->
                                                <!-- <a class="open_view_edit modal-with-form btn btn-primary" href="#modalForm_Edit" id_bookroom="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_bookroom'];?>
" subject="<?php echo $_smarty_tpl->tpl_vars['data']->value['subject'];?>
" use_time_start="<?php echo $_smarty_tpl->tpl_vars['data']->value['use_time_start'];?>
" use_time_end="<?php echo $_smarty_tpl->tpl_vars['data']->value['use_time_end'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['book_by'] == null) {?>disabled<?php }?>><i class="fa fa-pencil"></i></a> -->
                                                
                                            </td>
                                           
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
									</tbody>
								</table>
							</div>
                        </section>


                        
<div id="modalPrimary" class="modal-block modal-block-lg mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Confirmation</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <!-- <i class="fa fa-question-circle"></i> -->
                    <i class="fa fa-warning"></i>
                </div>
                <div class="modal-text">
                    <h4>Silahkan Pilih data book yang akan di edit <i class="fa fa-pencil"></i>/ delete <i class="fa fa-trash-o"></i></h4>
                     <span id="dialog_idx"class=""></span>
                </div>
                <table class="table mb-none">
                    <thead>
                        <tr>
                            <th class="hidden-phone"></th>
                            <th class="hidden-phone">Subject</th>
                            <th class="hidden-phone">Room Name</th>
                            <th class="hidden-phone">Start</th>
                            <th class="hidden-phone">End</th>
                            <th class="hidden-phone"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeA" type="hidden" ></tr>
                            <td>
                                <a href="#" id="btn_row_edit0"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td class=""  id="subject0" ></td>
                            <td class="hidden-phone " id="room_name0"></td>
                            <td class="hidden-phone " id="start0"></td>
                            <td class="hidden-phone " id="end0">End 1</td>
                            <td >
                                <a href="#" id="btn_row_delete0"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <div id="myDIV">  
                        <tr class="gradeA">
                            <td >
                                <a href="#" id="btn_row_edit1"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td class="hidden-phone" id="subject1">subject 1</td>
                            <td class="hidden-phone" id="room_name1">Room Name 1</td>
                            <td class="hidden-phone" id="start1">Start 1</td>
                            <td class="hidden-phone" id="end1">End 1</td>
                            <td >
                                <a href="#" id="btn_row_delete1"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr> 
                        </div>
                    </tbody>
                </table>
            </div>
            <input type="hidden" class="form-control" id="id_bookroom0" >
            <input type="hidden" class="form-control" id="id_bookroom1" >
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <!-- <button class="btn btn-primary modal-confirm" id="btnDelete" onclick="delete_prodctgry()">Yes</button> -->
                    <button class="btn btn-default modal-dismiss">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<!-- Modal Form -->
<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Boking Room</h2>
        </header>
        <div class="panel-body">
            <form id="form_book">
            <!-- <form id="form_book" class="form-horizontal mb-lg" novalidate="novalidate"> -->
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Room</label>
                    <div class="col-sm-9">
                        <span class="show-grid-block">
                            <select name="pick_room" id="pick_room" class="form-control populate"  required >

                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_room']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                           
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['room_name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                               
                            </select>    
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Use Date</label>
                    <div class="col-sm-9">
                        <input type="input" id="pick_date" name="pick_date" class="form-control" disabled/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Time Start</label>
                    <div class="col-sm-9">
                        <span class="show-grid-block">
                            <select name="time_start" id="time_start" class="form-control populate" onchange="cek_time()" required >
                      
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_bookroom']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
               
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_time_book'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['time_book'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                               
                            </select>    
                </span>
                <input type="hidden" class="form-control" id="tampung_time_start" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Time End</label>
                    <div class="col-sm-9">
                        <span class="show-grid-block">
                            <select name="time_end" id="time_end" class="form-control populate" onchange="cek_time()" required >
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_bookroom']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                            
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_time_book'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['time_book'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                               
                            </select>    
                            
                </span>

                <input type="hidden" class="form-control" id="tampung_time_end" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Subject </label>
                    <div class="col-sm-9">
                        <!-- <input type="email" name="email" class="form-control" placeholder="Type your email..." required/> -->
                        <textarea id="subject" name = "subject"  class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Remark</label>
                    <div class="col-sm-9">
                        <textarea id="remark" name = "remark"  class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <!-- <button class="btn btn-primary modal-confirm">Submit</button> -->
                    <button class="btn btn-default modal-dismiss">Cancel</button>
                    <button type="button" class="btn btn-success" name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit">Book</button>                                        
                    <!-- <button type="reset" id="simulasi_ulang" class="btn btn-warning">Simulasi Ulang</button> -->
                </div>
            </div>
        </footer>
    </section>
</div>


<!--========================================================MODAL FORM EDIT===================================================== -->

<div id="modalForm_Edit" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit Booked Room</h2>
        </header>
        <div class="panel-body">
            <!-- <form id="form_book"> -->
            <form id="form_book" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Subject</label>
                    <div class="col-sm-9">
                        <span class="show-grid-block">
                            <div class="radio-custom">
                                <input type="radio" class="opt_btn_subject" id="id_bokroom0_edit" name="subject_edit">
                                <label id="lbl_subject0_edit">Radio Default</label>
                            </div>   
                        </span>
                    </div>
                </div>
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-9">
                        <span class="show-grid-block">
                            <div class="radio-custom" id="id_bokroom1_edit_div">
                                <input type="radio" class="opt_btn_subject" id="id_bokroom1_edit" name="subject_edit">
                                <label id="lbl_subject1_edit">Radio Default</label>
                            </div>   
                        </span>
                    </div>
                </div>
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Current Book Info</label>
                </div>
                <!-- <div class="form-group">
                    <label class="col-sm-3 control-label">Room Name</label>
                    <div class="col-sm-9">
                        <input type="input" id="room_name_edit" class="form-control" disabled/>
                        <input type="input" id="id_room_edit"  class="form-control" />
                    </div>
                </div> -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Room Name</label>
                    <div class="col-sm-9">
                        <span class="show-grid-block">
                            <select name="room_name_edit" id="room_name_edit" class="form-control populate"  required >
               
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_room']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                           
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_room']->value == $_smarty_tpl->tpl_vars['data']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['room_name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                               
                            </select>    
                </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Use Date</label>
                    <!-- <div class="col-sm-9">
                        <input type="input" id="pick_date_edit"  class="form-control" disabled/>
                    </div> -->
                    <div class="col-sm-9">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                        <input id = "pick_date_edit1" name = "pick_date_edit" type="text" data-plugin-datepicker class="form-control" required>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Subject</label>
                    <div class="col-sm-9">
                        <input type="input" id="Subject_edit"  class="form-control" disabled/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Start Time</label>
                    <div class="col-sm-9">
                        <input type="input" id="time_start_edit"  class="form-control" disabled/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">End Time</label>
                    <div class="col-sm-9">
                        <input type="input" id="time_end_edit" class="form-control" disabled/>
                    </div>
                </div>

                <div id="div_edit_become">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Edit Become</label>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Time Start</label>
                    <div class="col-sm-9">
                        <span class="show-grid-block">
                            <select name="time_start" id="time_start_edit_after" class="form-control populate" onchange="cek_time_edit()" required >
                      
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_bookroom']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
               
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['time_book'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['time_book'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                               
                            </select>    
                </span>
                <input type="hidden" class="form-control" id="tampung_time_start_edit_after" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Time End</label>
                    <div class="col-sm-9">
                        <span class="show-grid-block">
                            <select name="time_end" id="time_end_edit_after" class="form-control populate" onchange="cek_time_edit()" required >
                                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_bookroom']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                            
                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['time_book'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['time_book'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                               
                            </select>    
                            
                </span>

                <input type="hidden" class="form-control" id="tampung_time_end_edit_after" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Subject </label>
                    <div class="col-sm-9">
                        <!-- <input type="email" name="email" class="form-control" placeholder="Type your email..." required/> -->
                        <textarea id="subject" name = "subject"  class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Remark</label>
                    <div class="col-sm-9">
                        <textarea id="remark" name = "remark"  class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                    </div>
                </div>
            </div>



            </form>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <!-- <button class="btn btn-primary modal-confirm">Submit</button> -->
                    <button class="btn btn-default modal-dismiss">Cancel</button>
                    <button type="button" class="btn btn-success" name="btn" id="submitBtn_edit" data-toggle="modal" data-target="#confirm-submit">Save</button>                                        
                    <!-- <button type="reset" id="simulasi_ulang" class="btn btn-warning">Simulasi Ulang</button> -->
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
class Block_224726183753f34a658_77818923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_224726183753f34a658_77818923',
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

        $("#btn_row_delete0").click(function () {
            $datelist = $('#tanggal_book').datepicker('getDate');
            $id_bokroom0 = $("#id_bookroom0").val();
            // alert($id_bokroom0);
            // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/delete_bookroom_ajax/" + $id_bokroom0 ;
            
            // $id_room = $("#pick_room").val();
            $id_room = $("#room_name").val();
            d = new Date($datelist);

            $tgl = d.getDate();
            $bulan = d.getMonth() + 1;
            $tahun = d.getFullYear();

            $bookdate = $tahun + "/" + $bulan + "/" + $tgl;

            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/delete_bookroom/" + $id_bokroom0 + "/" + $id_room + "/" + $bookdate ;
            
        });

        $("#btn_row_delete1").click(function () {
            $datelist = $('#tanggal_book').datepicker('getDate');
            $id_bokroom1 = $("#id_bookroom1").val();
            // alert($id_bokroom1);
            
            // $id_room = $("#pick_room").val();
            $id_room = $("#room_name").val();
            d = new Date($datelist);

            $tgl = d.getDate();
            $bulan = d.getMonth() + 1;
            $tahun = d.getFullYear();

            $bookdate = $tahun + "/" + $bulan + "/" + $tgl;

            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/delete_bookroom/" + $id_bokroom1 + "/" + $id_room + "/" + $bookdate ;
        });

        $("#btn_row_edit0").click(function () {
            $datelist = $('#tanggal_book').datepicker('getDate');
            $id_bokroom0 = $("#id_bookroom0").val();
            // alert($id_bokroom0);
            // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/delete_bookroom_ajax/" + $id_bokroom0 ;
            
            // $id_room = $("#pick_room").val();
            $id_room = $("#room_name").val();
            d = new Date($datelist);

            $tgl = d.getDate();
            $bulan = d.getMonth() + 1;
            $tahun = d.getFullYear();

            $bookdate = $tahun + "/" + $bulan + "/" + $tgl;

            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/list_edit_bookroom/" + $id_bokroom0 + "/" + $id_room + "/" + $bookdate ;
            
        });

        $("#btn_row_edit1").click(function () {
            $datelist = $('#tanggal_book').datepicker('getDate');
            $id_bokroom1 = $("#id_bookroom1").val();
            // alert($id_bokroom0);
            // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/delete_bookroom_ajax/" + $id_bokroom0 ;
            
            // $id_room = $("#pick_room").val();
            $id_room = $("#room_name").val();
            d = new Date($datelist);

            $tgl = d.getDate();
            $bulan = d.getMonth() + 1;
            $tahun = d.getFullYear();

            $bookdate = $tahun + "/" + $bulan + "/" + $tgl;

            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/list_edit_bookroom/" + $id_bokroom1 + "/" + $id_room + "/" + $bookdate ;
            
        });

// ========================================== MODAL EDIT JAVA ============================================================
$(".open_view_edit").click(function () {
    // $deees = $(this).attr("id_bookroom");
    // $("#coba_leng").val($deees);

    id_bookroom = $(this).attr("id_bookroom");
    $id_bookroom = id_bookroom.split(",");
    $id_bookroom0 = $id_bookroom[0];
    $id_bookroom1 = $id_bookroom[1];

    

    subject = $(this).attr("subject");
    $subject = subject.split("<br>");
    $subject0 = $subject[0];
    $subject1 = $subject[1];

    use_time_start = $(this).attr("use_time_start");
    $use_time_start = use_time_start.split(",");
    $use_time_start0 = $use_time_start[0];
    $use_time_start1 = $use_time_start[1];

    use_time_end = $(this).attr("use_time_end");
    $use_time_end = use_time_end.split(",");
    $use_time_end0 = $use_time_end[0];
    $use_time_end1 = $use_time_end[1];

    store_data_book(id_bookroom,subject,use_time_start,use_time_end);

    $datelist = String($('#tanggal_book').datepicker('getDate'));  
    $datelista = $datelist.substr(0, 15);
    $("#pick_date_edit").val($datelista);

    var div_radiobtn1 = document.getElementById("id_bokroom1_edit_div");
    var div_edit_become = document.getElementById("div_edit_become");
    radiobtn0 = document.getElementById("id_bokroom0_edit");
    radiobtn1 = document.getElementById("id_bokroom1_edit");

    if ($id_bookroom.length == 1){
        radiobtn0.checked = true;
        div_radiobtn1.style.display = "none";
        div_edit_become.style.display = "block";

        $("#id_bokroom0_edit ").val($id_bookroom0);
        $("#lbl_subject0_edit").text($subject0);
        $("#lbl_subject1_edit").text($subject1);
        


        $("#Subject_edit").val($subject0);
        $("#room_name_edit").val($("#room_name").val());
        // $("#id_room_edit").val($("#room_name").val());
        $("#time_start_edit").val($use_time_start0);
        $("#time_end_edit").val($use_time_end0);
        $("#time_start_edit_after").val($use_time_start0);
        $("#time_end_edit_after").val($use_time_end0);
        $("#tampung_time_start_edit_after").val($use_time_start0);
        $("#tampung_time_end_edit_after").val($use_time_end0);
        


        
    }

    if($id_bookroom.length == 2){

        $("#id_bokroom0_edit ").val($id_bookroom0);
        $("#id_bokroom1_edit ").val($id_bookroom1);
        $("#lbl_subject0_edit").text($subject0);
        $("#lbl_subject1_edit").text($subject1);
        $("#Subject_edit").val("");
        $("#room_name_edit").val($("#room_name").val());
        // $("#id_room_edit").val($("#room_name").val());
        $("#time_start_edit").val("");
        $("#time_end_edit").val("");

        radiobtn0.checked = false;
        radiobtn1.checked = false;
    
        // $("#id_bookroom0").val($id_bookroom0);
        // $("#id_bookroom1").val($id_bookroom1);
        // $("#subject0_edit").val($subject0);
        // $("#subject1_edit").val($subject1);
        // $("#lbl_subject0_edit").text($subject0);
        
        // $("#start0").text($use_time_start0);
        // $("#start1").text($use_time_start1);
        // $("#end0").text($use_time_end0);
        // $("#end1").text($use_time_end1);
        // $("#room_name0").text($("#room_name").text());
        // $("#room_name1").text($("#room_name").text());

        div_radiobtn1.style.display = "block";
        div_edit_become.style.display = "none";
    
    }


});


$(".opt_btn_subject").click(function () {

        // $("#id_bookroom0").val();
        // $("#id_bookroom1").val();
        $subject0 = $("#subject0").text();
        $subject1 = $("#subject1").text();
        $use_time_start0 = $("#start0").text();
        $use_time_start1 = $("#start1").text();
        $use_time_end0 = $("#end0").text();
        $use_time_end1 = $("#end1").text();
        $room_name0 = $("#room_name0").text();
        $room_name1 = $("#room_name1").text();
        $room_name = $("#room_name").val();

    var div_edit_become = document.getElementById("div_edit_become");
    if (document.getElementById('id_bokroom0_edit').checked) {
        rate_value = document.getElementById('id_bokroom0_edit').value;
        // id_bookroom = $(this).attr("id_bookroom");
        div_edit_become.style.display = "block";

        // $("#id_bokroom0_edit ").val($id_bookroom0);
        // $("#lbl_subject0_edit").text($subject0);
        // $("#lbl_subject1_edit").text($subject1);


        $("#Subject_edit").val($subject0);
        $("#room_name_edit").val($room_name);
        $("#time_start_edit").val($use_time_start0);
        $("#time_end_edit").val($use_time_end0);
        $("#time_start_edit_after").val($use_time_start0);
        $("#time_end_edit_after").val($use_time_end0);
        $("#tampung_time_start_edit_after").val($use_time_start0);
        $("#tampung_time_end_edit_after").val($use_time_end0);

        

        // alert(rate_value);
    }

    if (document.getElementById('id_bokroom1_edit').checked) {
        rate_value = document.getElementById('id_bokroom1_edit').value;
        id_bookroom = $(this).attr("id_bookroom");
        
        div_edit_become.style.display = "block";
        // alert(rate_value);

        $("#Subject_edit").val($subject1);
        $("#room_name_edit").val($room_name);
        $("#time_start_edit").val($use_time_start1);
        $("#time_end_edit").val($use_time_end1);
        $("#time_start_edit_after").val($use_time_start1);
        $("#time_end_edit_after").val($use_time_end1);
        $("#tampung_time_start_edit_after").val($use_time_start1);
        $("#tampung_time_end_edit_after").val($use_time_end1);


        
    }

// $id_bookroom = id_bookroom.split(",");
// $id_bookroom0 = $id_bookroom[0];
// $id_bookroom1 = $id_bookroom[1];



// subject = $(this).attr("subject");
// $subject = subject.split("<br>");
// $subject0 = $subject[0];
// $subject1 = $subject[1];

// use_time_start = $(this).attr("use_time_start");
// $use_time_start = use_time_start.split(",");
// $use_time_start0 = $use_time_start[0];
// $use_time_start1 = $use_time_start[1];

// use_time_end = $(this).attr("use_time_end");
// $use_time_end = use_time_end.split(",");
// $use_time_end0 = $use_time_end[0];
// $use_time_end1 = $use_time_end[1];

// var x = document.getElementById("btn_row_delete1");

// if ($id_bookroom.length == 1){
    
//     x.style.display = "none";

//     $("#id_bookroom0").val($id_bookroom0);
//     $("#id_bookroom1").val("");
//     $("#subject0").text($subject0);
//     $("#subject1").text("");
//     $("#start0").text($use_time_start0);
//     $("#start1").text("");
//     $("#end0").text($use_time_end0);
//     $("#end1").text("");
//     $("#room_name0").text($("#room_name").text());
//     $("#room_name1").text("");

    
// }

// if($id_bookroom.length == 2){
//     $("#id_bookroom0").val($id_bookroom0);
//     $("#id_bookroom1").val($id_bookroom1);
//     $("#subject0").text($subject0);
//     $("#subject1").text($subject1);
//     $("#start0").text($use_time_start0);
//     $("#start1").text($use_time_start1);
//     $("#end0").text($use_time_end0);
//     $("#end1").text($use_time_end1);
//     $("#room_name0").text($("#room_name").text());
//     $("#room_name1").text($("#room_name").text());

//     x.style.display = "block";

// }

// alert(rate_value);
});


// ================================  MODAL DELETE ====================================
$(".open_view_delete").click(function () {

    id_bookroom = $(this).attr("id_bookroom");
    subject = $(this).attr("subject");
    use_time_start = $(this).attr("use_time_start");
    use_time_end = $(this).attr("use_time_end");

    store_data_book(id_bookroom,subject,use_time_start,use_time_end);

    // id_bookroom = $(this).attr("id_bookroom");
    // $id_bookroom = id_bookroom.split(",");
    // $id_bookroom0 = $id_bookroom[0];
    // $id_bookroom1 = $id_bookroom[1];

    

    // subject = $(this).attr("subject");
    // $subject = subject.split("<br>");
    // $subject0 = $subject[0];
    // $subject1 = $subject[1];

    // use_time_start = $(this).attr("use_time_start");
    // $use_time_start = use_time_start.split(",");
    // $use_time_start0 = $use_time_start[0];
    // $use_time_start1 = $use_time_start[1];

    // use_time_end = $(this).attr("use_time_end");
    // $use_time_end = use_time_end.split(",");
    // $use_time_end0 = $use_time_end[0];
    // $use_time_end1 = $use_time_end[1];

    // var x = document.getElementById("btn_row_delete1");

    // if ($id_bookroom.length == 1){
        
    //     x.style.display = "none";

    //     $("#id_bookroom0").val($id_bookroom0);
    //     $("#id_bookroom1").val("");
    //     $("#subject0").text($subject0);
    //     $("#subject1").text("");
    //     $("#start0").text($use_time_start0);
    //     $("#start1").text("");
    //     $("#end0").text($use_time_end0);
    //     $("#end1").text("");
    //     $("#room_name0").text($("#room_name").text());
    //     $("#room_name1").text("");
        
    // }

    // if($id_bookroom.length == 2){
    //     $("#id_bookroom0").val($id_bookroom0);
    //     $("#id_bookroom1").val($id_bookroom1);
    //     $("#subject0").text($subject0);
    //     $("#subject1").text($subject1);
    //     $("#start0").text($use_time_start0);
    //     $("#start1").text($use_time_start1);
    //     $("#end0").text($use_time_end0);
    //     $("#end1").text($use_time_end1);
    //     $("#room_name0").text($("#room_name").text());
    //     $("#room_name1").text($("#room_name").text());

    //     x.style.display = "block";
    
    // }

});

function store_data_book(){

    // id_bookroom = $(this).attr("id_bookroom");
    $id_bookroom = id_bookroom.split(",");
    $id_bookroom0 = $id_bookroom[0];
    $id_bookroom1 = $id_bookroom[1];

    // subject = $(this).attr("subject");
    $subject = subject.split("<br>");
    $subject0 = $subject[0];
    $subject1 = $subject[1];

    // use_time_start = $(this).attr("use_time_start");
    $use_time_start = use_time_start.split(",");
    $use_time_start0 = $use_time_start[0];
    $use_time_start1 = $use_time_start[1];

    // use_time_end = $(this).attr("use_time_end");
    $use_time_end = use_time_end.split(",");
    $use_time_end0 = $use_time_end[0];
    $use_time_end1 = $use_time_end[1];

    var x = document.getElementById("btn_row_delete1");
    var y = document.getElementById("btn_row_edit1");

    if ($id_bookroom.length == 1){
        
        x.style.display = "none";
        y.style.display = "none";

        $("#id_bookroom0").val($id_bookroom0);
        $("#id_bookroom1").val("");
        $("#subject0").text($subject0);
        $("#subject1").text("");
        $("#start0").text($use_time_start0);
        $("#start1").text("");
        $("#end0").text($use_time_end0);
        $("#end1").text("");
        $("#room_name0").text($("#room_name").text());
        $("#room_name1").text("");

        
    }

    if($id_bookroom.length == 2){
        $("#id_bookroom0").val($id_bookroom0);
        $("#id_bookroom1").val($id_bookroom1);
        $("#subject0").text($subject0);
        $("#subject1").text($subject1);
        $("#start0").text($use_time_start0);
        $("#start1").text($use_time_start1);
        $("#end0").text($use_time_end0);
        $("#end1").text($use_time_end1);
        $("#room_name0").text($("#room_name").text());
        $("#room_name1").text($("#room_name").text());

        x.style.display = "block";
        y.style.display = "block";
    
    }

}

$("#submitBtn_edit").click(function () {
    // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/listbookroom/" ;
    $datelist = $('#tanggal_book').datepicker('getDate');

    var start = document.getElementById("time_start");
    var text_time_start = start.options[start.selectedIndex].text;

    var end = document.getElementById("time_end");
    var text_time_end = end.options[end.selectedIndex].text;

        // var tgl = getDate(datelist);
        $id_room = $("#pick_room").val();
        d = new Date($datelist);

        $tgl = d.getDate();
        $bulan = d.getMonth() + 1;
        $tahun = d.getFullYear();

        $bookdate = $tahun + "/" + $bulan + "/" + $tgl;
    dataygmaudikirim = {
                          // id_from_msnumber : id_from_msnumber,
                          id_room : $id_room,
                          use_date : $bookdate,
                          book_by : $("#share_ntusername").val(),
                          use_time_start : text_time_start,
                          use_time_end : text_time_end,
                          id_time_start : $("#time_start").val(),
                          id_time_end : $("#time_end").val(),
                          subject : $("#subject").val(),
                          remark : $("#remark").val()
                          

                         };

                        //   document.getElementById("tombol1").style.display="none";

                      $.post("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/simpan_bookroom_ajax/", dataygmaudikirim)
                      .done(function(data) 
                          {   
                            console.log(data.message + 'ini console log');

                            if(data.status=='rejected'){
                                alert(data.message);
                            } else if(data.status=='saved'){
                                alert(data.message);
                                window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/listbookroom/" + $id_room + "/" + $bookdate ;
                            } else {
                                alert(data.message);
                                document.getElementById("subject").focus();
                                
                            }
                        

                              return false;  
                          });
});



$("#submitBtn").click(function () {
    // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/listbookroom/" ;
    $datelist = $('#tanggal_book').datepicker('getDate');

    var start = document.getElementById("time_start");
    var text_time_start = start.options[start.selectedIndex].text;

    var end = document.getElementById("time_end");
    var text_time_end = end.options[end.selectedIndex].text;

        // var tgl = getDate(datelist);
        $id_room = $("#pick_room").val();
        d = new Date($datelist);

        $tgl = d.getDate();
        $bulan = d.getMonth() + 1;
        $tahun = d.getFullYear();

        $bookdate = $tahun + "/" + $bulan + "/" + $tgl;
    dataygmaudikirim = {
                          // id_from_msnumber : id_from_msnumber,
                          id_room : $id_room,
                          use_date : $bookdate,
                          book_by : $("#share_ntusername").val(),
                          use_time_start : text_time_start,
                          use_time_end : text_time_end,
                          id_time_start : $("#time_start").val(),
                          id_time_end : $("#time_end").val(),
                          subject : $("#subject").val(),
                          remark : $("#remark").val()
                          

                         };

                        //   document.getElementById("tombol1").style.display="none";

                      $.post("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/simpan_bookroom_ajax/", dataygmaudikirim)
                      .done(function(data) 
                          {   
                            console.log(data.message + 'ini console log');

                            if(data.status=='rejected'){
                                alert(data.message);
                            } else if(data.status=='saved'){
                                alert(data.message);
                                window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/listbookroom/" + $id_room + "/" + $bookdate ;
                            } else {
                                alert(data.message);
                                document.getElementById("subject").focus();
                               

                            //     $title = 'Notification :',
                            //     $text = 'Please Select Book No',
                            //     $type = 'custom',
                            //     // $addclass = 'notification-primary',
                            //     $addclass = 'notification-primary stack-topleft',
                            //     $icon = 'fa fa-twitter'
                            //     notif($title,$text,$type,$addclass,$icon);

                            //     function notif($title,$text,$type,$addclass,$icon) {
                            //     new PNotify({
                            //         title: $title,
                            //         text: $text,
                            //         type: $type,
                            //         addclass: $addclass,
                            //         icon: $icon
                            //     });
                            // }
                                // $("#subject").focusin;
                                
                            }
                        

                              return false;  
                          });
});


// $("#form_book").submit(function() {
//     window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/listbookroom/" + $room_name +"/" + $bookdate ;
//     return false;
// });

    function cek_time(){

        $time_start = $("#time_start").val();
        $time_end = $("#time_end").val();

        if($time_end<=$time_start)
        {
            alert("tidak bisa lebih kecil atau sama dengan start");
            $("#time_start").val($("#tampung_time_start").val());
            $("#time_end").val($("#tampung_time_end").val());

        } else {

        $("#tampung_time_start").val($time_start);
        $("#tampung_time_end").val($time_end);

        
        }
    }

    
    function cek_time_edit(){

        // $time_start = $("#time_start").val();
        // $time_end = $("#time_end").val();
        $time_start = $("#time_start_edit_after").val();
        $time_end = $("#time_end_edit_after").val();

        // var time_start = $time_start;
        // var time_end = $time_end;

        // const time_start_edit = parseInt(new Date('1970-01-01T' + $time_start + 'Z').getHours());
        // const time_end_edit = parseInt(new Date('1970-01-01T' + $time_end + 'Z').getHours());

        time_start_edit = new Date('1970-01-01T' + $time_start + 'Z').getTime();
        time_end_edit = new Date('1970-01-01T' + $time_end + 'Z').getTime();

        // var timeStart = $time_start_edit.getHours();
        // var timeEnd = new Date("01/01/2007 " + valuestop).getHours();

        
        // var hourDiff = time_start_edit - time_end_edit; 
        // alert(time_start_edit + "," + time_end_edit + "/" + hourDiff);  

        // alert(time_start_edit/1000/60/60 + "/" + time_end_edit/1000/60/60);

        // var a = 1;
        // var b = 2;
        

        if(time_end_edit <=  time_start_edit )
        {
            alert("tidak bisa lebih kecil atau sama dengan start");

            $("#time_start_edit_after").val($("#tampung_time_start_edit_after").val());
            $("#time_end_edit_after").val($("#tampung_time_end_edit_after").val());

        } else {

            // $("#tampung_time_start_edit_after").val($time_start);
            // $("#tampung_time_end_edit_after").val($time_end);
            $("#time_start_edit_after").val($time_start);
            $("#time_end_edit_after").val($time_end);

            $("#tampung_time_start_edit_after").val($time_start);
            $("#tampung_time_end_edit_after").val($time_end);

        }
    }

    function refresh_list_room(){

        $datelist = $('#tanggal_book').datepicker('getDate');

        // var tgl = getDate(datelist);
        d = new Date($datelist);

        

        $tgl = d.getDate();
        $bulan = d.getMonth() + 1;
        $tahun = d.getFullYear();

        $bookdate = $tahun + "/" + $bulan + "/" + $tgl;
        $room_name = $("#room_name").val();

        if($bookdate!='NaN/NaN/NaN'){
            if ($bookdate!=$("#use_date").val())
            {
                $("#use_date").val($bookdate);
                // alert($bookdate);
                window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/listbookroom/" + $room_name +"/" + $bookdate ;
            }
        }

    }

    

$("#tomboltes").click(function () {
        
    $time_start = $("#time_start").val();
        alert($time_start);

        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/listbookroom/" + $room_name +"/" + $bookdate ;
    });



    $("#room_name").change(function () {
        
        // alert("ini");
        // $task_sts = $("#task_sts").val();
        $room_name = $("#room_name").val();
        $bookdate = $("#use_date").val();

        // alert($bookdate);

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/listbookroom/" + $room_name +"/" + $bookdate;
    });

    $(".open_form_book").click(function () {  
        $id_time_book = $(this).attr("id_time_book");
        $id_time_book_end = String(parseInt($id_time_book) + 1);
        $("#time_start").val($id_time_book);
        $("#time_end").val($id_time_book_end);
        $("#tampung_time_start").val($id_time_book);
        $("#tampung_time_end").val($id_time_book_end);

        $room_name = $("#room_name").val();
        $("#pick_room").val($room_name);

        $datelist = String($('#tanggal_book').datepicker('getDate'));
        
        $datelista = $datelist.substr(0, 15);

        $("#pick_date").val($datelista);
        // $dept_cd = $(this).attr("dept_cd");
        // $id = $(this).attr("datatask_id");
        // $task_sts_desc = $(this).attr("task_sts_desc");

        // // alert($task_sts_desc);

        // if ($task_sts_desc=='Not Started'){
        //     // alert($task_sts_desc);   
        // } else {
        //     window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/taskdone/" + $id_ms_prj + "/" + $pic_name + "/" + $id + "/task_pic" + "/edit_actual_date/" ;
        // }
        
        
    });

    $(document).ready(function() {
        


$use_date_js= $("#use_date_js").val();
// $use_date_js_begin = $use_date_js.substr(0, 2);
// // alert($use_date_js_begin);
// if($use_date_js_begin=='//')
// {
//     $room_name = $("#room_name").val();
//     const d = new Date();
//         let day = d.getDate();
//         let month = d.getMonth() + 1;
//         let year = d.getFullYear();

//     // $bookdate = month + "/" + day + "/" + year;
//     $bookdate = year + "/" + month + "/" + day;
//     // alert($bookdate);
//     // $("#tanggal_book").datepicker('setDate', $tgl_now);
//     // alert($bookdate);

//     window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/listbookroom/" + $room_name +"/" + $bookdate;
// }
$("#tanggal_book").datepicker('setDate', $use_date_js);
// if(empty($use_date_js))

// $("#tanggal_book").datepicker('setDate', $use_date_js);
// $("#tanggal_book").datepicker('setDate', $use_date_js);
// $("#tanggal_book").datepicker('setDate', $use_date_js);
// alert($use_date_js_begin);

});


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
