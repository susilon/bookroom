<?php
/* Smarty version 3.1.32, created on 2020-05-18 14:12:41
  from 'D:\ano site\Assigners\Views\Assigner\fake_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec23569296a75_58808336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f24b512c5e316d9f3826687bee033a7d151c1294' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Assigner\\fake_login.html',
      1 => 1589785952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec23569296a75_58808336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_269645ec235692804b3_07878084', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_260435ec235692938c4_93906889', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_269645ec235692804b3_07878084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_269645ec235692804b3_07878084',
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

<form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigner/save_fake_login"> 
	
            <section class="panel">
                
                <div class="panel-body">
					<input type="text" name="NTUserName" placeholder=".input NTUserName" class="form-control" id="NTUserName" required >
					<label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['author_message']->value;?>
</label> 
                    <!-- <i>User : </i><br> -->
                    <!-- <div class="form-group">
                          <label class="col-sm-2 control-label">PIC Name : </label>  
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="pic_name" placeholder=".Select Project" class="form-control" id="NTUserName" required >
                                 <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['id'];?>
">
                                 <input type="hidden" class="form-control" name="id_ms_prj" id="id_ms_prj" value="<?php echo $_smarty_tpl->tpl_vars['id_ms_prj']->value;?>
">  
                            </span>
                        </div>
                    </div> -->


                </div>
                <footer class="panel-footer">
                    <!-- <button class="btn btn-primary" id="btnAdd">Save</button>            
     
                    <button type="reset" class="btn btn-default" id="btnCancel">Cancel</button> -->
                </footer>
            </section>
        </form>

Powered by Bantingan

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_260435ec235692938c4_93906889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_260435ec235692938c4_93906889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
  .columnsorter { cursor: pointer; }
</style>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";

var input = document.getElementById("NTUserName");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {

	  $NTUserName = $("#NTUserName").val();
	  alert($NTUserName);

        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigner/save_fake_login/" + $NTUserName ;


	//   window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigner/save_fake_login";
    	// return false;


  }
});


<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
