<?php
/* Smarty version 3.1.32, created on 2020-05-09 00:32:14
  from 'D:\ano site\Assigners\Views\Usermanagement\form_modul.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eb5979e467bf7_57469703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94f91141112d6dd24ce36a04c3bc07908ed6c599' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Usermanagement\\form_modul.html',
      1 => 1588958260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb5979e467bf7_57469703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91685eb5979e4267d2_76230413', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_273045eb5979e462277_63481791', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_91685eb5979e4267d2_76230413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_91685eb5979e4267d2_76230413',
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
/Usermanagement/save_modul" enctype="multipart/form-data" > 
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
                                <input type="text" name="id" class="form-control" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_modul']->value['id'];?>
" readonly >
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Modul Name : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="modul_name" placeholder=".Enter Modul Name here" class="form-control" id="modul_name" value="<?php echo $_smarty_tpl->tpl_vars['data_modul']->value['modul_name'];?>
" required>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Modul Location : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="modul_location" placeholder=".Enter Modul Name here" class="form-control" id="modul_location" value="<?php echo $_smarty_tpl->tpl_vars['data_modul']->value['modul_location'];?>
" required>
                            </span>
                        </div>
                    </div>
                    <div class="form-group " >
                        <label class="col-sm-2 control-label">Main Modul Name : </label>
                        <div class="col-sm-10"><span class="show-grid-block">
                                        <select name="main_modul_id" id="main_modul_id" class="form-control populate" value="<?php echo $_smarty_tpl->tpl_vars['data_modul']->value['main_modul_id'];?>
" required >
                                           <option value='999'>- UnMapp -</option>   
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_msmainmodel']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['data_modul']->value['main_modul_id'] == $_smarty_tpl->tpl_vars['data']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['main_modul_name'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                             <!-- <option value="DEPT">DEPT</option> 
                                            <option value="DIV">DIV</option> -->
                                            
                                        </select> 
                                        <!-- <input type="hidden" class="form-control" id="prj_sts_desc" name="prj_sts_desc" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_sts_desc'];?>
">     -->
                                        </span>
                        </div>
                    </div>
                    
                    <!-- <div class="form-group " >
                        <label class="col-sm-2 control-label">Add to Menu : </label>
                        <div class="col-sm-1"><span class="show-grid-block">
                                        <select name="add_to_menu" id="add_to_menu" class="form-control populate" value="<?php echo $_smarty_tpl->tpl_vars['data_modul']->value['add_to_menu'];?>
" required>
                                        <option value="yes" <?php if ($_smarty_tpl->tpl_vars['data_modul']->value['add_to_menu'] == 'yes') {?> selected <?php }?>>yes</option>  
                                        <option value="no" <?php if ($_smarty_tpl->tpl_vars['data_modul']->value['add_to_menu'] == 'no') {?> selected <?php }?>>no</option>
                                        </select> 
                             
                                        </span>
                        </div>
                    </div> -->

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
class Block_273045eb5979e462277_63481791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_273045eb5979e462277_63481791',
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
