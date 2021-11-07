<?php
/* Smarty version 3.1.32, created on 2020-01-03 11:19:13
  from 'D:\ano site\Assignerx\Views\Usermanagement\usermodul.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e0ec0c118f6d8_92106460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19e56fdb3a696048ae493b7a56f2792a455331d' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Usermanagement\\usermodul.html',
      1 => 1573619819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0ec0c118f6d8_92106460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4090082975e0ec0c11404d9_58624058', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16985691805e0ec0c11542d1_44016432', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2682288255e0ec0c1181205_75673688', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_4090082975e0ec0c11404d9_58624058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_4090082975e0ec0c11404d9_58624058',
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
class Block_16985691805e0ec0c11542d1_44016432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_16985691805e0ec0c11542d1_44016432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<!-- <button id="btnAdd" class="mt-sm mb-sm btn btn-primary">Add</button> -->

<form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/save_usermodul" enctype="multipart/form-data" > 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title" id="pageTitle"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>                    
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">User : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="ntusername" class="form-control" id="ntusername" value="<?php echo $_smarty_tpl->tpl_vars['data_usermodul']->value['ntusername'];?>
" readonly>
                                <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_usermodul']->value['id'];?>
" >
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Group Name : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="group_name" placeholder=".Enter Group Name here" class="form-control look_up_group_name" id="group_name" value="<?php echo $_smarty_tpl->tpl_vars['data_usermodul']->value['group_name'];?>
" required>
                                <input type="hidden" name="group_id" class="form-control" id="group_id" value="<?php echo $_smarty_tpl->tpl_vars['data_usermodul']->value['group_id'];?>
" >
                            </span>
                        </div>
                    </div>

                </div>
                <footer class="panel-footer">
                    <!-- <button type="reset" class="btn btn-success look_up_NTUserName">Add</button>  -->
                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-success look_up_NTUserName">Add</button>
                    <button class="btn btn-primary" id="btnSave">Save</button> 
                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Cancel</button>
                    <!-- <button type="cancel" class="btn btn-success look_up_NTUserName">Add</button>            -->
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <!-- <button type="reset" class="btn btn-default" id="btnCancel">Cancel</button> -->
                </footer>
            </section>
        </form>

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
                                            <th class="hidden-phone">NTUserName</th>
                                            <th class="hidden-phone">Group Id</th>
                                            <th class="hidden-phone">Group Name</th>
                                            <th class="hidden-phone">Edit</th>
                                            <th class="hidden-phone">Delete</th>
                                           
                                        </tr>
                                    </thead>
                                    

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_usermodul_all']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                          
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['ntusername'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_id'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['group_name'];?>
</td>
                                            <td class="hidden-phone"><a href="#" class="c_button_edit" usermodul_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" ><i class="fa fa-pencil"></i></a></td>
                                            <td ><a href="#modalPrimary" class="c_button_delete modal-basic" username="<?php echo $_smarty_tpl->tpl_vars['data']->value['ntusername'];?>
" usermodul_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" ><i class="fa fa-times"></i></a></td >
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   

                                            <!-- <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modalPrimary">Primary</a> -->
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
                     <input type="hidden" class="form-control" id="usermodul_id">
                     <!-- <input type="hidden" class="form-control" id="username"> -->
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
class Block_2682288255e0ec0c1181205_75673688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_2682288255e0ec0c1181205_75673688',
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
    // var group_id = $("#group_id").val();

    $('.look_up_NTUserName').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

            //diambil dari function controller user management
            "url" : baseUrl + '/Ajax/getlist_dtuser_all/'
            // "url" : baseUrl + '/Ajax/getlist_msdept'          
        },
        "order": [[ 2, "id" ]],
        //pengaturan kolom di picker
        "columns" : [               
            { "data" : "id", "title" : "id" }, 
            { "data" : "NTUserName", "title" : "ntusername" },
            { "data" : "div_cd", "title" : "div_cd" },
            { "data" : "dept_cd", "title" : "dept_cd" },
            { "data" : "group_cd", "title" : "group_cd" }
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

        $("#ntusername").val(data["NTUserName"]);
        $("#group_name").val(data["group_name"]);
        $("#group_id").val(data["group_id"]);

        $("#pageTitle").text("Add");
        $("#id").val("");




      }
    });


    $('.look_up_group_name').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

            //diambil dari function controller user management
            "url" : baseUrl + '/Ajax/getlist_group_modul/'
            // "url" : baseUrl + '/Ajax/getlist_msdept'          
        },
        "order": [[ 2, "id" ]],
        //pengaturan kolom di picker
        "columns" : [               
            { "data" : "id", "title" : "id" }, 
            { "data" : "group_name", "title" : "group_name" },
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

        // $("#NTUserName").val(data["NTUserName"]);
        $("#group_name").val(data["group_name"]);
        $("#group_id").val(data["id"]);


      }
    });


};



    $(".c_button_edit").click(function () {   
        $usermodul_id = $(this).attr("usermodul_id");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/usermodul/" + $usermodul_id;
        
    });

    $(".c_button_delete").click(function () {   

        $usermodul_id = $(this).attr("usermodul_id");
        $username = $(this).attr("username");
        $("#usermodul_id").val($usermodul_id);
        $("#info_row_modal").text($username);

        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/delete_usermodul/" + $usermodul_id;

    });

    $("#btnDelete").click(function () {   

        $usermodul_id = $("#usermodul_id").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/delete_usermodul/" + $usermodul_id;

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
