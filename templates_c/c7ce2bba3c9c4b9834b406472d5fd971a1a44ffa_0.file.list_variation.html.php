<?php
/* Smarty version 3.1.32, created on 2020-11-19 16:00:06
  from 'D:\ano site\Assigners\Views\Skeleton\list_variation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fb634167d4c14_04029538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ce2bba3c9c4b9834b406472d5fd971a1a44ffa' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Skeleton\\list_variation.html',
      1 => 1605776355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb634167d4c14_04029538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_260235fb634167b5e40_11206503', 'headcontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49805fb634167c0176_71548280', 'bodycontent');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_288195fb634167cfca1_92138281', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_260235fb634167b5e40_11206503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_260235fb634167b5e40_11206503',
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
class Block_49805fb634167c0176_71548280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_49805fb634167c0176_71548280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<button id="btnAdd" project_key="<?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['project_key'];?>
" class="mt-sm mb-sm btn btn-primary">Add New</button>
<!-- <button id="btn_list_skeleton" project_key="<?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['project_key'];?>
" class="mt-sm mb-sm btn btn-primary">List Skeleton</button> -->
<a href="#" id="btn_list_skeleton" >Back to List Skeleton</a>
<section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Project Name : <?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['project_name'];?>
 , Key Name : <?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['key_name'];?>
</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                    <thead>
                                        <tr>
                                            <th class="hidden-phone">id</th>
                                            <th class="hidden-phone">Variation Desc</th>
                                            <th class="hidden-phone">key value</th>
                                            <th class="hidden-phone">Json Skeleton</th>
                                            <th class="hidden-phone">Remark</th>
                                            <th class="hidden-phone">Delete</th>
                                           
                                        </tr>
                                    </thead>
                                    

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_variation']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                          
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['var_desc'];?>
 </td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['key_value'];?>
</td>
                                            <td class="hidden-phone"><a href="#" class="c_button_add_key_value" project_key="<?php echo $_smarty_tpl->tpl_vars['data']->value['project_key'];?>
" id_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">edit/view</a></td>
                                            <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['remark_key'];?>
</td>
                                            <td ><a href="#modalPrimary" class="c_button_delete modal-basic" var_desc="<?php echo $_smarty_tpl->tpl_vars['data']->value['var_desc'];?>
" id_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
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
            <h2 class="panel-title">Confirmation : <?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['project_name'];?>
</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <h4>Are you sure want to delete variation "<span id="var_desc_p"></span>" ?</h4>
                     <span id="dialog_idx"class="hidden"></span>
                     <input type="hidden" class="form-control" id="id_var">
                     <input type="hidden" class="form-control" id="project_key" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['project_key'];?>
">
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
class Block_288195fb634167cfca1_92138281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_288195fb634167cfca1_92138281',
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

    $(".c_button_add_key_value").click(function () {   
        $project_key = $(this).attr("project_key");
        $id = $(this).attr("id_id");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Skeleton/form_variation/" + $project_key + "/" + $id;
        
    });

    $(".c_button_view_key_values").click(function () {   
        // $project_key = $(this).attr("json_skeleton");
        $json_skeleton_view = $(this).attr("json_skeleton")

        $("#json_view").text($json_skeleton_view) ;

    //     function notif($title,$text,$type,$addclass,$icon) {
    //     new PNotify({
    //         title: $title,
    //         text: $text,
    //         type: $type,
    //         addclass: $addclass,
    //         icon: $icon
    //     });

    // }

    // notif($title,$json_skeleton_view,$type,$addclass,$icon);
        
    });

    $(".c_button_delete").click(function () {   

        $("#var_desc_p").text($(this).attr("var_desc"));
        $("#id_var").val($(this).attr("id_id"));

    });

    $("#btnDelete").click(function () {   

        $id_var = $("#id_var").val();
        $project_key = $("#project_key").val();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Skeleton/delete_variation/" + $id_var + "/" + $project_key;

    });

    $("#btn_list_skeleton").click(function () {   

        // $project_key = $(this).attr("project_key");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Skeleton/listskeleton/";

    });

    $("#btnAdd").click(function () {   

        $project_key = $(this).attr("project_key");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Skeleton/form_variation/" + $project_key;

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
