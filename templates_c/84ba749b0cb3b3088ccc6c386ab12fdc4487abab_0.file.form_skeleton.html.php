<?php
/* Smarty version 3.1.32, created on 2021-02-18 17:48:38
  from 'D:\ano site\UI-skeletonhahuyy\Views\Skeleton\form_skeleton.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_602e4606a67666_90582987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ba749b0cb3b3088ccc6c386ab12fdc4487abab' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Skeleton\\form_skeleton.html',
      1 => 1613645117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602e4606a67666_90582987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27566602e46068b1846_67458742', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27255602e4606a63090_42968767', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_27566602e46068b1846_67458742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_27566602e46068b1846_67458742',
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
/Skeleton/save_skeleton" enctype="multipart/form-data" > 
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
                                <input type="text" name="id" class="form-control" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['id'];?>
" readonly >
                                <input type="hidden" placeholder="" name="project_key" class="form-control" id="project_key" value="<?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['project_key'];?>
" required>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Project Name : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" placeholder="" name="project_name" class="form-control" id="project_name" value="<?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['project_name'];?>
" required>
                                
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Request Key Name : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" placeholder="" class="form-control" name="key_name" id="key_name" value="<?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['key_name'];?>
" required>
                            </span>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-sm-2 control-label">Ignore Value : </label>
                        <div class="col-sm-10">
                        <span >
                                                            <select name="ignore_value" id="ignore_value" class="form-control populate" required>
                                                            <option></option>
                                                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ignore_value']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                                            
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['data_skeleton']->value['ignore_value'] == $_smarty_tpl->tpl_vars['data']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                                            </select>     
                        </span>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Method : </label>
                        <div class="col-sm-2">
                        <span >
                                                            <select name="metode" id="metode" class="form-control populate" required>
                                                            <option></option>
                                                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metode']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                                            <!-- <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</option> -->
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['data_skeleton']->value['metode'] == $_smarty_tpl->tpl_vars['data']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
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
                        <label class="col-sm-2 control-label">API Path : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" disabled name="api_path" placeholder="" class="form-control" id="api_path" value="<?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['api_path'];?>
">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textareaAutosize">Json Skeleton Else</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="10" name="json_skeleton_else" id="json_skeleton_else" data-plugin-textarea-autosize><?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['json_skeleton_else'];?>
</textarea>
                        </div>
                    </div>
            
                    <!-- <div class="form-group " >
                        <label class="col-sm-2 control-label">Add to Menu : </label>
                        <div class="col-sm-1"><span class="show-grid-block">
                                        <select name="add_to_menu" id="add_to_menu" class="form-control populate" value="<?php echo $_smarty_tpl->tpl_vars['data_skeleton']->value['add_to_menu'];?>
" required>
                                        <option value="yes" <?php if ($_smarty_tpl->tpl_vars['data_skeleton']->value['add_to_menu'] == 'yes') {?> selected <?php }?>>yes</option>  
                                        <option value="no" <?php if ($_smarty_tpl->tpl_vars['data_skeleton']->value['add_to_menu'] == 'no') {?> selected <?php }?>>no</option>
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
class Block_27255602e4606a63090_42968767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_27255602e4606a63090_42968767',
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

$("#user_manual").click(function() {
  // alert("fgfg");
  window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/user_manual_skeleton_print/", "_blank");
});

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
