<?php
/* Smarty version 3.1.32, created on 2021-02-17 11:11:41
  from 'D:\ano site\UI-skeletonhahuyy\Views\Usermanagement\list_main_modul.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_602c977d3221c6_36442270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79443daaa73232ea77fa81137d533bf2a5b08817' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Usermanagement\\list_main_modul.html',
      1 => 1583834534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602c977d3221c6_36442270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10084602c977d2eff48_42388554', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17457602c977d305b99_54600774', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27629602c977d31a976_16655964', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_10084602c977d2eff48_42388554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_10084602c977d2eff48_42388554',
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
class Block_17457602c977d305b99_54600774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_17457602c977d305b99_54600774',
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
                                            <th class="hidden-phone">Seq No</th>
                                            <th class="hidden-phone">Modul Name</th>
                                            <th class="hidden-phone">Id</th>
                                            <!-- <th class="hidden-phone">Add to Rule</th> -->
                                            <!-- <th class="hidden-phone">Main modul Name </th> -->
                                            <th class="hidden-phone">Delete</th>
                                           
                                        </tr>
                                    </thead>
                                    

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_msmainmodul_all']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                          
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['seq_no'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['main_modul_name'];?>
 <a href="#" class="c_button_edit" main_modul_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" ><i class="fa fa-pencil"></i></a></td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
                                            <!-- <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['add_to_rule'];?>
</td> -->
                                            <!-- <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['main_modul_name'];?>
</td> -->
                                            <td ><a href="#modalPrimary" class="c_button_delete modal-basic" main_modul_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
                     <input type="hidden" name="main_modul_id" class="form-control" id="main_modul_id">
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
class Block_27629602c977d31a976_16655964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_27629602c977d31a976_16655964',
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
        $main_modul_id = $(this).attr("main_modul_id");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/form_main_modul/" + $main_modul_id;
        
    });

    $(".c_button_delete").click(function () {   

        $("#main_modul_id").val($(this).attr("main_modul_id"));

    });

    $("#btnDelete").click(function () {   

        $main_modul_id = $("#main_modul_id").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/delete_main_modul/" + $main_modul_id;

    });

    $("#btnAdd").click(function () {   

        $main_modul_id = $("#main_modul_id").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/form_main_modul/" + $main_modul_id;

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
