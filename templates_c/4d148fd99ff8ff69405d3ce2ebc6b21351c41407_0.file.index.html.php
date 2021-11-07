<?php
/* Smarty version 3.1.32, created on 2019-11-25 09:04:13
  from 'C:\xampp\htdocs\Assigner\Views\Mappingtask\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddb369d584723_36138435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d148fd99ff8ff69405d3ce2ebc6b21351c41407' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Mappingtask\\index.html',
      1 => 1574647434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb369d584723_36138435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102785ddb369d48dd19_26226038', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_236555ddb369d4a4793_99935988', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271565ddb369d5177f5_49732902', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_102785ddb369d48dd19_26226038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_102785ddb369d48dd19_26226038',
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
class Block_236555ddb369d4a4793_99935988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_236555ddb369d4a4793_99935988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<button id="btnAdd_newGroup" class="mt-sm mb-sm btn btn-primary">Add New Group</button>
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
                                            <th class="hidden-phone">Id</th>
                                            <th class="hidden-phone">Dept</th>
                                            <th class="hidden-phone">Div</th>
                                            <th class="hidden-phone"></th>
                                            <!-- <th class="hidden-phone"></th> -->
                                           
                                        </tr>
                                    </thead>
                                    

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_msdept']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                          
                                            <!-- <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['task_id'];?>
</td> -->
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
 
                                            <!-- <a href="#" class="c_button_edit" task_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['task_id'];?>
" ><i class="fa fa-pencil"></i></a> -->
                                            </td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['div_cd'];?>
</td>
                                            <td >
                                            <!-- <a href="#" class="c_button_show_modul" task_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['task_id'];?>
" >show modul</a> -->
                                            <a href="#" class="c_button_show_task" task_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" div_cd=<?php echo $_smarty_tpl->tpl_vars['data']->value['div_cd'];?>
 ><span class="label label-success">show Task</span></a>
                                            
                                            <!-- <button id="btnAdd" class="mt-sm mb-sm btn btn-primary" modul_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">Add</button> -->
                                            </td >
                                            <!-- <td >
                                            <a href="#" class="c_button_add_modul" task_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['task_id'];?>
" ><span class="label label-primary">Add Modul</span></a>
                                            <button id="btnAdd" class="mt-sm mb-sm btn btn-primary c_button_add_modul">Add Modul</button>
                                            </td > -->
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   

                                            <!-- <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modalPrimary">Primary</a> -->
                                    </tbody>
                                </table>
                            </div>
                        </section>

<!-- <h2 class="panel-title">List Modul : <?php echo $_smarty_tpl->tpl_vars['dept_cd']->value;?>
</span></h2>
<br> -->



<br>

<div class="row show-grid">
    <div class="col-md-6">


<section class="panel" id="list_modul">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                                <!-- <a href="#" class="c_button_add_modul" task_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['task_id'];?>
" ><span class="label label-primary">Add Modul</span></a> -->

                                <button id="btn_add_modul" class="mt-sm mb-sm btn btn-primary c_button_add_modul">Mapp Task to Dept</button>
                                <br>
                        
                                <h2 class="panel-title">Dept : <?php echo $_smarty_tpl->tpl_vars['dept_cd']->value;?>
</span></h2>
                                <input type="hidden" class="form-control" id="dept_cd_value" value="<?php echo $_smarty_tpl->tpl_vars['dept_cd']->value;?>
">
                                <input type="hidden" class="form-control" id="div_cd_value" value="<?php echo $_smarty_tpl->tpl_vars['div_cd']->value;?>
">
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-default2">
                                    <thead>
                                        <tr>
                                        	<!-- <th class="hidden-phone">Dept</th>
                                            <th class="hidden-phone">Div</th> -->
                                            <th class="hidden-phone">Task Id</th>
                                            <th class="hidden-phone">Task Desc</th>
                                            <th class="hidden-phone">Delete</th>
                                           
                                        </tr>
                                    </thead>
                                    

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_mptask_by_dept_cd']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                          
                                            <!-- <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['div_cd'];?>
</td> -->
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['task_id'];?>
 
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
 
                                            <!-- <a href="#" class="c_button_edit" modul_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" ><i class="fa fa-pencil"></i></a> -->
                                            </td>
                                            <td ><a href="#modalPrimary" class="c_button_delete modal-basic" mapp_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" task_desc="<?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
" ><i class="fa fa-times"></i></a></td >
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   

                                            
                                    </tbody>
                                </table>
                            </div>
                        </section>
</div>

<div class="col-md-6">


<form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Mappingtask/save_mapp_task" enctype="multipart/form-data" style="visibility:hidden;background:cyan"> 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
<Textfile></Textfile></h2>                    
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">LookUp Task : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" id="look_up_modul" >
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Task Name : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" placeholder=".Enter Modul Name here" name="task_desc" class="form-control" id="task_desc_to_add"required readonly>
                                <input type="hidden" name="task_id" class="form-control" id="task_id_to_add">
                                <input type="hidden" class="form-control" id="task_id" value="<?php echo $_smarty_tpl->tpl_vars['task_id']->value;?>
">
                                <input type="hidden" name="dept_cd" class="form-control" id="dept_cd" value="<?php echo $_smarty_tpl->tpl_vars['dept_cd']->value;?>
">
                                <input type="hidden" name="div_cd" class="form-control" id="div_cd" value="<?php echo $_smarty_tpl->tpl_vars['div_cd']->value;?>
">
                            </span>
                        </div>
                    </div>

                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary" id="btnSimpan">Save</button>            
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <button type="reset" class="btn btn-default" id="btnCancel">Cancel</button>
                </footer>
            </section>
        </form>

<!-- <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/save_task" style="visibility:hidden;background:cyan">
<div class="row show-grid">
<div class="col-md-3">Look Up Modul
    <span class="show-grid-block">
        <input type="text" name="list_modul" class="form-control" id="list_modul">
	</span>
</div>

<div class="col-md-3">Modul
    <span class="show-grid-block">
        <input type="text" name="modul_name_add" class="form-control" id="modul_name_add" required>
	</span>
</div>


<div class="col-md-1">-
    <span class="show-grid-block">
        <button class="form-control btn btn-primary" id="btnSimpan" >Save</button>
	</span>
</div>





</div>

</form> -->

</div>
</div>





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
                    <h4>Are you sure want to Unmapp Modul "<span id="info_row_modal"></span>" from "<?php echo $_smarty_tpl->tpl_vars['dept_cd']->value;?>
" ?</h4>
                     <span id="dialog_idx"class="hidden"></span>
                     <input type="hidden" name="mapp_id" class="form-control" id="mapp_id">
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary modal-confirm" id="btnDelete" >Yes</button>
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
class Block_271565ddb369d5177f5_49732902 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_271565ddb369d5177f5_49732902',
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
    var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";

$(document).ready()
{
   
    document.getElementById("form1").style.visibility = "hidden";
    var dept_cd = $("#dept_cd").val();

    $('#look_up_modul').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Ajax/getlist_mstask_for_map/' + dept_cd
            // "url" : baseUrl + '/Ajax/getlist_msdept'          
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [               
            { "data" : "id", "title" : "id" }, 
            { "data" : "task_desc", "title" : "task_desc" },
            { "data" : "create_by", "title" : "create_by" },
            { "data" : "updt_dt", "title" : "updt_dt" },
            { "data" : "create_dt", "title" : "create_dt" }
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

        $("#task_desc_to_add").val(data["task_desc"]);
        $("#task_id_to_add").val(data["id"]);


      }
	});


};


$("#btn_add_modul").click(function()
	{

		$task_id = $("#task_id").val();

		if($task_id!=''){
        document.getElementById("form1").style.visibility = "visible";
        document.getElementById("modul_name_add").focus();
    	}

    });


$(".btn_show_modul").click(function()
	{

		$task_id = $("#task_id").val();

		if($task_id!=''){
        document.getElementById("form1").style.visibility = "visible";
        document.getElementById("modul_name_add").focus();
    	}

    });

    $("#btnAdd_newGroup").click(function () {   
        // $modul_id = $(this).attr("modul_id");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/form_groupmodul/";
        
    });

    $(".c_button_show_task").click(function () {   

        $task_id = $(this).attr("task_id");
        $dept_cd = $(this).attr("dept_cd");
        $div_cd = $(this).attr("div_cd");

        // alert($div_cd);

        // $("#div_cd").val($(this).attr("div_cd"));


        // alert($task_id+$dept_cd);

        // document.getElementById("list_modul").style.visibility = "visible";
        // $("#task_id").val($(this).attr("task_id"));

        

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Mappingtask/index/" + $task_id + "/" + $dept_cd + "/" + $div_cd;

    });

    $(".c_button_delete").click(function () {   

        $("#mapp_id").val($(this).attr("mapp_id"));
        $("#info_row_modal").text($(this).attr("task_desc"));

    });


   	$("#btnDelete").click(function () {   

        $mapp_id = $("#mapp_id").val();

        // $dept_cd = $("#dept_cd_value").val();
        // $div_cd = $("#div_cd_value").val();


        $task_id = $("#task_id").val();
        $dept_cd = $("#dept_cd").val();
        $div_cd = $("#div_cd").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Mappingtask/delete_mapp_task/" + $mapp_id + "/" + $task_id + "/" + $dept_cd + "/" + $div_cd;

    });


    // $("#btnAdd").click(function () {   

    //     $modul_id = $("#modul_id").val();

    //     window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/form_modul/" + $modul_id;

    // });

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
