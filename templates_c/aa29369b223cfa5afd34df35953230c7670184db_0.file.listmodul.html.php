<?php
/* Smarty version 3.1.32, created on 2020-01-06 15:16:16
  from 'D:\ano site\Assignerx\Views\Usermanagement\listmodul.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e12ecd0a0ba06_57979107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa29369b223cfa5afd34df35953230c7670184db' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Usermanagement\\listmodul.html',
      1 => 1573727787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e12ecd0a0ba06_57979107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15102126005e12ecd09a4d83_99748989', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5040584715e12ecd09cbf60_88861414', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6753766775e12ecd09ec032_38022403', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_15102126005e12ecd09a4d83_99748989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_15102126005e12ecd09a4d83_99748989',
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
class Block_5040584715e12ecd09cbf60_88861414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_5040584715e12ecd09cbf60_88861414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<button id="btnAdd" class="mt-sm mb-sm btn btn-primary">Add</button>
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
                                            <th class="hidden-phone">Modul Name</th>
                                            <th class="hidden-phone">Modul Location</th>
                                            <th class="hidden-phone">Delete</th>
                                           
                                        </tr>
                                    </thead>
                                    

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_msmodul_all']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                          
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['modul_name'];?>
 <a href="#" class="c_button_edit" modul_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" ><i class="fa fa-pencil"></i></a></td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['modul_location'];?>
</td>
                                            <td ><a href="#modalPrimary" class="c_button_delete modal-basic" modul_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
                     <input type="hidden" name="modul_id" class="form-control" id="modul_id">
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
class Block_6753766775e12ecd09ec032_38022403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_6753766775e12ecd09ec032_38022403',
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

    $(".c_button_edit").click(function () {   
        $modul_id = $(this).attr("modul_id");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/form_modul/" + $modul_id;
        
    });

    $(".c_button_delete").click(function () {   

        $("#modul_id").val($(this).attr("modul_id"));

    });

    $("#btnDelete").click(function () {   

        $modul_id = $("#modul_id").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/delete_modul/" + $modul_id;

    });

    $("#btnAdd").click(function () {   

        $modul_id = $("#modul_id").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/form_modul/" + $modul_id;

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
