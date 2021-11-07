<?php
/* Smarty version 3.1.32, created on 2021-09-02 08:05:17
  from 'D:\ano site\UI-skeletonhahuyy\Views\Memointernal\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_6130234d4cc8b7_41851228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7884193798c0163f95c019ee570d9ca4d81f5557' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Memointernal\\form.html',
      1 => 1578296508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6130234d4cc8b7_41851228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_279336130234d475511_08801506', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_315136130234d4ca276_02339490', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_279336130234d475511_08801506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_279336130234d475511_08801506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<!-- template diambil dari porto forms-layouts.html Horizontal Form -->
<div class="row">
    <div class="col-md-12">
        <!-- form diarahkan ke action save dengan metode POST -->
        <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/memointernal/save/<?php echo $_smarty_tpl->tpl_vars['id_msnumber']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tahun_from_view']->value;?>
">
            <section class="panel">
                <!-- <header class="panel-heading">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['pageSubTitle']->value;?>
</h2>                    
                </header> -->
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> MI Number: </label>
                        <div class="col-sm-3">  
                        <input type="hidden" name="id" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"> 
                        <input type="hidden" name="updt_by" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
">                        
                            <input type="text" name="mi_numb" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_numb'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">Value Date : </label>
						<div class="col-md-4">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>
								        <input id = "value_date" name = "value_date" type="text" data-plugin-datepicker class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['value_date'];?>
" required>
								</div>
						</div>
					</div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Title: </label>
                        <div class="col-sm-10">
                            <input type="text" name="mi_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_title'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Remark : </label>
                        <div class="col-sm-10">
                            <input type="text" name="mi_rmrk" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_rmrk'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Reference : </label>
                        <div class="col-sm-10">
                            <input type="text" name="mi_ref" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_ref'];?>
">
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
class Block_315136130234d4ca276_02339490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_315136130234d4ca276_02339490',
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

function functionRubah() 
{
    var x = document.getElementById.value("inp");
    var z = x.value;
    var y = document.getElementById.value("images");
    
    y.value = z.substring(12);
}

function functionRubah2() 
{
document.getElementById("image").value = "Hello JavaScript!";
}

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'bodyfooter'} */
}
