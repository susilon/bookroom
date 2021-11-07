<?php
/* Smarty version 3.1.32, created on 2021-02-05 23:33:07
  from 'D:\ano site\skeletonhahuyy\Views\Usermanagement\no_authorize.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_601d73438f57c0_42570358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42af02e7024f99e6620e97e22a46b04a11bb90b7' => 
    array (
      0 => 'D:\\ano site\\skeletonhahuyy\\Views\\Usermanagement\\no_authorize.html',
      1 => 1584346621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601d73438f57c0_42570358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32130601d73438e3645_19645512', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11105601d73438f1b68_02133058', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_32130601d73438e3645_19645512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_32130601d73438e3645_19645512',
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
class Block_11105601d73438f1b68_02133058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_11105601d73438f1b68_02133058',
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
