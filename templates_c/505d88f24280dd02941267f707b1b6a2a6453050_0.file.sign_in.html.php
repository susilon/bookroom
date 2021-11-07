<?php
/* Smarty version 3.1.32, created on 2021-11-08 00:36:14
  from 'D:\ano site\bookroom\Views\Usermanagement\sign_in.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61880e8e978008_73462423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '505d88f24280dd02941267f707b1b6a2a6453050' => 
    array (
      0 => 'D:\\ano site\\bookroom\\Views\\Usermanagement\\sign_in.html',
      1 => 1636306571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61880e8e978008_73462423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2081861880e8e96d9e9_17011293', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2637861880e8e975a99_09127929', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_2081861880e8e96d9e9_17011293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_2081861880e8e96d9e9_17011293',
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
<div class="row">
<div class="col-md-6">
              <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Usermanagement/save_sign_in">
                <section class="panel">
                  <header class="panel-heading">
                    <div class="panel-actions">
                      <a href="#" class="fa fa-caret-down"></a>
                      <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Sign In</h2>
                    <p class="panel-subtitle">
                      <!-- Use <code>.form-horizontal</code> class in the form to style with horizontal fields. -->
                    </p>
                  </header>
                  <div class="panel-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">User Name: </label>
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
                      <label class="col-sm-4 control-label">Display Name: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-user"></i></span>
                              </span>
                              <input class="form-control" type="text" name="emp_name" id="emp_name" required>
                            </div>
                      </div>
                    </div>
                    
                    <!-- <div class="form-group">
                      <label class="col-sm-4 control-label">Employee ID: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                          <input class="form-control" type="text" name="employee_id" id="employee_id" required>                              
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Group Code: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                          <input class="form-control" type="text" name="group_cd" id="group_cd" required>                              
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Div Code: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                          <input class="form-control" type="text" name="div_cd" id="div_cd" required>                              
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Dept Code: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                          <input class="form-control" type="text" name="dept_cd" id="dept_cd" required>                              
                        </div>
                      </div>
                    </div> -->
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nick Name: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                          <input class="form-control" type="text" name="nickname" id="nickname">                              
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Input Password: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-key"></i></span>
                              </span>
                              <input class="form-control" type="password" placeholder="Password" name="password" id="password" required>
                            </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Reinput Password: </label>
                      <div class="col-sm-8">
                        <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-key"></i></span>
                              </span>
                              <input class="form-control" type="password" placeholder="Password" name="re_password" id="re_password" required>
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
<!-- 
<div class="row">
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    <div class="panel-actions">
                      <a href="#" class="fa fa-caret-down"></a>
                      <a href="#" class="fa fa-times"></a>
                    </div>
            
                    <h2 class="panel-title">Form Elements</h2>
                  </header>
                  <div class="panel-body">
                    <form class="form-horizontal form-bordered" method="get">

                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">User Name</label>
                        <div class="col-md-6">
                          <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-user"></i></span>
                              </span>
                              <input class="form-control" type="text" placeholder="Username">
                            </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputPassword">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" placeholder="" id="inputPassword">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Default</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="inputDefault">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputPassword">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" placeholder="" id="inputPassword">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3">Vertical Group w/ icon</label>
                        <div class="col-md-6">
                          <section class="form-group-vertical">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-user"></i></span>
                              </span>
                              <input class="form-control" type="text" placeholder="Username">
                            </div>
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-key"></i></span>
                              </span>
                              <input class="form-control" type="password" placeholder="Password">
                            </div>
                          </section>
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDisabled">Disabled</label>
                        <div class="col-md-6">
                          <input class="form-control" id="inputDisabled" type="text" placeholder="Disabled input here..." disabled="">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputReadOnly">Read-Only Input</label>
                        <div class="col-md-6">
                          <input type="text" value="Read-Only Input" id="inputReadOnly" class="form-control" readonly="readonly">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputHelpText">Help text</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="inputHelpText">
                          <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputRounded">Rounded Input</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control input-rounded" id="inputRounded">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputFocus">Input focus</label>
                        <div class="col-md-6">
                          <input class="form-control" id="inputFocus" type="text" value="This is focused...">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputPlaceholder">Placeholder</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputPassword">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" placeholder="" id="inputPassword">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class=" col-md-3 control-label">Static control</label>
                        <div class="col-lg-6">
                          <p class="form-control-static">email@example.com</p>
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label">Left Icon</label>
                        <div class="col-md-6">
                          <div class="input-group input-group-icon">
                            <span class="input-group-addon">
                              <span class="icon"><i class="fa fa-user"></i></span>
                            </span>
                            <input type="text" class="form-control" placeholder="Left icon">
                          </div>
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label">Right Icon</label>
                        <div class="col-md-6">
                          <div class="input-group input-group-icon">
                            <input type="text" class="form-control" placeholder="Right icon">
                            <span class="input-group-addon">
                              <span class="icon"><i class="fa fa-user"></i></span>
                            </span>
                          </div>
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label">Search</label>
                        <div class="col-md-6">
                          <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label">File Upload</label>
                        <div class="col-md-6">
                          <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                              <div class="uneditable-input">
                                <i class="fa fa-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                              </div>
                              <span class="btn btn-default btn-file">
                                <span class="fileupload-exists">Change</span>
                                <span class="fileupload-new">Select file</span>
                                <input type="file" />
                              </span>
                              <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label">Vertical Group</label>
                        <div class="col-md-6">
                          <section class="form-group-vertical">
                            <input class="form-control" type="text" placeholder="Username">
                            <input class="form-control" type="text" placeholder="Email">
                            <input class="form-control last" type="password" placeholder="Password">
                          </section>
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="control-label col-md-3">Vertical Group w/ icon</label>
                        <div class="col-md-6">
                          <section class="form-group-vertical">
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-user"></i></span>
                              </span>
                              <input class="form-control" type="text" placeholder="Username">
                            </div>
                            <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                                <span class="icon"><i class="fa fa-key"></i></span>
                              </span>
                              <input class="form-control" type="password" placeholder="Password">
                            </div>
                          </section>
                        </div>
                      </div>
            
                      <div class="form-group has-success">
                        <label class="col-md-3 control-label" for="inputSuccess">Input with success</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="inputSuccess">
                        </div>
                      </div>
                      <div class="form-group has-warning">
                        <label class="col-md-3 control-label" for="inputWarning">Input with warning</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="inputWarning">
                        </div>
                      </div>
                      <div class="form-group has-error">
                        <label class="col-md-3 control-label" for="inputError">Input with error</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="inputError">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputTooltip">Input with Tooltip</label>
                        <div class="col-md-6">
                          <input type="text" placeholder="Hover me" title="" data-toggle="tooltip" data-trigger="hover" class="form-control" data-original-title="Place your tooltip info here" id="inputTooltip">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputPopover">Input with Popover</label>
                        <div class="col-md-6">
                          <input type="text" placeholder="Click Here" class="form-control" data-toggle="popover" data-placement="top" data-original-title="The Title" data-content="Content goes here..." data-trigger="click" id="inputPopover">
                        </div>
                      </div>
            
                      <div class="form-group">
                        <label class="col-md-3 control-label">Column sizing</label>
                        <div class="col-sm-8">
                          <div class="row">
                            <div class="col-sm-2">
                              <input type="text" class="form-control" placeholder=".col-sm-2">
                            </div>
                            <div class="visible-xs mb-md"></div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" placeholder=".col-sm-3">
                            </div>
                            <div class="visible-xs mb-md"></div>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" placeholder=".col-sm-4">
                            </div>
                          </div>
            
                        </div>
                      </div>
                    </form>
                  </div>
                </section>
    </div>  
    </div>   -->

Powered by Bantingan

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_2637861880e8e975a99_09127929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_2637861880e8e975a99_09127929',
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
