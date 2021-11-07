<?php
/* Smarty version 3.1.32, created on 2021-11-07 19:04:59
  from 'D:\ano site\bookroom\Views\Usermanagement\no_authorize.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_6187c0ebe1ff58_36099062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44e44262983a5428b9c564356dedcb139651600b' => 
    array (
      0 => 'D:\\ano site\\bookroom\\Views\\Usermanagement\\no_authorize.html',
      1 => 1584346621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6187c0ebe1ff58_36099062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160406187c0ebde8296_56857790', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104406187c0ebe196e6_65904308', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_160406187c0ebde8296_56857790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_160406187c0ebde8296_56857790',
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

<h2>Sory You dont have an Authorize</h2>

<h3>Please Call Administrator</h3>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!-- <div class="row">
<div class="col-md-6">
              <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/admin/proses_login">
                <section class="panel">
                  <header class="panel-heading">
                    <div class="panel-actions">
                      <a href="#" class="fa fa-caret-down"></a>
                      <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Sign In</h2>
                    <p class="panel-subtitle">
                    </p>
                  </header>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">NTUserName: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-user"></i></span>
                              </span>
                              <input class="form-control" type="text" name="ntusername" id="ntusername" required>
                            </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Password: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-key"></i></span>
                              </span>
                              <input class="form-control" type="password" placeholder="Password" name="password" id="password" required>
                            </div>
                      </div>
                    </div>
                  </div>
                  <footer class="panel-footer">
                    <button type="submit" class="btn btn-primary">Submit </button>
                    <button type="reset" class="btn btn-default">Reset</button>
                  </footer>
                </section>
              </form>
            </div>
</div>
 -->

Powered by Bantingan

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_104406187c0ebe196e6_65904308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_104406187c0ebe196e6_65904308',
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

// var input = document.getElementById("NTUserName");
// input.addEventListener("keyup", function(event) {
//   if (event.keyCode === 13) {

// 	  $NTUserName = $("#NTUserName").val();
// 	  alert($NTUserName);

//         // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigner/save_fake_login/" + $NTUserName ;


// 	//   window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigner/save_fake_login";
//     	// return false;


//   }
// });


<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
