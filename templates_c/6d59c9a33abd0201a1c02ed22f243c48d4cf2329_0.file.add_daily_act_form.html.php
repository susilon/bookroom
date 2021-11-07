<?php
/* Smarty version 3.1.32, created on 2021-01-05 23:02:40
  from 'D:\ano site\Assigners\Views\Dailyactivity\add_daily_act_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ff48da02a9e65_50015100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d59c9a33abd0201a1c02ed22f243c48d4cf2329' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Dailyactivity\\add_daily_act_form.html',
      1 => 1609862434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff48da02a9e65_50015100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_280395ff48da027f280_45790984', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_247365ff48da02a6725_63250420', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_280395ff48da027f280_45790984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_280395ff48da027f280_45790984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\anosite\\Assigners\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
/Dailyactivity/save" enctype="multipart/form-data" > 
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
                                <input type="text" name="id_msprj" class="form-control" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['id'];?>
" readonly >
                                <input type="text" name="id_ms_prj" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['id_ms_prj'];?>
" >
                                <input type="hidden" name="NTUsername" class="form-control" id="NTUsername" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
" >
                                <input type="hidden" name="dept_cd" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['dept_cd'];?>
" >
                                <input type="hidden" name="div_cd" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['div_cd'];?>
" >
                                <input type="hidden" name="group_cd" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['group_cd'];?>
" >
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Group System : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['group_system_desc'];?>
" readonly>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">System Name : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['system_name'];?>
" readonly>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Company : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['company_name'];?>
" readonly>
                            </span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Doc Number : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_doc_no'];?>
" readonly>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Project Title : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_title'];?>
" readonly>
                            </span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Project Category : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_ctgry_desc'];?>
" readonly>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Project Status : </label>
                        <div class="col-sm-4">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_sts_desc'];?>
" readonly>
                            </span>
                        </div>
                        <div class="col-sm-1">
                            <span class="show-grid-block">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dailyactivity/update_prj_sts/<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['id_ms_prj'];?>
/add_daily_act_form" class="form-control c_button_edit" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" ><i class="fa fa-pencil"></i></a>
                                </span>
                            </div>
                        <!-- <div class="col-sm-4">
                            <a href="#" class="control-label c_button_edit" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" ><i class="fa fa-pencil"></i></a>
                        </div> -->
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-2 control-label">* Daily Activity : </label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="daily_activity" id="daily_activity" rows="4" data-plugin-maxlength maxlength="225"></textarea>
                            <p>
                                <code>max-length</code> set to 225.
                            </p>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-sm-2 control-label">* Milestone : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="milestone" placeholder=".Enter Modul Name here" class="form-control" id="modul_location" required>
                            </span>
                        </div>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-2 control-label">* Activity Date : </label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input id = "activity_date" name = "activity_date" type="text" data-plugin-datepicker class="form-control" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" required>
                            </div>
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
class Block_247365ff48da02a6725_63250420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_247365ff48da02a6725_63250420',
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
$( document ).ready(function() {

    document.getElementById("daily_activity").focus();

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
