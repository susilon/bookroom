<?php
/* Smarty version 3.1.32, created on 2021-11-07 19:51:17
  from 'D:\ano site\bookroom\Views\Bookroom\bookroomlog.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_6187cbc51e43a0_18230203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8752e59be3d6ce55c2b21b4c1c9e673ac8a7ddd4' => 
    array (
      0 => 'D:\\ano site\\bookroom\\Views\\Bookroom\\bookroomlog.html',
      1 => 1635909509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6187cbc51e43a0_18230203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36266187cbc5094dc1_57102013', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278046187cbc50c5c24_11903049', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_222616187cbc51cc4c8_16947450', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_36266187cbc5094dc1_57102013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_36266187cbc5094dc1_57102013',
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
class Block_278046187cbc50c5c24_11903049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_278046187cbc50c5c24_11903049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\anosite\\bookroom\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
<div class="col-md-2">Log Even
    <span class="show-grid-block">
                                        <select name="log_even" id="log_even" class="form-control populate"  required onchange="change_task_sts()">
                                            <option value="All">ALL</option>  
                                            <option value="book">book</option>  
                                            <option value="edit">edit</option> 
                                            <option value="delete">delete</option>    
                                               <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_sts_task']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['data_sts_task'];?>
" <?php if ($_smarty_tpl->tpl_vars['task_sts_single']->value == $_smarty_tpl->tpl_vars['data']->value['data_sts_task']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['data_sts_task'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                                -->
                                        </select>    
    </span>
    <input type="hidden" id="tampung_log_even" value="<?php echo $_smarty_tpl->tpl_vars['log_even']->value;?>
" class="form-control">
</div>
 <div class="col-md-4">
Log Date
    <div id="datepickerz" class="input-daterange input-group" data-plugin-datepicker>
	                        <span class="input-group-addon">
			                <i class="fa fa-calendar"></i>
	                        </span>
			                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['date_start_view']->value;?>
" class="form-control" required name="date_start" id="date_start" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" onchange="change_date_start()" >
			                <span class="input-group-addon">to</span>
			                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['date_end_view']->value;?>
" class="form-control" required name="date_end" id="date_end" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
"  onchange="change_date_end()" >
                            <!-- <input type="text" class="form-control" required name="date_start" id="date_start" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" value="<?php echo $_smarty_tpl->tpl_vars['plan_start_from']->value;?>
" onchange="change_date_start()" >
                            <span class="input-group-addon">to</span>
                            <input type="text" class="form-control" required name="date_end" id="date_end" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" value="<?php echo $_smarty_tpl->tpl_vars['plan_start_to']->value;?>
" onchange="change_date_end()" > -->
                        </div>

    

</div> 

<div class="col-md-2">


    

</div> 
</div>

  <!-- <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/task_pic" >   -->
<section>
<div class="row show-grid">
<div class="col-md-2">


  <span class="show-grid-block">
     <input type="hidden" name="task_sts_single" id="task_sts_single" value="<?php echo $_smarty_tpl->tpl_vars['task_sts_single']->value;?>
" class="form-control">
  </span>



</div>
 <div class="col-md-2">
  <span class="show-grid-block">
     <!-- <input type="hidden" name="date_start_single" id="date_start_single" value="<?php echo $_smarty_tpl->tpl_vars['plan_start_from']->value;?>
" class="form-control"> -->
     <input type="hidden" name="date_start_single" id="date_start_single" value="<?php echo $_smarty_tpl->tpl_vars['date_start_view']->value;?>
" class="form-control">
  </span>
</div> 
<div class="col-md-2">
  <span class="show-grid-block">
     <!-- <input type="hidden" name="date_end_single" id="date_end_single" value="<?php echo $_smarty_tpl->tpl_vars['plan_start_to']->value;?>
" class="form-control"> -->
     <input type="hidden" name="date_end_single" id="date_end_single" value="<?php echo $_smarty_tpl->tpl_vars['date_end_view']->value;?>
" class="form-control">
  </span>
</div>
</div>

<button id="btnSubmit" class="mt-sm mb-sm btn btn-primary">Search</button>
</section>
  <!-- </form>   -->

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

                                            <th class="hidden-phone">log</th>
                                            <th class="hidden-phone">Even</th>
                                            <th class="hidden-phone">User Name</th>
                                            <th class="hidden-phone">Log Date</th>

										</tr>
									</thead>
									

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_log']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['log'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['even'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['logdate'];?>
</td>
                                            
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
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
class Block_222616187cbc51cc4c8_16947450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_222616187cbc51cc4c8_16947450',
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

    $("#btnSubmit").click(function () {
        $date_start = $("#date_start").val();
        $date_end = $("#date_end").val();
        $log_even = $("#log_even").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/bookroom/bookroomlog/" + $log_even + "/" + $date_start + "/" + $date_end ;
    });



    $(".c_button_done").click(function () {   
        $id_ms_prj = $(this).attr("id_ms_prj");
        $pic_name = $(this).attr("pic_name");
        $dept_cd = $(this).attr("dept_cd");
        $id = $(this).attr("datatask_id");
        $task_sts_desc = $(this).attr("task_sts_desc");

        // alert($task_sts_desc);

        if ($task_sts_desc=='Done'){
            // alert($task_sts_desc);
        } else {
            // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/taskdone/" + $id_ms_prj + "/" + $pic_name + "/" + $id + "/task_pic" + "/update_to_done/" ;
            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/form_update_task/" + $id_ms_prj + "/" + $pic_name + "/" + $id + "/task_pic" + "/update_to_done/" ;
        }
        
        
    }); 

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

    $(".c_button_actual").click(function () {   
        $id_ms_prj = $(this).attr("id_ms_prj");
        $pic_name = $(this).attr("pic_name");
        $dept_cd = $(this).attr("dept_cd");
        $id = $(this).attr("datatask_id");
        $task_sts_desc = $(this).attr("task_sts_desc");

        // alert($task_sts_desc);

        if ($task_sts_desc=='Not Started'){
            // alert($task_sts_desc);   
        } else {
            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/taskdone/" + $id_ms_prj + "/" + $pic_name + "/" + $id + "/task_pic" + "/edit_actual_date/" ;
        }
        
        
    });

    $(".c_button_insert_log").click(function () {   
        $id_ms_prj = $(this).attr("id_ms_prj");
        $pic_name = $(this).attr("pic_name");
        $dept_cd = $(this).attr("dept_cd");
        $id = $(this).attr("datatask_id");
        $task_sts_desc = $(this).attr("task_sts_desc");

        // alert($task_sts_desc);

      
            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/project_log/" + $id_ms_prj + "/" + $pic_name + "/" + $id ;
        
        
        
    });


    $("#btnDelete").click(function () {
        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/msprodctgry/delete/" + $id_btn_delete ;
    });

    // $(".c_button_task").click(function () {   
    //     $id_ms_prj = $(this).attr("id_ms_prj");
    //     window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/task_for_pic_dept/" + $id_ms_prj ;
    // });    

    // $(".form1").submit(function () {   
    //     $prj_ctgry_cd = $(this).attr("prj_ctgry_cd");
    //     alert($prj_ctgry_cd);
    //     // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/msprodctgry/form/" + $id_btn_edit ;
    // });   

    function change_task_sts(){

    // $prj_ctgry_cd_single = $("#prj_ctgry_cd").val();
    $("#task_sts_single").val($("#task_sts").val());

    $task_sts = $("#task_sts").val();

    if ($task_sts=='Outstanding' || $task_sts=='' ){

        document.getElementById("datepickerz").style.visibility = "hidden";
         
    } else {
        document.getElementById("datepickerz").style.visibility = "visible";
    }

    }


//     $(document).ready(function() {

//         $task_sts = $("#task_sts").val();

//         if ($task_sts=='Outstanding' || $task_sts==''){

//         document.getElementById("datepickerz").style.visibility = "hidden";
         
//     } else {
//         document.getElementById("datepickerz").style.visibility = "visible";
//     }

// });

    function change_date_start(){

    

    // var str = $("#date_start").val();
    // var res = str.replace("/", "-");
    // var res2 = res.replace("/", "-");

    $("#date_start_single").val($("#date_start").val());
    

    }

    function change_date_end(){

    // var ztr = $("#date_end").val();
    // var rez = ztr.replace("/", "-");
    // var rez2 = rez.replace("/", "-");

    $("#date_end_single").val($("#date_end").val());

    }

    $(document).ready(function() {
        $("#log_even").val($("#tampung_log_even").val());
        var date_start_single = $("#date_start_single").val();
        var date_end_single = $("#date_end_single").val();

        
        
        if (date_start_single != '//'){
            $("#date_start").val(date_start_single);
            $("#date_end").val(date_end_single);

            // alert(date_start_single);

        } else {
            d = new Date();

            $tgl = d.getDate();
            $bulan = d.getMonth() + 1;
            $tahun = d.getFullYear();
            $tgl_now = $bulan + "/" + $tgl + "/" + $tahun;

            $("#date_start").val($tgl_now);
            $("#date_end").val($tgl_now);
        }
        

        

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
