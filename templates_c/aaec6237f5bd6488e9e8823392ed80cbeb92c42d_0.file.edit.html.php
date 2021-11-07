<?php
/* Smarty version 3.1.32, created on 2020-04-19 06:41:35
  from 'D:\ano site\Assigners\Views\Memointernal\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e9b902f128668_40689654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaec6237f5bd6488e9e8823392ed80cbeb92c42d' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Memointernal\\edit.html',
      1 => 1573005520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9b902f128668_40689654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131025e9b902f0faa65_58781706', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_237055e9b902f126ae9_69989702', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_131025e9b902f0faa65_58781706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_131025e9b902f0faa65_58781706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<!-- template diambil dari porto forms-layouts.html Horizontal Form -->
<div class="row">
    <div class="col-md-6">
        <!-- form diarahkan ke action save dengan metode POST -->
        <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/memointernal/save_edit_msnumber">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['pageSubTitle']->value;?>
</h2>                    
                </header>
                <div class="panel-body">
                    <!-- <div class="form-group">
                        <label class="col-sm-4 control-label"> Code Number: </label>
                        <div class="col-sm-8">  
                          <input type="hidden" name="id" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"> 
                            <input type="text" name="code" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
">
                             <input type="text" id="update_by" name="update_by" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
">  
                            
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Id : </label>
                        <div class="col-sm-8">
                            <input type="text" name="id_view" id="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['id_msnumber']->value;?>
" disabled>
                            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['id_msnumber']->value;?>
">
                            <!-- <input type="text" name="descr" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msnumber']->value['descr'];?>
">
                            <input type="hidden" id="update_by" name="update_by" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
"> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Description Code: </label>
                        <div class="col-sm-8">
                            <!-- <input type="text" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['id_msnumber']->value;?>
" disabled> -->
                            <input type="text" name="descr" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msnumber']->value['descr'];?>
">
                            <input type="hidden" id="update_by" name="update_by" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Description: </label>
                        <div class="col-sm-8">
                            <input type="text" name="description" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msnumber']->value['description'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Available Number: </label>
                        <div class="col-sm-8">
                            <input type="text" name="availablenumb" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msnumber']->value['availablenumb'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Is Active : </label>
                        <div class="col-sm-3">
                        <span class="show-grid-block">
                                        <select name="is_active" id="is_active" class="form-control populate">
                                         <!-- <option selected><?php echo $_smarty_tpl->tpl_vars['is_active']->value;?>
</option>  -->
                                             <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_msnumber']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"sd><?php echo $_smarty_tpl->tpl_vars['data']->value['descr'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  -->
                                            <option value="<?php if (($_smarty_tpl->tpl_vars['is_active']->value == 'Y')) {?>Y<?php } else { ?>N<?php }?>" selected><?php if (($_smarty_tpl->tpl_vars['is_active']->value == 'Y')) {?>Yes<?php } else { ?>No<?php }?></option>
                                            <option value="<?php if (($_smarty_tpl->tpl_vars['is_active']->value == 'Y')) {?>N<?php } else { ?>Y<?php }?>"><?php if (($_smarty_tpl->tpl_vars['is_active']->value == 'Y')) {?>No<?php } else { ?>Yes<?php }?></option>
                                             <!-- <option value="Yes">Yes</option>
                                            <option value="No">No</option> -->
                                        </select>     
						</span>
                    </div>
                    </div>
                    
                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary">Submit </button>            
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
class Block_237055e9b902f126ae9_69989702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_237055e9b902f126ae9_69989702',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">

$( document ).ready(function() {
    // $("#update_by").val() = $("#share_ntusername").val();



});


    $("#btnCancel").click(function()
    {
        // fungsi untuk kembali ke halaman sebelumnya
        parent.history.back();
        return false;
    });



// function functionRubah() 
// {
//     var x = document.getElementById.value("inp");
//     var z = x.value;
//     var y = document.getElementById.value("images");
    
//     y.value = z.substring(12);
// }

// function functionRubah2() 
// {
// document.getElementById("image").value = "Hello JavaScript!";
// }

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'bodyfooter'} */
}
