<?php
/* Smarty version 3.1.32, created on 2020-04-29 14:06:45
  from 'D:\ano site\Assigners\Views\Assigntopic\form_edit_time_task.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ea92785ac6b36_43518657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6bd0882290356ec7a0375113bf560b28ef5ca39' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Assigntopic\\form_edit_time_task.html',
      1 => 1588143895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea92785ac6b36_43518657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136155ea92785a898d8_54175563', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179505ea92785ac35b1_23006915', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_136155ea92785a898d8_54175563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_136155ea92785a898d8_54175563',
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
span.vrdna {
    /* Huruf */
    font-family:verdana;
    /* counter-increment: my-sec-counter;
    content: counter(my-sec-counter) ". "; */
}
</style>

<div class="panel-group" id="accordion2">
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2One">
												<i class="fa fa-star"></i> <?php echo $_smarty_tpl->tpl_vars['title_accordeon1']->value;?>

											</a>
										</h4>
									</div>
									<div id="collapse2One" class="accordion-body collapse in">
										<div class="panel-body">
                                            
                                            <div class="col-md-6">
        <!-- form diarahkan ke action save dengan metode POST -->
         <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/edit_time_task"> 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <!-- <h2 class="panel-title">Update Task Done <Textfile></Textfile></h2>                     -->
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Current Plan : </label>
                        <div class="col-sm-9">
                        <div class="input-daterange input-group" >
	                        <span class="input-group-addon">
			                <i class="fa fa-calendar"></i> from
	                        </span>
			                <input type="text" class="form-control" name="plan_start_before" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" readonly value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['plan_start'];?>
" >
			                <span class="input-group-addon">to</span>
			                <input type="text" class="form-control" name="plan_end_before"  placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" readonly value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['plan_end'];?>
" >
                        </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Update to : </label>
                        <div class="col-sm-9">
                        <div class="input-daterange input-group" data-plugin-datepicker>
	                        <span class="input-group-addon" id="span_from">
			                <i class="fa fa-calendar"></i> From
	                        </span>
			                <input type="text" class="form-control fromdt" required name="plan_start" id="plan_start" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
"  >
			                <span class="input-group-addon" id="span_to">to</span>
			                <input type="text" class="form-control" required name="plan_end" id="plan_end" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" >
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Remark : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <textarea name = "remark_log"  class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                                <input type="hidden" class="form-control" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['id'];?>
">
                                <input type="hidden" class="form-control" name="id_ms_prj" value="<?php echo $_smarty_tpl->tpl_vars['data_task']->value['id_ms_prj'];?>
">
                                <!-- <input type="hidden" class="form-control" name="controller" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" > -->
                            </span>
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

<div class="col-md-6">
    <section class="panel">
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
                                                    <!-- <th colspan="3">Info Project :  </th> -->
												</tr>
											</thead>
                                            
                                            <tbody>

                                            <tr class="gradeA">
                                                <td ><span class="label label-success">Task Info</span></td > 
                                            </tr> 
                                            <!-- <tr class="gradeA">
                                                <td >Doc No :</td> 
                                            </tr> 
                                            <tr class="gradeA">
                                                <td >>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_doc_no'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td >Title</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td >>> <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>
</td> 
                                            </tr> -->
                                            <tr class="gradeA">
                                                <td>Task : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['task_desc'];?>
</td> 
                                            </tr>
                                            
                                            <tr class="gradeA">
                                                <td>Plan : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['plan_start'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data_task']->value['plan_end'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Actual : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['actual_start'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data_task']->value['actual_end'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Status Task : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['task_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Dept : <?php echo $_smarty_tpl->tpl_vars['data_task']->value['dept_cd'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td style="font-weight: bold">Remark Task from Assigner :</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td><?php echo $_smarty_tpl->tpl_vars['data_task']->value['remark'];?>
</td> 
                                            </tr>
                            
                                           
									        </tbody>
										</table>
									</div>
								</div>
                            </section>
</div>

										</div>
									</div>
								</div>
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Two">
												<i class="fa fa-cogs"></i> Info Project : <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_doc_no'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>

											</a>
										</h4>
									</div>
									<div id="collapse2Two" class="accordion-body collapse">
										<div class="panel-body">
                                            
                                            <section class="panel">
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
                                                    <!-- <th colspan="3">Info Project :  </th> -->
												</tr>
											</thead>
                                            
                                            <tbody>

                                            <tr class="gradeA">
                                                <td ><a href="#" class="on-default c_view_cr_file" id="<?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['id'];?>
" file_cr_name="<?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['file_cr_name'];?>
"><span class="label label-success">View CR File</span></a></td > 
                                            </tr> 
                                            <!-- <tr class="gradeA">
                                                <td >Doc No :</td> 
                                            </tr> 
                                            <tr class="gradeA">
                                                <td >>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_doc_no'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td >Title</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td >>> <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>
</td> 
                                            </tr> -->
                                            <tr class="gradeA">
                                                <td>Project Category :</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_ctgry_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Assign Status :</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_assgn_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Project Status : </td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Score : </td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['score_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Project Summary : </td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_sum'];?>
</td> 
                                            </tr>
                                           
									        </tbody>
										</table>
									</div>
								</div>
							</section>

										</div>
									</div>
								</div>
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Three">
												<i class="fa fa-cloud"></i> Lorem ipsum dolor
											</a>
										</h4>
									</div>
									<div id="collapse2Three" class="accordion-body collapse">
										<div class="panel-body">
											Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
										</div>
									</div>
								</div>
							</div>

                    
<div class="row">
    
    <div class="col-md-6">
							
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
class Block_179505ea92785ac35b1_23006915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_179505ea92785ac35b1_23006915',
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

$(document).ready(function() {


});


$(".c_view_cr_file").click(function()
	{
        // $id_btn_delete = $(this).attr("id_btn_delete");
        $id = $(this).attr("id");
        $file_cr_name = $(this).attr("file_cr_name");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/crprint/" + $id + "/" + $file_cr_name;

    });


    $("#btnCancel").click(function()
    {
        // fungsi untuk kembali ke halaman sebelumnya
        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/task_pic/";
            parent.history.back();
            // return false;
    });
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
