<?php
/* Smarty version 3.1.32, created on 2020-05-01 16:17:58
  from 'D:\ano site\Assigners\Views\Usermanagement\form_groupmodul.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eabe946712e59_37981642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f777cdc9a8e1b43fe2eae869a956e15fcaa2fc' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Usermanagement\\form_groupmodul.html',
      1 => 1573608840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eabe946712e59_37981642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_262655eabe9466fd491_73822833', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183485eabe94670f5e3_38207482', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_262655eabe9466fd491_73822833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_262655eabe9466fd491_73822833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<!-- template diambil dari porto forms-layouts.html Horizontal Form -->
<style>
div.scrollt {
        width: 100px;
    height: 100px;
    overflow: scroll;
}
</style>

                    
<div class="row">
    <div class="col-md-10">
        <!-- form diarahkan ke action save dengan metode POST -->
         <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/save_groupmodul" enctype="multipart/form-data" > 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
<Textfile></Textfile></h2>                    
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Id : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="id" class="form-control" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_groupmodul']->value['id'];?>
" readonly >
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Group Name : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="group_name" placeholder=".Enter Group Name here" class="form-control" id="group_name" value="<?php echo $_smarty_tpl->tpl_vars['data_groupmodul']->value['group_name'];?>
" required >
                            </span>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary" id="btnAdd">Save</button>            
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <button type="reset" class="btn btn-default" id="btnCancel">Cancel</button>
                </footer>
            </section>
        </form>
    </div>
</div>

<style>
			.show-grid-block {
				background-color: #EEE;
				border: 1px solid #FFF;
				display: block;
				line-height: 40px;
				min-height: 40px;
				text-align: center;
			}

			html.dark .show-grid-block {
				background-color: #282d36;
				border-color: #282d36;
			}
		</style>

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_183485eabe94670f5e3_38207482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_183485eabe94670f5e3_38207482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
  .columnsorter { cursor: pointer; }
</style>
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
> -->

<?php echo '<script'; ?>
 type="text/javascript">

var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";


    $("#btnCancel").click(function()
    {
        // fungsi untuk kembali ke halaman sebelumnya
        parent.history.back();
        return false;
    });

<?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
