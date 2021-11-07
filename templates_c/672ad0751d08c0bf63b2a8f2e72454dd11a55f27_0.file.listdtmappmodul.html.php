<?php
/* Smarty version 3.1.32, created on 2020-01-06 15:16:25
  from 'D:\ano site\Assignerx\Views\Usermanagement\listdtmappmodul.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e12ecd9727500_27781596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '672ad0751d08c0bf63b2a8f2e72454dd11a55f27' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Usermanagement\\listdtmappmodul.html',
      1 => 1574673582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e12ecd9727500_27781596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16212635795e12ecd96831a4_63175580', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13766256805e12ecd96b9341_66661375', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14063327805e12ecd9702e23_98384440', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_16212635795e12ecd96831a4_63175580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_16212635795e12ecd96831a4_63175580',
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
class Block_13766256805e12ecd96b9341_66661375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_13766256805e12ecd96b9341_66661375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<button id="btnAdd_newGroup" class="mt-sm mb-sm btn btn-primary">Add New Group</button>
<section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                                <h2 class="panel-title">List Group (Role) :</span></h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                    <thead>
                                        <tr>
                                            <th class="hidden-phone">Id</th>
                                            <th class="hidden-phone">Group Name</th>
                                            <!-- <th class="hidden-phone">Edit</th> -->
                                            <!-- <th class="hidden-phone"></th> -->
                                            <!-- <th class="hidden-phone"></th> -->
                                           
                                        </tr>
                                    </thead>
                                    

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_dtmappmodul_header']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                          
                                            <!-- <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
</td> -->
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
                                            <!-- <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
  -->
                                            <!-- <a href="#" class="c_button_edit" group_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
" ><i class="fa fa-pencil"></i></a> -->
                                            </td>
                                            <!-- <td >
                                            <a href="#" class="c_button_show_modul" group_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" group_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
" ><span class="label label-success">show modul</span></a>
                                            </td > -->
                                            <td>
                                            <div class="radio-custom radio-primary">
                                                                <input id="radioExample2" <?php if ($_smarty_tpl->tpl_vars['group_name']->value == $_smarty_tpl->tpl_vars['data']->value['group_name']) {?> checked="checked" <?php }?> class="c_radiobutton_show_modul" name="radioExample" type="radio" group_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" group_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
">
                                                                <label for="radioExample2"></label>
                                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
 
                                                            </div>

                                            </td>
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   

                                            <!-- <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modalPrimary">Primary</a> -->
                                    </tbody>
                                </table>
                            </div>
                        </section>

<!-- <h2 class="panel-title">List Modul : <?php echo $_smarty_tpl->tpl_vars['group_name']->value;?>
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
                                <!-- <a href="#" class="c_button_add_modul" group_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
" ><span class="label label-primary">Add Modul</span></a> -->

                                <!-- <button id="btn_add_modul" class="mt-sm mb-sm btn btn-primary c_button_add_modul">Add Modul to Group</button>
                                <br> -->
                        
                                <h2 class="panel-title">List Modul : <?php echo $_smarty_tpl->tpl_vars['group_name']->value;?>
</span></h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-default2">
                                    <thead>
                                        <tr>
                                        	<th class="hidden-phone">mapp Id</th>
                                            <th class="hidden-phone">modul Id</th>
                                            <th class="hidden-phone">Modul Name</th>
                                            <th class="hidden-phone">Modul Location</th>
                                            <th class="hidden-phone">Delete</th>
                                           
                                        </tr>
                                    </thead>
                                    

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_dtmappmodul_detail']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                          
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['modul_id'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['modul_name'];?>
 
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['modul_location'];?>
 
                                            <!-- <a href="#" class="c_button_edit" modul_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" ><i class="fa fa-pencil"></i></a> -->
                                            </td>
                                            <td ><a href="#modalPrimary" class="c_button_delete modal-basic" mapp_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" modul_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['modul_name'];?>
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


<!-- <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/save_mapp_modul" enctype="multipart/form-data" style="visibility:hidden;background:cyan"> -->
<form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/save_mapp_modul" enctype="multipart/form-data"> 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
<Textfile></Textfile></h2>                    
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">LookUp Modul : </label>
                        <div class="col-sm-2">
                                                    <div class="input-group input-search">
                                                        <!-- <input class="form-control" id="look_up_modul" placeholder="Search..." type="text"> -->
                                                        <input class="form-control look_up_modul" name="modul_name" id="look_up_modul" placeholder="Search..." type="text">
                                                        <input type="hidden" name="modul_id" class="form-control" id="modul_id">
                                                        <input type="hidden" name="group_id" class="form-control" id="group_id" value="<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
">
                                                        <input type="hidden" name="group_name" class="form-control" id="group_name" value="<?php echo $_smarty_tpl->tpl_vars['group_name']->value;?>
">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default look_up_modul" type="button"><i class="fa fa-search"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                        <!-- <div class="col-sm-2">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" id="look_up_modul" placeholder="Search..." >
                            </span>
                        </div> -->
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-sm-3 control-label">Modul Name : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input class="form-control" name="modul_name" id="look_up_modul" placeholder="Search..." type="text">
                                <input type="text" placeholder=".Enter Modul Name here" name="modul_name" class="form-control" id="modul_to_add"required readonly>
                                <input type="hidden" name="modul_id" class="form-control" id="modul_id">
                                <input type="hidden" name="group_id" class="form-control" id="group_id" value="<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
">
                                <input type="hidden" name="group_name" class="form-control" id="group_name" value="<?php echo $_smarty_tpl->tpl_vars['group_name']->value;?>
">
                            </span>
                        </div>
                    </div> -->

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
                    <h4>Are you sure want to Unmapp Modul "<span id="info_row_modal"></span>" from "<?php echo $_smarty_tpl->tpl_vars['group_name']->value;?>
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
class Block_14063327805e12ecd9702e23_98384440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_14063327805e12ecd9702e23_98384440',
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
   
    // document.getElementById("form1").style.visibility = "hidden";
    var group_id = $("#group_id").val();

    if (group_id==""){
        group_id="0";
        // alert(group_id);
    }

    $('.look_up_modul').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Ajax/getlist_msmodul/' + group_id
            // "url" : baseUrl + '/Ajax/getlist_msdept'          
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [               
            { "data" : "id", "title" : "id" }, 
            { "data" : "modul_name", "title" : "modul_name" },
            { "data" : "modul_location", "title" : "modul_location" },
            { "data" : "updt_dt", "title" : "updt_dt" },
            { "data" : "updt_by", "title" : "updt_by" }
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

        // $("#modul_to_add").val(data["modul_name"]);
        $("#look_up_modul").val(data["modul_name"]);
        $("#modul_id").val(data["id"]);


      }
	});


};




// $("#btn_add_modul").click(function()
// 	{

// 		$group_id = $("#group_id").val();

// 		if($group_id!=''){
//         document.getElementById("form1").style.visibility = "visible";
//         document.getElementById("modul_name_add").focus();
//     	}

//     });


$(".btn_show_modul").click(function()
	{

		$group_id = $("#group_id").val();

		if($group_id!=''){
        document.getElementById("form1").style.visibility = "visible";
        document.getElementById("modul_name_add").focus();
    	}

    });

    $("#btnAdd_newGroup").click(function () {   
        // $modul_id = $(this).attr("modul_id");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/form_groupmodul/";
        
    });

    $(".c_button_show_modul").click(function () {   

        $group_id = $(this).attr("group_id");
        $group_name = $(this).attr("group_name");

        // document.getElementById("list_modul").style.visibility = "visible";
        // $("#group_id").val($(this).attr("group_id"));

        

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/listdtmappmodul/" + $group_id + "/" + $group_name;

    });

    $(".c_radiobutton_show_modul").click(function () {   

        $group_id = $(this).attr("group_id");
        $group_name = $(this).attr("group_name");

        // document.getElementById("list_modul").style.visibility = "visible";
        // $("#group_id").val($(this).attr("group_id"));

        

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/listdtmappmodul/" + $group_id + "/" + $group_name;

    });

    $(".c_button_delete").click(function () {   

        $("#mapp_id").val($(this).attr("mapp_id"));
        $("#info_row_modal").text($(this).attr("modul_name"));

    });


    function notif($title,$text,$type,$addclass,$icon) {
        new PNotify({
            title: $title,
            text: $text,
            type: $type,
            addclass: $addclass,
            icon: $icon
        });
    }


    $(".look_up_modul").click(function () {   

        
        var group_id = $("#group_id").val();

        if (group_id==""){
        group_id="0";

        $title = "Warning";
        $text = "Please Choose Group Name from List Group (Role)";
        $type = "custom";
        $addclass = "notification-warning";
        $icon = "fa fa-twitter";

        notif($title,$text,$type,$addclass,$icon);
        }

    });


   	$("#btnDelete").click(function () {   

        $mapp_id = $("#mapp_id").val();
        $group_name = $("#group_name").val();
        $group_id = $("#group_id").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/delete_mapp/" + $mapp_id + "/" + $group_id + "/" + $group_name;

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
