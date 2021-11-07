<?php
/* Smarty version 3.1.32, created on 2020-05-04 13:18:57
  from 'D:\ano site\Assigners\Views\Msprjcategory\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eafb3d1dd0913_86144392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46907f33e46eeafb25bb6c9d9c3250bdb8af26e5' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Msprjcategory\\form.html',
      1 => 1588573133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eafb3d1dd0913_86144392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214785eafb3d1d9e156_27286388', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95725eafb3d1dcf267_31817114', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_214785eafb3d1d9e156_27286388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_214785eafb3d1d9e156_27286388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<!-- template diambil dari porto forms-layouts.html Horizontal Form -->
<div class="row">
    <div class="col-md-8">
        <!-- form diarahkan ke action save dengan metode POST -->
        <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Msprjcategory/save">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>                    
                </header>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Project Category Code: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_msprjcategory']->value['id'];?>
" readonly >                          
                            <input type="text" name="prj_ctgry_cd" id="prj_ctgry_cd" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['data_msprjcategory']->value['prj_ctgry_cd'];?>
">
                            <!-- <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msprjcategory']->value['id'];?>
"> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Project Category Description: </label>
                        <div class="col-sm-8">                          
                            <input type="text" name="prj_ctgry_desc" id="prj_ctgry_desc" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['data_msprjcategory']->value['prj_ctgry_desc'];?>
">
                            
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-sm-4 control-label"> Status: </label>
                        <div class="col-sm-8"><span class="show-grid-block">
                                        <select name="status" id="select_is_active" class="form-control populate" value="<?php echo $_smarty_tpl->tpl_vars['msprodctgry']->value['status'];?>
" required onchange="change_dept_cd()">
            
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msyesno']->value, 'data_msyesno');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data_msyesno']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data_msyesno']->value['active_notactive'];?>
" <?php if ($_smarty_tpl->tpl_vars['msprodctgry']->value['status'] == $_smarty_tpl->tpl_vars['data_msyesno']->value['active_notactive']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data_msyesno']->value['active_notactive'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>     
                                        </span>
                        </div>
                    </div> -->
                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>            
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <button type="reset" class="btn btn-default" id="btnCancel">Cancel</button>
                </footer>
            </section>
        </form>
    </div>
</div>
<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_95725eafb3d1dcf267_31817114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_95725eafb3d1dcf267_31817114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
    $("#btnCancel").click(function()
    {
        // fungsi untuk kembali ke halaman sebelumnya
        parent.history.back();
        return false;
    });
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'bodyfooter'} */
}
